
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="img/png" href="img/favicon.ico">
  <title>LosMonitores</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body id="php">
  <div class="menu">
    <h4 class="headr">EasyCode <br>EasyLife</h4>
    <a class="box" href="Bibliografia.html" title="Bibliografia">Bibliografía</a>
    <a class="box" href="Mercado.html" title="Mercado">Mercado</a>
    <a class="box" href="Tecnologia.html" title="Tecnologia">Tecnología</a>
    <a class="box" href="Tipos.html" title="Tipos">Tipos</a>
    <a class="box" href="index.html" title="Inicio">Inicio</a>
  </div>
  <div class="cuerpo">
    <div class="text"><h1>Se ha mandado correctamente, gracias por tu tiempo.</h1>
    </div>
  </div>
  
  <?php 
    error_reporting(0); 
    $nombre = $_POST['nombre']; 
    $correo_electronico= $_POST['email']; 
    $poblacion = $_POST['poblacion']; 
    $sexodefinido=$_POST['sexo']; 
    $aficiones=$_POST['comentarios']; 
    $radio= $_POST['valoracion']; 
    $opinion=$_POST['opinion']; 
    $header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; 
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
    $header .= "Mime-Version: 1.0 \r\n"; 
    $header .= "Content-Type: text/plain"; 

    $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
    $mensaje .= "Sexo:" . $_POST['sexo'] . " \r\n"; 
    $mensaje .= "Aficiones: " . $_POST['comentarios'] . " \r\n"; 
    $mensaje .= "Que opinas de la pagina: " . $_POST['valoracion'] . " \r\n";
    $mensaje .="Opinion: ".$_POST['opinion'] . " \r\n"; 
    $mensaje .= "Enviado el " . date('d/m/Y', time()); 

    $para = "forgusdie@gmail.com"; 
    $asunto = "Nuevo Formulario"; 

    mail($para, $asunto, utf8_decode($mensaje), $header); 

    echo 'Mensaje enviado correctamente, gracias por tu tiempo.'; 
  ?>
</body>
</html>