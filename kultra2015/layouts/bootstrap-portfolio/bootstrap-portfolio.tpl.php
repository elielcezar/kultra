<?php
/***
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<section class="conteudo">  
      
    <?php print $content['Principal']; ?>

   </section>  



    <section id="portfolio">

      <div class="wrapper-portfolio">

        <h2>Veja Também</h2>
                    
          <div class="wrapper-portfolio">
            <div class="col-xs-4 coluna">
              <?php print $content['Portfolio-1']; ?>
              <?php print $content['Portfolio-4']; ?>
              <?php print $content['Portfolio-7']; ?> 
            </div>

            <div class="col-xs-4 coluna">
              <?php print $content['Portfolio-2']; ?>
              <?php print $content['Portfolio-5']; ?>
              <?php print $content['Portfolio-8']; ?>
              <?php print $content['Portfolio-10']; ?>
            </div>

            <div class="col-xs-4 coluna">
             <?php print $content['Portfolio-3']; ?>
             <?php print $content['Portfolio-6']; ?>
             <?php print $content['Portfolio-9']; ?>
            </div>
          </div>

        </div>  
         
      </section>