$(document).ready(function() {

    var text = "Desarrollo de Sistemas Web a medida.";
    var i = 0;

    function writeText() {
       
      if (i < text.length) {

        $("#actividad").append(text[i]);
          
        i++;       
      }        

    }   
  
    setInterval(writeText,150);
   

    
    

   
});
  