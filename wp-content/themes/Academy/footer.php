
<div class="clearfix"><!----></div>	

</div><!--/container_12 -->

<div class="container_12 footwidgets-spot">
		
	<?php if ( is_category() || is_single() || is_day() || is_month() || is_year() || is_tag() && ( function_exists('dynamic_sidebar') && (is_sidebar_active(2) || is_sidebar_active(3) || is_sidebar_active(4)) ) ) { // Don't show on the front page ?>
    
	<!-- Bottom Blog Widgets: START -->
	
	    <div id="footwidgets-blog">
	
		    <div class="widget-spot grid_4_a">
		
			    <?php dynamic_sidebar(2); ?>
			
		    </div>
		
		    <div class="widget-spot grid_4_a">
		
			    <?php dynamic_sidebar(3);  ?>	
			
		    </div>

		    <div class="widget-spot grid_4_a last">
		
			    <?php dynamic_sidebar(4);  ?>	
			
		    </div>
		
	    </div><!--/footwidgets-front -->
		
	<!-- Bottom Blog Widgets: END -->
    
    <?php } elseif ( function_exists('dynamic_sidebar') && (is_sidebar_active(5) || is_sidebar_active(6) || is_sidebar_active(7)) ) { // Show on the front page ?>
	
	<!-- Bottom Front Widgets: START -->
	   	
	    <div id="footwidgets-front">
	
		    <div class="widget-spot grid_4_a">
		
			    <?php dynamic_sidebar(5); ?>
			
		    </div>
		
		    <div class="widget-spot grid_4_a">
		
			    <?php dynamic_sidebar(6);  ?>	
			
		    </div>

		    <div class="widget-spot grid_4_a last">
		
			    <?php dynamic_sidebar(7);  ?>	
			
		    </div>
		
	    </div><!--/footwidgets-front -->
		
	<!-- Bottom Front Widgets: END -->
    
    <?php } ?>

<div class="clearfix"><!----></div>
	
</div><!--/container_12 -->
    
<div class="container_12">

	<!-- Footer: START -->
		
	<div id="footer" >
			
		<div class="copyright">
			
            <p class="fl">&copy; <?php the_time('Y'); ?> <?php bloginfo(); ?> <br/> 
            <span class="designby" > Powered by </span>  <span class="templatic">  <a href="http://templatic.com" title="http://templatic.com">http://templatic.com</a> </span>  </p>
				
            <div class="fr">
			
			<?php if ( get_option('bizzthemes_footpages') <> "" ) { ?>
			
			    <?php wp_list_pages('title_li=&depth=0&include=' . get_option('bizzthemes_footpages') .'&sort_column=menu_order'); ?>
			
		    <?php } ?>
						
			</div>
			
			<div class="clearfix"></div>
		
		</div><!--/copyright -->
								
	</div><!--/footer -->
	
	<!-- Footer: END -->
	
   	<?php wp_footer(); ?>
	
<script  type="text/javascript"  >
/* <![CDATA[ */

sfHover = function() {
//alert('hai');
	var sfEls = document.getElementById("pagenav").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
/* ]]> */

</script>
	
	<?php if ( get_option('bizzthemes_google_analytics') <> "" ) { echo stripslashes(get_option('bizzthemes_google_analytics')); } ?>

</div><!--/container_12 -->

</body>

</html>
