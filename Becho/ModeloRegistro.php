<?php
//modelo



    class Model{
        var $nombres;
        var $apellidos;
        var $dpi;
        var $direccion;
        var $tipo;
        var $correo;
        var $Clave;
        var $persona;

        function __construct(){


        }

        function Registrar(){
            // variables de conexion
            $host='localhost';
            $dbname='FJuridica';
            $username='becho';
            $pasword='becho1';
            $puerto=1433;
            $cadenaCnx="sqlsrv:Server=$host,$puerto;Database=$dbname";
            $Cnx=new PDO ($cadenaCnx,$username,$pasword);

            try{
                $consulta=$Cnx->prepare("INSERT INTO Persona(Nombres,Apellidos,DPI,Direccion,Id_tipoPersona) Values(?,?,?,?,?)"); 
                $consulta->bindValue(1,$this->nombres);
                $consulta->bindValue(2,$this->apellidos);
                $consulta->bindValue(3,$this->dpi);
                $consulta->bindValue(4,$this->direccion);
                $consulta->bindValue(5,$this->tipo);
                $consulta->execute();
            
                $consulta2=$Cnx->prepare("SELECT * FROM Persona WHERE 
                Nombres=:parametro1 and Apellidos=:parametro2");
                $consulta2->bindValue(":parametro1",$this->nombres);
                $consulta2->bindValue(":parametro2",$this->apellidos);
                $consulta2->execute();
                $filaModel=$consulta2->fetch();   
                $consulta2->closeCursor();
                return $filaModel;          
                
            }catch(PDOException $e){
                echo "Error en la conexion ->".$e;
            }
        }
        function Rusuario(){
            $host='localhost';
            $dbname='FJuridica';
            $username='becho';
            $pasword='becho1';
            $puerto=1433;
            $cadenaCnx="sqlsrv:Server=$host,$puerto;Database=$dbname";
            $Cnx=new PDO ($cadenaCnx,$username,$pasword);
            try{
                $consulta3=$Cnx->prepare("INSERT INTO Usuario(Id_tipoUsuario,Id_persona,Correo,Contraseña) Values(?,?,?,?)"); 
                $iusuario=1;
                $consulta3->bindValue(1,$iusuario);
                $consulta3->bindValue(2,$this->persona);
                $consulta3->bindValue(3,$this->correo);
                $consulta3->bindValue(4,$this->Clave);
                $consulta3->execute();
                $fil2=$consulta3;
                return $fil2;
            }catch(PDOException $e){
                echo "Error en la conexion2 ->".$e."<br>";
                echo $iusuario ."<br>";
                echo $this->persona ."<br>";
                echo $this->correo ."<br>";
                echo $this->Clave;
            } 
                
        }
    }

?>