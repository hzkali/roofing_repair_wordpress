<?php
/**
 *----------------- include ------------------------------------------
 */


include_once( get_template_directory() . '/inc/tools.php' );
include_once( get_template_directory() . '/inc/plugins/plugins.php' );
include_once( get_template_directory() . '/inc/panel.php' );
include_once( get_template_directory() . '/inc/meta-box.php' );
include_once( get_template_directory() . '/inc/walker/roofing_walker.php' );

load_theme_textdomain( "roofing", get_template_directory() . '/languages' );


/**
 *--------------------------------------------------------------------
 */
/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 625;
}

/* Add post formats */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form' ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor.css' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-header' );
	// -- Disable custom font sizes
	add_theme_support( 'disable-custom-font-sizes' );

// -- Editor Font Sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => esc_html__( 'small', 'roofing' ),
			'shortName' => esc_html__( 'S', 'roofing' ),
			'size'      => 14,
			'slug'      => 'small'
		),
		array(
			'name'      => esc_html__( 'regular', 'roofing' ),
			'shortName' => esc_html__( 'M', 'roofing' ),
			'size'      => 16,
			'slug'      => 'regular'
		),
		array(
			'name'      => esc_html__( 'large', 'roofing' ),
			'shortName' => esc_html__( 'L', 'roofing' ),
			'size'      => 18,
			'slug'      => 'large'
		),
	) );

// -- Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => esc_html__( 'Primary Color:', 'roofing' ),
			'slug'  => 'primary',
			'color' => 'rgba(249,118,27,1)',
		),
		array(
			'name'  => esc_html__( 'Secondary Color:', 'roofing' ),
			'slug'  => 'secondary',
			'color' => 'rgba(32,152,209,1)',
		),
	) );
}
/*
 * ----------header title----------
 */
function roofing_wp_title_for_home( $roofing_title, $roofing_sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $roofing_title;
	}


	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'name', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$roofing_title = esc_html__( 'Home - ', 'roofing' ) . "$roofing_title $roofing_sep $site_description";
	}

	return $roofing_title;
}

add_filter( 'wp_title', 'roofing_wp_title_for_home', 10, 2 );


/**
 *--------------- Image presets-----------
 */

add_image_size( 'roofing_blog-thumb', 840, 424, true );
add_image_size( 'roofing_blog', 368, 193, true );
add_image_size( 'roofing_portfolio', 380, 254, true );
add_image_size( 'roofing_portfolio_760x500', 760, 500, true );
add_image_size( 'roofing_testimonial', 250, 250, true );
add_image_size( 'roofing_team', 270, 322, true );


/**
 *-----------------add sidebar------------------------------------------
 */

function roofing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'roofing' ),
		'id'            => 'sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="block-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'roofing' ),
		'id'            => 'footer-1',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="block-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'roofing' ),
		'id'            => 'footer-2',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="block-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'roofing' ),
		'id'            => 'footer-3',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="block-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Sidebar', 'roofing' ),
		'id'            => 'shop-widgets',
		'description'   => esc_html__( 'Appears on the shop page of your website.', 'roofing' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s shop-widgets">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', 'roofing_widgets_init' );


//____________navigation____________

register_nav_menus( array(
	'primary' => esc_html__( 'Primary Navigation', 'roofing' ),
) );
function roofing_main_menu_fallback() {
	echo '<div class="empty-menu">';
	echo esc_html__( 'Please assign a menu to the primary menu location under ', 'roofing' ); ?>
  <a
    href="<?php echo get_admin_url( get_current_blog_id(), 'nav-menus.php' ) ?>"><?php echo esc_html__( 'Menus Settings', 'roofing' ); ?></a>
  </div> <?php
}

function roofing_register_roofing_menu() {
	register_nav_menu( 'footer', esc_html__( 'Footer', 'roofing' ) );
}

add_action( 'init', 'roofing_register_roofing_menu' );
//--------load css and js----------------------------


function roofing_fonts_url( $font_body_name, $roofing_font_weight_style, $roofing_main_text_font_subsets ) {
	$font_url = '';

	/*
	Translators: If there are characters in your language that are not supported
	by chosen font(s), translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'roofing' ) ) {
		$font_url = add_query_arg( 'family', urlencode( $font_body_name . ':' . $roofing_font_weight_style . '&subset=' . $roofing_main_text_font_subsets ), "//fonts.googleapis.com/css" );
	}

	return $font_url;
}


function roofing_load_js_css_file() {


	$font_body_name                 = roofing_get_option( 'roofing_body_font_familly', 'Open Sans' );
	$roofing_font_weight_style      = roofing_get_option( 'roofing_font-weight-style_list', '400' );
	$roofing_main_text_font_subsets = roofing_get_option( 'roofing_main-text-font-subsets', 'latin' );

	$font_header_name                  = roofing_get_option( 'roofing_head_font_familly', 'Raleway' );
	$roofing_heading_font_weight_style = roofing_get_option( 'roofing_heading-font-weight-style-list', '400' );
	$roofing_heading_text_font_subsets = roofing_get_option( 'roofing_heading-text-font-subsets', 'latin' );

	$roofing_navigation_font_familly      = roofing_get_option( 'roofing_navigation_font_familly', 'Raleway' );
	$roofing_navigation_font_weight_style = roofing_get_option( 'roofing_navigation-font-weight-style-list', '400' );
	$roofing_navigation_text_font_subsets = roofing_get_option( 'roofing_navigation-text-font-subsets', 'latin' );


	// Enqueue body font
	if ( $font_body_name != "default" ) {
		wp_enqueue_style( 'wd-fonts-body', roofing_fonts_url( $font_body_name, $roofing_font_weight_style, $roofing_main_text_font_subsets ), array(), '1.0.0' );
	} else {
		wp_enqueue_style( 'wd-fonts-body', roofing_fonts_url( 'Open+Sans', '400,300,700', 'latin,latin-ext' ), array(), '1.0.0' );
	}
	// Enqueue headers font
	if ( $font_header_name != "default" ) {
		wp_enqueue_style( 'wd-fonts-header', roofing_fonts_url( $font_header_name, $roofing_heading_font_weight_style, $roofing_main_text_font_subsets ), array(), '1.0.0' );
	}
	// Enqueue navigation font
	if ( $roofing_navigation_font_familly != "default" ) {
		wp_enqueue_style( 'wd-fonts-navigation', roofing_fonts_url( $roofing_navigation_font_familly, $roofing_navigation_font_weight_style, $roofing_navigation_text_font_subsets ), array(), '1.0.0' );
	}


	//________________________css______________________________
	wp_enqueue_style( 'Owl-carousel', get_template_directory_uri() . "/stylesheets/owl.carousel.css" );
	wp_enqueue_style( 'Owl-carousel-theme', get_template_directory_uri() . "/stylesheets/owl.theme.css" );
	wp_enqueue_style( 'animation', get_template_directory_uri() . "/stylesheets/animate.css" );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . "/stylesheets/swiper.min.css" );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/stylesheets/font-awesome/font-awesome.min.css" );
	wp_enqueue_style( 'roofing_style', get_template_directory_uri() . "/stylesheets/app.css" );
	wp_enqueue_style( 'woocommerce', get_template_directory_uri() . "/stylesheets/woocommerce.css" );

	//________________________js______________________________
	$roofing_mapkey = roofing_get_option( 'roofing_mapkey' );
	if ( $roofing_mapkey ) {
		$roofing_protocol = is_ssl() ? 'https' : 'http';
		wp_enqueue_script( 'googlemaps', $roofing_protocol."://maps.googleapis.com/maps/api/js?key=" . $roofing_mapkey, array( 'jquery' ), '4.4.2', false );
	}

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/vendor/isotope.js', array( 'jquery' ) );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array( 'jquery' ) );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/vendor/parallax.js', array( 'jquery' ) );
	wp_enqueue_script( 'localscroll', get_template_directory_uri() . '/js/vendor/localscroll.js', array( 'jquery' ) );
	wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/vendor/appear.js', array( 'jquery' ) );
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/vendor/classie.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'ismobile', get_template_directory_uri() . '/js/vendor/ismobile.js', array( 'jquery' ) );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/vendor/counterup.js', array( 'jquery' ) );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/vendor/swiper.js', array( 'jquery' ) );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/vendor/waypoints.js', array( 'jquery' ) );
	wp_enqueue_script( 'shortcodes-js', get_template_directory_uri() . "/js/shortcode/script-shortcodes.js", array( 'jquery' ) );
	wp_enqueue_script( 'roofing_scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ) );
	if ( is_singular() && comments_open() && roofing_get_option( 'thread_comments', '' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//________________________inline style______________________________
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );

	include_once( get_template_directory() . '/inc/custom-style.php' );

	wp_add_inline_style( 'custom-style', $roofing_custom_css );
}

add_action( 'wp_enqueue_scripts', 'roofing_load_js_css_file' );


// initialize options
if ( ! function_exists( 'roofing_initialize_options' ) ) {
	function roofing_initialize_options() {

		$options_array = get_option( "roofing_options_array" );

		if ( ! $options_array ) {
			$options_array = array(

				'roofing_primary_color'                => "",
				'roofing_secondary_color'              => "",
				'roofing_logo_path'                    => "",
				'roofing_favicon_icon_path'            => "",
				'roofing_menu_style'                   => "",
				'roofing_facebook'                     => "",
				'roofing_twitter'                      => "",
				'roofing_google_plus'                  => "",
				'roofing_body_font_familly'            => "",
				'roofing_body_font_weight'             => "",
				'roofing_main-text-font-subsets'       => "",
				'roofing_head_font_familly'            => "",
				'roofing_heading-font-weight-style'    => "",
				'roofing_heading-text-font-subsets'    => "",
				'roofing_navigation_font_familly'      => "",
				'roofing_navigation-font-weight-style' => "",
				'roofing_navigation-text-font-subsets' => "",
				"roofing_theme_custom_css"             => "",
				'roofing_theme_custom_js'              => "",
				'roofing_footer_columns'               => "",
				'roofing_footer_bg_path'               => "",
				'roofing_nav_bg_color'                 => '',
				'roofing_copyright'                    => "",
			);
			update_option( "roofing_options_array", $options_array );
		}
	}
}


// get options value
if ( ! function_exists( 'roofing_get_option' ) ) {
	function roofing_get_option( $roofing_option_key, $roofing_option_default_value = null ) {
		roofing_initialize_options();
		$options_array      = get_option( "roofing_options_array" );
		$roofing_meta_value = "";
		if ( array_key_exists( $roofing_option_key, $options_array ) ) {
			if ( isset( $options_array[ $roofing_option_key ] ) && ! empty( $options_array[ $roofing_option_key ] ) ) {
				$roofing_meta_value = esc_attr( $options_array[ $roofing_option_key ] );
			}

			if ( $roofing_meta_value == "" ) {
				$roofing_meta_value = $roofing_option_default_value;
			}
		}

		return $roofing_meta_value;
	}
}

// get options value
if ( ! function_exists( 'roofing_save_option' ) ) {
	function roofing_save_option( $roofing_option_key, $roofing_option_value ) {
		$options_array                        = get_option( "roofing_options_array" );
		$options_array[ $roofing_option_key ] = $roofing_option_value;
		update_option( "roofing_options_array", $options_array );
	}
}


/*---------wooocomerce---------*/
//Reposition WooCommerce breadcrumb 
function roofing_woocommerce_remove_breadcrumb() {
	remove_action(
		'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}

add_action(
	'woocommerce_before_main_content', 'roofing_woocommerce_remove_breadcrumb'
);

function roofing_woocommerce_custom_breadcrumb() {
	woocommerce_breadcrumb();
}

add_action( 'woo_custom_breadcrumb', 'roofing_woocommerce_custom_breadcrumb' );


// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'roofing_woocommerce_header_add_to_cart_fragment' );

function roofing_woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
  <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>"
     title="<?php echo esc_attr__( 'View your shopping cart', 'roofing' ); ?>"><?php echo sprintf( _n( '%d item', '%d items', WC()->cart->cart_contents_count, 'roofing' ), WC()->cart->cart_contents_count ); ?>
    - <?php echo WC()->cart->get_cart_total(); ?></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}


function roofing_theme_custom_js() { ?>
  <script type="text/javascript">
		<?php echo esc_js(roofing_get_option( 'roofing_theme_custom_js' )) ?>
  </script>
	<?php
}

add_action( 'wp_footer', 'roofing_theme_custom_js' );