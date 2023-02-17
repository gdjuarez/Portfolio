$(document).ready(function() {

    var text = "Desarrollo de Sistemas Web a medida.";
    var i = 0;

    function writeText() {
       
      if (i < text.length) {

        $("#actividad").append(text[i]);
          if(i==35){
            $("#actividad").text('-');
            i=-1;
          }       
        i++;       
      }        

    }   
  
    setInterval(writeText,150);
   

    
    

   
});
  