<link rel='stylesheet' id='screen_css-css'  href='wp-content/themes/8Cells/css/screen.css?ver=1.0' type='text/css' media='all' />

<!--[if lte IE 8]>
<link rel='stylesheet' id='screen_css-css'  href='wp-content/themes/8Cells/css/ie.css?ver=1.0' type='text/css' media='all' />
<![endif]-->

<?php
$fancy_margin = 'margin:20px';
$is_ie = pp_detect_ie();
	
if($is_ie)
{
	$fancy_margin = 'margin:20px;';
}
else
{
	$fancy_margin = 'margin:20px';
}

$page = get_page($post->ID);
?>
<div style="<?php echo $fancy_margin; ?>;">
	<?php echo do_shortcode($page->post_content); ?>
</div>