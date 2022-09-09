<?php
//modelo



    class Model{
        var $id;
        var $user;
        var $pass;

        function __construct(){


        }

        function Logear(){
            // variables de conexion
            $host='localhost';
            $dbname='FJuridica';
            $username='becho';
            $pasword='becho1';
            $puerto=1433;
            $cadenaCnx="sqlsrv:Server=$host,$puerto;Database=$dbname";
            $Cnx=new PDO ($cadenaCnx,$username,$pasword);

            try{
                $consulta=$Cnx->prepare("SELECT * FROM Usuario WHERE 
                Correo=:parametro1 and Contraseña=:parametro2");
                
                $consulta->bindValue(":parametro1",$this->user);
                $consulta->bindValue(":parametro2",$this->pass);

                $consulta->execute();

                $filaModel=$consulta->fetch();

                return $filaModel;

            }catch(PDOException $e){
                echo "Error en la conexion ->".$e;
            }
        }
    }

?>