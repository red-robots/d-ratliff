<?php 
/**
* Template Name: Sitemap
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="page-content">
     <h1><?php the_title(); ?></h1>
     <?php the_content(); ?>
     	<?php wp_list_pages('title_li='); ?>
 </div><!-- / page content -->


<?php endwhile; endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>