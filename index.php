<?php 
  $errores = "";
  $enviado=false;
 
if(isset($_POST["submit"])){
   
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    
    if($nombre!=""){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre);

    }
    else{
        $errores .= 'Porfavor Escriba Un nombre valido <br>';
    }
    if(!empty($correo)){
        $correo = trim($correo);
        $correo = filter_var($correo);

        if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
        $errores .= "Porfavor escriba un email valido <br> ";
        }

    }
    else{
        $errores .= "Porfavor Escriba Un email <br> ";
    }
    
    if($mensaje!=""){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
        

    }
    else{
        $errores .= 'Porfavor Escriba Un mensaje valido <br>';
    }
    if(!$errores){
        $correo_a="eborrayom1@miumg.edu.gt";
        $asunto = "enviado desde app";
        $mensaje_prep = "De $nombre \n";
        $mensaje_prep .= "Correo: $correo \n";
        $mensaje_prep .= $mensaje;

        mail($correo_a,$asunto,$mensaje_prep);
        $enviado=true;
    }
    
}


require "index.view.php";
?>