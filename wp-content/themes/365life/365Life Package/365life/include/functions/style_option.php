<?php
$style = array(
	array(
		"name" => "style_color",
		"desc" => "Style",
		"active" => "active",
		"icon" => "style",
		"type" => "tab_list",
		"options" => array(array("Color","style_color"),array("Theme Color","theme_color"),array("Background","style_bg"),array("Font","style_font"),)
	),
/**
** Color
**/
	array(
		"name" => "style_color",
		"type" => "div_tab"
	),	/*
	array(
		"name" => "Elements color",
		"id" => $shortname."_element_color",
		"type" => "colorPicker26",
		"desc" => "Default is #000000",
		"std" => "000000"
	),
	array(
		"type" => "close"
	),*/
	array(
		"name" => "Title color",
		"id" => $shortname."_title_color",
		"type" => "colorPicker3",
		"desc" => "Default is #ffffff",
		"std" => "ffffff"
	),
	array(
		"type" => "close"
	),/*
	array(
		"name" => "Stunning Text color",
		"id" => $shortname."_stunning_color",
		"type" => "colorPicker4",
		"desc" => "Default is #111111",
		"std" => "111111"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Stunning Text Caption color",
		"id" => $shortname."_stunning_caption_color",
		"type" => "colorPicker5",
		"desc" => "Default is #888888",
		"std" => "888888"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Stunning Text Button color",
		"id" => $shortname."_stunning_button_color",
		"type" => "colorPicker6",
		"desc" => "Default is #111111",
		"std" => "111111"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Stunning Text Link color",
		"id" => $shortname."_stunning_link_color",
		"type" => "colorPicker7",
		"desc" => "Default is #f0f0f0",
		"std" => "f0f0f0"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Stunning Text color (Below)",
		"id" => $shortname."_stunning_color_below",
		"type" => "colorPicker8",
		"desc" => "Default is #545454",
		"std" => "545454"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Stunning Text Caption color (Below)",
		"id" => $shortname."_stunning_caption_color_below",
		"type" => "colorPicker9",
		"desc" => "Default is #242424",
		"std" => "242424"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Stunning Text Button (Below)",
		"id" => $shortname."_stunning_button_color_below",
		"type" => "colorPicker10",
		"desc" => "Default is #C0E6FB",
		"std" => "C0E6FB"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Page Title color",
		"id" => $shortname."_page_title_color",
		"type" => "colorPicker8",	
		"desc" => "Default is #ffffff",
		"std" => "ffffff"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Page Caption color",
		"id" => $shortname."_page_caption_color",
		"type" => "colorPicker9",	
		"desc" => "Default is #606060",
		"std" => "606060"
	),
	array(
		"type" => "close"
	),*/
	array(
		"name" => "Link color",
		"id" => $shortname."_link_color",
		"type" => "colorPicker12",	
		"desc" => "Default is #f8c100",
		"std" => "f8c100"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Link color (on hover)",
		"id" => $shortname."_link_color_hover",
		"type" => "colorPicker13",	
		"desc" => "Default is #c29500",
		"std" => "c29500"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Sidebar Title Color",
		"id" => $shortname."_sidebar_title_color",
		"type" => "colorPicker14",
		"desc" => "Default is #ffffff",
		"std" => "ffffff"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Sidebar Link Color",
		"id" => $shortname."_sidebar_link_color",
		"type" => "colorPicker15",
		"desc" => "Default is #ffffff",
		"std" => "ffffff"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Sidebar Link Color (on hover)",
		"id" => $shortname."_sidebar_link_color_hover",
		"type" => "colorPicker16",
		"desc" => "Default is #cccccc",
		"std" => "cccccc"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Footer Title color",
		"id" => $shortname."_footer_title_color",
		"type" => "colorPicker17",	
		"desc" => "Default is #ffffff",
		"std" => "ffffff"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Footer Link color",
		"id" => $shortname."_footer_link_color",
		"type" => "colorPicker18",	
		"desc" => "Default is #ffffff",
		"std" => "ffffff"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Footer Link color (on hover)",
		"id" => $shortname."_footer_link_color_hover",
		"type" => "colorPicker19",
		"desc" => "Default is #cccccc",	
		"std" => "cccccc"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Button Text color",
		"id" => $shortname."_button_text_color",
		"type" => "colorPicker21",
		"desc" => "Default is #000000",	
		"std" => "000000"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Button Background color",
		"id" => $shortname."_button_color",
		"type" => "colorPicker20",
		"desc" => "Default is #f8c100",	
		"std" => "f8c100"
	),
	array(
		"type" => "div_tab_close"
	),
/**
** Layout Style
**/	
	array(
		"name" => "style_layout",
		"type" => "div_tab"
	),
	array(
		"name" => "Layout Style",
		"id" => $shortname."_layout",
		"type" => "select",
		"options" => array("Business","Blog")
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Default Background",
		"id" => $shortname."_default_bg",
		"type" => "checkbox",
		"std" => "yes"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Upload Background",
		"id" => $shortname."_spec_bg",
		"type" => "upload",
		"desc" => "Turn off default bg first"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Repeat X",
		"id" => $shortname."_spec_bg_reX",
		"type" => "checkbox",
		"std" => "no",
		"desc" => "Used with your uploaded bg only"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Repeat Y",
		"id" => $shortname."_spec_bg_reY",
		"type" => "checkbox",
		"std" => "no",
		"desc" => "Used with your uploaded bg only"
	),
	array(
		"type" => "div_tab_close"
	),
/**
** Theme Color
**/
	array(
		"name" => "theme_color",
		"type" => "div_tab"
	),
	array(
		"name" => "Theme Element Color",
		"id" => $shortname."_theme_color",
		"type" => "select",	
		"options" => array("yellow","red","orange","pink","purple","blue","green","white","black")
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Theme style color",
		"id" => $shortname."_theme_style_color",
		"type" => "select",	
		"options" => array("dark","white")
	),
	array(
		"type" => "div_tab_close"
	),/**
** Theme Color
**/
	array(
		"name" => "style_bg",
		"type" => "div_tab"
	),
	array(
		"name" => "Background for main page",
		"id" => $shortname."_bg_main",
		"type" => "upload",	
		"desc" => "You need to turn slider 'off' to use this option."
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Background for inner page",
		"id" => $shortname."_bg_inner",
		"type" => "upload",	
		"desc" => "if you choose bg option as 'No background' for inner pages. This will be used instead. You might leave it blank if you don't need it."
	),
	array(
		"type" => "close"
	),
	array(
		"type" => "div_tab_close"
	),
/**
** Font
**/
	array(
		"name" => "style_font",
		"type" => "div_tab"
	),
	array(
		"name" => "Heading Font",
		"id" => $shortname."_heading_font",
		"type" => "selectFont",	
		"options" => array("Cufon","Aller","Aller Light","Bebas","Sansation","Sansation Light","Quicksand Book","Cantarell","Luxi Serif","Nobile","Samba","Josefin Sans","Colaborate Light","Cicle Gordita","Yanone Kaffeesatz","Cabin","Oswald","Museo Sans","Google Font(Font Face)","DejaVuSerifItalic","PT Sans","Expletus Sans","Anton","PT Serif","Kreon","Radley","Goudy Bookletter 1911","Buda:light","Geo","Lato","Raleway:100","Ubuntu","Bentham","Gruppo","Anonymous Pro","Kenia","Cherry Cream Soda","Orbitron","Merriweather","Copse","Arvo","Allan:bold","Crimson Text","Tinos","Josefin Slab","Josefin Sans","Allerta","Philosopher","Cardo","Droid Serif","Droid Sans","Candal","Indie Flower","Quattrocento","Amaranth","Oswald","EB Garamond","Nova Round","Nova Script","Nova Oval","Nova Cut","Nova Mono","Nova Slim","Nova Flat","Terminal Dosis Light"),
		"std" => "Oswald"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Body Font",
		"id" => $shortname."_body_font",
		"type" => "selectFont",	
		"options" => array("Google Font(Font Face)","Default","DejaVuSerifItalic","PT Sans","Expletus Sans","Anton","PT Serif","Kreon","Radley","Goudy Bookletter 1911","Buda:light","Geo","Lato","Raleway:100","Ubuntu","Bentham","Gruppo","Anonymous Pro","Kenia","Cherry Cream Soda","Orbitron","Merriweather","Copse","Arvo","Allan:bold","Crimson Text","Tinos","Josefin Slab","Josefin Sans","Allerta","Philosopher","Cardo","Droid Serif","Droid Sans","Candal","Indie Flower","Quattrocento","Amaranth","Oswald","EB Garamond","Nova Round","Nova Script","Nova Oval","Nova Cut","Nova Mono","Nova Slim","Nova Flat","Terminal Dosis Light"),
		"std" => "Default"
	),
	array(
		"type" => "close"
	),
	array(
		"name" => "Page Caption",
		"id" => $shortname."_caption_font",
		"type" => "selectFont",	
		"options" => array("Cufon","Aller","Aller Light","Bebas","Sansation","Sansation Light","Quicksand Book","Cantarell","Luxi Serif","Nobile","Samba","Josefin Sans","Colaborate Light","Cicle Gordita","Yanone Kaffeesatz","Cabin","Oswald","Museo Sans","Google Font(Font Face)","DejaVuSerifItalic","PT Sans","Expletus Sans","Anton","PT Serif","Kreon","Radley","Goudy Bookletter 1911","Buda:light","Geo","Lato","Raleway:100","Ubuntu","Bentham","Gruppo","Anonymous Pro","Kenia","Cherry Cream Soda","Orbitron","Merriweather","Copse","Arvo","Allan:bold","Crimson Text","Tinos","Josefin Slab","Josefin Sans","Allerta","Philosopher","Cardo","Droid Serif","Droid Sans","Candal","Indie Flower","Quattrocento","Amaranth","Oswald","EB Garamond","Nova Round","Nova Script","Nova Oval","Nova Cut","Nova Mono","Nova Slim","Nova Flat","Terminal Dosis Light"),
		"std" => "Oswald"
	),
	array(
		"type" => "div_tab_close"
	),
)
?>