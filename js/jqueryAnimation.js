$(document).ready(function(){
  
    function loop()
    {
      $('.ball').animate({left: '80%',width:'140px'},2500,loop);
      $('#dhoni').animate({left:'20px',width:'500px'},2500)
      $('.ball').animate({left: '120px',width:'20px'},1500,loop);
      $('#dhoni').animate({left:'8px',width:'350px'},1500)
    
    }
    loop(); 
    });