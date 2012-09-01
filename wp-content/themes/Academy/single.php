<?php get_header(); ?>

	<div class="grid_8">
		
	    <div class="pagespot">

			<?php if(have_posts()) : ?>
					
			<?php while(have_posts()) : the_post() ?>
        
                    <div id="post-<?php the_ID(); ?>" class="post archive-spot">
    
                        <h1><?php the_title(); ?><?php edit_post_link('<small>edit</small>','&nbsp;&nbsp;&rarr;&nbsp;'); ?></h1>
                        
						<div class="date"><?php relativeDate(get_the_time('YmdHis')) ?> &#64; <em><?php the_author_posts_link(); ?></em>&nbsp;&nbsp;-&nbsp;
						
						<?php if ( comments_open() ) : ?>
						  
		                      <a href="#comments"><?php comments_number(''.get_option('bizzthemes_comment_responsesa_name').'', ''.get_option('bizzthemes_comment_responsesb_name').'', ''.get_option('bizzthemes_comment_responsesc_name').'', 'Comments-link', ''.get_option('bizzthemes_comment_off_name').''); ?></a>
		                  
						<?php endif; ?>
												
						</div>
						                                     
                        <div class="entry"> 
						
                            <?php the_content(); ?>
							
                        </div>
                                            
                        <?php the_tags(' <p><strong>'.get_option('bizzthemes_general_tags_name').': </strong>', ', ' , '</p>'); ?>
                    
                    </div><!--/post-->
					
					<!-- AdSense Comments: START -->
	
	                    <?php if (get_option('bizzthemes_comment_adsense') <> "") { ?>
							
					        <br/>
							
							<div class="adsense-468">
		
		                        <?php echo stripslashes(get_option('bizzthemes_comment_adsense')); ?>
		
		                    </div>
					
					        <br/><br/>
							
		                <?php } ?>	
		
                    <!-- AdSense Comments: END -->
		
	                <div class="fix"></div>
        
                    <div id="comments"><?php comments_template(); ?></div>
        
                    <?php endwhile; ?>
					
			<?php endif; ?>
			
		</div><!--/pagespot -->
		
	</div><!--/grid_9 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>