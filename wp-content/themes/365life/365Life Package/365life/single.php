<?php 
/**
 * Template Name: Single
 */
get_header();?>
<?php include (TEMPLATEPATH.'/get-option.php');?>
	<div id="container-wrapper">
		<div id="page" class="container-shadow">
			<div id="container">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
					<div class="page-wrapper">
					<div class="<?php if($sdt_post_layout=="Right Sidebar"): echo "sidebar-right"; elseif( $sdt_post_layout=="Left Sidebar"): echo "sidebar-left"; endif?>">
						<div class="page-<?php if($sdt_post_layout=="Left Sidebar"): echo "w600-right"; elseif($sdt_post_layout=="Right Sidebar"): echo "w600"; else: echo "w900"; endif?>">
						
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post();?>	
							<div class="blog-sidebar-wrapper">				
									<!-- post container -->
										
												<?php 
													$thumbnail_url = get_post_meta($post->ID, "thumbnail", true);
													$video_type = get_post_meta($post->ID, "video-type-in", true);
													$video_id = get_post_meta($post->ID, "video-id-in", true);	
												?>
												<?php if($video_type !=  "No Video" && $video_id != ""):?>
													<?php echo videoThumbnail( '700', '255',$video_type, $video_id );?>
												<?php elseif($thumbnail_url == null):?>
												<?php else: ?>
												<div class="frame h255 alignleft relative">
											
											  <a href="<?php echo $thumbnail_url;?>" rel="prettyPhoto[pp_gal]" title="<?php the_title();?>">
														<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $thumbnail_url ;?>&amp;h=255&amp;w=<?php if($sdt_post_layout=="Without Sidebar") echo "940"; else echo "700"; ?>&amp;zc=1" alt="<?php the_title(); ?>" />
												</a>
											
												
											</div>		
									<?php endif ?>
									
																	
								<div>
									<div class="post-date-wrapper-single">	
										<?php getPostDate();?>
									</div>
									<div class="blog-excerpt-wrapper <?php if($sdt_post_layout=="Without Sidebar") echo "w846";?>">
										<!-- Title -->
											<div class="title-wrapper">
												<div class="title">
													<h4>
														<a href="<?php the_permalink();?>">
															<?php the_title();?>
														</a>
													</h4>
												</div>
											</div>			
											<?php singlePostDate();?>		
										<div class="blog-sidebar-content <?php if($sdt_post_layout=="Without Sidebar") echo "w846";?>">												
											<div class="meta-left-full mt10">								
												<?php the_content();?>
											</div>
											<?php if(get_post_meta($post->ID, "social-share", true) == "Yes"): ?>
												<?php include('include/social-share/social-share.php');?>
											<?php endif?>									
											<div id="comment-area">
												<?php comments_template(); ?>
											</div>
											
										<?php //end blog sidebar content ?>
										</div>
									<?php //end blog-excerpt-wrapper ?>
									</div>	
								<?php //end blog-detail-wrapper ?>
								</div>
							<?php //end blog-sidebar-wrapper?>
							</div>
							<div class="space h20"></div>
						<?php endwhile?>
						<?php endif ?>
						</div>		
					<?php if($sdt_post_layout== "Left Sidebar"): ?>	
								<!-- Sidebar -->
								<?php get_sidebar('left');?>
							<?php endif ?>

					<?php if($sdt_post_layout=="Right Sidebar"): ?>	
						<!-- Sidebar -->
						<?php get_sidebar()?>
					<?php endif ?>
					</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>