<?php get_header(); ?>

	<div class="grid_12">
	    
		<?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div id="breadcrumb"><p>','</p></div>'); } ?>
	
		<div class="pagespot">

			<?php if(have_posts()) : ?>
					
				<?php while(have_posts()) : the_post() ?>
        
                    <div id="post-<?php the_ID(); ?>" class="post">
    
                        <h1><?php the_title(); ?><?php edit_post_link('<small>edit</small>','&nbsp;&nbsp;&rarr;&nbsp;'); ?></h1>
                                     
                        <div class="entry"> 
						
                            <?php the_content(); ?>
							
                        </div>
                                                                
                    </div><!--/post-->
                
                <?php endwhile; else : ?>
        
                    <div class="post box">
					
                        <div class="entry-head"><h2><?php echo get_option('bizzthemes_404error_name'); ?></h2></div>
						
                        <div class="entry-content"><p><?php echo get_option('bizzthemes_404solution_name'); ?></p></div>
						
                    </div>
        
            <?php endif; ?>

		</div><!--/pagespot -->
		
	</div><!--/grid_12 -->
	
	<div class="clearfix"><!----></div>

<?php get_footer(); ?>