<?php
/**
 * The main template file for display tag page.
 *
 * @package WordPress
*/

get_header(); 

$page_sidebar = get_post_meta($current_page_id, 'page_sidebar', true);

if(empty($page_sidebar))
{
	$page_sidebar = 'Blog Sidebar';
}
$caption_class = "page_caption";

$pp_title = get_option('pp_blog_title');

if(empty($pp_title))
{
	$pp_title = 'Blog';
}

?>
		<!-- Begin content -->
		<div id="content_wrapper">
			
			<div class="inner">
			
				<!-- Begin main content -->
				<div class="inner_wrapper">
				<div class="standard_wrapper">
					<br class="clear"/>
					<h1 class="cufon">Tag "  
						<?php
							printf( __( ' %s', '' ), '' . single_cat_title( '', false ) . '' );
						?>"</h1>
				
					<div class="sidebar_content">
					
<?php

global $more; $more = false; # some wordpress wtf logic

$num_of_posts = $wp_query->post_count;
$cur_post = 0;

if (have_posts()) : while (have_posts()) : the_post();

	$cur_post++;
	$image_thumb = '';
								
	if(has_post_thumbnail(get_the_ID(), 'blog-thumb'))
	{
	    $image_id = get_post_thumbnail_id(get_the_ID());
	    $image_thumb = wp_get_attachment_image_src($image_id, 'blog-thumb', true);
	    
	    $pp_blog_image_width = 450;
		$pp_blog_image_height = 300;
	}
?>
						
						
						<!-- Begin each blog post -->
						<div class="post_wrapper" <?php if($cur_post==$num_of_posts) { echo 'style="margin-bottom:0"'; }?>>
							
							<div class="post_header">
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>								
									</a>
								</h3>
							</div>
							
							<div class="post_detail">
							<?php
								$pp_blog_meta_sort_data = unserialize(get_option('pp_blog_meta_sort_data'));
						
								if(is_array($pp_blog_meta_sort_data) && !empty($pp_blog_meta_sort_data))
								{
									foreach($pp_blog_meta_sort_data as $meta)
									{
										switch($meta)
										{
											case 1:
												if(!is_bool(get_the_category()))
												{
													//var_dump(get_the_category());
													echo '<img src="'.get_stylesheet_directory_uri().'/images/folder.gif" class="middle" alt=""/>';
													echo the_category(',').'<br/>';
												}
											break;
											case 2:
												if(!is_bool(get_the_tags()))
												{
													echo '<img src="'.get_stylesheet_directory_uri().'/images/icon_tag.png" class="middle" alt="" style="margin-right:8px"/>';
													echo the_tags('',',', '<br/>');
												}
											break;
											case 3:
												echo '<img src="'.get_stylesheet_directory_uri().'/images/user_edit.gif" class="middle" alt=""/>'.get_the_author().'<br/>';
											break;
											case 4:
												echo '<img src="'.get_stylesheet_directory_uri().'/images/calendar.gif" class="middle" alt=""/>Posted on '.get_the_time('M d, Y').'<br/>';
											break;
											case 5:
												echo '<img src="'.get_stylesheet_directory_uri().'/images/comment.gif" class="middle" alt=""/>';
												echo comments_number('0 Comment', '1 Comment', '% Comments').'<br/>';
											break;
										}
									}
								}
							?>
							</div>
							
							<div class="post_excerpt">
								<?php
								    $post_featured_content = get_post_meta(get_the_ID(), 'post_featured_content', true);
								    $post_video_id = get_post_meta(get_the_ID(), 'post_video_id', true);
								    $post_gallery_id = get_post_meta(get_the_ID(), 'post_gallery_id', true);
								    $circle_date_style = '';
								
								    switch($post_featured_content)
								    {
								    	case 'Youtube Video':
								?>
								
								    	<iframe title="YouTube video player" width="<?php echo $pp_blog_image_width; ?>" height="<?php echo $pp_blog_image_height+140; ?>" src="http://www.youtube.com/embed/<?php echo $post_video_id; ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe><br/><br/>
								
								<?php
								    	break;
								    	case 'Vimeo Video':
								?>	
								    	<iframe src="http://player.vimeo.com/video/<?php echo $post_video_id; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="<?php echo $pp_blog_image_width; ?>" height="<?php echo $pp_blog_image_height; ?>" frameborder="0"></iframe>
								    	<br/><br/>
								
								<?php
								    	break;
								    	case 'Gallery':
								?>
								
								<?php
										$portfolio_items = -1;
										
										$portfolio_sort = get_option('pp_gallery_sort'); 
										if(empty($portfolio_sort))
										{
											$portfolio_sort = 'DESC';
										}
										
										$args = array( 
											'post_type' => 'attachment', 
											'numberposts' => $portfolio_items, 
											'post_status' => null, 
											'post_parent' => $post_gallery_id,
											'order' => $portfolio_sort,
											'orderby' => 'date',
										); 								
										$all_photo_arr = get_posts( $args );
									
										if(isset($all_photo_arr) && !empty($all_photo_arr))
										{
									
									?>	
										<div class="nivo_border" style="width:<?php echo $pp_blog_image_width; ?>px;height:<?php echo $pp_blog_image_height; ?>px;"><div id="blog_<?php echo get_the_ID(); ?>" class="nivoslide" style="width:<?php echo $pp_blog_image_width; ?>px;height:<?php echo $pp_blog_image_height; ?>px; visibility: hidden; display:none">
											<?php
									
											    foreach($all_photo_arr as $key => $portfolio_item)
											    {
											    	
											    	$image_url = '';
											
											    	if(!empty($portfolio_item->guid))
											    	{
											    		$image_id = $portfolio_item->ID;
											    		$image_url[0] = $portfolio_item->guid;
											    	}
											    	
											    	$last_class = '';
											    	$line_break = '';
											    	if(($key+1) % 4 == 0)
											    	{	
											    		$last_class = ' last';
											    		
											    		if(isset($page_photo_arr[$key+1]))
											    		{
											    			$line_break = '<br class="clear"/><br/>';
											    		}
											    		else
											    		{
											    			$line_break = '<br class="clear"/>';
											    		}
											    	}
											    	
											?>
											    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url[0]?>&h=<?php echo $pp_blog_image_height; ?>&w=<?php echo $pp_blog_image_width; ?>&zc=1" alt="<?php echo $portfolio_item->post_title?>"/>			
											<?php
											    
											    	echo $line_break;
											    }
											    //End foreach loop
											    
											?>
											</div>	    
										</div>
										
<script type="text/javascript"> 
$j(window).load(function() {	
	$j('#blog_<?php echo get_the_ID(); ?>').nivoSlider({ pauseTime: parseInt($j('#slider_timer').val() * 1000), pauseOnHover: true, effect: 'boxRainGrow', controlNav: true, captionOpacity: 1, directionNavHide: false, controlNavThumbs:false, controlNavThumbsFromRel:false, boxCols:8, boxRows:4, afterLoad: function(){ 
		$j('#blog_<?php echo	 get_the_ID(); ?>').css('visibility', 'visible');
		$j('#blog_<?php echo	 get_the_ID(); ?>').css('display', 'block');
	} });						
});								
</script> 						
										<?php
											
										}
										//End if have portfolio items
										?>
										<br class="clear"/>
								
								<?php
								    	break;
								?>
								
								<?php
								    default:
								    	if(isset($image_thumb[0]))
								    	{
								?>	
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo $image_thumb[0]; ?>" alt="" class="post_img frame"/>
								</a>
								<br/><br/>
								
								<?php
										}
									}
								?>
							
								<?php echo _substr(strip_tags(strip_shortcodes(get_the_content())), 400); ?>
								<br/><br/><br/>
								<a class="continue" href="<?php the_permalink(); ?>">Continue Reading »</a>
							</div>
							
							<br class="clear"/><br/>
						
						</div>
						<!-- End each blog post -->	


<?php endwhile; endif; ?>

						<div class="pagination"><p><?php posts_nav_link(' '); ?></p></div>
						
					</div>
					
						<div class="sidebar_wrapper <?php echo $sidebar_class; ?>">
						
							<div class="sidebar_top <?php echo $sidebar_class; ?>"></div>
						
							<div class="sidebar <?php echo $sidebar_class; ?> <?php echo $sidebar_home; ?>">
							
								<div class="content">
							
									<ul class="sidebar_widget">
									<?php dynamic_sidebar($page_sidebar); ?>
									</ul>
								
								</div>
						
							</div>
							<br class="clear"/>
					
							<div class="sidebar_bottom <?php echo $sidebar_class; ?>"></div>
						</div>
					
				</div>
				<!-- End main content -->
				
				<br class="clear"/>
				
			</div>
			
		</div>
		<!-- End content -->
				

<?php get_footer(); ?>