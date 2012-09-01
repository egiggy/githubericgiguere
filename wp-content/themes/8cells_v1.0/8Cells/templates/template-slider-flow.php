<link rel='stylesheet' id='screen_css-css'  href='../css/screen.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox_css-css'  href='../js/fancybox/jquery.fancybox-1.3.0.css?ver=1.0' type='text/css' media='all' /> 

<script type='text/javascript' src='../js/jquery.js?ver=1.0'></script>
<script type='text/javascript' src='../js/jquery.ppflip.js?ver=1.0'></script>
<script type='text/javascript' src='../js/fancybox/jquery.fancybox-1.3.0.js?ver=1.0'></script>

<div id="imageFlow">
	<div class="text">
		<div class="title">Loading</div>
		<div class="legend">Please wait...</div>
	</div>
	<div class="scrollbar">
		<img class="track" src="../images/white_slider_bg.png" alt="">
		<img class="bar" src="../images/white_slider_handle.png" alt="">
		<img class="arrow-left" src="../images/sl.gif" alt="">
		<img class="arrow-right" src="../images/sr.gif" alt="">
	</div>
</div>

<div style="background:#fff;position:absolute;bottom:0;height:100px;width:100%"></div>

<script>
/* ==== create imageFlow ==== */
//          div ID, imagesbank, horizon, size, zoom, border, autoscroll_start, autoscroll_interval
imf.create("imageFlow", '../imageFlowXML.php', 0.6, 0.45, 0, 5, 8, 4);
</script>

<div id="fancy_flow" style="display:none">
								<?php
								require_once( '../../../../wp-load.php' );
								
								$pp_slider_items = get_option('pp_slider_items');
				
								if(empty($pp_slider_items))
								{
								    $pp_slider_items = 5;
								}
								
								$pp_slider_sort = get_option('pp_slider_sort'); 
								if(empty($pp_slider_sort))
								{
								    $pp_slider_sort = 'ASC';
								}
								
								if(DEMOSITE)
								{
									$slider_arr = get_posts('numberposts='.$pp_slider_items.'&order='.$pp_slider_sort.'&orderby=date&post_type=slides&offset=5');
								}
								else
								{
									$slider_arr = get_posts('numberposts='.$pp_slider_items.'&order='.$pp_slider_sort.'&orderby=date&post_type=slides');
								}
								
								foreach($slider_arr as $key => $photo)
								{
									$image_url = '';
									$hyperlink_url = get_post_meta($photo->ID, 'gallery_link_url', true);
									
									if(empty($hyperlink_url))
									{
										$popup_url = get_permalink($photo->ID);
								?>
									<a id="fancy_flow<?php echo $key; ?>" href="<?php echo $popup_url; ?>" class="fancy_flow"><?php echo $photo->post_title; ?></a>
								<?php
									}
								}
								?>
								</div>
<?php
	$fancy_width = 620;
	$fancy_height = 340;
	$is_ie = pp_detect_ie();
	
	if($is_ie)
	{
		$fancy_width = 680;
		$fancy_height = 340;
	}
	else
	{
		$fancy_width = 620;
		$fancy_height = 325;
	}
?>
								
<script>
jQuery('.fancy_flow').fancybox({ 
		padding: 0,
		type: 'iframe',
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8,
		width: <?php echo $fancy_width; ?>,
		height: <?php echo $fancy_height; ?>
	});
</script>