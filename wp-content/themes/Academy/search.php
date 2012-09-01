<?php get_header(); ?>

	<?php if (is_paged()) $is_paged = true; ?>

	<div class="grid_8">
	
	<?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div id="breadcrumb"><p>','</p></div>'); } ?>
	
	    <div class="pagespot">
		
		    <!-- AdSense Search: START -->
	
	            <?php if (get_option('bizzthemes_search_adsense') <> "") { ?>
							
					<br/>
							
					<div class="adsense-468">
		
		                <?php echo stripslashes(get_option('bizzthemes_search_adsense')); ?>
		
		            </div>
					
					<br/>
							
		        <?php } ?>	
		
            <!-- AdSense Search: END -->
		
	        <div class="fix"></div>

			<?php if(have_posts()) : ?>
					
			<?php while(have_posts()) : the_post() ?>
        
                <div id="post-<?php the_ID(); ?>" class="post archive-spot">
				    						                        
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				    
					<div class="date">&rarr;&nbsp;&nbsp;<?php relativeDate(get_the_time('YmdHis')) ?> &nbsp;&rarr;&nbsp;&nbsp;<?php the_category("&nbsp;"); ?></div>
						
					<?php the_excerpt(); ?>
					
					<div class="cat-spot"><span class="cat-list"><?php comments_popup_link(''.get_option('bizzthemes_comment_responsesa_name').'', ''.get_option('bizzthemes_comment_responsesb_name').'', ''.get_option('bizzthemes_comment_responsesc_name').''); ?></span></div>

                    <div class="fix"></div>
						
                </div><!--/post-->                             
        
            <?php endwhile; ?>
				
			<?php else: ?>
			
			    <div class="post archive-spot">
				    						                        
                    <h2><?php echo get_option('bizzthemes_search_nothing_found'); ?></h2>

                    <div class="fix"></div>
						
                </div><!--/post-->  
        
            <?php endif; ?>
			
		</div><!--/pagespot -->
        
				<div class="pagination">
			
                    <?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
						
                </div>
		
	</div><!--/grid_9 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>