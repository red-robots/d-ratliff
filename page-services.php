<?php 
/**
* Template Name: Services Page
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="page-content">
     <h1><?php the_title(); ?></h1>
     
<!-- services boxes -->

<div id="bw-services-boxes">

<div id="services-services-box1"><a href="/business-development">business
development</a></div>

<div id="services-services-box2"><a href="/tax-services">tax
services</a></div>

<div id="services-services-box3"><a href="/audit-services">audit
services</a></div>

<div id="services-services-box4"><a href="/general-accounting">accounting
&amp; business services</a></div>

</div>

<!-- end services boxes -->     
     
     
     <?php the_content(); ?>
 </div><!-- / page content -->


<?php endwhile; endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>