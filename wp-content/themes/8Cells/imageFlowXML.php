<?php
require_once( '../../../wp-load.php' );

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

header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="utf-8" ?>
		<bank>';
		
foreach($slider_arr as $photo)
{
	$image_url = '';
								
	if(has_post_thumbnail($photo->ID, 'full'))
	{
	    $image_id = get_post_thumbnail_id($photo->ID);
	    $image_url = wp_get_attachment_image_src($image_id, 'full', true);
	}
	
	$hyperlink_url = get_post_meta($photo->ID, 'gallery_link_url', true);

	echo '<img>';
	echo '<src>'.$image_url[0].'</src>';
	echo '<link>'.$hyperlink_url.'</link>';
	echo '<title></title>';
	echo '<caption></caption>';
	echo '</img>';
}
		
echo '</bank>';
?>
