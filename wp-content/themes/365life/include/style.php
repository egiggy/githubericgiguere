<?php 

function wp_sdt_enqueue_styles()
{		
global $shortname;	

	if(!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php' && $GLOBALS['pagenow'] != 'wp-admin/index.php'){
		
        wp_register_style( 'prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css',false,'1.0' );
        wp_enqueue_style( 'prettyPhoto' );
        
        wp_register_style( 'superfish', get_template_directory_uri().'/css/superfish.css',false,'1.0' );
        wp_enqueue_style( 'superfish' );
        
        wp_register_style( 'tipsy', get_template_directory_uri().'/css/tipsy.css',false,'1.0' );
        wp_enqueue_style( 'tipsy' );
        
        wp_register_style( 'supersized', get_template_directory_uri().'/css/supersized.css',false,'1.0' );
        wp_enqueue_style( 'supersized' );
        
        wp_register_style( 'custom-nivo', get_template_directory_uri().'/css/custom-nivo-slider.css',false,'1.0' );
        wp_enqueue_style( 'custom-nivo' );
        
        wp_register_style( 'nivo', get_template_directory_uri().'/css/nivo-slider.css',false,'1.0' );
        wp_enqueue_style( 'nivo' );
        
        wp_register_style( 'sh-Core', get_template_directory_uri().'/css/highlighter/shCore.css',false,'1.0' );
        wp_enqueue_style( 'sh-Core' );
            
     	if(get_option($shortname.'_theme_style_color')=="dark"){ 
	        wp_register_style( 'content-style', get_template_directory_uri().'/css/dark.css',false,'1.0' );
       		wp_enqueue_style( 'content-style' );
     	}else{
	        wp_register_style( 'content-style', get_template_directory_uri().'/css/white.css',false,'1.0' );
	        wp_enqueue_style( 'content-style' );
      	}
        
        wp_register_style( 'jquery-ui', get_template_directory_uri().'/css/custom-theme/jquery-ui-1.8.12.custom.css',false,'1.0' );
        wp_enqueue_style( 'jquery-ui' );  
       
     }
        
}
add_action( 'wp_print_styles', 'wp_sdt_enqueue_styles' );
?>