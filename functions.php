<?php 

//add stylesheet.
function add_theme_scripts() {

  // load theme stylesheet.
  wp_enqueue_style('style', get_stylesheet_uri());

  // load specific stylesheet.
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/bootstrap.css', array( 'bootstrap' ), '4' );
 }

add_action('wp_enqueue_scripts', 'add_theme_scripts');


//register menu.
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary' ),
      'footer' => __( 'Footer' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



//register contact widget
function contact_panoply() {
    register_sidebar(
        array (
            'name' => __( 'Contact Form', 'your-theme-domain' ),
            'id' => 'contact-panoply',
            'description' => __( 'Settings on Dasboard > Contact', 'your-theme-domain' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => "</section>",
            'before_title' => '<h3 class="topsearch">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'contact_panoply' );


//register news & events post widget
function news_events() {
    register_sidebar(
        array (
            'name' => __( 'News and Events', 'your-theme-domain' ),
            'id' => 'news_events',
            'description' => __( 'Add new News Article in Posts', 'your-theme-domain' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => "</section>",
            'before_title' => '<h4 class="news">',
            'after_title' => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'news_events' );


//register & add post thumbnails
function panoply_news_image(){
  //add featured image
  add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'panoply_news_image' );

//admin greeting in Dashboard (change howdy)
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$profile_url = get_edit_profile_url( $user_id );

if ( 0 != $user_id ) {
/* add the "My Account" menu */
$avatar = get_avatar( $user_id, 28 );
$howdy = sprintf( __('Welcome, %1$s'), $current_user->display_name );
$class = empty( $avatar ) ? '' : 'with-avatar';

$wp_admin_bar->add_menu( array(
'id' => 'my-account',
'parent' => 'top-secondary',
'title' => $howdy . $avatar,
'href' => $profile_url,
'meta' => array(
'class' => $class,
),
) );
}}


//custom login logo 
function panoply_custom_login() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/style.css" />';
    }
add_action('login_head', 'panoply_custom_login');

//custom login logo_url
function panoply_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'panoply_logo_url' );

function panoply_logo_url_title() {
  return 'Panoply Consultancy';
}
add_filter( 'login_headertitle', 'panoply_logo_url_title' );


?>
