<?php 
/*
* Footer
*/
?>
<?php include (TEMPLATEPATH.'/get-option.php');?>
<?php wp_reset_query();?>
	
		<div id="footer">
			<div class="footer-content">
				<!-- Footer Widget -->
				<div class="footer-style">
					<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar("First Footer") ) : ?>					  
					<?php //echo "<div><h2>No Widget found</h2></div><div class=\"text-widget-inner\">Please Add a Footer widget.</div>"; ?>
					<?php endif; ?>
				</div>
				<div class="footer-style">
					<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar("Second Footer") ) : ?>					  
					<?php //echo "<div><h2>No Widget found</h2></div><div class=\"text-widget-inner\">Please Add a Footer widget.</div>"; ?>
					<?php endif; ?>
				</div>
				<div class="footer-style">
					<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar("Third Footer") ) : ?>					  
					<?php //echo "<div><h2>No Widget found</h2></div><div class=\"text-widget-inner\">Please Add a Footer widget.</div>"; ?>
					<?php endif; ?>
				</div>
				<div class="footer-style last">
					<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar("Fourth Footer") ) : ?>					  
					<?php //echo "<div><h2>No Widget found</h2></div><div class=\"text-widget-inner\">Please Add a Footer widget.</div>"; ?>
					<?php endif; ?>
				</div>
		</div>
		
		
		<?php //close footer ?>
		</div>
		
		<!-- Copyright Footer -->
			<div id="copyright" class="copyright-wrapper">	
				<div class="copyright">
					<div class="copyright-left">
						<?php echo do_shortcode($sdt_copyRight_left);?>
					</div>	
					<div class="copyright-right">
						<?php if($sdt_copyright_right_ena == "yes"):?>
							<?php echo do_shortcode($sdt_copyRight_right);?>
						<?php else: ?>
							<div class="arrow-top-footer"></div>
						<?php endif?>
					</div>
				</div>
			</div>
			
			
	</div>
	<?php //close body-3 ?>
</div>
<?php //close body-2 ?>


<?php // This is end of "class body-2" which its opening contained in header.php?>

<?php wp_footer(); ?>

<?php	
	include (TEMPLATEPATH."/include/starter.php");
?> 
<?php
	//Google Analytic
	if($sdt_google_ana_ena == "yes"){
		echo stripslashes($sdt_google_ana);
	}
?>
</body>
</html>