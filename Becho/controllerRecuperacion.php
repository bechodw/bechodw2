<?php
    require_once 'ModeloRecuperacion.php';
    
    $model=new Model();
/*
        var $correo;
        var $Clave;

*/ 
    $model->correo=$_POST['Email'];
    $model->Clave=$_POST['Contraseña'];
    $filaController=$model->Recuperar();
    if($filaController>0){
        header("refresh:1;url=http://localhost/Becho/");
    }else{
        echo "Error en correo o usuario";
        header("refresh:2;url=http://localhost/Becho/Recuperacion_Contraseña.php");
    }

?>