<?php
/**
 * Configuration for Themify Customizer
 * Created by themify
 * @since 1.0.0
 */

function themify_theme_customizer_definition( $args ) {
	global $themify_customizer;
	$args = array(

		// Accordion Start ---------------------------
		'start_body_acc' => $themify_customizer->accordion_start( __( 'Body', 'themify' ) ),
		
		// Styling key name. Includes any string depicting the styling, for example 'body' and a suffix
		// specifying the type of control, for example '_background'
		'body_background' => array(
			'setting' => array( // Optional. Default setting/value to save.
				'transport' => 'postMessage', // Live update (postMessage) or reload (refresh) the page.
			),
			'control' => array(
				'type'    => 'Themify_Background_Control', // Type of the control to render.
				'label'   => __( 'Body Background', 'themify' ), // Visible name of the control.
				'show_label' => true, // Whether to show the control name or not. Defaults to true.
				'section' => 'themify_options', // Optional section ID where the control will be added.
			),
			'selector' => 'body', // CSS Selector to apply styling.
			'prop' => 'background', // Styling to apply, can be a CSS property or a custom set of properties.
		),

		'body_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Body Font', 'themify' ),
			),
			'selector' => 'body',
			'prop' => 'font',
		),

		'body_font_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => 'body',
			'prop' => 'color',
		),

		'body_link_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
				'label'   => __( 'Body Link', 'themify' ),
			),
			'selector' => 'a',
			'prop' => 'font',
		),

		'body_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => 'a',
			'prop' => 'color',
		),

		'body_link_hover_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
				'label'   => __( 'Body Link Hover', 'themify' ),
			),
			'selector' => 'a:hover',
			'prop' => 'font',
		),

		'body_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => 'a:hover',
			'prop' => 'color',
		),

		'dropcap_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Dropcap Styling', 'themify' ),
				'color_label'   => __( 'Background Color', 'themify' ),
			),
			'selector' => '.drop-cap > *:first-child:first-letter, .single.enable-drop-cap .entry-content > p:first-of-type:first-letter, .enable-drop-cap .loops-wrapper:not(.overlay):not(.polaroid).list-post .entry-content > p:first-of-type:first-letter',
			'prop' => 'background',
		),
		'dropcap_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'color_label'   => __( 'Color', 'themify' ),
			),
			'selector' => '.drop-cap > *:first-child:first-letter, .single.enable-drop-cap .entry-content > p:first-of-type:first-letter, .enable-drop-cap .loops-wrapper:not(.overlay):not(.polaroid).list-post .entry-content > p:first-of-type:first-letter',
			'prop' => 'color',
		),
		
		'end_body_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_accent_acc' => $themify_customizer->accordion_start( __( 'Accent Colors', 'themify' ) ),
		
		// Accent Styles
		'accent_font_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Accent Colors', 'themify' ),
				'color_label'   => __( 'Theme Accent Color', 'themify' ),
			),
            'selector' => ':root',
            'prop' => '--theme_accent'
		),

		'end_accent_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_headings_acc' => $themify_customizer->accordion_start( __( 'Headings', 'themify' ) ),

		'heading1_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Heading 1 Font', 'themify' ),
			),
			'selector' => 'h1',
			'prop' => 'font',
		),
		'heading1_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Heading 1 Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'h1',
			'prop' => 'color',
		),

		'heading2_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Heading 2 Font', 'themify' ),
			),
			'selector' => 'h2',
			'prop' => 'font',
		),
		'heading2_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Heading 2 Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'h2',
			'prop' => 'color',
		),

		'heading3_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Heading 3 Font', 'themify' ),
			),
			'selector' => 'h3',
			'prop' => 'font',
		),
		'heading3_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Heading 3 Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'h3',
			'prop' => 'color',
		),

		'heading4_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Heading 4 Font', 'themify' ),
			),
			'selector' => 'h4',
			'prop' => 'font',
		),
		'heading4_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Heading 4 Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'h4',
			'prop' => 'color',
		),

		'heading5_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Heading 5 Font', 'themify' ),
			),
			'selector' => 'h5',
			'prop' => 'font',
		),
		'heading5_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Heading 5 Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'h5',
			'prop' => 'color',
		),

		'heading6_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Heading 6 Font', 'themify' ),
			),
			'selector' => 'h6',
			'prop' => 'font',
		),
		'heading6_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Heading 6 Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'h6',
			'prop' => 'color',
		),

		'end_headings_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_header_acc' => $themify_customizer->accordion_start( __( 'Header', 'themify' ) ),

		'headerwrap_background' => array(
			'control' => array(
				'type'    => 'Themify_Background_Control',
				'label'   => __( 'Header Wrap', 'themify' ),
			),
			'selector' => '#headerwrap',
			'prop' => 'background',
		),

		'headerwrap_border' => array(
			'control' => array(
				'type'    => 'Themify_Border_Control',
				'label'   => __( 'Header Wrap Border', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#headerwrap',
			'prop' => 'border',
		),

		'headerwrap_padding' => array(
			'control' => array(
				'type'    => 'Themify_Padding_Control',
				'label'   => __( 'Header Wrap Padding', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#headerwrap',
			'prop' => 'padding',
		),

		'headerwrap_margin' => array(
			'control' => array(
				'type'    => 'Themify_Margin_Control',
				'label'   => __( 'Header Wrap Margin', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#headerwrap',
			'prop' => 'margin',
		),

		'header_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Header Font', 'themify' ),
			),
			'selector' => '#header',
			'prop' => 'font',
		),

		'header_font_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Header Font Color', 'themify' ),
				'show_label' => false,
			),
		'selector' => '#header',
			'prop' => 'color',
		),

		'header_link_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
				'label'   => __( 'Header Link', 'themify' ),
			),
			'selector' => '#header a',
			'prop' => 'font',
		),

		'header_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Header Link Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#header a',
			'prop' => 'color',
		),

		'header_link_hover_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
				'label'   => __( 'Header Link Hover', 'themify' ),
			),
			'selector' => '#header a:hover',
			'prop' => 'font',
		),

		'header_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => '#header a:hover',
			'prop' => 'color',
		),

		'end_header_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_sticky_header_acc' => $themify_customizer->accordion_start( __( 'Sticky Header', 'themify' ) ),

		'sticky_headerwrap_background' => array(
			'control' => array(
				'type'    => 'Themify_Background_Control',
				'label'   => __( 'Sticky Header Wrap', 'themify' ),
			),
			'selector' => '#headerwrap.fixed-header, .transparent-header #headerwrap.fixed-header',
			'prop' => 'background',
		),

		'sticky_header_imageselect' => array(
			'control' => array(
				'type'    => 'Themify_Image_Control',
				'label'   => __( 'Sticky Header Logo', 'themify' ),
				'image_options' => array(
					'show_size_fields' => true,
					'image_label' => ''
				)
			),
			'selector' => '#headerwrap.fixed-header #site-logo a',
			'prop' => 'logo',
		),

		'sticky_header_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Sticky Header Font', 'themify' ),
			),
			'selector' => '#headerwrap.fixed-header #header, #headerwrap.fixed-header #site-description, #headerwrap.fixed-header #site-logo',
			'prop' => 'font',
		),

		'sticky_header_font_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Sticky Header Font Color', 'themify' ),
				'show_label' => false,
			),
		'selector' => '#headerwrap.fixed-header #header',
			'prop' => 'color',
		),

		'sticky_header_link_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
				'label'   => __( 'Sticky Header Link', 'themify' ),
			),
			'selector' => '#headerwrap.fixed-header #header a',
			'prop' => 'font',
		),

		'sticky_header_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Sticky Header Link Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'body:not(.mobile_menu_active) #headerwrap.fixed-header #header a, .mobile_menu_active #headerwrap.fixed-header #site-logo a, .mobile_menu_active #headerwrap.fixed-header #menu-icon',
			'prop' => 'color',
		),

		'sticky_header_link_hover_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
				'label'   => __( 'Sticky Header Link Hover', 'themify' ),
			),
			'selector' => '#headerwrap.fixed-header #header a:hover',
			'prop' => 'font',
		),

		'sticky_header_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => 'body:not(.mobile_menu_active) #headerwrap.fixed-header #header a:hover, .mobile_menu_active #headerwrap.fixed-header #site-logo a:hover, .mobile_menu_active #headerwrap.fixed-header #menu-icon:hover',
			'prop' => 'color',
		),

		'end_sticky_header_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_titletagline_acc' => $themify_customizer->accordion_start( __( 'Site Logo &amp; Tagline', 'themify' ) ),

		// This element is not CSS, but markup written by site_logo()
		'site-logo_image' => array(
			'setting' => array(
				'default' => '',
			),
			'control' => array(
				'type'    => 'Themify_Logo_Control',
				'label'   => __( 'Site Logo', 'themify' ),
			),
			'selector' => 'body #site-logo a',
			'prop' => 'logo',
		),

		'site-logo_margin' => array(
			'control' => array(
				'type'    => 'Themify_Margin_Control',
				'label'   => __( 'Site Logo Margin', 'themify' ),
			),
			'selector' => '#site-logo',
			'prop' => 'margin',
		),

		// This element is not CSS, but markup written by site_description()
		'site-tagline' => array(
			'control' => array(
				'type'    => 'Themify_Tagline_Control',
				'label'   => __( 'Site Tagline', 'themify' ),
			),
			'selector' => '#site-description',
			'prop' => 'tagline',
		),

		'site-tagline_margin' => array(
			'control' => array(
				'type'    => 'Themify_Margin_Control',
				'label'   => __( 'Site Tagline Margin', 'themify' ),
			),
			'selector' => '#site-description',
			'prop' => 'margin',
		),

		'end_titletagline_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_nav_acc' => $themify_customizer->accordion_start( __( 'Main Navigation', 'themify' ) ),


		'main_nav_link_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Menu Link', 'themify' ),
			),
			'selector' => '#main-nav a',
			'prop' => 'font',
		),

		'main_nav_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Menu Link Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#main-nav a, body:not(.mobile_menu_active) #main-nav > li > a',
			'prop' => 'color',
		),

		'main_nav_link_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Menu Link Background', 'themify' ),
				'show_label' => false,
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '#main-nav a, body:not(.mobile_menu_active) #main-nav > li > a',
			'prop' => 'background',
		),

		'main_nav_link_border' => array(
			'control' => array(
				'type'    => 'Themify_Border_Control',
				'label'   => __( 'Menu Link Border', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#main-nav a',
			'prop' => 'border',
		),

		'main_nav_link_padding' => array(
			'control' => array(
				'type'    => 'Themify_Padding_Control',
				'label'   => __( 'Menu Link Padding', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#main-nav a',
			'prop' => 'padding',
		),

		'main_nav_link_margin' => array(
			'control' => array(
				'type'    => 'Themify_Margin_Control',
				'label'   => __( 'Menu Link Margin', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#main-nav a',
			'prop' => 'margin',
		),

		'main_nav_link_hover_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Menu Link Hover', 'themify' ),
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '#main-nav a:hover',
			'prop' => 'background',
		),

		'main_nav_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Menu Link Hover Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#main-nav a:hover',
			'prop' => 'color',
		),

		'main_nav_link_active_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Menu Active Link', 'themify' ),
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '#main-nav .current_page_item > a,  #main-nav .current-menu-item > a',
			'prop' => 'background',
		),

		'main_nav_link_active_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Menu Active Link Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#main-nav .current_page_item > a,  #main-nav .current-menu-item > a',
			'prop' => 'color',
		),

		'main_nav_link_active_hover_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Menu Active Link Hover', 'themify' ),
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '#main-nav .current_page_item > a:hover,  #main-nav .current-menu-item > a:hover',
			'prop' => 'background',
		),

		'main_nav_link_active_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Menu Active Link Hover Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '#main-nav .current_page_item > a:hover,  #main-nav .current-menu-item > a:hover',
			'prop' => 'color',
		),

		'end_nav_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_mobile_menu_acc' => $themify_customizer->accordion_start( __( 'Mobile Menu', 'themify' ) ),
		'mobile_menu_panel_background' => array(
			'control' => array(
				'type'    => 'Themify_Background_Control',
				'label'   => __( 'Mobile Menu Panel', 'themify' ),
				'show_label' => true,
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on',
			'prop' => 'background',
		),
		'mobile_menu_panel_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'color_label'   => __( 'Color', 'themify' )
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on',
			'prop' => 'color',
			'global' => true,
		),
		'mobile_menu_panel_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'color_label'   => __( 'Panel Link Color', 'themify' )
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu.sidemenu-on a',
			'prop' => 'color',
			'global' => true,
		),
		'mobile_menu_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Mobile Menu Link', 'themify' )
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav li a',
			'prop' => 'font',
		),
		'mobile_menu_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'color_label'   => __( 'Link Color', 'themify' )
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav a',
			'prop' => 'color',
		),
		'mobile_menu_link_hover_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Mobile Menu Link Hover', 'themify' ),
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav a:hover, .mobile_menu_active #headerwrap .sidemenu-on #main-nav .current-menu-item > a',
			'prop' => 'background',
		),
		'mobile_menu_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Mobile Menu Link Hover Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav a:hover, .mobile_menu_active #headerwrap .sidemenu-on #main-nav .current-menu-item > a',
			'prop' => 'color',
		),

		'mobile_menu_link_active_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Mobile Menu Active Link', 'themify' ),
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav .current_page_item > a,  .mobile_menu_active #headerwrap .sidemenu-on #main-nav .current-menu-item > a',
			'prop' => 'background',
		),

		'mobile_menu_link_active_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Mobile Menu Active Link Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav .current_page_item > a,  .mobile_menu_active #headerwrap .sidemenu-on #main-nav .current-menu-item > a',
			'prop' => 'color',
		),

		'mobile_menu_link_active_hover_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Transparent_Control',
				'label'   => __( 'Mobile Menu Active Link Hover', 'themify' ),
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav .current_page_item > a:hover,  .mobile_menu_active #headerwrap .sidemenu-on #main-nav .current-menu-item > a:hover',
			'prop' => 'background',
		),

		'mobile_menu_link_active_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Mobile Menu Active Link Hover Color', 'themify' ),
				'show_label' => false,
			),
			'selector' => '.mobile_menu_active #headerwrap .sidemenu-on #main-nav .current_page_item > a:hover,  .mobile_menu_active #headerwrap .sidemenu-on #main-nav .current-menu-item > a:hover',
			'prop' => 'color',
		),
		'mobile_menu_icon_background' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Mobile Menu Icon', 'themify' ),
				'color_label'   => __( 'Background Color', 'themify' ),
				'show_label' => true,
			),
			'selector' => '.mobile_menu_active #menu-icon',
			'prop' => 'background',
			'global' => true,
		),
		'mobile_menu_icon_padding' => array(
			'control' => array(
				'type'  => 'Themify_Padding_Control',
			),
			'selector' => '.mobile_menu_active #menu-icon',
			'prop' => 'padding',
		),
		'mobile_menu_icon_height' => array(
			'control' => array(
				'type'  => 'Themify_Height_Control',
			),
			'selector' => '.mobile_menu_active .menu-icon-inner',
			'prop' => 'height',
		),
		'mobile_menu_icon_width' => array(
			'control' => array(
				'type'  => 'Themify_Width_Control',
			),
			'selector' => '.mobile_menu_active .menu-icon-inner',
			'prop' => 'width',
		),
		'mobile_menu_icon_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'color_label'   => __( 'Color', 'themify' )
			),
			'selector' => '.mobile_menu_active #headerwrap #menu-icon',
			'prop' => 'color',
			'global' => true,
		),

		'end_mobile_menu_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_post_acc' => $themify_customizer->accordion_start( __( 'Post', 'themify' ) ),

		// Post Title .post-title

		'post_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Post Title', 'themify' ),
			),
			'selector' => '.post-title, .post-title a',
			'prop' => 'font',
		),

		'post_title_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => '.post-title, .post-title a',
			'prop' => 'color',
		),


		'post_title_hover_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
				'label'   => __( 'Post Title Hover', 'themify' ),
			),
			'selector' => '.post-title a:hover',
			'prop' => 'font',
		),

		'post_title_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => '.post-title a:hover',
			'prop' => 'color',
		),

		'single_post_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Single Post Title', 'themify' ),
			),
			'selector' => '.single-post .post-title',
			'prop' => 'font',
		),

		'grid4_post_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Grid4 Post Title', 'themify' ),
			),
			'selector' => '.loops-wrapper.grid4 .post-title',
			'prop' => 'font',
		),

		'grid3_post_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Grid3 Post Title', 'themify' ),
			),
			'selector' => '.loops-wrapper.grid3 .post-title',
			'prop' => 'font',
		),

		'grid2_post_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Grid2 Post Title', 'themify' ),
			),
			'selector' => '.loops-wrapper.grid2 .post-title',
			'prop' => 'font',
		),

		'grid2_thumb_post_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Grid2 Thumb Post Title', 'themify' ),
			),
			'selector' => '.loops-wrapper.grid2-thumb .post-title',
			'prop' => 'font',
		),

		'list_thumb_post_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'List Thumb Post Title', 'themify' ),
			),
			'selector' => '.loops-wrapper.list-thumb-image .post-title',
			'prop' => 'font',
		),

		'single_post_featured_area' => array(
			'control' => array(
				'type'    => 'Themify_Background_Control',
				'label'   => __( 'Single Post Featured Area', 'themify' ),
			),
			'selector' => '.single.single-post .featured-area, .single-portfolio .featured-area',
			'prop' => 'background',
		),

		'single_post_featured_image_area' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Single Post Featured Image Area', 'themify' ),
				'color_label' => __( 'Background Color', 'themify' ),
			),
			'selector' => '.featured-area, .single .featured-area .post-image + .post-content',
			'prop' => 'background',
		),

		'end_post_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_page_title_acc' => $themify_customizer->accordion_start( __( 'Page Title', 'themify' ) ),

		// Page Title .page-title

		'page_title_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Page Title', 'themify' ),
			),
			'selector' => '.page-category-title-wrap .page-title',
			'prop' => 'color',
		),

		'page_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '.page-category-title-wrap .page-title',
			'prop' => 'font',
		),
		
		'page_sub_heading_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Page Sub Heading', 'themify' ),
			),
			'selector' => '.page-category-title-wrap .category-description',
			'prop' => 'color',
		),

		'page_sub_heading_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '.page-category-title-wrap .category-description',
			'prop' => 'font',
		),
		'end_page_title_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_category_title_acc' => $themify_customizer->accordion_start( __( 'Category Title', 'themify' ) ),

		// Category Title .page-category-title

		'category_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
				'label'   => __( 'Category Title', 'themify' ),
			),
			'selector' => '.category .page-category-title-wrap .page-title',
			'prop' => 'font',
		),

		'category_title_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
			),
			'selector' => '.category .page-category-title-wrap .page-title',
			'prop' => 'color',
		),

		'category_title_background' => array(
			'control' => array(
				'type'    => 'Themify_Background_Control',
			),
			'selector' => '.category .category-title-overlay',
			'prop' => 'background',
		),

		'end_category_title_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_module_title_acc' => $themify_customizer->accordion_start( __( 'Module Title', 'themify' ) ),

		// Module Title .module-title

		'module_title_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Module Title', 'themify' ),
			),
			'selector' => '.module-title',
			'prop' => 'color',
		),

		'module_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '.module-title',
			'prop' => 'font',
		),

		'end_module_title_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_sidebar_acc' => $themify_customizer->accordion_start( __( 'Sidebar', 'themify' ) ),

		// Sidebar Font #sidebar

		'sidebar_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Sidebar Font', 'themify' ),
			),
			'selector' => '#sidebar',
			'prop' => 'color',
		),

		'sidebar_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '#sidebar',
			'prop' => 'font',
		),

		// Sidebar Link #sidebar a

		'sidebar_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Sidebar Link', 'themify' ),
			),
			'selector' => '#sidebar a',
			'prop' => 'color',
		),

		'sidebar_link_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
			),
			'selector' => '#sidebar a',
			'prop' => 'font',
		),

		// Sidebar Link Hover #sidebar a:hover

		'sidebar_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Sidebar Link Hover', 'themify' ),
			),
			'selector' => '#sidebar a:hover',
			'prop' => 'color',
		),

		'sidebar_link_hover_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
			),
			'selector' => '#sidebar a:hover',
			'prop' => 'font',
		),

		// Sidebar Widget Title #sidebar .widgettitle

		'sidebar_widget_title_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Sidebar Widget Title', 'themify' ),
			),
			'selector' => '#sidebar .widgettitle',
			'prop' => 'color',
		),

		'sidebar_widget_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '#sidebar .widgettitle',
			'prop' => 'font',
		),

		'end_sidebar_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

		// Accordion Start ---------------------------
		'start_footer_acc' => $themify_customizer->accordion_start( __( 'Footer', 'themify' ) ),

		// Footer Wrap #footerwrap

		'footerwrap_background' => array(
			'control' => array(
				'type'    => 'Themify_Background_Control',
				'label'   => __( 'Footer Wrap', 'themify' ),
			),
			'selector' => '#footerwrap',
			'prop' => 'background',
		),

		'footerwrap_border' => array(
			'control' => array(
				'type'    => 'Themify_Border_Control',
			),
			'selector' => '#footerwrap',
			'prop' => 'border',
		),

		'footerwrap_padding' => array(
			'control' => array(
				'type'  => 'Themify_Padding_Control',
			),
			'selector' => '#footerwrap',
			'prop' => 'padding',
		),

		'footerwrap_margin' => array(
			'control' => array(
				'type'  => 'Themify_Margin_Control',
			),
			'selector' => '#footerwrap',
			'prop' => 'margin',
		),

		// Footer Font #footer

		'footer_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Footer Font', 'themify' ),
			),
			'selector' => '#footer',
			'prop' => 'color',
		),

		'footer_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '#footer',
			'prop' => 'font',
		),

		// Footer Link #footer a

		'footer_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Footer Link', 'themify' ),
			),
			'selector' => '#footer a',
			'prop' => 'color',
		),

		'footer_link_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
			),
			'selector' => '#footer a',
			'prop' => 'font',
		),

		// Footer Link #footer a:hover

		'footer_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Footer Link Hover', 'themify' ),
			),
			'selector' => '#footer a:hover',
			'prop' => 'color',
		),

		'footer_link_hover_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
			),
			'selector' => '#footer a:hover',
			'prop' => 'font',
		),

		// Footer Widgets Wrap .footer-widgets-wrap

		'footer_widgets_wrap_background' => array(
			'control' => array(
				'type'    => 'Themify_Background_Control',
				'label'   => __( 'Footer Widgets Wrap', 'themify' ),
			),
			'selector' => '.footer-widgets-wrap',
			'prop' => 'background',
		),

		'footer_widgets_wrap_border' => array(
			'control' => array(
				'type'    => 'Themify_Border_Control',
			),
			'selector' => '.footer-widgets-wrap',
			'prop' => 'border',
		),

		'footer_widgets_wrap_padding' => array(
			'control' => array(
				'type'  => 'Themify_Padding_Control',
			),
			'selector' => '.footer-widgets-wrap',
			'prop' => 'padding',
		),

		'footer_widgets_wrap_margin' => array(
			'control' => array(
				'type'  => 'Themify_Margin_Control',
			),
			'selector' => '.footer-widgets-wrap',
			'prop' => 'margin',
		),

		// Footer Widget Font .footer-widgets

		'footer_widget_font_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Footer Widget Font', 'themify' ),
			),
			'selector' => '.footer-widgets',
			'prop' => 'color',
		),

		'footer_widget_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '.footer-widgets',
			'prop' => 'font',
		),

		// Footer Widget Title .footer-widgets .widgettitle

		'footer_widget_title_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Footer Widget Title', 'themify' ),
			),
			'selector' => '.footer-widgets .widgettitle',
			'prop' => 'color',
		),

		'footer_widget_title_font' => array(
			'control' => array(
				'type'    => 'Themify_Font_Control',
			),
			'selector' => '.footer-widgets .widgettitle',
			'prop' => 'font',
		),

		// Footer Widget Link #footer a

		'footer_widget_link_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Footer Widget Link', 'themify' ),
			),
			'selector' => '.footer-widgets a',
			'prop' => 'color',
		),

		'footer_widget_link_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
			),
			'selector' => '.footer-widgets a',
			'prop' => 'font',
		),

		// Footer Widget Link #footer a:hover

		'footer_widget_link_hover_color' => array(
			'control' => array(
				'type'    => 'Themify_Color_Control',
				'label'   => __( 'Footer Widget Link Hover', 'themify' ),
			),
			'selector' => '.footer-widgets a:hover',
			'prop' => 'color',
		),

		'footer_widget_link_hover_font' => array(
			'control' => array(
				'type'    => 'Themify_Text_Decoration_Control',
			),
			'selector' => '.footer-widgets a:hover',
			'prop' => 'font',
		),

		'end_footer_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------*/

		// Accordion Start ---------------------------
		'start_customcss_acc' => $themify_customizer->accordion_start( __( 'Custom CSS', 'themify' ) ),

		// This element is not CSS, but markup written by themify_custom_css()
		'customcss' => array(
			'control' => array(
				'type'    => 'Themify_CustomCSS_Control',
				'label'   => __( 'Custom CSS', 'themify' ),
				'show_label' => false,
			),
			'selector' => 'customcss',
			'prop' => 'customcss',
		),

		'end_customcss_acc' => $themify_customizer->accordion_end(),
		// Accordion End   ---------------------------

	);
	return $args;
}
add_filter( 'themify_customizer_settings', 'themify_theme_customizer_definition' );