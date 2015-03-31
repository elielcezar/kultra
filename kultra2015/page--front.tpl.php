<div class="audio">
    <?php print views_embed_view('audio_1', 'default'); ?>                    
</div>


<div id="wrapper">    
    

<!-- Sidebar -->
<?php include "sidebar.tpl.php"; ?>
    
<!-- /#sidebar-wrapper -->
       <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div id="principal"> 
                   
                    
  
                
                <header id="topo">
                  <div class="container">                     
                      
                      
                      <nav id="topnav" class="navbar navbar-default" role="navigation">    
                          <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>   
                          </div> 
                          
                          <div class="collapse navbar-collapse navbar-ex1-collapse">                                
                             <div id="menu-principal">
                                <nav class="navbar navbar-default" role="navigation">                    
                                   <ul class="nav nav-pills nav-stacked">
                                        <li><a data-toggle="pill" href="#about"><span>About</span></a></li>
                                        <li><a data-toggle="pill" href="#music"><span>Music</span></a></li>                      
                                        <li><a data-toggle="pill" href="#videos"><span>Videos</span></a></li>
                                        <li><a data-toggle="pill" href="#dates"><span>Dates</span></a></li>
                                        <li><a data-toggle="pill" href="#fotos"><span>Fotos</span></a></li>
                                        <li><a data-toggle="pill" href="#contact"><span>Contact</span></a></li>
                                  </ul>
                                </nav>
                            </div><!-- menu principal -->  
                         </div>          
                    </nav>
                      
                  </div>
                </header>
 
                <section id="about">                     
                  <?php print views_embed_view('release', 'default'); ?>                     
                </section>
                   
                <section id="music">                     
                    <?php print views_embed_view('musica', 'default'); ?>
                </section>
                   
                <section id="videos">
                    <h2>Vídeos</h2>                     
                    <?php print views_embed_view('video_home', 'default'); ?>
                    
                    <?php if(user_is_logged_in()){ ?>
                        <p><a class="botao" href="<?php print $front_page; ?>node/add/video"><i class="fa fa-plus-square"></i> Adicionar Vídeo</a></p>
                    <?php }  ?>
                </section>
                   
                <section id="dates">
                    <h2>Dates</h2>                    
                    <?php print views_embed_view('agenda', 'default'); ?>                    
                    
                    <?php if(user_is_logged_in()){ ?>
                           <p><a class="botao" href="<?php print $front_page; ?>node/add/agenda"><i class="fa fa-plus-square"></i> Adicionar Data</a></p>
                    <?php }  ?>
                    
                </section>
                   
                 <section id="fotos">
                    <h2>Fotos</h2>                     
                     <?php print views_embed_view('fotos_home', 'default'); ?>                                         
                     
                     <?php if(user_is_logged_in()){ ?>
                        <p><a class="botao" href="<?php print $front_page; ?>node/14/edit?destination=admin/content"><i class="fa fa-pencil-square-o"></i> Editar Álbum</a></p>
                     <?php }  ?>
                </section>
                   
                 <section id="contact">
                    <h2>Contato</h2>
                     <?php
                         $block = module_invoke('webform', 'block_view', 'client-block-4');
                         print render($block['content']);
                      ?>
                </section>
                   
                <section id="footer">
                    <p><a href="<?php print $front_page; ?>user">Login</a> | Desenvolvido por <a href="http://agenciam2e.com.br" target="_blank">Agência M2E</a></p>
                </section>

            
            </div>
        </div><!-- /#page-content-wrapper -->
    </div>
  </div>
    <!-- /#wrapper -->




<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.scrollTo-1.4.6-min.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.inview.js"></script>

<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>

<!--[if !IE]><!-->
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/custom_inview.js"></script>
<!--<![endif]-->

<script>

jQuery(document).ready(function(){
  $('#menu-principal').localScroll({offset: {top:0}});  
  $('header .scroll').localScroll({offset: {top:0}});
});

    
/* fancybox */
$(document).ready(function() {	
    $('.fancybox').fancybox({
        padding : 0,
        beforeShow : function() {
            var title = this.element.find('img').attr('title');
            this.inner.find('img').attr('title', title);
            this.title = title;
        }
    });
    $('.fancybox-media').fancybox({
        padding : 0,
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}        
	});   
    
});

$(window).resize(function () { 
    
    var janela = $(window).width();
    if(janela>767){          
          $(document).scroll(function () {
              var y = $(this).scrollTop();        
              if (y > 50) {
                $('#menu-principal').addClass('fixed-top');          
              } else {          
                $('#menu-principal').removeClass('fixed-top');          
              }
          }); 
    }
    
});    


    
$('.view-agenda .views-row').click(function() {

    var allitems = $('.view-agenda .views-row');
    var currentClass = $(this).attr('class');
         
    allitems.removeClass('aberto');
    $(this).addClass('aberto');    


});
</script>





