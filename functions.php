<?php 
// Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '3.5.1', true);
		wp_enqueue_script('jquery');
		
		// other scripts...
		// wp_register_script(
		// 	'thumbslider',
		// 	get_bloginfo('template_directory') . '/js/jquery.easing.1.3.js',
		// 	array('jquery') );
		// wp_enqueue_script('thumbslider');
		
	}
}
 
add_action('init', 'ineedmyjava');

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page();
  
}
?>
<?php
// Add Thumbnail Image Supoort
// Must have to do featured images.
add_theme_support( 'post-thumbnails' ); 
?>
<?php
// add a favicon from your themes images folder
function mytheme_favicon() { ?> <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.png" > <?php } add_action('wp_head', 'mytheme_favicon');
?>
<?php
// Removing certain admin menu items by name...
function remove_menus () {
global $menu;
	$restricted = array(__('Dashboard'), __('Tools'),);
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');


// Changing WordPress admin Menu Names
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News & Resources';
    $submenu['edit.php'][5][0] = 'News & Resources';
    $submenu['edit.php'][10][0] = 'Add News & Resources';
   // $submenu['edit.php'][15][0] = 'Status'; // Change name for categories
    //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'News & Resources';
        $labels->singular_name = 'News & Resources';
        $labels->add_new = 'Add News & Resources';
        $labels->add_new_item = 'Add News & Resources';
        $labels->edit_item = 'Edit News & Resources';
        $labels->new_item = 'News & Resources';
        $labels->view_item = 'View News & Resources';
        $labels->search_items = 'Search News & Resources';
        $labels->not_found = 'No News & Resources found';
        $labels->not_found_in_trash = 'No News & Resources found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );
?>
<?php
// if you need to deregister styles in plugins
/*add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( 'soliloquy-style' );
}*/
?>
<?php 

/* Custom Post Types */

/*add_action('init', 'js_custom_init');
function js_custom_init() 
{
  $labels = array(
	'name' => _x('Banner', 'post type general name'),
    'singular_name' => _x('Banner', 'post type singular name'),
    'add_new' => _x('Add New', 'banner'),
    'add_new_item' => __('Add New Banner'),
    'edit_item' => __('Edit Banner'),
    'new_item' => __('New Banner'),
    'view_item' => __('View Banner'),
    'search_items' => __('Search Banner'),
    'not_found' =>  __('No slides found'),
    'not_found_in_trash' => __('No slides found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Banner'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail')
  ); 
  register_post_type('banner',$args);  
}*/
?>
<?php 
// --------------  Register Widget Menus -------------- 
function baker_register_sidebars(){
	register_sidebar( array (
		'name' => 'Page Sidebar',
		'id' => 'page-sidebar',
		'description' => __( 'The sidebar on basic pages'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => "Homepage Widget",
		'id' => 'home-widget',
		'description' => __( 'widget for the homepage'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => "Homepage Footer",
		'id' => 'home-footer',
		'description' => __( 'homepage footer.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// add more above this line
}
add_action( 'widgets_init', 'baker_register_sidebars' );
?>
<?php
/*
Plugin Name: Page Excerpt

Description: Adds support for page excerpts - uses WordPress code

*/
add_action( 'edit_page_form', 'pe_add_box');
add_action('init', 'pe_init');
function pe_init() {
	if(function_exists("add_post_type_support")) //support 3.1 and greater
	{add_post_type_support( 'page', 'excerpt' );}
}
function pe_page_excerpt_meta_box($post) {
?>
<label class="hidden" for="excerpt"><?php _e('Excerpt hey') ?></label><textarea rows="1" cols="40" name="excerpt" tabindex="6" id="excerpt"><?php echo $post->post_excerpt ?></textarea>
<p><?php _e('Excerpt go here..........'); ?></p>
<?php
}
function pe_add_box()
{
	if(!function_exists("add_post_type_support")) //legacy
	{		add_meta_box('postexcerpt', __('Page Excerpt'), 'pe_page_excerpt_meta_box', 'page', 'advanced', 'core');}
}

?>
<?php  // Limit the excerpt without truncating the last word.
// use like this > echo get_excerpt(100);
function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'... <a href="'.$permalink.'">continue reading</a>';
  return $excerpt;
}
?>
<?php
//
// Custom login function 
//
function custom_login_logo() {
        echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/login-logo.png) 50% 50% no-repeat !important; }</style>';
}
add_action('login_head', 'custom_login_logo'); 

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Jack Baker Real Estate';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' ); 


function bellaworks_custom_scripts() {
  wp_enqueue_style('bellaworks-extra-style', get_stylesheet_directory_uri() .'/assets/css/custom.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'bellaworks_custom_scripts' );

?>