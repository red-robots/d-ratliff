<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
get_header(); ?>


<div class="page-content">
  <article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'We&rsquo;re sorry. The page you are looking for cannot be found.', 'daniel-ratliff-co' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Please use the links below to browse our site.', 'olive' ); ?></p>
				  <?php wp_list_pages('title_li='); ?>
               
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
 </div><!-- / page content -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>