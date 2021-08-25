<?php
/**
 * Template Name: Multi Line with Right Col
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php //while ( have_posts() ) : the_post(); ?>
				
				
                
           
           <?php //endwhile; // end of the loop. ?>
           
           
           


           
           
           <?php if(get_field('multiline_with_right_col')): ?>
           <?php while(has_sub_field('multiline_with_right_col')): ?>
           
           
           <div class="mlr-content-row">
           		
                <div class="mlr-left-cont">
                    <h1 class="entry-title"><?php the_sub_field('title'); ?></h1>
                    <p><?php the_sub_field('content'); ?></p>
                </div><!-- .ml left content -->
                
                <div class="mlr-right-cont">
                <a href="<?php the_sub_field("link"); ?>" >
                	  
                		<p><?php the_sub_field("right_column_paragraph"); ?></p>
                        
<div class="mlr-thumb"><p><img src="<?php the_sub_field("right_column_image"); ?>" width="90px"  /></p></div>
 
<div class="mlr-thumb-text"><?php the_sub_field("right_column_image_paragraph"); ?></div> 
                        
                        
                        
                        
            </a>
                </div><!-- .mlr right cont -->
                
           </div><!-- .ml content row -->
           
         
           
           <?php endwhile; endif; ?>
           
           
           

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>