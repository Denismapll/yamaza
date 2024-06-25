<?php

/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if (!isset($content_width)) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
//require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
//require_once get_template_directory() . '/core/classes/class-term-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if (!function_exists('odin_setup_features')) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features()
	{

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain('odin', get_template_directory() . '/languages');

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __('Main Menu', 'odin')
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support('post-thumbnails');

		/**
		 * Add feed link.
		 */
		add_theme_support('automatic-feed-links');

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support('custom-header', $default);

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support('custom-background', $defaults);

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style('assets/css/editor-style.css');

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option('posts_per_page')
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support('custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		));
	}
}

add_action('after_setup_theme', 'odin_setup_features');

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Main Sidebar', 'odin'),
			'id' => 'main-sidebar',
			'description' => __('Site Main Sidebar', 'odin'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action('widgets_init', 'odin_widgets_init');

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite()
{
	flush_rewrite_rules();
}

add_action('after_switch_theme', 'odin_flush_rewrite');

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts()
{
	$template_url = get_template_directory_uri();

	// Grunt watch livereload in the browser.
	// wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	wp_enqueue_script('bundle.min', get_template_directory_uri() . '/assets/js/bundle.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery.appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery.fancybox.min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('parallaxie.min', get_template_directory_uri() . '/assets/js/parallaxie.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery.cubeportfolio.min', get_template_directory_uri() . '/assets/js/jquery.cubeportfolio.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('TweenMax.min', get_template_directory_uri() . '/assets/js/TweenMax.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('circle-progress.min', get_template_directory_uri() . '/assets/js/circle-progress.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'odin_enqueue_scripts', 1);

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if (!function_exists('is_woocommerce_activated')) {
	function is_woocommerce_activated()
	{
		return class_exists('woocommerce') ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if (is_woocommerce_activated()) {
	add_theme_support('woocommerce');
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}


function odin_enqueue_styles()
{
	// Adiciona o estilo principal do tema
	wp_enqueue_style('odin-style', get_stylesheet_uri());

	// Adiciona o estilo personalizado
	wp_enqueue_style('bundle.min', get_template_directory_uri() . '/assets/css/bundle.min.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('line-awesome.min', get_template_directory_uri() . '/assets/css/line-awesome.min.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('revolution-settings.min', get_template_directory_uri() . '/assets/css/revolution-settings.min.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('cubeportfolio.min', get_template_directory_uri() . '/assets/css/cubeportfolio.min.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('LineIcons.min', get_template_directory_uri() . '/assets/css/LineIcons.min.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('wow', get_template_directory_uri() . '/assets/css/wow.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array('odin-style'), '1.0.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array('odin-style'), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'odin_enqueue_styles');



function metabox()
{
	// SEC 1
	$metabox_home = new Odin_Metabox(
		'videos', // Slug/ID of the Metabox (Required)
		'Primeira parte', // Metabox name (Required)
		'page', // Slug of Post Type (Optional)
		'normal', // Context (options: normal, advanced, or side) (Optional)
		'high', // Priority (options: high, core, default or low) (Optional)
		'page-home.php'
	);

	$metabox_home->set_fields(
		array(
			/**
			 * Default input examples.
			 */
			array(
				'id'          => 'header1-title-s1', // Obrigatório
				'label'       => __('Titulo box 1 - Secção 1', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'header2-title-s1', // Obrigatório
				'label'       => __('Titulo box 2 - Secção 1', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description2-s1', // Obrigatório
				'label'       => __('Descrição 2 - Secção 1', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),

			array(
				'id'          => 'header3-title-s1', // Obrigatório
				'label'       => __('Titulo box 3 - Secção 1', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description3-s1', // Obrigatório
				'label'       => __('Descrição 2 - Secção 1', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),            // Separator.
			array(
				'id'   => 'separator1', // Obrigatório
				'type' => 'separator' // Obrigatório
			)
		)
	);
	// SEC 2
	$metabox_home = new Odin_Metabox(
		'parte2', // Slug/ID of the Metabox (Required)
		'Segunda parte', // Metabox name (Required)
		'page', // Slug of Post Type (Optional)
		'normal', // Context (options: normal, advanced, or side) (Optional)
		'high', // Priority (options: high, core, default or low) (Optional)
		'page-home.php'
	);

	$metabox_home->set_fields(
		array(
			// Segunda Secção Home - 2

			array(
				'id'          => 'titulo-inst-s2', // Obrigatório
				'label'       => __('Titulo Institucional - Secção 2', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description-inst-s2', // Obrigatório
				'label'       => __('Descrição Institucional - Secção 2', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'titulo-inst2-s2', // Obrigatório
				'label'       => __('Titulo Institucional 2 - Secção 2', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'titulo-inst3-s2', // Obrigatório
				'label'       => __('Titulo Institucional 3 - Secção 2', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'titulo-inst4-s2', // Obrigatório
				'label'       => __('Titulo Institucional 4 - Secção 2', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'botao-inst-s2', // Obrigatório
				'label'       => __('Botão institucional - Secção 2', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'   => 'separator1', // Obrigatório
				'type' => 'separator' // Obrigatório
			),
		)
	);
	// SEC 3
	$metabox_home = new Odin_Metabox(
		'parte3', // Slug/ID of the Metabox (Required)
		'Terceira parte', // Metabox name (Required)
		'page', // Slug of Post Type (Optional)
		'normal', // Context (options: normal, advanced, or side) (Optional)
		'high', // Priority (options: high, core, default or low) (Optional)
		'page-home.php'
	);

	$metabox_home->set_fields(
		array(
			// Terceira Secção - 3

			array(
				'id'          => 'header-title-institucional-s3', // Obrigatório
				'label'       => __('Titulo Header - Secção 3', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'title-institucional-s3', // Obrigatório
				'label'       => __('Titulo Institucional - Secção 3', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description-institucional-s3', // Obrigatório
				'label'       => __('Descrição - Secção 3', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'num-inst1-s3', // Required
				'label'       => __('Valor 1 - Secção 3', 'odin'), // Required
				'type'        => 'input', // Required
				// 'default'  => 'Default text', // Optional
				// 'description' => __( 'HTML5 number field description', 'odin' ), // Optional
				'attributes'  => array( // Optional (html input elements)
					'type' => 'number',
				)
			),
			array(
				'id'          => 'num-inst2-s3', // Required
				'label'       => __('Valor 2 - Secção 3', 'odin'), // Required
				'type'        => 'input', // Required
				// 'default'  => 'Default text', // Optional
				// 'description' => __( 'HTML5 number field description', 'odin' ), // Optional
				'attributes'  => array( // Optional (html input elements)
					'type' => 'number',
				)
			),
			array(
				'id'          => 'num-inst3-s3', // Required
				'label'       => __('Valor 3 - Secção 3', 'odin'), // Required
				'type'        => 'input', // Required
				// 'default'  => 'Default text', // Optional
				// 'description' => __( 'HTML5 number field description', 'odin' ), // Optional
				'attributes'  => array( // Optional (html input elements)
					'type' => 'number',
				)
			),
			array(
				'id'   => 'separator1', // Obrigatório
				'type' => 'separator' // Obrigatório
			),
		)
	);
	// SEC 4
	$metabox_home = new Odin_Metabox(
		'parte4', // Slug/ID of the Metabox (Required)
		'Quarta parte', // Metabox name (Required)
		'page', // Slug of Post Type (Optional)
		'normal', // Context (options: normal, advanced, or side) (Optional)
		'high', // Priority (options: high, core, default or low) (Optional)
		'page-home.php'
	);

	$metabox_home->set_fields(
		array(
			// Quarta Secção - 4

			array(
				'id'          => 'header-title-s4', // Obrigatório
				'label'       => __('Titulo - Secção 4', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description-s4', // Obrigatório
				'label'       => __('Descrição - Secção 4', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
		)
	);
	// SEC 5
	$metabox_home = new Odin_Metabox(
		'parte5', // Slug/ID of the Metabox (Required)
		'Quinta parte', // Metabox name (Required)
		'page', // Slug of Post Type (Optional)
		'normal', // Context (options: normal, advanced, or side) (Optional)
		'high', // Priority (options: high, core, default or low) (Optional)
		'page-home.php'
	);

	$metabox_home->set_fields(
		array(
			// Quinta Secção - 5

			array(
				'id'          => 'header-title-s5', // Obrigatório
				'label'       => __('Titulo - Secção 5', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description-s5', // Obrigatório
				'label'       => __('Descrição - Secção 5', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'   => 'separator1', // Obrigatório
				'type' => 'separator' // Obrigatório
			),
		)
	);

	// SEC 6

	$metabox_home = new Odin_Metabox(
		'parte6', // Slug/ID of the Metabox (Required)
		'Sexta parte', // Metabox name (Required)
		'page', // Slug of Post Type (Optional)
		'normal', // Context (options: normal, advanced, or side) (Optional)
		'high', // Priority (options: high, core, default or low) (Optional)
		'page-home.php'
	);

	$metabox_home->set_fields(
		array(
			array(
				'id'          => 'header-title-s6', // Obrigatório
				'label'       => __('Titulo 1 - Secção 6', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),
			),
			array(
				'id'          => 'description-s6', // Obrigatório
				'label'       => __('Descrição 1 - Secção 6', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),
			),
		)
	);

	// SEC 7

	$metabox_home = new Odin_Metabox(
		'parte7', // Slug/ID of the Metabox (Required)
		'Sétima parte', // Metabox name (Required)
		'page', // Slug of Post Type (Optional)
		'normal', // Context (options: normal, advanced, or side) (Optional)
		'high', // Priority (options: high, core, default or low) (Optional)
		'page-home.php'
	);

	$metabox_home->set_fields(
		array(
			array(
				'id'          => 'header1-title-s7', // Obrigatório
				'label'       => __('Titulo 1 - Secção 7', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description1-s7', // Obrigatório
				'label'       => __('Descrição 1 - Secção 7', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'image1-s7', // Obrigatório
				'label'       => __('Imagem 1 - Secção 7', 'odin'), // Obrigatório
				'type'        => 'image', // Obrigatório
				'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
				'description' => __('Imagem 402 x 230', 'odin'), // Opcional


			),
			array(
				'id'   => 'separator1', // Obrigatório
				'type' => 'separator' // Obrigatório
			),

			array(
				'id'          => 'header2-title-s7', // Obrigatório
				'label'       => __('Titulo 2 - Secção 7', 'odin'), // Obrigatório
				'type'        => 'text', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'description2-s7', // Obrigatório
				'label'       => __('Descrição 2 - Secção 7', 'odin'), // Obrigatório
				'type'        => 'textarea', // Obrigatório
				'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					'placeholder' => __('Some text here!')
				),


			),
			array(
				'id'          => 'image2-s7', // Obrigatório
				'label'       => __('Imagem 2 - Secção 7', 'odin'), // Obrigatório
				'type'        => 'image', // Obrigatório
				'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
				'description' => __('Imagem 402 x 230', 'odin'), // Opcional


			),
		)
	);
}

add_action('init', 'metabox', 1);


// CRIAÇAO DO POST TYPE E CRIACAO DAS METABOX - VALORES


$metabox_home = new Odin_Metabox(
	'valores-box', // Slug/ID of the Metabox (Required)
	'Box Valores', // Metabox name (Required)
	'Valores', // Slug of Post Type (Optional)
	'normal', // Context (options: normal, advanced, or side) (Optional)
	'high', // Priority (options: high, core, default or low) (Optional)
);

$metabox_home->set_fields(
	array(
		array(
			'id'          => 'titulo-valor', // Obrigatório
			'label'       => __('Nome promoção', 'odin'), // Obrigatório
			'type'        => 'text', // Obrigatório
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Titulo da promoção')
			),
			// 'default'     => 'Default text', // Opcional
			// 'description' => __('Descrition Example', 'odin'), // Opcional
		),
		array(
			'id'          => 'valor', // Required
			'label'       => __('Titulo Valor', 'odin'), // Required
			'type'        => 'text', // Required
			// 'default'  => 'Default text', // Optional
			// 'description' => __( 'HTML5 number field description', 'odin' ), // Optional
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Valor da promoção')
			),
		),
		array(
			'id'          => 'descricao-valor', // Obrigatório
			'label'       => __('Descrição Valor', 'odin'), // Obrigatório
			'type'        => 'editor', // Obrigatório
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Descrição dos valores')
			),
			// 'default'     => 'Default text', // Opcional
			// 'description' => __('Descrition Example', 'odin'), // Opcional
		)
	)
);

$valores = new Odin_Post_Type(
	'Valores', // Nome (Singular) do Post Type.
	'Valores' // Slug do Post Type.
);

$valores->set_labels(
	array(
		'menu_name' => __('Valores', 'odin')
	)
);

$valores->set_arguments(
	array(
		'supports' => array('title')
	)
);

// CRIAÇAO DO POST TYPE E CRIACAO DAS METABOX - BENEFICIOS

$metabox_home = new Odin_Metabox(
	'beneficios-box', // Slug/ID of the Metabox (Required)
	'Box Beneficios', // Metabox name (Required)
	'beneficios', // Slug of Post Type (Optional)
	'normal', // Context (options: normal, advanced, or side) (Optional)
	'high', // Priority (options: high, core, default or low) (Optional)
);

$metabox_home->set_fields(
	array(
		array(
			'id'          => 'benef-img', // Obrigatório
			'label'       => __('Imagem ', 'odin'), // Obrigatório
			'type'        => 'image', // Obrigatório
			'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)

		),
		array(
			'id'          => 'benef-title', // Obrigatório
			'label'       => __('Titulo ', 'odin'), // Obrigatório
			'type'        => 'text', // Obrigatório
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Some text here!')
			),
		),
		array(
			'id'          => 'benef-desc', // Obrigatório
			'label'       => __('Descrição ', 'odin'), // Obrigatório
			'type'        => 'textarea', // Obrigatório
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Some text here!')
			),
		),
	)
);

$beneficios = new Odin_Post_Type(
	'beneficios', // Nome (Singular) do Post Type.
	'beneficios' // Slug do Post Type.
);

$beneficios->set_labels(
	array(
		'menu_name' => __('Beneficios', 'odin')
	)
);

$beneficios->set_arguments(
	array(
		'supports' => array('title')
	)
);


// CRIAÇAO DO POST TYPE E CRIACAO DAS METABOX - BANNERS

$metabox_home = new Odin_Metabox(
	'banners', // Slug/ID of the Metabox (Required)
	'Banners', // Metabox name (Required)
	'banners', // Slug of Post Type (Optional)
	'normal', // Context (options: normal, advanced, or side) (Optional)
	'high', // Priority (options: high, core, default or low) (Optional)
);

$metabox_home->set_fields(
	array(
		array(
			'id'          => 'banner-img', // Obrigatório
			'label'       => __('Imagem Banner', 'odin'), // Obrigatório
			'type'        => 'image', // Obrigatório
			'default'     => '', // Opcional (deve ser o id de uma Banner em mídia)
			'description' => __('Banner de 1140 x 650', 'odin'), // Opcional
		),
		array(
			'id'          => 'banner-cliente', // Obrigatório
			'label'       => __('Nome do Cliente', 'odin'), // Obrigatório
			'type'        => 'text', // Obrigatório
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Some text here!')
			),
		),

		array(
			'id'          => 'banner-data', // Obrigatório
			'label'       => __('Data do trabalho', 'odin'), // Obrigatório
			'type'        => 'text', // Obrigatório
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Some text here!')
			),


		),
		array(
			'id'          => 'banner-servico', // Obrigatório
			'label'       => __('Serviço Feito', 'odin'), // Obrigatório
			'type'        => 'text', // Obrigatório
			'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
				'placeholder' => __('Some text here!')
			),


		),
	),
);

$banners = new Odin_Post_Type(
	'banners', // Nome (Singular) do Post Type.
	'banners' // Slug do Post Type.
);

$banners->set_labels(
	array(
		'menu_name' => __('Banners', 'odin')
	)
);

$banners->set_arguments(
	array(
		'supports' => array('title')
	)
);
