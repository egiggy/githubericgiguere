<?php
session_start();
$pp_url = 'http://www.gallyapp.com/tf_themes/8cells_wp/';

if(isset($_GET['pp_portfolio_style']))
{
	$_SESSION['pp_portfolio_style'] = $_GET['pp_portfolio_style'];
	header( 'Location: '.$pp_url.'?page_id=11' ) ;
	exit;
}

if(isset($_GET['pp_slider_effect']))
{
	$_SESSION['pp_slider_effect'] = $_GET['pp_slider_effect'];
	header( 'Location: '.$pp_url ) ;
	exit;
}

if(isset($_GET['reset']))
{
	session_destroy();
}

header( 'Location: '.$_SERVER['HTTP_REFERER'] ) ;
?>