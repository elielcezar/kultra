

$('.item-skills').css('width','0');    

$('.item-skills').one('inview', function (event, visible) {                
      $('.item-skills').each(function(){
          newWidth = $(this).parent().width() * $(this).data('percent');            
          $(this).animate({
              width: newWidth,
          }, 1000);
        });
   }); 


var janela = $(window).width();
if(janela > 767){


  /*--- HOME ----------------------------------------------------------------------*/

  $('header .logo, #portfolio .views-row, .scroll').css('opacity','0');        
  $('.front .item-skills').width(0);


  $('header .logo').one('inview', function (event, visible) {
        if (visible) {        
          $(this).addClass('animated zoomIn').css('opacity','1');   
        }
    }); 
  $('.front .scroll').one('inview', function (event, visible) {
        if (visible) {        
          $(this).addClass('animated zoomIn').css('opacity','1');   
        }
    });   
 

  $('#portfolio .views-row').one('inview', function (event, visible) {
        if (visible) {        
          $(this).addClass('animated zoomIn').css('opacity','1');   
        }
    });   
  
    



        
}
