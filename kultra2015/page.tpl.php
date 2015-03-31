<div id="wrapper">
<!-- Sidebar -->
<?php include "sidebar.tpl.php"; ?>
    
    <!-- /#sidebar-wrapper -->
       <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div id="principal">                 
                 <?php if ($messages): ?>
                      <div id="messages">
                        <div class="section clearfix">
                        <?php print $messages; ?>
                      </div></div> <!-- /.section, /#messages -->          
                      <?php endif; ?>
                      <?php if ($tabs): ?>
                        <div class="tabs">
                          <?php print render($tabs); ?>
                        </div>
                      <?php endif; ?>   
               

                <header>
                    <?php if (($title)&&(!$is_front)): ?>                      
                        <div class="container">                          
                            <h1 class="title" id="page-title"><?php print $title; ?></h1>                                         
                        </div>                          
                       <?php endif; ?>
                </header> 
               <div id="conteudo" class="col-sm-12">                      
                      <?php print render($page['content']); ?>            
                  </div> <!-- conteudo -->
                  
                   
                
                </div> <!-- principal -->
                     
              </div>
                
            
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php print base_path() . path_to_theme() .'/' ?>js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/fancybox/video.js"></script>

<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.inview.js" type="text/javascript"></script>
<!--[if IE]>
     <script type="text/javascript">
$('.item-skills').each(function(){
    newWidth = $(this).parent().width() * $(this).data('percent');            
    $(this).animate({
        width: newWidth,
    }, 1000);
}); 
</script>
<![endif]-->
<!--[if !IE]><!-->
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/custom_inview.js"></script>
<!--<![endif]-->
<script>
jQuery(document).ready(function(){
  $('#menu-principal').localScroll({offset: {top:0}});  
  $('header .scroll').localScroll({offset: {top:0}});
});
</script>
    
