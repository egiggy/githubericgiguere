<?php
/*
	Begin creating admin options
*/

$themename = THEMENAME;
$shortname = SHORTNAME;

$pp_slider_items = get_option('pp_slider_items');
if(empty($pp_slider_items))
{
	$pp_slider_items = 5;
}

$slides = get_posts(array(
	'post_type' => 'slides',
	'numberposts' => $pp_slider_items,
));
$wp_slides = array(
	0		=> "Choose a slide"
);
foreach ($slides as $slide_list ) {
       $wp_slides[$slide_list->ID] = $slide_list->post_title;
}

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array(
	0		=> "Choose a category"
);
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}

$pages = get_pages(array('parent' => -1));
$wp_pages = array(
	0		=> "Choose a page",
);
foreach ($pages as $page_list ) {
	$template_name = get_post_meta( $page_list->ID, '_wp_page_template', true );
	
	//exclude contact template
	if($template_name != 'contact.php')
	{
       $wp_pages[$page_list->ID] = $page_list->post_title;
    }
}

$pp_handle = opendir(TEMPLATEPATH.'/fonts');
$pp_font_arr = array();

while (false!==($pp_file = readdir($pp_handle))) {
	if ($pp_file != "." && $pp_file != ".." && $pp_file != ".DS_Store") {
		$pp_file_name = basename($pp_file, '.js');
		
		if($pp_file_name != 'Quicksand_300.font')
		{
			$pp_name = explode('_', $pp_file_name);
		
			$pp_font_arr[$pp_file_name] = $pp_file_name;
		}
	}
}
closedir($pp_handle);
asort($pp_font_arr);


// Array added for 3D Rotator
$tween_types_ori = array("linear","easeInSine","easeOutSine", "easeInOutSine", "easeInCubic", "easeOutCubic", "easeInOutCubic", "easeOutInCubic", "easeInQuint", "easeOutQuint", "easeInOutQuint", "easeOutInQuint", "easeInCirc", "easeOutCirc", "easeInOutCirc", "easeOutInCirc", "easeInBack", "easeOutBack", "easeInOutBack", "easeOutInBack", "easeInQuad", "easeOutQuad", "easeInOutQuad", "easeOutInQuad", "easeInQuart", "easeOutQuart", "easeInOutQuart", "easeOutInQuart", "easeInExpo", "easeOutExpo", "easeInOutExpo", "easeOutInExpo", "easeInElastic", "easeOutElastic", "easeInOutElastic", "easeOutInElastic", "easeInBounce", "easeOutBounce", "easeInOutBounce", "easeOutInBounce");

foreach($tween_types_ori as $tween_type)
{
	$tween_types[$tween_type] = $tween_type;
}


$api_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


$options = array (
 
//Begin admin header
array( 
		"name" => $themename." Options",
		"type" => "title"
),
//End admin header


//Begin first tab "General"
array( 
		"name" => "General",
		"type" => "section",
		"icon" => "gear.png",
)
,

array( "type" => "open"),

array( "name" => "Header Logo",
	"desc" => "Choose an image that you want to use as the logo in header",
	"id" => $shortname."_logo",
	"type" => "image",
	"std" => "",
),
array( "name" => "Custom Favicon",
	"desc" => "A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image",
	"id" => $shortname."_favicon",
	"type" => "image",
	"std" => "",
),

array( "name" => "Google Analytics Domain ID ",
	"desc" => "Get analytics on your site. Simply give us your Google Analytics Domain ID (something like UA-123456-1)",
	"id" => $shortname."_ga_id",
	"type" => "text",
	"std" => ""

),

array( "name" => "Custom CSS",
	"desc" => "You can add your custom CSS here",
	"id" => $shortname."_custom_css",
	"type" => "textarea",
	"std" => ""

),
	
array( "type" => "close"),
//End first tab "General"


//Begin first tab "Colors"
array( 
		"name" => "Colors",
		"type" => "section",
		"icon" => "color.png",
)
,

array( "type" => "open"),

array( "name" => "Font Color",
	"desc" => "Select color for the font (default #888888)",
	"id" => $shortname."_font_color",
	"type" => "colorpicker",
	"size" => "60px",
	"std" => "#888888"

),

array( "name" => "Link Color",
	"desc" => "Select color for the link (default #7BBADD)",
	"id" => $shortname."_link_color",
	"type" => "colorpicker",
	"size" => "60px",
	"std" => "#7BBADD"

),

array( "name" => "Hover Link Color",
	"desc" => "Select color for the hover link (default #4e8dad)",
	"id" => $shortname."_hover_link_color",
	"type" => "colorpicker",
	"size" => "60px",
	"std" => "#4e8dad"

),

array( "name" => "H1, H2, H3, H4, H5, H6 Color",
	"desc" => "Select color for the H1, H2, H3, H4, H5, H6 (default #111111)",
	"id" => $shortname."_h1_font_color",
	"type" => "colorpicker",
	"size" => "60px",
	"std" => "#111111"

),

array( "name" => "Button Background Color",
	"desc" => "Select color for the button background (default #c0e6fb)",
	"id" => $shortname."_button_bg_color",
	"type" => "colorpicker",
	"size" => "60px",
	"std" => "#c0e6fb"

),

array( "name" => "Button Font Color",
	"desc" => "Select color for the button font (default #729eb5)",
	"id" => $shortname."_button_font_color",
	"type" => "colorpicker",
	"size" => "60px",
	"std" => "#729eb5"

),

array( "name" => "Button Border Color",
	"desc" => "Select color for the button border (default #abccdf)",
	"id" => $shortname."_button_border_color",
	"type" => "colorpicker",
	"size" => "60px",
	"std" => "#abccdf"

),

array( "type" => "close"),
//End first tab "Colors"


//Begin second tab "Slider"
array( "name" => "Slider",
	"type" => "section",
	"icon" => "projection-screen--arrow.png",	
),
	
array( "type" => "open"),

array( "name" => "Slider style",
	"desc" => "Select the style for the slider",
	"id" => $shortname."_slider_effect",
	"type" => "select",
	"options" => array(
		'boxRainGrow' => 'boxRainGrow',
		'boxRainGrowReverse' => 'boxRainGrowReverse',
		'boxRandom' => 'boxRandom',
		'fade' => 'fade',
		'sliceDown' => 'sliceDown',
		'sliceUp' => 'sliceUp',
		'sliceUpDown' => 'sliceUpDown',
		'fold' => 'fold',
		'random' => 'random',
		'video' => 'video',
		'3D' => '3D',
		'flow' => 'flow',
	),
	"std" => 'boxRainGrow',
),

array( "name" => "Embedded Video (size 980x400px)",
	"desc" => "Enter embedded video code (if you selected video as slider)",
	"id" => $shortname."_slider_video_embedded",
	"type" => "textarea",
	"std" => "",
),

array( "name" => "Slider sort by",
	"desc" => "Select sorting type for contents in slider",
	"id" => $shortname."_slider_sort",
	"type" => "select",
	"options" => array(
		'DESC' => 'Newest First',
		'ASC' => 'Oldest First',
	),
	"std" => "ASC"
),

array( "name" => "Slider items",
	"desc" => "How many items you want display in slider?",
	"id" => $shortname."_slider_items",
	"type" => "jslider",
	"size" => "40px",
	"std" => "5",
	"from" => 1,
	"to" => 10,
	"step" => 1,
),

array( "name" => "Slider timer (in second)",
	"desc" => "Enter number of seconds for slider timer",
	"id" => $shortname."_slider_timer",
	"type" => "jslider",
	"size" => "40px",
	"std" => "5",
	"from" => 1,
	"to" => 10,
	"step" => 1,
),

array( "type" => "close"),
//End second tab "Slider"


// Options Panel added for 3D Rotator
array( "name" => "3D-Options",
"type" => "section",
"icon" => "block--pencil.png",	
),
array( "type" => "open"),

array( "name" => "Segments",
"desc" => "Number of segments in which the image will be sliced.",
"id" => $shortname."_segments",
"type" => "jslider",
	"size" => "40px",
	"std" => "9",
	"from" => 3,
	"to" => 12,
	"step" => 1,
),

array( "name" => "Tween Time",
"desc" => "Number of seconds for each element to be turned.",
"id" => $shortname."_tween_time",
"type" => "jslider",
"size" => "40px",
"std" => "1",
"from" => 1,
"to" => 10,
"step" => 1,

),

array( "name" => "Tween Delay",
"desc" => "Number of seconds from one element starting to turn to the next element starting.",
"id" => $shortname."_tween_delay",
"type" => "jslider",
"size" => "40px",
"std" => "100",
"from" => 100,
"to" => 1000,
"step" => 100,

),

array( "name" => "Tween Type",
"desc" => "Type of animation transition.",
"id" => $shortname."_tween_type",
"type" => "select",
"options" => $tween_types,
"std" => "Choose a category"),

array( "name" => "Z Distance",
"desc" => "to which extend are the cubes moved on z axis when being tweened. Negative values bring the cube closer to the camera, positive values take it further away. A good range is roughly between -200 and 700.",
"id" => $shortname."_z_distance",
"type" => "jslider",
"size" => "40px",
"std" => "700",
"from" => -200,
"to" => 700,
"step" => 50,
),

array( "type" => "close"),


//Begin second tab "Homepage"
array( "name" => "Homepage",
	"type" => "section",
	"icon" => "home.png",
),
array( "type" => "open"),

array( "name" => "Select and sort contents on your homepage. Use pages you want to show on your homepage <br/><br/><a href='".admin_url("post-new.php?post_type=page")."' class='button'>Create Page</a><br/><br/>* Get sample homepage code in /Styled Pages folder",
	"sort_title" => "Homepage Content Manager",
	"desc" => "",
	"id" => $shortname."_homepage_content",
	"type" => "sortable",
	"options" => $wp_pages,
	"options_disable" => array(1, 2, 3),
	"std" => ''
),

array( "name" => "Tagline text",
	"desc" => "Enter text to display in homepage tagline",
	"id" => $shortname."_homepage_tagline",
	"type" => "text",
	"std" => "Built with the latest Wordpress features",
),

array( "type" => "close"),
//End second tab "Homepage"


//Begin second tab "Portfolio"
array( "name" => "Portfolio",
	"type" => "section",
	"icon" => "folder-open-image.png",
),

array( "type" => "open"),

array( "name" => "Portfolio styles",
	"desc" => "Select the style for the portfolio",
	"id" => $shortname."_portfolio_style",
	"type" => "radio",
	"options" => array(
		'2' => '<div style="float:left;width:50px;height:40px" class="pp_checkbox_wrapper"><img src="'.get_bloginfo( 'stylesheet_directory' ).'/functions/images/l_sidebar.png"/></div>',
		'2r' => '<div style="float:left;width:50px;height:40px" class="pp_checkbox_wrapper"><img src="'.get_bloginfo( 'stylesheet_directory' ).'/functions/images/r_sidebar.png"/></div>',
		'f' => '<div style="float:left;width:50px;height:40px" class="pp_checkbox_wrapper"><img src="'.get_bloginfo( 'stylesheet_directory' ).'/functions/images/f_width.png"/></div>',
	),
),
array( "name" => "Portfolio sort by",
	"desc" => "Select sorting type for contents in portfolio",
	"id" => $shortname."_portfolio_sort",
	"type" => "select",
	"options" => array(
		'DESC' => 'Newest First',
		'ASC' => 'Oldest First',
	),
	"std" => "ASC"
),
array( "name" => "Portfolio sorting effect",
	"desc" => "Select the sorting effect for the portfolio",
	"id" => $shortname."_portfolio_sorting",
	"type" => "select",
	"options" => array(
		'swing' => 'Swing',
		'easeInOutQuad' => 'easeInOutQuad',
		'easeInOutCubic' => 'easeInOutCubic',
		'easeInOutQuart' => 'easeInOutQuart',
		'easeInOutQuint' => 'easeInOutQuint',
		'easeInOutSine' => 'easeInOutSine',
		'easeInOutExpo' => 'easeInOutExpo',
		'easeInOutCirc' => 'easeInOutCirc',
		'easeInOutElastic' => 'easeInOutElastic',
		'easeInOutBack' => 'easeInOutBack',
		'easeInOutBounce' => 'easeInOutBounce',
	),
	"std" => 'easeInOutBack',
),
array( "name" => "Show filter by set",
	"desc" => "Select display filter by set option in portfolio page ",
	"id" => $shortname."_portfolio_display_set",
	"type" => "iphone_checkboxes",
	"std" => 1
),
array( "name" => "Photo Gallery sort by",
	"desc" => "Select sorting type for contents in photo gallery",
	"id" => $shortname."_gallery_sort",
	"type" => "select",
	"options" => array(
		'DESC' => 'Newest First',
		'ASC' => 'Oldest First',
	),
	"std" => "ASC"
),

array( "type" => "close"),
//End second tab "Portfolio"


//Begin second tab "Sidebar"
array( "name" => "Sidebar",
	"type" => "section",
	"icon" => "application-sidebar-expand.png",
),

array( "type" => "open"),

array( "name" => "Add a new sidebar",
	"desc" => "Enter sidebar name",
	"id" => $shortname."_sidebar0",
	"type" => "text",
	"std" => "",
),
array( "type" => "close"),
//End second tab "Sidebar"


//Begin second tab "Blog"
array( "name" => "Blog",
	"type" => "section",
	"icon" => "book-open-bookmark.png",
),

array( "type" => "open"),

array( "name" => "Show Related posts module",
	"desc" => "Select display related posts in single blog page ",
	"id" => $shortname."_blog_display_related",
	"type" => "iphone_checkboxes",
	"std" => 1
),
array( "name" => "Select and sort post meta information to display on your blog post",
	"sort_title" => "Meta Information",
	"desc" => "",
	"id" => $shortname."_blog_meta",
	"type" => "sortable",
	"options" => array(
		1 => 'Empty field',
		1 => 'Category',
		2 => 'Tags',
		3 => 'Author',
		4 => 'Date',
		5 => 'Comment',
	),
	"std" => ''
),
array( "type" => "close"),
//End second tab "Blog"


//Begin first tab "Contact"
array( 
		"name" => "Contact",
		"type" => "section",
		"icon" => "mail-receive.png",
)
,

array( "type" => "open"),

array( "name" => "Your email address",
	"desc" => "Enter which email address will be sent from contact form",
	"id" => $shortname."_contact_email",
	"type" => "text",
	"std" => ""
),

array( "name" => "Thank you message",
	"desc" => "Enter message display once form submitted",
	"id" => $shortname."_contact_thankyou",
	"type" => "text",
	"std" => "Thank you! We will get back to you as soon as possible"
),

array( "name" => "Select and sort contents on your contact page. Use fields you want to show on your contact form",
	"sort_title" => "Contact Form Manager",
	"desc" => "",
	"id" => $shortname."_contact_form",
	"type" => "sortable",
	"options" => array(
		0 => 'Empty field',
		1 => 'Name',
		2 => 'Email',
		3 => 'Message',
		4 => 'Address',
		5 => 'Phone',
		6 => 'Mobile',
		7 => 'Company Name',
		8 => 'Country',
	),
	"options_disable" => array(1, 2, 3),
	"std" => ''
),
	
array( "type" => "close"),
//End first tab "Contact"


//Begin second tab "Footer"
array( "name" => "Footer",
	"type" => "section",
	"icon" => "layout-select-footer.png",
),

array( "type" => "open"),

array( "name" => "Show Footer Sidebar",
	"desc" => "",
	"id" => $shortname."_footer_display_sidebar",
	"type" => "iphone_checkboxes",
	"std" => 1
),
array( "name" => "Footer Sidebar styles",
	"desc" => "Select the style for Footer Sidebar",
	"id" => $shortname."_footer_style",
	"type" => "radio",
	"options" => array(
		'1' => '<div style="float:left;width:50px;height:40px" class="pp_checkbox_wrapper"><img src="'.get_bloginfo( 'stylesheet_directory' ).'/functions/images/1column.png"/></div>',
		'2' => '<div style="float:left;width:50px;height:40px" class="pp_checkbox_wrapper"><img src="'.get_bloginfo( 'stylesheet_directory' ).'/functions/images/2columns.png"/></div>',
		'3' => '<div style="float:left;width:50px;height:40px" class="pp_checkbox_wrapper"><img src="'.get_bloginfo( 'stylesheet_directory' ).'/functions/images/3columns.png"/></div>',
		'4' => '<div style="float:left;width:50px;height:40px" class="pp_checkbox_wrapper"><img src="'.get_bloginfo( 'stylesheet_directory' ).'/functions/images/4columns.png"/></div>',
	),
),
array( "name" => "Footer Content",
	"desc" => "You can text and HTML in here",
	"id" => $shortname."_footer_text",
	"type" => "textarea",
	"std" => "© 2011 by Peerapong Pulpipatnan"

),

array( "type" => "close"),
//End second tab "Footer"


//Begin second tab "SEO"
array( "name" => "SEO",
	"type" => "section",
	"icon" => "magnifier--arrow.png",
),

array( "type" => "open"),


array( "name" => "Enable Theme SEO plugin",
	"desc" => "Note: if you use another SEO plugin, please turn off theme SEO feature",
	"id" => $shortname."_seo_enable",
	"type" => "iphone_checkboxes",
	"std" => 1
),
array( "name" => "Homepage Title",
	"desc" => "Enter your homepage title",
	"id" => $shortname."_seo_home_title",
	"type" => "text",
	"std" => ""

),

array( "name" => "Meta Keywords",
	"desc" => "Enter your site keywords (separate by comma ,)",
	"id" => $shortname."_seo_meta_key",
	"type" => "textarea",
	"std" => ""

),

array( "name" => "Meta Description",
	"desc" => "Enter your site description",
	"id" => $shortname."_seo_meta_desc",
	"type" => "textarea",
	"std" => ""

),

array( "type" => "close"),
//End second tab "SEO"


//Begin second tab "Advance"
array( "name" => "Advance",
	"type" => "section",
	"icon" => "wrench-screwdriver.png",
),

array( "type" => "open"),

array( "name" => "Combine and compress theme's javascript files",
	"desc" => "Combine and compress all javascript files to one. Help reduce page load time",
	"id" => $shortname."_advance_combine_js",
	"type" => "iphone_checkboxes",
	"std" => 1
),

array( "name" => "Combine and compress theme's CSS files",
	"desc" => "Combine and compress all CSS files to one. Help reduce page load time",
	"id" => $shortname."_advance_combine_css",
	"type" => "iphone_checkboxes",
	"std" => 1
),

array( "name" => "Clear Cache",
	"desc" => "Try to clear cache when you enable javascript and CSS compression and theme went wrong",
	"id" => $shortname."_advance_clear_cache",
	"type" => "html",
	"html" => '<a id="'.$shortname.'_advance_clear_cache" href="'.$api_url.'" class="button">Click here to start clearing cache files</a>',
),

array( "type" => "close"),
//End second tab "Advance"

 
array( "type" => "close")
 
);
?>