<?php 
/**
 * 365life Search page
 */
get_header();?>
<?php include (TEMPLATEPATH.'/get-option.php');?>
		<div id="page">
			<div id="container">
				<div class="page-wrapper">
			<?php if(have_posts()) : ?>
				<div class="sidebar-right">
				<div class="page-w600">
						<div class="last-port-title">
								<?php echo "<h3 class='cufon'>".$sdt_translate_search_title."</h3>";?>	
						</div>
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post();?>	
							<div class="blog-sidebar-wrapper">				
									<!-- post container -->
										
										<?php  
												$image_id = get_post_thumbnail_id();
												$image_url = wp_get_attachment_image_src($image_id,'large', true);
										?>
									
									
									<?php if($image_id!=null):?>	
												<div class="frame h255 alignleft relative">
										
												<a href="<?php the_permalink();?>" class="hover">
														<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $image_url[0] ;?>&amp;h=255&amp;w=700&amp;zc=1" alt="<?php the_title(); ?>" />
												</a>
											
												
											</div>		
									<?php endif ?>
									
																	
								<div class="blog-detail-wrapper">	
									<?php getPostDate();?>
									<div class="blog-excerpt-wrapper">
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
			<?php get_sidebar('archive')?>	
			</div>			
			
		<?php else: ?>
		
		
		
		<!-- If can't find -->
			<div class="last-port-title ml20 w940">
				<h3 class="cufon"><?php echo $sdt_translate_searchNotFound_title;?></h3>
			</div>
			<div class="page-search-not-found">
							
							<?php echo $sdt_translate_searchNotFound_detail;?>
							<div class="space"></div>
								<div class="w190">
									<?php get_search_form(); ?>			
								</div>	
							<div class="space"></div>		
							<div class="space"></div>	
							<div class="space"></div>
					<?php endif ?>
				</div>
			</div>
		</div>
<?php get_footer();?>