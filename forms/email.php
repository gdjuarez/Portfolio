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
    mail($to,$subject,$message, $headers);
    
   /*   echo "<script language='javascript'>"; 
    echo "alert('Muchas Gracias, el correo fue enviado.')"; 
    echo "</script>";  
    
    echo "<script language='javascript'>"; 
     echo "window.location.href = 'http://gdjuarez.site'";
       echo "</script>";   */
    ?>
     <!--   sweet alert  -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script language='javascript'>

 
Swal.fire({
	title:'Muchas Gracias, el correo fue enviado',
	icon:'info',
	timer:'1500',
	timerProgressBar:true
  }).then(function(){ 
	window.location.href = "../../index.php";
	}

  );

</script>