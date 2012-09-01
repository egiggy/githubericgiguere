<?php 
/*
* Index
*/
?>
<?php get_header();?>
<?php include (TEMPLATEPATH.'/get-option.php');?>
<!-- Check wheter slider is enabled -->
	

<div id="container">	
	<?php //Container?>		
		<div id="container-inner-main" class="<?php if($sdt_sidebar_homepage_ena != "yes") echo "w940";?>">
			
			
			<?php //Front manager ?>
			<?php if($sdt_frontSrv_enable == "yes"):?>
			<div id="front-manager">
				<div id="page">
					<div class="page-<?php if($sdt_sidebar_homepage_ena=="yes"): echo "w600 w660"; else: echo "w900 w900"; endif?> ml0 front-manager">
						<?php 
							global $wpdb;
							$page_front_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '".$sdt_frontSrv_page_id."' AND post_type = 'page' ");
						?>
						<?php query_posts('page_id='. $page_front_id )?>
							<?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post();?>	
									<?php the_content();?>							
								<?php endwhile?>		
							<?php endif ?>
					</div>
				</div>	
			</div>	
			
			<?php //end fornt manager ?>
			<?php endif?>
			
			
		<?php //Last from portfolio ?>	
			<?php if($sdt_lastFP_enable == "yes"): ?>	
			<div class="last-port-wrapper">
				<?php if($sdt_lastFP_title != null): ?>
					<div class="last-port-title">
						<h3 class="cufon"><?php echo $sdt_lastFP_title;?></h3>
					</div>
				<?php endif ?>
				
				<?php if($sdt_sidebar_homepage_ena == "yes") $n=3; else $n=4;?>	
				
				<div class="last-port-wrapper-content">
					<?php //Show 3 lastest contents from 'Portfolio' page.
						$i=1;
						query_posts('post_type=portfolio&showposts='.$sdt_lastFP_amount.'&port-cat='.$sdt_lastFP_cat)?>
							<?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post();?>	
												
									<?php
										include('include/portfolio/portfolio-check-case.php');	
												
										$video_type = get_post_meta($post->ID, "video-type", true);
										$video_id = get_post_meta($post->ID, "video-id", true);
									?>	
												<div class="last-port-item <?php if($i%$n==0) echo "last";?>">
													<div class="h250">
													<?php if($video_type !=  "No video" && $video_id != ""):?>
														<?php echo videoThumbnail( '220', '250',$video_type, $video_id );?>	
													<?php else: ?>
														<div class="hover-port relative h250 <?php echo $zoom;?>">
														
															<div class="<?php if($th_lightbox || $th_post): echo "portfolio-hover"; endif?>">
																		<div class="last-port-item-link">	
																			<h4 class="cufon">
																			<a href="<?php if($spec_link == ""):the_permalink(); else: echo $spec_link; endif?>">											<?php echo substr(get_the_title(),0,18);?>
																			</a>
																			</h4>
																		</div>
																		
																		<div class="last-port-excerpt">			
																			<?php echo substr(get_the_excerpt(),0,75)."...";?> 																		</div>
																		
																		<?php if($th_lightbox):?>
																			<div class="portfolio-zoom bottom0 right3">
																			
																			<?php if($zoom_sp):?>
																				<a href="<?php echo get_post_meta($post->ID, "specified-image", true);?>" rel="prettyPhoto[pp_gal]" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zoom.png" alt=""/></a>
																			<?php elseif($zoom_video):?>				
																				<a href="<?php echo get_post_meta($post->ID, "url-video", true);?>" rel="prettyPhoto" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zoom-video.png" alt=""/></a>
																			<?php else:?>
																				<a href="<?php echo $thumbnail_url;?>" rel="prettyPhoto[pp_gal]" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zoom.png" alt=""/></a>
																		
																			<?php endif;?>
																			</div>	
																		<div class="port-hover-br"></div>
																		<?php endif ?>
																		<?php if($th_post):?>
																		<div class="portfolio-h-link top10 left6">
																			<a href="<?php if($spec_link == ""):the_permalink(); else: echo $spec_link; endif?>"><img src="<?php echo get_template_directory_uri(); ?>/img/link.png" alt=""/></a>
																		</div>
																		<div class="port-hover-tl"></div>
																		<?php endif;?>
																	
																			
															</div>
															
															
															<div>
																<?php //Check wheter thumbnail exists 
																
																	$image_id = get_post_thumbnail_id();
																	$image_url = wp_get_attachment_image_src($image_id,'large', true);
																	$video_type = get_post_meta($post->ID, "video-type", true);
																	$video_id = get_post_meta($post->ID, "video-id", true);
																?>
																<?php if($image_id  == null):?>
																	<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/img/default.jpg&amp;h=250&amp;w=220&amp;zc=1" alt="<?php the_title(); ?>"/>
																<?php else: ?>
																	<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $image_url[0];?>&amp;h=250&amp;w=220&amp;zc=1" alt="<?php the_title(); ?>"/>
																<?php endif ?>
															</div>
															
														</div>
													<?php //end video case?>	
													<?php endif?>	
												</div>
											</div>
									<?php $i++;?>
								<?php endwhile?>
							<?php endif ?>
				<?php // end of contetnt wrapper ?>
				</div>
			</div>
				<?php if($sdt_lastFB_enable == "yes"): ?>
					<div class="space h40"></div>
				<?php endif?>
			<?php // enf  Last FP ?>
			<?php endif?>
			
			
		<?php //Last from Blog ?>	
			<?php if($sdt_lastFB_enable == "yes"): ?>
			<div class="last-blog-wrapper">
				<?php if($sdt_lastFB_title != null): ?>
					<div class="last-port-title">
						<h3 class="cufon"><?php echo $sdt_lastFB_title;?></h3>
					</div>
				<?php endif ?>
				
				<?php if($sdt_sidebar_homepage_ena == "yes") $n=3; else $n=4;?>
				<div class="last-port-wrapper-content">	
					<?php //Show 3 lastest contents from 'Blog' page.
						$i=1;
						query_posts('showposts='.$sdt_lastFB_amount.'&cat='.get_cat_ID($sdt_lastFB_cat))?>
							<?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post();?>	
										<div class="last-blog-item <?php if($i%$n==0) echo "last";?>">
													
												<div class="last-blog-thumbnail">
													<a href="<?php the_permalink();?>" class="hover" >
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
																	<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/img/default.jpg&amp;h=220&amp;w=220&amp;zc=1" alt="<?php the_title(); ?>"/>
																<?php else: ?>
																	<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $image_url[0];?>&amp;h=220&amp;w=220&amp;zc=1" alt="<?php the_title(); ?>"/>
																<?php endif ?>
													</a>
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
				<?php // end of contetnt wrapper ?>
				</div>
			</div>						
			
				<?php if($sdt_fullBlog_enable == "yes"): ?>
					<div class="space h40"></div>
				<?php endif?>

			<?php //end last port ?>			
			<?php endif?>
		
			
		
			<?php //Full blog ?>
			<?php if($sdt_fullBlog_enable == "yes"): ?>
				<div id="page" class="page-wrapper mt0 mb0">
					<?php if($sdt_fullBlog_title != null): ?>
						<div class="last-port-title">
							<h3 class="cufon"><?php echo $sdt_fullBlog_title;?></h3>
						</div>
					<?php endif ?>
					<div class="sidebar-right">
					
						<?php if($sdt_sidebar_homepage_ena == "yes"){ $h=255; $w=700; $mh=false;}else{ $h=200; $w=240; $mh=true;}?>	
						
						<div class="page-w600 ml0 <?php if($sdt_sidebar_homepage_ena != "yes")echo "w940";?>">
						<!-- get Cat ID -->
						<?php	query_posts('showposts='.$sdt_full_blog_shownum.'&cat='.get_cat_ID(htmlspecialchars($sdt_fullBlog_cat_id)).'&paged='.$paged)?>
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post();?>	
						
							<div class="blog-sidebar-wrapper">		
									<!-- post container -->
										<?php  
												$image_id = get_post_thumbnail_id();
												$image_url = wp_get_attachment_image_src($image_id,'large', true);
												$video_type = get_post_meta($post->ID, "video-type", true);
												$video_id = get_post_meta($post->ID, "video-id", true);
										?>
										<?php if($video_type !=  "No video" && $video_id != ""):?>
												<?php echo videoThumbnail( '700', '255',$video_type, $video_id );?>
										<?php elseif($image_id!=null):?>	
											<div class="frame h<?php echo $h;?> alignleft relative">
										
												<a href="<?php the_permalink();?>" class="hover">
														<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $image_url[0] ;?>&amp;h=<?php echo $h;?>&amp;w=<?php echo $w;?>&amp;zc=1" alt="<?php the_title(); ?>" />
												</a>
											
												
											</div>		
									<?php endif ?>
									
																	
								<div class="blog-detail-wrapper">	
									<?php getPostDate();?>
									<div class="blog-excerpt-wrapper <?php if($mh) echo "mh200";?>">
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
										<div class="blog-sidebar-content">																
												<div class="meta-left-full">								
													<?php echo mb_substr(get_the_excerpt(),0,270)."...";?>
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
							<?php if (function_exists("pagination")) {
									pagination();
							} ?>
						</div>	
					</div>
				</div>
		<?php endif //end fullblog?>
		
	<div class="space h0"></div>
	<?php // end container main ?>
	</div>
	<?php if($sdt_sidebar_homepage_ena == "yes"):?>
		<?php get_sidebar('index')?>	
	<?php endif ?>
<?php //end index-wrapper?>
</div>

<?php get_footer();?>
