<?php

/**
 * WP_Ogitive functions and definitions
 *
 * @package WP_Ogitive
 */
if (!function_exists('wpog_setup')) :

  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function wpog_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on WP_Ogitive, use a find and replace
     * to change 'wpog' to the name of your theme in all the template files
     */
    load_theme_textdomain('wpog', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    //add_theme_support( 'post-thumbnails' );
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'wpog'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */

    // add_theme_support( 'post-formats', array(
    // 	'aside', 'image', 'video', 'quote', 'link',
    // ) );
    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('wpog_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));
  }

endif; // wpog_setup
add_action('after_setup_theme', 'wpog_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wpog_widgets_init() {
  register_sidebar(array(
    'name'          => __('Sidebar', 'wpog'),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ));
}

add_action('widgets_init', 'wpog_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wpog_scripts() {

  // scripts version for cache busting
  $ver = 7;

  wp_enqueue_style('wpog-bs4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

  wp_enqueue_style('wpog-sidr', get_template_directory_uri() . '/css/jquery.sidr.dark.min.css');
  wp_enqueue_style('wpog-fa', get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style('wpog-slickcss', get_template_directory_uri() . '/css/slick.css');
  wp_enqueue_style('wpog-slicktheme', get_template_directory_uri() . '/css/slick-theme.css');
  wp_enqueue_style('wpog-modal', get_template_directory_uri() . '/css/jquery.modal.min.css');
  wp_enqueue_style('wpog-style', get_stylesheet_uri());           
  wp_enqueue_style('wpog-responsive', get_template_directory_uri() . '/css/responsive.css');
  wp_enqueue_style('wpog-customcss', get_template_directory_uri() . '/custom.css', array(), $ver);

  wp_enqueue_script('script-jq', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '1.0.0', true);
  wp_enqueue_script('script-sidr', get_template_directory_uri() . '/js/jquery.sidr.min.js', array(), '1.0.0', true);
  wp_enqueue_script('script-slickmin', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);
  wp_enqueue_script('script-slick', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true);
  wp_enqueue_script('script-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
  wp_enqueue_script('script-wizard', get_template_directory_uri() . '/js/wizard.js', array(), $ver, true);
  wp_enqueue_script('script-modal', get_template_directory_uri() . '/js/jquery.modal.min.js', array(), '1.0.0', true);

  wp_localize_script('script-wizard', 'afw', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
  ));

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'wpog_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Google Fonts integration
 */
function child_styles() {
  if (!is_admin()) {

    // register styles
    wp_register_style('googlefont-monts', '//fonts.googleapis.com/css?family=Montserrat:400,600,700,800', array(), false, 'all');
    wp_register_style('googlefont-gotchi', '//fonts.googleapis.com/css?family=Gochi+Hand', array(), false, 'all');
    // wp_register_style('googlefont-robotosla', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,latin-ext', array(), false, 'all');
    // wp_register_style('googlefont-scada', '//fonts.googleapis.com/css?family=Scada:400italic,400,700&subset=latin,latin-ext', array(), false, 'all');
    // enqueue styles
    wp_enqueue_style('googlefont-monts');
    wp_enqueue_style('googlefont-gotchi');
    // wp_enqueue_style('googlefont-robotosla');
    //wp_enqueue_style('googlefont-scada');
  }
}

add_action('wp_enqueue_scripts', 'child_styles');


/**
 * Load Custom Post Types and Taxonomies
 */
require get_template_directory() . '/inc/custom_post_types.php';
require get_template_directory() . '/inc/custom_taxonomies.php';

/**
 * Aktivacija thumbnailova i velicine
 */
add_theme_support('post-thumbnails');
add_image_size('cat-thumb', 550, 358, true);


/**
 *
 * Aktivacija THEME OPTIONS kroz ACF
 *
 */
if (function_exists('acf_add_options_page')) {

  $page = acf_add_options_page(array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-general-settings',
    'capability' => 'edit_posts',
    'position'   => '999',
    'icon_url'   => 'dashicons-index-card',
    'redirect'   => false
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Sidebar Settings',
    'menu_title'  => 'Sidebar',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
}


/**
 *
 * Brisanje nepotrebnih stvari iz titlova arhivnih strana
 *
 */
add_filter('get_the_archive_title', function ($title) {

  if (is_category()) {

    $title = single_cat_title('', false);
  } elseif (is_tag()) {

    $title = single_tag_title('', false);
  } elseif (is_archive()) {

    $title = post_type_archive_title('', false);
  } elseif (is_author()) {

    $title = '<span class="vcard">' . get_the_author() . '</span>';
  }

  return $title;
});


remove_action('shutdown', 'wp_ob_end_flush_all', 1); // Remove error

/**
 *
 * Sklanjanje emoji koda iz headera svih strana
 *
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 *
 * Google maps api
 *
 */
function my_acf_init() {

  acf_update_setting('google_api_key', 'XXXXXXXX');
}

add_action('acf/init', 'my_acf_init');


/*
*
* Excerpt Settings
*
*/

function custom_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


function new_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * WIZARD
 */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title' => 'Wizard',
    'capability' => 'manage_options',
  ));
}

add_filter('acf/prepare_field/name=beer_styles', function($field) {
  $field['choices'] = af_get_choices('opt_beer_styles');
  return $field;
});

add_filter('acf/prepare_field/name=alcohol_strength', function($field) {
  $field['choices'] = af_get_choices('opt_alcohol_strength');
  return $field;
});

add_filter('acf/prepare_field/name=alcohol_strength_rcm', function($field) {
  $field['choices'] = af_get_choices('opt_alcohol_strength');
  return $field;
});

add_filter('acf/prepare_field/name=bitterness', function($field) {
  $field['choices'] = af_get_choices('opt_bitterness');
  return $field;
});

add_filter('acf/prepare_field/name=bitterness_rcm', function($field) {
  $field['choices'] = af_get_choices('opt_bitterness');
  return $field;
});

add_filter('acf/prepare_field/name=additions', function($field) {
  $field['choices'] = af_get_choices('opt_additions');
  return $field;
});

add_action('admin_enqueue_scripts', function($hook) {

  if ($hook == 'toplevel_page_acf-options-wizard') {
    wp_enqueue_style('wpog-slickcss', get_template_directory_uri() . '/css/admin_acf.css');
  }
});

function af_get_choices($selector) {

  $options = get_field($selector, 'option');

  $choices = array();

  if ($options) {

    foreach (explode("\n", $options) as $e) {

      $e = trim($e);

      if ($e != '') {
        $choices[$e] = $e;
      }
    }
  }

  return $choices;
}

function af_get_products() {

  $list = array();

  if (have_rows('products', 'option')) {

    while (have_rows('products', 'option')) {
      the_row();

      $help_id = 'help-' . md5(get_sub_field('beer_styles'));

      $list[] = array(
        'beer_styles'          => get_sub_field('beer_styles'),
        'alcohol_strength'     => get_sub_field('alcohol_strength'),
        'alcohol_strength_rcm' => get_sub_field('alcohol_strength_rcm'),
        'bitterness'           => get_sub_field('bitterness'),
        'bitterness_rcm'       => get_sub_field('bitterness_rcm'),
        'additions'            => get_sub_field('additions'),
        'help_id'              => $help_id,
      );
    }
  }

  return $list;
}

function af_get_product_help() {

  $list = array();

  if (have_rows('products', 'option')) {

    while (have_rows('products', 'option')) {
      the_row();

      $help_id = 'help-' . md5(get_sub_field('beer_styles'));

      $list[$help_id] = get_sub_field('help');
    }
  }

  return $list;
}

function af_get_bottles() {

  $list = array();

  if (have_rows('opt_bottles', 'option')) {

    while (have_rows('opt_bottles', 'option')) {
      the_row();

      $name = get_sub_field('name');
      $image = get_sub_field('image');

      $image_src = wp_get_attachment_image_src($image, 'medium');

      if ($name && $image && $image_src) {

        $list[] = array(
          'name'  => $name,
          'image' => $image_src[0],
        );
      }
    }
  }

  return $list;
}

function af_get_labels() {

  $list = array();

  if (have_rows('opt_labels', 'option')) {

    while (have_rows('opt_labels', 'option')) {
      the_row();

      $name = get_sub_field('name');
      $image = get_sub_field('image');

      $image_src = wp_get_attachment_image_src($image, 'medium');

      if ($name && $image && $image_src) {

        $list[] = array(
          'name'  => $name,
          'image' => $image_src[0],
          'desc1' => get_sub_field('desc1'),
          'desc2' => wpautop(get_sub_field('desc2')),
        );
      }
    }
  }

  return $list;
}

function af_wizard_submit() {

  $beer_style =       sanitize_text_field($_POST['beer_style']);
  $alcohol_strength = sanitize_text_field($_POST['alcohol_strength']);
  $bitterness =       sanitize_text_field($_POST['bitterness']);
  $bottle =           sanitize_text_field($_POST['bottle']);
  $label =            sanitize_text_field($_POST['label']);
  $name =             sanitize_text_field($_POST['name']);
  $email =            sanitize_text_field($_POST['email']);
  $phone =            sanitize_text_field($_POST['phone']);
  $address =          sanitize_text_field($_POST['address']);
  $comment =          sanitize_text_field($_POST['comment']);

  $additions = array();

  foreach ($_POST['additions'] as $a) {

    $a = sanitize_text_field($a);

    if ($a != 'Other') {
      $additions[] = $a;
    } else {
      $additions[] = $a . ': ' . sanitize_text_field($_POST['additions_other']);
    }
  }

  $subject = 'New order';
  $message = "New order has been made!
  
    Beer style: $beer_style
    Alcohol strength: $alcohol_strength
    Bitterness: $bitterness
    Additions: " . implode(", ", $additions) . "
    Bottle: $bottle
    Label: $label
    
    Name: $name
    Email: $email
    Phone: $phone
    Address: $address
    Comment: $comment
  ";

  $notify_email = get_field('notify_email', 'option');

  wp_mail($notify_email, $subject, $message); // admin
  wp_mail($email, $subject, $message); // customer

  wp_send_json(array(
    'status' => true,
  ));
}
add_action('wp_ajax_wizard_submit', 'af_wizard_submit');
add_action('wp_ajax_nopriv_wizard_submit', 'af_wizard_submit');

// debug
//function dump($x) {
//  echo '<pre style="margin-left: 100px">';
//  print_r($x);
//  echo '</pre>';
//}