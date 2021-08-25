<?php 
/*
*
* Template Name: Contact Us
*
*/


get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="page-content">

<div class="page-left">
<h1><?php the_title(); ?></h1>
     <?php the_content(); ?>
     </div>
     
     
     <div class="page-right">
     
     
     
     
     
     <?php echo do_shortcode('[gravityform id="1" name="Contact Us" title="false" description="false"]'); ?>
     </div>
     
     
 </div><!-- / page content -->


<?php endwhile; endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>