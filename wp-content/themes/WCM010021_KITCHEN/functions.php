<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 * @author         TemplateMela
 * @version        Release: 1.0
 */
/**  Set Default options : Theme Settings  */

function tm_set_default_options_1()
{ 
	/*  General Settings  */
	add_option("tmoption_logo_image", get_stylesheet_directory_uri()."/images/megnor/logo.png"); // set logo image
	add_option("tmoption_bkg_color","FAF8F0"); // background color
	add_option("tmoption_button_color","FFFFFF"); // button color
	add_option("tmoption_button_hover_color","424242"); // button hover color	
	add_option("tmoption_bodyfont","Roboto"); // button font
			
	/*  Top Bar Settings  */	
	
	add_option("tmoption_topbar_text_color","FFFFFF"); // topbar_text_color
	add_option("tmoption_topbar_link_color","FFFFFF"); // topbar_link_color
	add_option("tmoption_topbar_link_hover_color","FFCF30"); // topbar_link_hover_color
	add_option("tmoption_top_menu_bg_color","007FBA"); // Top menu background color
	add_option("tmoption_topbar_bkg_color","007FBA"); // Top menu background color
	add_option("tmoption_top_menu_text_color","ffffff"); // Top menu text color
	add_option("tmoption_top_menu_texthover_color","FFCF30"); // Top menu text hover color
	
	add_option("tmoption_show_topbar_contact","no"); // show contact information
	add_option("tmoption_custom_banner","yes"); // Show Custom Banner
	/*  Header Settings  */	
	add_option("tmoption_header_bkg_color","0094CA"); // Top menu background color
	
	
	/*  Content Settings  */
	add_option("tmoption_h1color",'000000'); // h1 family font color
	add_option("tmoption_h1font",'Roboto'); // h1 family google font	 
	add_option("tmoption_h2color",'000000'); // h2 family font color
	add_option("tmoption_h2font",'Roboto'); // h2 family google font	
	add_option("tmoption_h3color",'000000'); // h3 family font color
	add_option("tmoption_h3font",'Roboto'); // h3 family google font	
	add_option("tmoption_h4color",'000000'); // h4 family font color	
	add_option("tmoption_h3font",'Roboto'); // h3 family google font
	add_option("tmoption_h5color",'000000'); // h5 family font color
	add_option("tmoption_h3font",'Roboto'); // h3 family google font
	add_option("tmoption_h6color",'000000'); // h6 family font color
	add_option("tmoption_link_color",'7C7C7C');
	add_option("tmoption_hoverlink_color",'424242');		
		
	/* Shop page settings */	
	add_option("tmoption_shop_items","12"); 
	add_option("tmoption_shop_items_per_row","4"); 
	 	
	/*  Footer Settings  */		
	add_option("tmoption_footerbkg_color","444444"); // footer background color	
	add_option("tmoption_footerlink_color","B9B9B9"); // footer link text color
	add_option("tmoption_footerhoverlink_color","FFCF30"); // footer link HOVER text color
}
add_action('init', 'tm_set_default_options_1'); 

function templatemela_register_sidebars1() {
	register_sidebar( array(
		'name' => __( 'Brand Logo Widget Area', 'templatemela' ),
		'id' => 'brandlogo',
		'description' => __( 'The area next to home page', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
}
add_action( 'widgets_init', 'templatemela_register_sidebars1' );

function templatemela_load_scripts1() {		
	wp_enqueue_script( 'jquery_custom', get_stylesheet_directory_uri() . '/js/megnor/custom.js', array(), '', false);		 	
 }
add_action( 'wp_enqueue_scripts', 'templatemela_load_scripts1' );

// Adds custom image height X width for small thumbnails
add_image_size( 'blog-posts-list', 920, 330, true );
?>