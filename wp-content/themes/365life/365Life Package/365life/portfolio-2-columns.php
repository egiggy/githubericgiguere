<?php 
/**
 * Template Name: Portfolio - 2 columns
 */
get_header();?>
<?php include (TEMPLATEPATH.'/get-option.php');?>
		<div id="page">
			<div id="container">
				<div class="portfolio-wrapper">
					<div class="last-port-title">
						<h3 class="cufon"><?php the_title();?></h3>
					</div>
				<?php //Show the content?>
				<div class="portfolio-content">
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post();?>								
							<?php the_content();?>
						<?php endwhile?>
					<?php endif?>
				</div>
				<?php include('include/portfolio/portfolio-header.php');?>
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post();?>		
							<?php include('include/portfolio/portfolio-check-case.php');?>
								<?php 
									$getcat = get_the_terms ($post->ID, 'port-cat');		
									$video_type = get_post_meta($post->ID, "video-type", true);
									$video_id = get_post_meta($post->ID, "video-id", true);
								?>
										<div class="<?php foreach( $getcat as $category ) { echo str_replace (" ", "",$category->name). '-forfilter '; } ?>All port-2-wrapper portfolio-item">
													<div class="h240 frame relative">
													
													<?php if($video_type !=  "No video" && $video_id != ""):?>
														<?php echo videoThumbnail( '460', '240',$video_type, $video_id );?>	
													<?php else: ?>	
														<div class="hover-port relative h240 <?php echo $zoom;?>">
																<div class="<?php if($th_lightbox || $th_post): echo "portfolio-hover"; endif?>">
																		
																		<?php 
																		//check if show title
																		if($show_title == "Yes"):?>	
																			<div class="last-port-item-link top85">	
																				<h4 class="cufon">
																					<a href="<?php if($spec_link == ""):the_permalink(); else: echo $spec_link; endif?>">														<?php echo substr(get_the_title(),0,28);?>
																					</a>
																				</h4>
																			</div>
																		<?php endif ?>
																		
																		<?php 
																		//check if show excerpt
																		if($show_excerpt == "Yes"):?>
																		<div class="last-port-excerpt top125 w420">			
																			<?php echo substr(get_the_excerpt(),0,120)."...";?> 																				</div>
																		<?php endif?>
																
																		<?php if($th_lightbox):?>
																			<div class="portfolio-zoom bottom0 right3">
																			
																			<?php if($zoom_sp):?>
																				<a href="<?php echo get_post_meta($post->ID, "specified-image", true);?>" rel="prettyPhoto[pp_gal]" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zoom.png" alt=""/></a>
																			<?php elseif($zoom_video):?>				
																				<a href="<?php echo get_post_meta($post->ID, "url-video", true);?>" rel="prettyPhoto" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zoom-video.png" alt=""/></a>
																			<?php else:?>
																				<a href="<?php echo $image_url[0];?>" rel="prettyPhoto[pp_gal]" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zoom.png" alt=""/></a>
																		
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
																
																<?php //Check wheter thumbnail exists ?>
																<?php if($image_id  == null):?>
																	<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/img/default.jpg&amp;h=240&amp;w=460&amp;zc=1" alt="<?php the_title(); ?>"/>
																<?php else: ?>
																	<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $image_url[0];?>&amp;h=240&amp;w=460&amp;zc=1" alt="<?php the_title(); ?>"/>
																<?php endif ?>
															</div>
														</div>
												<?php //end video case?>
												<?php endif?>
												</div>
										</div>		
							<?php endwhile?>		
						<?php endif ?>	
					</ul>
									<!-- Social Share -->
										<?php if( $post_share == "Yes"): ?>
											<?php include('include/social-share/social-share.php');?>
										<?php endif?>	
				<div class="port-2-pagination">
					<?php if (function_exists("pagination")) {
							pagination();
					} ?>
				</div>
			</div>
		</div>
<?php get_footer();?>