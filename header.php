<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="https://use.typekit.net/voy3dty.css">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>

<!-- menu -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/chrometheme/chromestyle.css" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/chromejs/chrome.js">

/***********************************************
* Chrome CSS Drop Down Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<!--- end menu -->
<!-- lw2 -->
<style type="text/css">
	.dropmenudiv { z-index: 1000000 !important; }
	#payment-button {
		position: relative;
		width: auto;
	}
	.dropdown-content {
	  display: none;
	  position: absolute;
	  top: 100%;
	  left: 0;
	  background-color: #65222a;
	  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
	  min-width: 160px;
	  z-index: 1;
	  border-radius: 5px;
	  overflow: hidden;
	}

	.dropdown-content a {
	  display: block;
	  padding: 10px;
	  text-decoration: none;
	  color: #fff;
	  line-height: 1;
	}

	.dropdown-content a:hover {
	  background-color: #1f324e;
	}
	.dropper {
		/*width: auto;*/
		position: relative;
		width: 133px;
	    height: 25px;
	    float: left;
	    background-image: url(<?php bloginfo('template_url'); ?>/images/bg-button.jpg);
	    background-repeat: no-repeat;
	    background-position: 0 0px;
	    padding-top: 9px;
	    color: #fff;
	    line-height: 0;
	}

	.dropper:hover .dropdown-content {
	  display: block;
	}
</style>
</head>

<body>

<div id="bw-repeating-bg">

<div id="bw-red-bar"></div>

<div id="main">

<div id="header">

    <div id="logo">
    
    
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/d-logo-new.jpg" alt="Daniel, Ratliff &amp; Company" border="0"></a> 
    </div><!-- #logo -->
    
    
<div id="header-buttons">    
<div class="header-button"><a href="https://danielratliff.sharefile.com/" target="_blank">Client Login</a></div> 
<div id="payment-button" class="dropper">
	<div class="header-button">
		Make a Payment
	</div>
	<div class="dropdown-content">
	    <a href="https://link.clover.com/urlshortener/Tst6R2" target="_blank">Credit Card</a>
	    <a href="https://collectcheckout.com/r/eh1b81yjejbhmsx1nda91bnxljycoa" target="_blank">ACH</a>
	  </div>
	<!--<form name="PrePage" method = "post" action = "https://Simplecheckout.authorize.net/payment/CatalogPayment.aspx"> <input type = "hidden" name = "LinkId" value ="f7df4473-2d1b-413f-84b9-b77d991ae71e" /> <input type = "submit" value = "Make A Payment" /> </form>-->
	<!-- <form action="https://Simplecheckout.authorize.net/payment/CatalogPayment.aspx" method="post" name="PrePage"><input name="LinkId" type="hidden" value="cf577b8c-ddbf-4d2b-a3a6-5903be7219f3" /> <input type="submit" value="Make A Payment" /></form> -->
</div>
</div> 

<div id="header-text">
  <p>3800 Arco Corporate Drive | Suite 500 | Charlotte, NC 28273<br /> phone 704-371-5000  | fax 704-371-4888 
</div>   
    
</div><!-- #header -->
    
    
<!-- #navigation --><div id="navigation-wrapper"><div id="navigation">
<!-- begin menu-->
<div class="chromestyle" id="chromemenu">
<ul class="navigation">
<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
<li><a href="<?php bloginfo('url'); ?>/about-daniel-ratliff" rel="dropmenu1">About Us</a></li>
<li><a href="<?php bloginfo('url'); ?>/accounting-services" rel="dropmenu2">Services</a></li>
<li><a href="<?php bloginfo('url'); ?>/news-resources">News &amp; Resources</a></li>
<li><a href="<?php bloginfo('url'); ?>/careers-in-accounting-charlotte" rel="dropmenu3">Careers</a></li>	

<li><a href="<?php bloginfo('url'); ?>/contact-daniel-ratliff">Contact Us</a></li>

</ul>
</div>

<!--1st drop down menu -->                                                   
<div id="dropmenu1" class="dropmenudiv">
<a href="<?php bloginfo('url'); ?>/about-daniel-ratliff">About Us Overview</a>
<a href="<?php bloginfo('url'); ?>/bill-of-rights">Bill of Rights</a>
</div>


<!--2nd drop down menu -->                                                
<div id="dropmenu2" class="dropmenudiv">
<a href="<?php bloginfo('url'); ?>/business-development">Business Development</a>
<a href="<?php bloginfo('url'); ?>/tax-services">Tax Services</a>
<a href="<?php bloginfo('url'); ?>/audit-services">Audit Services</a>
<a href="<?php bloginfo('url'); ?>/general-accounting">Accounting & Business Services</a>
</div>

<!--3rd drop down menu -->                                                
<div id="dropmenu3" class="dropmenudiv">
<a href="<?php bloginfo('url'); ?>/careers-in-accounting-charlotte">Overview</a>
<a href="<?php bloginfo('url'); ?>/submit-a-resume">Submit a Resume</a>
</div>



<script type="text/javascript">

cssdropdown.startchrome("chromemenu")

</script>

<!-- end menu --></div>
</div><!-- #navigation -->
    
    
    
    
