<?php

 // variables for input data
     $correo = $_POST['correo'];
      $nombre = $_POST['nombre'];
      $asunto = $_POST['asunto'];
      $mensaje = $_POST['mensaje'];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "dev@gdjuarez.site";
    $to = "dev@gdjuarez.site";
    $subject =  $asunto ;
    $message =  "correo: ".$correo." Nombre: ".$nombre." Mensaje:".$mensaje;
    $headers = "From:" . $from;

    if(mail($to, $subject, $message, $headers)) {
    echo "<script>
            Swal.fire({
              title: 'Correo enviado',
              text: '¡El correo ha sido enviado con éxito!',
              icon: 'success'
            }).then(function() {
              window.location.href = '../index.php';
            });
          </script>";
  } else {
    echo "<script>
            Swal.fire({
              title: 'Error al enviar el correo',
              text: 'Ha habido un error al enviar el correo.',
              icon: 'error'
            });
          </script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
</head>

<body>
  
</body>
</html>

