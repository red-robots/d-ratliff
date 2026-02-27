<?php get_header(); ?>

    





<!-- <div id="bw-home-image"><div id="bw-home-image-text">We’re not your typical CPA firm.  Instead, we go beyond traditional accounting services, adding valuable insight and guidance to your growth process.  Daniel, Ratliff & Company has the tools to help you prosper.

</div></div> -->
<?php 
  $tagWords = get_field('tag_words', 'option');
  $tagLine = get_field('tagline', 'option');
  $excerpt = get_field('excerpt', 'option');
 ?>
<section class="hero">
  <div class="left">
    <div class="tag">
      <div class="first">
        <?php echo $tagWords; ?>
      </div>
      <div class="second">
        <?php echo $tagLine; ?>
      </div>
      <div class="third">
        <?php echo $excerpt; ?>
      </div>
    </div>
  </div>
  <div class="right">
      <img src="<?php bloginfo('template_url'); ?>/images/hero.jpg">
  </div>
</section>

<div id="bw-row1">

<div id="bw-row1-box1">

  <h2>our clients</h2>

  <p>“We enjoy working with DRC Tax & Accounting because they have always taken a great interest in helping our business in any way they can, including bringing excellent resources to the table for all type of services, not just financial.”</p>

  <p><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/09/jacqueline_ford_client.jpg" alt="Daniel, Ratliff &amp; Company" border="0" align="left" style="margin-right: 10px;"><br /><strong>Jacqueline Ford</strong><br />

    Co-owner and President of Great Food Services, Inc., a Burger King franchisee with multiple locations </p>

</div>

<div id="bw-row1-box2"><h2>our services</h2>

<div id="bw-services-box1">
  <a href="<?php bloginfo('url'); ?>/business-development"><span>business<br />development</span></a>
</div>

<div id="bw-services-box2">
 <a href="<?php bloginfo('url'); ?>/tax-services"><span>tax<br />services</span></a>
</div>

<div id="bw-services-box3">
  <!-- <a href="<?php bloginfo('url'); ?>/audit-services"><span>audit<br />services</span></a> -->
  <a href="https://alineaccounting.com/aapg-llp-audit-attest-services/" target="_blank"><span>audit<br />services</span></a>
</div>

<div id="bw-services-box4">
 <a href="<?php bloginfo('url'); ?>/general-accounting"><span>accounting<br />& business services</span></a>
</div>



</div>

<div id="bw-row1-box3"><h2>our philosophy</h2>

<p>We  believe we are rewarded only to the extent that we add value to those we are  privileged to serve. At DRC Tax & Accounting, we are here to serve you  and to help your  business achieve its goals. We do so by learning your business and the  challenges you face, then working with you to guide you toward success.

<div id="read-more"><a href="<?php bloginfo('url'); ?>/about-daniel-ratliff/"></a></div>



<div id="news">

<h2>news</h2>

  

  <ul>

 <?php $the_query = new WP_Query( 'showposts=2' ); ?>



<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

 <li><a href="<?php the_permalink() ?>"><b><?php the_time('m/j/y') ?></b><br /><?php the_title(); ?></a></li>



 <?php endwhile;?>

 </ul>

</div>  

  

  

</div>

</div>









	





<?php //get_sidebar(); ?>



<div class="clear"></div>



<div id="bw-footer">

<div id="bw-footer2">3800 Arco Corporate Drive | Suite 500 | Charlotte, NC 28273<br>

  <a href="<?php bloginfo('url'); ?>/sitemap/">sitemap</a>  |  site by <a href="http://bellaworksweb.com/" target="_blank">Bellaworks</a>

</div>



<div id="bw-footer3"><a href="http://www.upstreamacademy.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/upstream-academy-member.jpg" alt="Upstream Academy Member" border="0" align="right"></a><br />&nbsp;Member of Upstream Academy Network, a premiere community of CPA firms committed to excellence through continuous improvement.
<br><br>
  Aline Accounting Partners Group is the brand name under which AAPG, LLP and Aline Accounting Partners and its subsidiary entities provide professional services. Professional services offered by Aline Accounting Partners, LLC dba DRC Tax & Accounting and its subsidiary entities do not include attest services and should not be construed as CPA services. AAPG, LLP is a licensed independent CPA firm that provides attest services to its clients. Aline Accounting Partners, LLC dba DRC Tax & Accounting and its subsidiary entities provide tax and business consulting services and are not licensed CPA firms.
</div>

</div>



</div> <!-- main -->

	



<?php wp_footer(); ?>



<!-- end bw repeating bg --></div>



</body>

</html>
