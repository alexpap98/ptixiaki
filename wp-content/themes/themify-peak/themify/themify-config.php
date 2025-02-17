<?php
/***************************************************************************
 *
 * 	----------------------------------------------------------------------
 * 							DO NOT EDIT THIS FILE
 *	----------------------------------------------------------------------
 *
 * 						Copyright (C) Themify
 *
 *	----------------------------------------------------------------------
 *
 ***************************************************************************/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 

/* 	Themify Framework Version
****************************************************************************/
define( 'THEMIFY_VERSION', '7.0.8' ); 

/**
 * Theme and Themify Framework Path and URI
 * @since 1.2.2 
 */
defined( 'THEME_DIR' ) || define( 'THEME_DIR', get_template_directory() );
defined( 'THEME_URI' ) || define( 'THEME_URI', get_template_directory_uri() );
defined( 'THEMIFY_DIR' ) || define( 'THEMIFY_DIR', THEME_DIR . '/themify' );
defined( 'THEMIFY_URI' ) || define( 'THEMIFY_URI', THEME_URI . '/themify' );

defined( 'THEMIFY_METABOX_URI' ) || define( 'THEMIFY_METABOX_URI', THEMIFY_URI . '/themify-metabox/' );
defined( 'THEMIFY_METABOX_DIR' ) || define( 'THEMIFY_METABOX_DIR', THEMIFY_DIR . '/themify-metabox/' );

function themify_config_init() {

	/* 	Global Vars
 	***************************************************************************/
	global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 1165;
	}

	/* 	Woocommerce
	 ***************************************************************************/
	if( themify_is_woocommerce_active() ) {
	    add_theme_support('woocommerce');
	    if(!themify_check( 'setting-disable_product_image_zoom',true)){
		    add_theme_support( 'wc-product-gallery-zoom' );
	    }
	    add_theme_support( 'wc-product-gallery-lightbox' );
	    add_theme_support( 'wc-product-gallery-slider' );
	}

	add_theme_support( 'title-tag' );

        /**
         * Add support for feeds on the site
         */
        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'frontend-page-options' );

	require_once ABSPATH . 'wp-admin/includes/plugin.php';
	$plugins = array(
		'woocommerce' => 'woocommerce/woocommerce.php',
		'learndash' => 'sfwd-lms/sfwd_lms.php',
		'sensei' => 'sensei-lms/sensei-lms.php',
		'woothemes-sensei' => 'woothemes-sensei/woothemes-sensei.php',
		'wpmlstrings' => 'wpml-string-translation/plugin.php',
		'cartflows' => 'cartflows/cartflows.php',
		'wpviews' => 'wp-views/wp-views.php'
	);
	foreach ( $plugins as $plugin => $active_check ) {
		if ( is_plugin_active( $active_check ) ) {
			$plugin = 'woothemes-sensei'===$plugin?'sensei':$plugin;
			require_once THEMIFY_DIR . '/plugin-compat/' . $plugin . '.php';
			$classname = "Themify_Compat_{$plugin}";
			$classname::init();
		}
	}
}
add_action( 'after_setup_theme', 'themify_config_init' );

function themify_theme_first_run() {
        delete_option('themify_clear_legacy');//since 5.5.2, will be removed after a few releases
        flush_rewrite_rules();
	themify_migrate_settings_name();
	$data = themify_get_data();
	if ( empty( $data ) ) {
		$data = apply_filters( 'themify_default_settings', array() );
		themify_set_data( $data );
	}

	update_option( 'theme_switched', false ); // flag to disable "after_switch_theme" hook, stops the infinite loop

	wp_redirect( admin_url() . 'admin.php?page=themify&firsttime=true' );
	exit;
}
add_action( 'after_switch_theme', 'themify_theme_first_run', 9999 );

///////////////////////////////////////
// Load theme languages
///////////////////////////////////////

load_theme_textdomain( 'themify', THEME_DIR.'/languages' );


/**
 * Load Filesystem Class
 * @since 2.5.8
 */
require_once THEMIFY_DIR . '/class-themify-filesystem.php' ;
require_once THEMIFY_DIR .'/class-themify-storage.php';


require_once THEMIFY_DIR . '/themify-icon-picker/themify-icon-font.php';

if ( is_file( THEMIFY_DIR . '/class-themify-get-image-size.php' ) ) {
	require_once THEMIFY_DIR . '/class-themify-get-image-size.php';
}

require_once THEMIFY_DIR . '/img.php';


/**
 * Load Cache
 */
require_once THEMIFY_DIR . '/cache/class-themify-cache.php';

/**
 * Load Page Builder
 * @since 1.1.3
 */
require_once THEMIFY_DIR . '/themify-builder/themify-builder.php';

/**
 * Load Themify Role Access Control
 * @since 2.6.2
 */
require_once THEMIFY_DIR . '/class-themify-access-role.php';

/**
 * Load Enqueue Class
 * @since 2.5.8
 */
require_once THEMIFY_DIR . '/class-themify-enqueue.php';

require_once THEMIFY_DIR . '/class-themify-custom-fonts.php';

/**
 * Load Customizer
 * @since 1.8.2
 */
require_once THEMIFY_DIR . '/customizer/class-themify-customizer.php';

/**
 * Load Schema.org Microdata
 * @since 2.6.5
 */
if ( 'on' !== themify_get( 'setting-disable_microdata',false,true ) ) {
    require_once THEMIFY_DIR . '/themify-microdata.php';
}

require_once THEMIFY_DIR . '/themify-wp-filters.php';
require_once THEMIFY_DIR . '/themify-template-tags.php';
require_once THEMIFY_DIR . '/class-themify-menu-icons.php';

if ( is_admin() ) {
    require_once THEMIFY_DIR . '/themify-admin.php';
    require_once THEME_DIR.'/admin/admin.php';
    require_once THEMIFY_DIR . '/themify-status.php';
    require_once THEMIFY_DIR . '/class-themify-child-theme-generator.php';
} 
else {
    require_once THEMIFY_DIR . '/class-themify-custom-404.php';
}
require_once THEMIFY_DIR . '/class-themify-maintenance-mode.php';

/**
 * Load Themify Hooks
 * @since 1.2.2
 */
require_once THEMIFY_DIR . '/themify-hooks.php';
require_once THEMIFY_DIR . '/class-hook-contents.php';
require_once THEMIFY_METABOX_DIR . '/themify-metabox.php';
require_once THEMIFY_DIR . '/google-fonts/functions.php';


/**
 * Change setting name where theme settings are stored.
 * Runs after updater succeeded.
 * @since 1.7.6
 */
function themify_migrate_settings_name() {
	$flag = 'themify_migrate_settings_name';
	$change = get_option( $flag );
	if ( empty( $change )) {
		if ( $themify_data = get_option( wp_get_theme()->display('Name') . '_themify_data' ) ) {
			themify_set_data( $themify_data );
		}
		update_option( $flag, true,false );
	}
}


/**
 * Refresh permalinks to avoid 404 on custom post type fetching.
 * @since 1.9.3
 */
function themify_flush_rewrite_rules_after_manual_update() {
	$flag = 'themify_flush_rewrite_rules_after_manual_update';
	$change = get_option( $flag );
	if (  empty( $change ) ) {
		flush_rewrite_rules();
		update_option( $flag, true );
	}
}
add_action( 'init', 'themify_flush_rewrite_rules_after_manual_update', 99 );

/**
 * After a Builder layout is loaded, adjust some page settings for better page display.
 *
 * @since 2.8.9
 */
function themify_adjust_page_settings_for_layouts( $args ) {
	if( 'custom' !== $args['layout_group'] ){
		$post_id = $args['current_builder_id'];
		$post = get_post( $post_id );
		if( $post->post_type === 'page' ) {
			update_post_meta( $post_id, 'page_layout', 'sidebar-none' );
		} else if ( $post->post_type === 'post' ) {
			update_post_meta( $post_id, 'layout', 'sidebar-none' );
		} else {
			update_post_meta( $post_id, "custom_post_{$post->post_type}_single", 'sidebar-none' );
		}
		update_post_meta( $post_id, 'content_width', 'full_width' );
		update_post_meta( $post_id, 'hide_post_title', 'yes' );
	}
}
add_action( 'themify_builder_layout_loaded', 'themify_adjust_page_settings_for_layouts' );
add_action( 'themify_builder_layout_appended', 'themify_adjust_page_settings_for_layouts' );

/**
 * Load themeforest-functions.php file if available
 * Additional functions for the theme from ThemeForest store.
 */
if( is_file( trailingslashit( get_template_directory() ) . 'themeforest-functions.php' ) ) {
	require_once  trailingslashit( get_template_directory() ) . 'themeforest-functions.php';
}

/**
 * Setup procedure to load theme features packed in Themify framework
 *
 * @since 3.2.0
 */
function themify_load_theme_features() {
	/* load megamenu feature */
	if ( current_theme_supports( 'themify-mega-menu' ) ) {
		require_once THEMIFY_DIR . '/megamenu/class-mega-menu.php';
	}

	if ( current_theme_supports( 'themify-toggle-dropdown' ) ) {
		require_once THEMIFY_DIR . '/class-themify-menu-toggle-dropdown.php';
	}

	/* check if Google fonts are disabled */
	if ( ! defined( 'THEMIFY_GOOGLE_FONTS' ) && themify_get( 'setting-webfonts_list',false,true ) === 'disabled' ) {
		define( 'THEMIFY_GOOGLE_FONTS', false );
	}
}
add_action( 'after_setup_theme', 'themify_load_theme_features', 11 );