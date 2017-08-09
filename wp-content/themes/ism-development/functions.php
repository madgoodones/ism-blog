<?php
/**
 * Gridworks Funções e definições
 *
 * @package Gridworks
 */

// Requires

require_once("inc/wp/create-post-types.php");

function gridworks_scripts() {

  // CSS
  wp_enqueue_style( 'gw-plugins', get_template_directory_uri() . '/dist/css/plugins.css' );
  wp_enqueue_style( 'gw-css', get_template_directory_uri() . '/dist/css/style.css' );

  // JS
  wp_enqueue_script( 'gw-js', get_template_directory_uri() . '/dist/js/main.js', array(), false , true );
}

// Inicia Estilos
add_action( 'wp_enqueue_scripts', 'gridworks_scripts' );

// Remove barra de administrador
add_filter('show_admin_bar', '__return_false');

// Inicia Estilos da área de login
function gridworks_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/inc/wp/custom-login-styles.css" />';
}
add_action('login_head', 'gridworks_login');

$menuParameters = array(
  'container'       => 'aaaaa',
  'echo'            => false,
  'items_wrap'      => '%3$s',
  'depth'           => 0,
  );

// Theme Supports

add_theme_support('menus');

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'custom-logo' );

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'navbar-menu' => __( 'Navbar (Menu Principal)' )
      )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar_1',
    'before_widget' => '<div class="sidebar-block">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="go-title-sidebar title">',
    'after_title'   => '</h4>',
    ) );

  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4 class="title">',
    'after_title'   => '</h4>',
    ) );

  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_2',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4 class="title">',
    'after_title'   => '</h4>',
    ) );

  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_3',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4 class="title">',
    'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function gw_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
        ));
}



// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

add_action('init', 'gw_pagination'); // Add our HTML5 Pagination
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether