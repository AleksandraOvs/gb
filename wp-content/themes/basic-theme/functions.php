<?php
/**
 * basic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package basic
 */

 require get_stylesheet_directory() . '/inc/carbon-fields.php';

//show current template for dev

	add_filter( 'template_include', 'var_template_include', 1000 );
  function var_template_include( $t ){
	  $GLOBALS['current_theme_template'] = basename($t);
	  return $t;
  
  
  function get_current_template( $echo = false ) {
	  if( !isset( $GLOBALS['current_theme_template'] ) )
		  return false;
	  if( $echo )
		  echo $GLOBALS['current_theme_template'];
	  else
		  return $GLOBALS['current_theme_template'];
  }
}

 
  if ( ! function_exists( 'basic_setup' ) ) :

	function basic_setup() {

		load_theme_textdomain( 'basic', get_template_directory() . '/languages' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-header' => esc_html__( 'Верхнее меню', 'basic' ),
				'menu-mobile' => esc_html__( 'Мобильное меню', 'basic' ),
				'menu-footer' => esc_html__( 'Меню в футере', 'basic' ),
			)
		);

		// wp_nav_menu( array( 
		// 	'theme_location' => 'menu-header',
		// 	'walker' => new Walker_Nav_Menu
		// ) );
	
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'basic_setup' );

function site_scripts(){
	wp_deregister_script('jquery');
    wp_enqueue_script ('jquery', get_stylesheet_directory_uri() . '/inc/jquery-3.7.1.js', array(), null, true);
    wp_enqueue_script ('js-accordion-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), null, true);
	wp_enqueue_script ('js-tabs-ui', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), null, true);
	wp_enqueue_script ('fancy_scripts', get_stylesheet_directory_uri() . '/inc/fancybox/jquery.fancybox.min.js', array('jquery'), null, true);
   // wp_enqueue_script ('js-accordion', get_stylesheet_directory_uri() . '/js/accordion.js', array('jquery'), null, true);
    wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    wp_enqueue_style ('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('slider-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js',array('jquery'), null, true);
    wp_enqueue_script('slick-scripts', get_stylesheet_directory_uri() . '/inc/slick/slick.min.js',array('jquery'), null, true);
	wp_enqueue_style ('fancy_styles', get_stylesheet_directory_uri() . '/inc/fancybox/jquery.fancybox.min.css', array(), time());
	wp_enqueue_style ('slick-styles', get_stylesheet_directory_uri() . '/inc/slick/slick.css', array(), time());
	wp_enqueue_script ('swiper-scripts', get_stylesheet_directory_uri() . '/js/slider-scripts.js',array('jquery'), null, true);
	wp_style_add_data( 'theme-style', 'rtl', 'replace' );
	add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
	
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/css/style-hero2.css', array(), time() );
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/css/fonts.css', array(), time() );
	wp_enqueue_style( 'basic-styles', get_stylesheet_directory_uri() . '/css/style.css', array(), time() );
	wp_enqueue_style( 'elementor-add-styles', get_stylesheet_directory_uri() . '/css/elementor-styles.css', array(), time() );
    wp_enqueue_style( 'header-styles', get_stylesheet_directory_uri() . '/css/header-style.css', array(), time() );
	
	wp_enqueue_style( 'dashicons' );

	
    
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style( 'my_wp_admin', get_template_directory_uri() .'/css/wp-admin.css' );
  }, 99 );


  add_action( 'widgets_init', 'register_widgets' );
function register_widgets(){
	register_sidebar( array(
		'name'          => 'Сайдбар для мобильного меню',
		'id'            => "mobmenu-widget",
		'description'   => 'Сайдбар для мобильного меню',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
	) );

    register_sidebar( array(
		'name'          => 'Сайдбар на странице',
		'id'            => "page-sidebar1",
		'description'   => 'Сайдбар для страницы',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => 'Сайдбар в футере-1',
		'id'            => "footer-sidebar1",
		'description'   => 'Сайдбар для футера',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => 'Сайдбар в футере-2',
		'id'            => "footer-sidebar2",
		'description'   => 'Сайдбар для футера',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
	) );
}

//displayed logo

function my_customize_register( $wp_customize ) {
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        //'height' => '48',
        'width' => '280',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(

        'section' => 'title_tagline',
        'label' => 'Логотип Header'

    )));
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип Footer'
    )));
}
add_action( 'customize_register', 'my_customize_register' );

