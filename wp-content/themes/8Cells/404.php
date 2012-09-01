<?php
/**
 * The main template file for display error page.
 *
 * @package WordPress
*/


get_header(); 

?>

		<!-- Begin content -->
		<div id="content_wrapper">
		
			<div class="inner">
				
				<!-- Begin main content -->
				<div class="inner_wrapper">
				<div class="standard_wrapper">
					<br class="clear"/>
					<h1 class="cufon">Page Not Found</h1>
					
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', '' ); ?></p>
				</div>	
				</div>
				<!-- End main content -->
				
				<br class="clear"/><br/><br/><br/><br/><br/><br/>
			</div>
		</div>
			
		<!-- End content -->

<?php get_footer(); ?>