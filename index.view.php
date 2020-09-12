<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

    <title>Document</title>
</head>
<body>

<div id="wrap">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
<br>
<input type="text" name="nombre" id="nombre" placeholder="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
<br>
<input type="email" name="correo" id="correo" placeholder="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
<br>

<textarea name="mensaje" id="mensaje" placeholder="mensaje" ><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
<br>

<?php if(!empty($errores)): ?>
    <div class="alert danger">

    <?php echo $errores; ?>
    
    </div>
<?php elseif(($enviado)):?>
    <p>Se envio correctamente :)</p> 
   <?php endif?>    
<input id="btn" type="submit" value="enviar" name="submit">
</form>
</div>

</body>
</html>