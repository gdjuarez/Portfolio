$(document).ready(function() {

    var text = "Desarrollo de Sistemas Web a medida.";
    var i = 0;

    function writeText() {
        alert(text);
      if (i < text.length) {
        $("#actividad").append(text[i]);
        i++;
       setTimeout(writeText,250);
       
      }  
      let actividad= $('#actividad').text();

      alert(actividad);

        if (actividad == 'Desarrollo de Sistemas Web a medida.') {
          $("#actividad").text('');
         }  

    }

   
  
    setInterval(writeText,1000);
   


    // En este código, la función writeText se ejecuta
    //  de manera continua cada 60 milisegundos gracias 
    //  al bucle setInterval. Si se han escrito todas las 
    //  letras del texto, el contador i se reinicia a cero
    //   para comenzar de nuevo.

    
    

   
});
  