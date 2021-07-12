
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>ACTUALIZANDO EL ESTADO DE CUENTA</title>
</head>
<body>


<?php
require("headerp.php");
require("../conexion/conexion.php");
$rfc=$_GET['rfc'];
?>
<body>
<div class="container">
<H1 align="center">Por favor actualice el estado de cuenta</H1>
<form  action="validaactualizarnuestro_estado.php" method="POST" enctype="multipart/form-data" class="formulario-envia">
<input type="hidden" name="MAX_FILE_SIZE" value="2048000" name="update"/> <!--bits-->
<input type="hidden" name="rfc" value="<?php echo $rfc?>"><br>
<label for="myfile">Por favor seleccione el documento de estado de cuenta (en formato Excel, no mayor a 2MB):</label>
<input type="file"  name="nuestro_estado"  accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"  ><br><br>
<input type="submit" name="btn" value="Actualizar" >
</form>
</div>