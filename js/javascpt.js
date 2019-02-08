 $(document).ready(function(){


   	var flag = false;
   var scroll;

   
   $(window).scroll(function() {
   	     
      scroll = $(window).scrollTop();

       if(scroll > 80){

           if(!flag){
               
            //     $('header').css({ "background-color": "#5d5d5d"});
        				// flag=true;
        				$('#logotipo').css({ "height": "65px"});
        				flag=true;
                // $('.logo').css({ "display": "none"});
                // flag=true;
                // $('.logo2').css({ "display": "block"});
                // flag=true;
        				$('header label').css({ "margin-top": "14px"});
        				flag=true;
        				$('.menu-despleg').css({ "top": "63px"});
        				flag=true;
                $('.intmenu a,.intmenu .a').css({ "color": "#fff"});
                flag=true;
                $('.intmenud a,.intmenud .a').css({ "color": "#fff"});
                flag=true;
                $('.titulop h1').css({ "color": "#fff"});
                flag=true;
                $('.minimo h1').css({ "color": "#fff"});
                flag=true;
               
                    
        				
               

           }


       }else{
           
           if(flag){
            //     $(' header').css({"background-color": "#5d5d5d"});
        				// flag=false;
        				$('#logotipo').css({ "height": "65px"});
        				flag=false;
                // $('.logo').css({ "display": "block"});
                // flag=true;
                // $('.logo2').css({ "display": "none"});
                // flag=true;
        				$('header label').css({ "margin-top": "15px"});
        				flag=false;
        				$('.menu-despleg').css({ "top": "65px"});
        				flag=false;
                $('.intmenu a,.intmenu .a').css({ "color": "#fff"});
                flag=false;
                $('.intmenud a,.intmenud .a').css({ "color": "#fff"});
                flag=false;
                $('.titulop h1').css({ "color": "#fff"});
                flag=false;
                $('.minimo h1').css({ "color": "#fff"});
                flag=false;
              
                    
               



           }







       }/*/else*/


   });
          

  $('.flecha').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    }, 2000);
  });

  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.flecha').fadeIn();
    } else {
      $('.flecha').fadeOut();
    }
  });



     
           $('.icon').click(function(){
               $('.icon').toggleClass('active');
           });
  
           $('.icon').on('click',function(){

	          $('.menu-despleg').toggleClass('menu-despleg2');
	         
           });

           $("#button-menu").click(function(){ $(".menu-despleg").toggleClass('menu-visible') });


      
    $("#p").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".prof").offset().top
    }, 2000);

});
    $("#pp").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".prof").offset().top
    }, 2000);
});

    $("#pp").click(function () {
      
      if($("#pp")==$(".prof")){$(".menu-despleg").toggleClass('menu-invisible')}
        else{$(".menu-despleg").toggleClass('menu-visible')}
       
    });
  $("#p2").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".prof").offset().top
    }, 2000);
});


 $("#u").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".us-pas").offset().top
    }, 2000);
});
 $("#uu").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".us-pas").offset().top
    }, 2000);
});

    $("#uu").click(function () {
      
      if($("#uu")==$(".us-pas")){$(".menu-despleg").toggleClass('menu-invisible')}
        else{$(".menu-despleg").toggleClass('menu-visible')}
       
    });

     $("#u2").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".us-pas").offset().top
    }, 2000);
});


 $("#n").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".nosotros").offset().top
    }, 2000);
});
 $("#nn").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".nosotros").offset().top
    }, 2000);
});

  $("#nn").click(function () {
      
      if($("#nn")==$(".nosotros")){$(".menu-despleg").toggleClass('menu-invisible')}
        else{$(".menu-despleg").toggleClass('menu-visible')}
       
    });

 $("#a").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".conocemas").offset().top
    }, 2000);
});
 $("#aa").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".conocemas").offset().top
    }, 2000);
});

  $("#aa").click(function () {
      
      if($("#aa")==$(".conocemas")){$(".menu-despleg").toggleClass('menu-invisible')}
        else{$(".menu-despleg").toggleClass('menu-visible')}
       
    });

 
$("#c").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".cont-serv").offset().top
    }, 2000);
});
$("#nos").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".nosotros").offset().top
    }, 2000);
});
$("#blog").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".conocemas").offset().top
    }, 2000);
});
  
$("#cf").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".nosotros").offset().top
    }, 2000);
});

$("#cf1").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".nosotros").offset().top
    }, 2000);
});

$("#cf1").click(function () {
      
      if($("#cf1")==$(".nosotros")){$(".menu-despleg").toggleClass('menu-invisible')}
        else{$(".menu-despleg").toggleClass('menu-visible')}
       
    });

$("#qs").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".nosotros").offset().top
    }, 2000);
});


$("#acc").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".cont-serv").offset().top
    }, 2000);
});

$("#acc1").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".cont-serv").offset().top
    }, 2000);
});

  $("#acc1").click(function () {
      
      if($("#acc1")==$(".cont-serv")){$(".menu-despleg").toggleClass('menu-invisible')}
        else{$(".menu-despleg").toggleClass('menu-visible')}
       
    });
$("#ac2").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".cont-serv").offset().top
    }, 2000);
});

    
$(".accordion-titulo2").click(function(){
    
   var contenido=$(this).next(".accordion-content2");
      
   if(contenido.css("display")=="none"){ //open   
      contenido.slideDown(280);     
      $(this).addClass("open");
   }
   else{ //close    
      contenido.slideUp(280);
      $(this).removeClass("open");  
  }
              
}); 

$(".titulo-opc").click(function(){
    
   var contenido=$(this).next(".acordeon-opc");
      
   if(contenido.css("display")=="none"){ //open   
      contenido.slideDown(280);     
      $(this).addClass("open");
   }
   else{ //close    
      contenido.slideUp(280);
      $(this).removeClass("open");  
  }
              
});  

  
    $("#persona").click(function(){
        $("#c1").fadeIn();
       });
       $("#exit1").click(function(){
        $("#c1").fadeOut();
       });


    $("#perfil").click(function(){
        $("#c2").fadeIn();
       });
       $("#exit").click(function(){
        $("#c2").fadeOut();
       });
 
    


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 








































 });