<?php
/*
Template Name: Archives Page
*/
?>

<?php get_header(); ?>

    <div class="grid_8">
	
	<?php if ( get_option( 'bizzthemes_breadcrumbs' )) { yoast_breadcrumb('<div id="breadcrumb"><p>','</p></div>'); } ?>
		
	    <div class="pagespot">
        
                    <div id="post-<?php the_ID(); ?>" class="post archive-spot">
    
                        <h1><?php the_title(); ?></h1>
						
						<div class="arclist box">
				
                            <ul>
				
					        <?php query_posts('showposts=60'); ?>
					
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                                <li>
						
						            <div class="archives-time"><?php the_time('M j Y') ?></div>
						
						            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						
						            - <?php echo $post->comment_count ?>
						
						        </li>
                    
                            <?php endwhile; endif; ?>
					
				            </ul>				
			
			            </div><!--/arclist -->
						
				    </div><!--/post -->
					
		</div><!--/pagespot -->
		
	</div><!--/grid_9 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>