<?php
    require_once 'ModeloRegistro.php';
    
    $model=new Model();
/*
        var $nombres;
        var $apellidos;
        var $dpi;
        var $direccion;
        var $correo;
        var $contraseña;
        var $tipo;
*/ 
    $model->nombres=$_POST['Nombres'];
    $model->apellidos=$_POST['Apellidos'];
    $model->dpi=$_POST['DPI'];
    $model->direccion=$_POST['Direccion'];
    $model->tipo=$_POST['Tipo'];
    $model->correo=$_POST['Email'];
    $model->Clave=$_POST['Contraseña'];
    $filaController=$model->Registrar();
    if($filaController>0){
        
        $model->persona=intval($filaController[0]);
        $file2=$model->Rusuario();
        //header("refresh:1;url=http://localhost/Becho/");
    }else{
        echo "Error en correo o usuario";
        //header("refresh:2;url=http://localhost/Becho/Registro.php");
    }

?>

