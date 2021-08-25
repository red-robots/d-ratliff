<?php
/**
 * Displays a Sinlge Post
 */

get_header(); ?>

	


<div class="single-post-container">


<!-- news links -->

<div class="news">
 
 <h2 align="center">News</h2>
 
 
 <ul>
 <?php $the_query = new WP_Query( 'showposts=35' ); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

 <?php endwhile;?>
 </ul>
  
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php bloginfo('url'); ?>/news-resources">< back to News &amp; Resources</a> 
  
  </div> 
<!-- news links -->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <h1><?php the_title(); ?></h1>
 		<?php the_content(); ?>
        
        
        
        
        
        
</div><!-- single post container -->



<div id="blog-back"><a href="<?php bloginfo('url'); ?>/news-resources">< back to News &amp; Resources</a></div>


<?php endwhile; endif; ?>





<?php // get_sidebar(); ?>
<?php get_footer(); ?>