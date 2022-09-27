<?php
    session_start();
    require_once '../modelo/ModeloInicio.php';

    //instancia

    $model=new Model();

    $model->user=$_POST['Usuario'];
    $model->pass=$_POST['Clave'];

    $filaController=$model->Logear();
    $model->id=$filaController[2];
    $usuario=$model->Usuario();
    $_SESSION['user']=$usuario;
    
    if($filaController>0){
        
        if(intval($filaController[1])==1){
            header("refresh:2;url=http://localhost/Becho/Vista/Clientes/Menu.php");
        }elseif(intval($filaController[1])==3){
            header("refresh:2;url=http://localhost/Becho/Vista/Abogados/Menu.php");
        }  
    }else{
        echo "Error en correo o usuario";
        header("refresh:2;url=http://localhost/Becho/Login.php");
    }

?>