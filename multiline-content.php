<?php
/**
 * Template Name: Multi Line Content
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="ml-page-content">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content">
			
			<?php the_content(); ?>
			
				</div><!-- .entry-content -->
                
           
           <?php endwhile; // end of the loop. ?>
           
           
           


           
           
           <?php if(get_field('multiline_content')): ?>
           <?php while(has_sub_field('multiline_content')): ?>
           <div class="ml-content-row">
           		<div class="ml-thumb"><img src="<?php the_sub_field("image"); ?>" width="190px"  /></div>
                <div class="ml-left-cont">
                <h2 class="ml-h2"><?php the_sub_field('title'); ?></h2>
                <p><?php the_sub_field('content'); ?></p>
                </div><!-- .ml left content -->
           </div><!-- .ml content row -->
           <?php endwhile; endif; ?>
           
           
           

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>