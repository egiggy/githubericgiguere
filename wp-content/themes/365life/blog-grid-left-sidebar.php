<?php 
/**
 * Template Name: Blog Grid - Left Sidebar
 */
get_header();?>
<?php include (TEMPLATEPATH.'/get-option.php');?>
	    <div id="page">
            <div id="container">
                <div class="page-wrapper">
            		<div class="page-w600-right">
						<div class="last-port-title">
							<h3 class="cufon"><?php the_title();?></h3>						
						</div>
			<!-- get Cat ID -->
			<?php $i=1; ?>
			<?php $cat_id = get_post_meta($post->ID, "cat-id-blog", true); ?>
			<?php  $blog_num = get_post_meta($post->ID, "blog-item-number", true); ?>
			<?php	query_posts('showposts='.$blog_num.'&cat='.get_cat_ID(htmlspecialchars($cat_id)).'&paged='.$paged)?>
				 	<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post();?>	
							<div class="last-blog-item <?php if($i%3==0) echo "last";?>">
													
											<div class="last-blog-thumbnail">
													
												<?php //Check wheter thumbnail exists 
													$image_id = get_post_thumbnail_id();
													$image_url = wp_get_attachment_image_src($image_id,'large', true);
													$video_type = get_post_meta($post->ID, "video-type", true);
													$video_id = get_post_meta($post->ID, "video-id", true);
												?>
												<?php if($video_type !=  "No video" && $video_id != ""):?>
													<div class="h220">
														<?php echo videoThumbnail( '220', '220',$video_type, $video_id );?>
													</div>
												<?php elseif($image_id==null):?>	
														<a href="<?php the_permalink();?>" class="hover blog-non-thumb">
														</a>	
												<?php else: ?>
														<a href="<?php the_permalink();?>" class="hover" >
															<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $image_url[0];?>&amp;h=220&amp;w=220&amp;zc=1" alt="<?php the_title(); ?>"/>
														</a>
												<?php endif ?>
													
											</div>
													
												<div class="last-blog-item-bg">			
													<div class="last-blog-item-link">	
														<h4 class="cufon">
															<a href="<?php the_permalink();?>">
																<?php echo get_the_title();?>
															</a>
														</h4>
													</div>
													<div class="last-blog-item-desc">										
														<?php echo substr(get_the_excerpt(),0,75)."...";?> 													
													</div>
													<div class="post-date-lfb">
														<?php the_time('F j, Y'); echo '<span class="post-detail-sep">/</span>by '. get_the_author_link(); ?> 
													</div>
												</div>
										</div>
									<?php $i++;?>
						<?php endwhile?>
					<?php endif ?>
               
				<?php if (function_exists("pagination")) {
						pagination();
				} ?>
            </div>
                    <?php get_sidebar('blog-left')?>    
					
                </div>
            </div>
        </div>
<?php get_footer();?>