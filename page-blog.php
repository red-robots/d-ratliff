<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

	


<div class="page-content">



<!-- right boxes -->
<div id="news-boxes-wrapper">
<div class="resources">
 
 <h2 align="center">Resources</h2>
 
  <?php the_field('resources', 39); ?>
  </div>
  
  
 <div class="newsletters">
 
 <h2 align="center">Newsletters</h2>
 
 
 <ul>
 <?php $the_query = new WP_Query( 'showposts=5&cat=2' ); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

 <?php endwhile;?>
 </ul>
  
  </div> 
</div>
<!-- end right boxes -->




<h1>News & Resources</h1>



<div class="blogentry">





<?php query_posts('posts_per_page=-1'); // "-1" = all posts. or, set to number of posts you want to show ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="blogentry-left">

        <div class="blog-featured-image">
				<?php
                //  Display the featured image. Must be inside a loop.
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                }
                // If you do not have a Featured Image, show a thumbnail stored in the themes images folder.
                else {
                    echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/default-thumb.png" />';
                     }
                ?>
        </div><!-- blog featured image  -->



  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 <?php  echo get_excerpt(300); ?> 
  
</div><!-- blogentry-left -->




<?php endwhile; endif; ?>



 </div><!-- blogentry -->
 
 
 </div>
 
<?php get_footer(); ?>