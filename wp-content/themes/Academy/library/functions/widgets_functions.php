<?php

// Register widgetized areas
if ( function_exists('register_sidebar') ) {
   register_sidebars(1,array('name' => 'Blog Sidebar','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
    register_sidebars(3,array('name' => 'Blog Footer %d','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
    register_sidebars(3,array('name' => 'Front Footer %d','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	 register_sidebars(1,array('name' => 'Header Navigation Menu','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
}
	
// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;
 
	return (isset($sidebars[$key]));
}

// =============================== Feedburner Subscribe widget ======================================
function subscribeWidget()
{
	$settings = get_option("widget_subscribewidget");

	$id = $settings['id'];
	$title = $settings['title'];
	$text = $settings['text'];	

?>

	<div class="widget subscribe">	
		<h3 class="hl"><span><?php echo $title; ?></span></h3>
		<p><?php echo $text; ?></p>
		<form action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=<?php echo $id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<div>
				<input type="text" name="email" class="field" />
				<input type="hidden" value="http://feeds.feedburner.com/~e?ffid=<?php echo $id; ?>" name="url"/>
				<input type="hidden" value="<?php bloginfo('name'); ?>" name="title"/>
				<input type="hidden" name="loc" value="en_US"/>
                <button class="replace" type="submit" name="submit">Subscribe</button>
			</div>
		</form>

	</div>

<?php
}

function subscribeWidgetAdmin() {

	$settings = get_option("widget_subscribewidget");

	// check if anything's been sent
	if (isset($_POST['update_subscribe'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['subscribe_id']));
		$settings['title'] = strip_tags(stripslashes($_POST['subscribe_title']));
		$settings['text'] = strip_tags(stripslashes($_POST['subscribe_text']));		

		update_option("widget_subscribewidget",$settings);
	}

	echo '<p>
			<label for="subscribe_title">Title:
			<input id="subscribe_title" name="subscribe_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="subscribe_text">Text Under Title:
			<input id="subscribe_text" name="subscribe_text" type="text" class="widefat" value="'.$settings['text'].'" /></label></p>';
	echo '<p>
			<label for="subscribe_id">Feedburner ID (ex:templatic/eKPs):
			<input id="subscribe_id" name="subscribe_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';			
	echo '<input type="hidden" id="update_subscribe" name="update_subscribe" value="1" />';

}

register_sidebar_widget('PT &rarr; Subscribe', 'subscribeWidget');
register_widget_control('PT &rarr; Subscribe', 'subscribeWidgetAdmin', 400, 200);


// =============================== Ads 125x125 widget ======================================

function adsWidget()
{
$img_url[1] = get_option('bizzthemes_ad_image_1');
$dest_url[1] = get_option('bizzthemes_ad_url_1');
$img_url[2] = get_option('bizzthemes_ad_image_2');
$dest_url[2] = get_option('bizzthemes_ad_url_2');
$img_url[3] = get_option('bizzthemes_ad_image_3');
$dest_url[3] = get_option('bizzthemes_ad_url_3');
$img_url[4] = get_option('bizzthemes_ad_image_4');
$dest_url[4] = get_option('bizzthemes_ad_url_4');
$img_url[5] = get_option('bizzthemes_ad_image_5');
$dest_url[5] = get_option('bizzthemes_ad_url_5');
$img_url[6] = get_option('bizzthemes_ad_image_6');
$dest_url[6] = get_option('bizzthemes_ad_url_6');

?>

<div class="ad-box">

<?php if ( get_option('bizzthemes_show_ads_top12') ) { ?>
       
    <div class="ads123456"> 
        
        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[1]"; ?>"><img src="<?php echo "$img_url[1]"; ?>" alt="" /></a>

        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[2]"; ?>"><img src="<?php echo "$img_url[2]"; ?>" alt="" class="last" /></a>
        
    </div>
	
	<div class="fix"></div>
                
<?php } ?>

<?php if ( get_option('bizzthemes_show_ads_top34') ) { ?>
       
    <div class="ads123456"> 
        
        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[3]"; ?>"><img src="<?php echo "$img_url[3]"; ?>" alt="" /></a>

        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[4]"; ?>"><img src="<?php echo "$img_url[4]"; ?>" alt="" class="last" /></a>
        
    </div> 

    <div class="fix"></div>	

<?php } ?>

<?php if ( get_option('bizzthemes_show_ads_top56') ) { ?>
       
    <div class="ads123456"> 
        
        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[5]"; ?>"><img src="<?php echo "$img_url[5]"; ?>" alt="" /></a>

        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$dest_url[6]"; ?>"><img src="<?php echo "$img_url[6]"; ?>" alt="" class="last" /></a>
        
    </div> 

    <div class="fix"></div>	

<?php } ?>

</div>
<!--/ad-box -->

<?php }

register_sidebar_widget('PT &rarr; Ads 125x125', 'adsWidget');

function adsWidgetAdmin() {

	echo '<input type="hidden" id="update_ads" name="update_ads" value="1" />';

}

register_widget_control('PT &rarr; Ads 125x125', 'adsWidgetAdmin', 200, 200);

// =============================== Ad 300x250 widget ======================================

function adoneWidget()
{
?>

<?php if ( !get_option('bizzthemes_not_200') ) { ?>

<?php 

	if ( get_option('bizzthemes_home_only') ) { 
	
		if ( is_home() ) {

?>

<div class="ad-box">

    <div id="big_banner">
  
		<?php
                    
            // Get block code //
            $block_img = get_option('bizzthemes_block_image');
            $block_url = get_option('bizzthemes_block_url');
                
        ?>
                
        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$block_url"; ?>"><img src="<?php echo "$block_img"; ?>" alt="" /></a>

    </div>
    
</div>

<?php } } else { ?>

<div class="ad-box">

    <div id="big_banner">
      
        <?php
                    
            // Get block code //
            $block_img = get_option('bizzthemes_block_image');
            $block_url = get_option('bizzthemes_block_url');
                
        ?>
                
        <a <?php do_action('bizzthemes_external_ad_link'); ?> href="<?php echo "$block_url"; ?>"><img src="<?php echo "$block_img"; ?>" alt="" /></a>
    
    </div>
    
</div>

<?php } } }

register_sidebar_widget('PT &rarr; Ad 300x250', 'adoneWidget');

function adoneWidgetAdmin() {

	echo '<input type="hidden" id="update_ads" name="update_ads" value="1" />';

}

register_widget_control('PT &rarr; Ad 300x250', 'adoneWidgetAdmin', 200, 200);


// =============================== Flickr widget ======================================

function flickrWidget()
{
	$settings = get_option("widget_flickrwidget");

	$id = $settings['id'];
	$number = $settings['number'];

?>

<div class="widget flickr">
			
        <h3 class="hl"><span><span class="flickr-logo">flick<b>r</b></span> photostream</span></h3>
				
		<div class="fix"></div>
            			
            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script>  
		
		<div class="fix"></div>
		
</div>		

<?php
}
function flickrWidgetAdmin() {

	$settings = get_option("widget_flickrwidget");

	// check if anything's been sent
	if (isset($_POST['update_flickr'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['flickr_id']));
		$settings['number'] = strip_tags(stripslashes($_POST['flickr_number']));

		update_option("widget_flickrwidget",$settings);
	}

	echo '<p>
			<label for="flickr_id">Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):
			<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';
	echo '<p>
			<label for="flickr_number">Number of photos:
			<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="'.$settings['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';

}

register_sidebar_widget('PT &rarr; Flickr Photos', 'flickrWidget');
register_widget_control('PT &rarr; Flickr Photos', 'flickrWidgetAdmin', 250, 200);


// =============================== Popular Posts Widget ======================================

function PopularPostsSidebar()
{

    $settings_pop = get_option("widget_popularposts");

	$name = $settings_pop['name'];
	$number = $settings_pop['number'];
	if ($name <> "") { $popname = $name; } else { $popname = 'Popular Posts'; }
	if ($number <> "") { $popnumber = $number; } else { $popnumber = '10'; }

?>

<div class="widget popular">

	<h3 class="hl"><span><?php echo $popname; ?></span></h3>
	
		<ul>
			 
			<?php
			global $wpdb;
            $now = gmdate("Y-m-d H:i:s",time());
            $lastmonth = gmdate("Y-m-d H:i:s",gmmktime(date("H"), date("i"), date("s"), date("m")-12,date("d"),date("Y")));
            $popularposts = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'stammy' FROM $wpdb->posts, $wpdb->comments WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish' AND post_date < '$now' AND post_date > '$lastmonth' AND comment_status = 'open' GROUP BY $wpdb->comments.comment_post_ID ORDER BY stammy DESC LIMIT $popnumber";
            $posts = $wpdb->get_results($popularposts);
            $popular = '';
            if($posts){
                foreach($posts as $post){
	                $post_title = stripslashes($post->post_title);
		               $guid = get_permalink($post->ID);
					   
					      $first_post_title=substr($post_title,0,26);
            ?>
		        <li>
                    <a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php echo $first_post_title; ?></a> [...]
                    <br style="clear:both" />
                </li>
            <?php } } ?>

		</ul>
</div>

<?php
}
function PopularPostsAdmin() {

	$settings_pop = get_option("widget_popularposts");

	// check if anything's been sent
	if (isset($_POST['update_popular'])) {
		$settings_pop['name'] = strip_tags(stripslashes($_POST['popular_name']));
		$settings_pop['number'] = strip_tags(stripslashes($_POST['popular_number']));

		update_option("widget_popularposts",$settings_pop);
	}

	echo '<p>
			<label for="popular_name">Title:
			<input id="popular_name" name="popular_name" type="text" class="widefat" value="'.$settings_pop['name'].'" /></label></p>';
	echo '<p>
			<label for="popular_number">Number of popular posts:
			<input id="popular_number" name="popular_number" type="text" class="widefat" value="'.$settings_pop['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_popular" name="update_popular" value="1" />';

}

register_sidebar_widget('PT &rarr; Popular Posts', 'PopularPostsSidebar');
register_widget_control('PT &rarr; Popular Posts', 'PopularPostsAdmin', 250, 200);

// Show textbutton widget 
function textbuttonWidget() {

	global $thumb_url;
	$settings = get_option("widget_textbuttonwidget");

	$title = $settings['title'];
	$image = $settings['image'];
	$quote = $settings['quote'];
	$text = $settings['text'];
	$btnname = $settings['btnname'];
	$btnlink = $settings['btnlink'];

?>
	<div class="widget">

        <h3><?php echo $title; ?></h3>
		
		<?php if ( $image <> "" ) { ?>
			
            <p><a title="<?php echo $title; ?>" href="<?php echo $btnlink; ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $image; ?>&amp;h=100&amp;w=230&amp;zc=1&amp;q=80<?php echo $thumb_url ;?>" alt="<?php echo $title; ?>" class="fl" /></a></p>
			
		<?php } ?>
				
		<p>&#8220; <em><b><?php echo $quote; ?></b></em> &#8221;</p>
		
		<p><?php echo $text; ?></p>
		
        <div class="button-link"><a href="<?php echo $btnlink; ?>"><span><?php echo $btnname; ?></span></a></div>
        
	</div>
<?php
}

function textbuttonadmin() {

	$settings = get_option("widget_textbuttonwidget");

	// check if anything's been sent
	if (isset($_POST['update_textbutton'])) {
		$settings['title'] = strip_tags(stripslashes($_POST['textbutton_title']));
		$settings['image'] = strip_tags(stripslashes($_POST['textbutton_image']));
		$settings['quote'] = strip_tags(stripslashes($_POST['textbutton_quote']));
		$settings['text'] = strip_tags(stripslashes($_POST['textbutton_text']));
		$settings['btnname'] = strip_tags(stripslashes($_POST['textbutton_btnname']));
		$settings['btnlink'] = strip_tags(stripslashes($_POST['textbutton_btnlink']));

		update_option("widget_textbuttonwidget",$settings);
	}

	echo '<p>
			<label for="textbutton_title">Title:
			<input id="textbutton_title" name="textbutton_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_image">Image Link (including <code>http://</code>, will be auto resized):
			<input id="textbutton_image" name="textbutton_image" type="text" class="widefat" value="'.$settings['image'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_quote">Quote:
			<input id="textbutton_quote" name="textbutton_quote" type="text" class="widefat" value="'.$settings['quote'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_text">Text:
			<input id="textbutton_text" name="textbutton_text" type="text" class="widefat" value="'.$settings['text'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_btnname">Button Name:
			<input id="textbutton_btnname" name="textbutton_btnname" type="text" class="widefat" value="'.$settings['btnname'].'" /></label></p>';
	echo '<p>
			<label for="textbutton_btnlink">Button Link:
			<input id="textbutton_btnlink" name="textbutton_btnlink" type="text" class="widefat" value="'.$settings['btnlink'].'" /></label></p>';
	echo '<input type="hidden" id="update_textbutton" name="update_textbutton" value="1" />';

}

register_sidebar_widget('PT &rarr; Text with Button', 'textbuttonwidget');
register_widget_control('PT &rarr; Text with Button', 'textbuttonadmin', 400, 200);

// =============================== Twitter widget ======================================
// Plugin Name: Twitter Widget
// Plugin URI: http://seanys.com/2007/10/12/twitter-wordpress-widget/
// Description: Adds a sidebar widget to display Twitter updates (uses the Javascript <a href="http://twitter.com/badges/which_badge">Twitter 'badge'</a>)
// Version: 1.0.3
// Author: Sean Spalding
// Author URI: http://seanys.com/
// License: GPL

function widget_Twidget_init() {

	if ( !function_exists('register_sidebar_widget') )
		return;

	function widget_Twidget($args) {

		// "$args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys." - These are set up by the theme
		extract($args);

		// These are our own options
		$options = get_option('widget_Twidget');
		$account = $options['account'];  // Your Twitter account name
		$title = $options['title'];  // Title in sidebar for widget
		$show = $options['show'];  // # of Updates to show
		$follow = $options['follow'];  // # of Updates to show

        // Output
		echo $before_widget ;

		// start
		echo '<div id="twitter">';
		echo '<h3 class="hl"><span>'.$title.'</span></h3>';              
		echo '<ul id="twitter_update_list"><li></li></ul>
		      <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>';
		echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$account.'.json?callback=twitterCallback2&amp;count='.$show.'"></script>';
		echo '<p class="website"><a href="http://www.twitter.com/'.$account.'/" title="'.$follow.'">'.$follow.'</a></p></div>';


		// echo widget closing tag
		echo $after_widget;
	}

	// Settings form
	function widget_Twidget_control() {

		// Get options
		$options = get_option('widget_Twidget');
		// options exist? if not set defaults
		if ( !is_array($options) )
			$options = array('account'=>'Google', 'title'=>'Twitter Updates', 'show'=>'3', 'follow'=>'Follow us on Twitter');

        // form posted?
		if ( $_POST['Twitter-submit'] ) {

			// Remember to sanitize and format use input appropriately.
			$options['account'] = strip_tags(stripslashes($_POST['Twitter-account']));
			$options['title'] = strip_tags(stripslashes($_POST['Twitter-title']));
			$options['show'] = strip_tags(stripslashes($_POST['Twitter-show']));
			$options['follow'] = strip_tags(stripslashes($_POST['Twitter-follow']));
			update_option('widget_Twidget', $options);
		}

		// Get options for form fields to show
		$account = htmlspecialchars($options['account'], ENT_QUOTES);
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$show = htmlspecialchars($options['show'], ENT_QUOTES);
		$follow = htmlspecialchars($options['follow'], ENT_QUOTES);

		// The form fields
		echo '<p style="text-align:right;">
				<label for="Twitter-account">' . __('Account:') . '
				<input style="width: 200px;" id="Twitter-account" name="Twitter-account" type="text" value="'.$account.'" />
				</label></p>';
		echo '<p style="text-align:right;">
				<label for="Twitter-title">' . __('Title:') . '
				<input style="width: 200px;" id="Twitter-title" name="Twitter-title" type="text" value="'.$title.'" />
				</label></p>';
		echo '<p style="text-align:right;">
				<label for="Twitter-show">' . __('Show:') . '
				<input style="width: 200px;" id="Twitter-show" name="Twitter-show" type="text" value="'.$show.'" />
				</label></p>';
		echo '<p style="text-align:right;">
				<label for="Twitter-follow">' . __('Follow us:') . '
				<input style="width: 200px;" id="Twitter-follow" name="Twitter-follow" type="text" value="'.$follow.'" />
				</label></p>';
		echo '<input type="hidden" id="Twitter-submit" name="Twitter-submit" value="1" />';
	}


	// Register widget for use
	register_sidebar_widget(array('PT &rarr; Twitter', 'widgets'), 'widget_Twidget');

	// Register settings for use, 300x200 pixel form
	register_widget_control(array('PT &rarr; Twitter', 'widgets'), 'widget_Twidget_control', 300, 200);
}

// Run code and init
add_action('widgets_init', 'widget_Twidget_init');
?>