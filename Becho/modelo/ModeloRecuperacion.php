<?php
//modelo



    class Model{
        var $correo;
        var $Clave;

        function __construct(){


        }

        function Recuperar(){
            // variables de conexion
            $host='localhost';
            $dbname='FJuridica';
            $username='becho';
            $pasword='becho1';
            $puerto=1433;
            $cadenaCnx="sqlsrv:Server=$host,$puerto;Database=$dbname";
            $Cnx=new PDO ($cadenaCnx,$username,$pasword);

            try{
                $consulta=$Cnx->prepare("UPDATE Usuario SET Contraseña=:Parametro1 Where Correo=:Parametro2"); 
                $consulta->bindValue(':Parametro1',$this->Clave);
                $consulta->bindValue(':Parametro2',$this->correo);


                $consulta->execute();
            
                $filaModel=1;   
                $consulta->closeCursor();
                return $filaModel;          
                
            }catch(PDOException $e){
                echo "Error en la conexion ->".$e;
            }
        }
    }

?>