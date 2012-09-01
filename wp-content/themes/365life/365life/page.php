<?php 
/**
 * Template Name: Page - Full Width
 */
get_header();?>
<?php include (TEMPLATEPATH.'/get-option.php');?>
		<div id="page">
			<div id="container">
				<div class="page-wrapper-full">
			
				 	<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post();?>
								<!-- Title -->
									<div class="last-port-title">
										<h3 class="cufon"><?php the_title();?></h3>
									</div>	
								<!-- post container -->
								<div class="page-full-content-wrapper">
									<div class="meta-left-full-content">	
										<?php the_content();?>
									</div>
								<!-- Comment -->
									<div id="comment-area">
										<?php comments_template(); ?>
									</div>
									
								</div>
								
						<?php endwhile?>
					<?php endif ?>
				</div>
			</div>
		</div>
<?php get_footer();?>