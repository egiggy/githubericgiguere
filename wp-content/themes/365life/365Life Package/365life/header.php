<?php 
/*
* header
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php 
include (TEMPLATEPATH.'/get-option.php');
?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if($sdt_favicon_ena == "yes"):?>
<link rel="shortcut icon" href="<?php echo $sdt_favicon; ?>" />
<?php endif ?>
	

<!--[if IE]>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ie-table.css" type="text/css" media="screen" /> 
<![endif]-->
<!--[if lte IE 7]>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ie-style.css" type="text/css" media="screen" /> 
<![endif]-->
<?php 
wp_head();
?>
<?php 
	//call google font
	include (TEMPLATEPATH.'/include/font/fonts.php');
?>
<style type="text/css">
<?php 
	// get custom style
	include (TEMPLATEPATH."/extrastyle.php");
?>

</style>
<?php 
	include (TEMPLATEPATH."/include/starter-upper.php");
?> 


</head>
<body <?php global $class; body_class( $class ); ?>>
<?php 

			if(is_single()){
	    		$bg_option = get_post_meta($post->ID, "bg-option-single", true);
	    	}else{
	    		$bg_option = get_post_meta($post->ID, "bg-option", true);	
	    	}
	    	
	    	
if((is_front_page() || is_home()) && $sdt_slide_ena == "yes"):?>
	
    	
	<div id="navigation">
	<!--Arrow Navigation-->
		<div id="prevs"><img id="prevslide" src="<?php echo get_template_directory_uri();?>/img/supersized/prevslide<?php if($sdt_theme_style_color == "white")echo "-bl";?>.png" alt="" /></div>
		<div id="nexts"><img id="nextslide" src="<?php echo get_template_directory_uri();?>/img/supersized/nextslide<?php if($sdt_theme_style_color == "white")echo "-bl";?>.png" alt="" /></div> 
	</div>
	
	<div id="slider-frame"></div>
	
	<div id="slidetitle-wrapper">
		<div id="slidetitle"></div>
		<div id="slidecaption"></div>
	</div>
<div id="top-filter-1">
	<div id="arrow-top"></div>
<?php 
	include (TEMPLATEPATH."/include/social-link/social-link.php");
?> 
</div>
<?php elseif($bg_option=="The same as main slider"):?>
	<div id="navigation">
		<div id="prevs"><img id="prevslide" src="<?php echo get_template_directory_uri();?>/img/supersized/prevslide<?php if($sdt_theme_style_color == "white")echo "-bl";?>.png" alt="" /></div>
		<div id="nexts"><img id="nextslide" src="<?php echo get_template_directory_uri();?>/img/supersized/nextslide<?php if($sdt_theme_style_color == "white")echo "-bl";?>.png" alt="" /></div> 
	</div>
<?php endif //endif frontpage?>		

<div id="body-2">
  <div id="body-3">
  
	<!-- Header -->
	<div id="header-whole">

	<?php //slider top bar?>	
			
			
		<div class="header-wrapper">
			<div id="header">
				<div id="arrow-down"></div>
				<!-- Logo -->
						<?php if($sdt_logo == ""):?>
						<div class="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo_default.png" alt="" /></a></div>			
						<?php else: ?>
						<div class="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo $sdt_logo;?>" alt="" /></a></div>
						<?php endif; ?>				
				
				<!-- Menu -->
					<div class="nav-wrapper">
						 <?php wp_nav_menu( array('container' => 'div', 'container_class' => 'menu-wrapper', 'container_id' => 'superfish-wrapper', 'menu_class'=> 'sf-menu',  'theme_location' => 'main_menu') ); ?>
					</div>
			
					
			</div>	
		</div>
			
			
		<?php //bar title ?>
		<?php //Check Description style case
			$desc_style = get_post_meta($post->ID,'desc-style',true);		
			$desc_style = checkCaption($desc_style);
			global $post;
		?>
		<?php if(false):?>
			<div class="bar-title-wrapper">
				<div id="caption" class="bar-title">
						<div class="bar-title-inner">
							<?php  $page_desc = get_post_meta($post->ID, "page-desc", true); ?>
							<div class="h2-wrapper-title">
							<?php if(is_search()) :echo "<h2>".$sdt_translate_search_title."</h2>";?>
							<?php elseif(is_404()) :echo "<h2>404</h2>";?>
							<?php elseif(is_category()) :echo "<h2>".$sdt_translate_category."</h2>";?>			
							<?php elseif(is_archive()):echo "<h2>".$sdt_translate_archives."</h2>";?> 					
							<?php elseif($desc_style=="0"|| $desc_style=="2"): echo  "<h2>".get_the_title()."</h2>";?>													<?php elseif($desc_style=="1"): echo  "<h2>".$page_desc."</h2>";?>
							<?php endif?>
							</div>
							<div class="description">
								<?php if(is_search()):echo $sdt_translate_search_caption;?>
								<?php elseif(is_404()):echo "The page you are finding does not exist";?>
								<?php elseif(is_category()):echo single_cat_title( '', false );?>				
								<?php elseif(is_archive()): echo "on ".get_the_date('F Y');?> 	
								<?php elseif($desc_style=="0"): echo $page_desc;?>							
								<?php endif?>
							</div>	
						</div>
				</div>	
			</div>
		<?php endif?>
</div>
<!-- End Header -->
	