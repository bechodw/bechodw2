<?php
    require_once 'ModeloInicio.php';

    //instancia

    $model=new Model();

    $model->user=$_POST['Usuario'];
    $model->pass=$_POST['Clave'];

    $filaController=$model->Logear();
    
    if($filaController>0){
       
        header("refresh:2;url=http://localhost/Becho/Menu.php");
    }else{
        echo "Error en correo o usuario";
        header("refresh:2;url=http://localhost/Becho/");
    }

?>