<?php get_header(); ?>

    <?php if (is_paged()) $is_paged = true; ?>
	
	<?php
		
			if(isset($_GET['author_name'])) :
			$curauth = get_userdatabylogin($author_name);
			else :
			$curauth = get_userdata(intval($author));
			endif;
			
	?>

	<div class="grid_8">
	
	<?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div id="breadcrumb"><p>','</p></div>'); } ?>
	
	    <div class="pagespot">

			<?php if(have_posts()) : ?>
					
			<?php while(have_posts()) : the_post() ?>
        
                <div id="post-<?php the_ID(); ?>" class="post archive-spot">
				    						                        
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				    
					<div class="date"><?php relativeDate(get_the_time('YmdHis')) ?> &#64; <?php the_author_posts_link(); ?></div>
					
					<?php if ( get_option( 'bizzthemes_commentcount' )) { ?> 
					
					<div class="comment-spot fr"><?php comments_popup_link('0', '1', '%'); ?></div>
						
					<?php } ?>
						
					<?php if ( get_option( 'bizzthemes_postcontent_full' )) { ?> 
					
					    <?php the_content(); ?>
					
					<?php } else { ?>
					
					    <?php the_excerpt(); ?>
						
					<?php } ?>
					
					<div class="cat-spot"><?php the_category(","); ?></div>
					
                    <div class="fix"></div>
						
                </div><!--/post-->                            
        
            <?php endwhile; ?>
			
		</div><!--/pagespot -->
        
				<div class="pagination">
			
                    <?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
						
                </div>
        
            <?php endif; ?>
		
	</div><!--/grid_9 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>