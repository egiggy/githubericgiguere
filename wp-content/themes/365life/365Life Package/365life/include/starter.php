<script type="text/javascript"> 
		<?php
			$theme_shortname = "sdt";
			$shortname = "365l";
			
			// put false if wanna turn cufon completely off
			if(true):?>
			//Cufon Replacement
			Cufon.replace('#header h1,#header h2,#header h3,#header h4,#header h5,#header h6',{hover: true,fontFamily: '<?php echo get_option($shortname."_heading_font");?>'});			
			Cufon.replace('#page h1,#page h2,#page h3,#page h4,#page h5,#page h6',{hover: true,fontFamily: '<?php echo get_option($shortname."_heading_font");?>'});
			Cufon.replace('#footer h1,#footer h2,#footer h3,#footer h4,#footer h5,#footer h6',{hover: true,fontFamily: '<?php echo get_option($shortname."_heading_font");?>'});
			
			Cufon.replace('#sidebar .sidebar-inner h3',{hover: true,fontFamily: '<?php echo get_option($shortname."_heading_font");?>'});
			
			//Title with caption Replacement
			Cufon.replace('.cufon',{hover: true,fontFamily: '<?php echo get_option($shortname."_heading_font");?>'});
			
			//Slider caption Replacement
			Cufon.replace('.slider-title',{fontFamily: '<?php echo get_option($shortname."_slider_font");?>'});
			
			//Caption (Bartitle) font Replacement
			Cufon.replace('.last-port-title h3',{hover: true,fontFamily: '<?php echo get_option($shortname."_caption_font");?>'});
			
			<?php endif ?>
			 Cufon.now();
			
			<?php //Superfish menu?>
			 jQuery(document).ready(function(){  
				
			 
				jQuery("ul.sf-menu").supersubs({ 
					minWidth:    16 ,   // minimum width of sub-menus in em units 
					maxWidth:    27,   // maximum width of sub-menus in em units 
					extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
									   // due to slight rounding differences and font-family 
				}).superfish({				
					delay: 100,
					speed: 'fast', 
					animation:   {opacity:'show',height:'show'}		
				});  // call supersubs first, then superfish, so that subs are 
							 // not display:none when measuring. Call before initialising 
							 // containing tabs for same reason. 
	
			
				//Pretty photo setting
					jQuery("a[rel^='prettyPhoto']").prettyPhoto({	
					animation_speed: '<?php echo $sdt_lightbox_animation_speed; ?>', /* fast/slow/normal */
					slideshow: <?php echo $sdt_lightbox_slideshow; ?>, /* false OR interval time in ms */
					autoplay_slideshow: <?php echo $sdt_lightbox_autoplay_slideshow; ?>, /* true/false */
					opacity: <?php echo $sdt_lightbox_opacity; ?>, /* Value between 0 and 1 */
					show_title: <?php echo $sdt_lightbox_title; ?>, /* true/false */
					allow_resize: <?php echo $sdt_lightbox_allow_resize; ?>, /* Resize the photos bigger than viewport. true/false */
					default_width: <?php echo $sdt_lightbox_width; ?>,
					default_height: <?php echo $sdt_lightbox_height; ?>,
					counter_separator_label: '<?php echo $sdt_lightbox_counter_separator; ?>', /* The separator for the gallery counter 1 "of" 2 */
					theme: '<?php echo $sdt_lightbox_theme; ?>', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
					horizontal_padding: <?php echo $sdt_lightbox_padding; ?>, /* The padding on each side of the picture */
					overlay_gallery: <?php echo $sdt_lightbox_overlay; ?>, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
					keyboard_shortcuts: <?php echo $sdt_lightbox_keyboard; ?>, /* Set to false if you open forms inside prettyPhoto */	
					<?php if($sdt_lightbox_social=="false"):?>
					social_tools: false /* Set to false if you open forms inside prettyPhoto */	
					<?php endif?>
							
					});
					
			  //Tab and Accordion
			  
			  //Toggle box
				jQuery('.toggle-title').live('click',function(){
					jQuery(this).next().slideToggle();
				});
			  	
			  // Accordion
				jQuery("#accordion").accordion({ header: ".acc-header" });
	
			  //hover states on the static widgets
				jQuery('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			//tipsy
				jQuery('.tipsy-hover').tipsy({gravity: 'n', fade: true});
			
			//Syntax Highlighter
    		SyntaxHighlighter.all();
    		
    		//Get mouse pos to shoe filter
    		/*
    			 jQuery(document).mousemove(function(e){
    			 	if(e.pageY <= jQuery('#top-filter-1').height() + 50 ){
						jQuery('#top-filter-1').fadeIn();
    			 	}else{
						jQuery('#top-filter-1').fadeOut();
    			 	}
    			 });
    		*/	 
				 
				 
				 
		<?php // end of	jQuery(document).ready(function() ?>
		});
		
		jQuery(window).load(function() {
		
		 	<?php //nivo slider for slider shortcode?>
				setTimeout(function(){
				jQuery('#slider2').nivoSlider({ 
						effect: '<?php echo $sdt_slide_effect; ?>',
						pauseTime: <?php echo $sdt_slide_period; ?>,
						animSpeed: <?php echo $sdt_slide_speed; ?>,
						pauseOnHover:<?php if($sdt_slide_pause == "yes"): echo"true"; else: echo"false"; endif?>,
						directionNav:<?php if($sdt_slide_arrow == "Never Show"): echo"false"; else: echo"true"; endif?>,
						directionNavHide:<?php if($sdt_slide_arrow == "Show when hover"): echo"true"; else: echo"false"; endif?>,		
					});
				}, 1000);
				
				
			/* Portfolio sortables */
				var highBoxes = 0,
				speed = 1000,
				grid = jQuery('ul#portfolio-list'),
				sortable_navi = jQuery('#portfolio-filter li a');
				jQuery('#portfolio-list .portfolio-item').each(function(){
					var topBoxes = jQuery(this).height();
					if(topBoxes > highBoxes){highBoxes = topBoxes};
				});
				jQuery('#portfolio-list .portfolio-item').height(highBoxes);
			    grid.masonry({
			   		singleMode: true,
			        itemSelector: '.portfolio-item:not(.hide)',
			        animate: true,
			        animationOptions: {
						duration: speed,
						queue: false
			        }
			 	});
			    sortable_navi.click(function(){
					sortable_navi.removeClass('selected');
					var selectorz = (this.hash).replace('#','.');
			        if(selectorz=='.All') {
						jQuery(this).addClass('selected');
						grid.children('.hide').toggleClass('hide').fadeIn(speed);
			        } else {
						jQuery(this).addClass('selected');
						grid.children().not(selectorz).not('.hide').toggleClass('hide').fadeOut(speed);
						grid.children(selectorz+'.hide').toggleClass('hide').fadeIn(speed);
			        }
			        grid.masonry();
			        return false;
			      });
			     
			    /*Blog grid height*/
				jQuery('.last-blog-item-bg').each(function(){
					var topBoxes = jQuery(this).height();
					if(topBoxes > highBoxes){highBoxes = topBoxes};
				});
				jQuery('.last-blog-item-bg').height(highBoxes);
				
		      
		      jQuery('#arrow-top').click( function(){
		      	jQuery('html, body').animate({scrollTop: jQuery(window).height()-jQuery('#header').height() },{
                    duration: 'slow',
                    easing: 'expoEaseInOut'
            	});
		      });
		      
		      jQuery('#arrow-down,.arrow-top-footer').click( function(){
		      	jQuery('html, body').animate({scrollTop:0},{
                    duration: 'slow',
                    easing: 'expoEaseInOut'
            	});
		      });
			      
		      
		      <?php //skin needed ?>
		      var bgUrl = "<?php echo get_template_directory_uri();?>/skin/<?php echo $sdt_theme_color;?>/stripe-bold<?php  if($sdt_logo_menu_align == "Logo on left") echo "-reverse";?>.png";
		     
		      jQuery('#body-3').css('background-image', 'url(' + bgUrl + ')');1
		      //bg position
			  <?php if($sdt_logo_menu_align == "Logo on right"):?>
		     	 var bgPosX = jQuery(window).width()/2+367;
		      <?php else: ?>
		     	 var bgPosX = jQuery(window).width()/2-1194;
		      <?php endif ?>
		      var bgPosY = jQuery('#header').height()-15;
		      jQuery('#body-3').css({backgroundPosition: bgPosX +'px '+bgPosY+'px'});
			  jQuery('#sidebar').css( 'minHeight',jQuery('#container').height() -16 );
			     
			  //Show arrow if frontpage with slider   
			  <?php wp_reset_query();?>
			  <?php if( (is_front_page() || is_home() || is_page_template( 'blog-right-sidebar.php' )) && $sdt_slide_ena == "yes" ):?>
				  jQuery(window).scroll(function(){
						var h = jQuery(window).height();
					var y = jQuery(window).scrollTop();
					if( y > (h*0.2)){
						jQuery('#arrow-down').fadeIn();
						jQuery('#arrow-top').fadeOut();
					}else{
						jQuery('#arrow-down').fadeOut();
						jQuery('#arrow-top').fadeIn();
					}
				  });   
				  //First state of slider	
				  <?php if($sdt_slide_state == "Closed"):?>	
			      	jQuery('html, body').animate({scrollTop: jQuery(window).height()-jQuery('#header').height() },{
	                    duration: 'slow',
	                    easing: 'expoEaseInOut'
	            	});
				  <?php endif?>
			   <?php endif?>
			   
			   //If using slider in inner page, move arrow
								
			  <?php if( ((is_front_page() || is_home()) && $sdt_slide_ena == "yes") || get_post_meta($post->ID, "bg-option", true) == "The same as main slider" ||  get_post_meta($post->ID, "bg-option-single", true) == "The same as main slider"):?>	   		
						var el=$('#prevs, #nexts');
						var elpos=el.offset().top;
							$(window).scroll(function () {
							    var y=$(this).scrollTop()+50;
							    el.stop().animate({'top':y+elpos}, 400);
							});
			   <?php endif?>			
			// end of window loaded         
		});
				
		jQuery(window).resize(function(){
			  <?php if($sdt_logo_menu_align == "Logo on right"):?>
		     	 var bgPosX = jQuery(window).width()/2+367;
		      <?php else: ?>
		     	 var bgPosX = jQuery(window).width()/2-1194;
		      <?php endif ?>
			  jQuery('#body-3').css({backgroundPosition: (bgPosX)+'px '+(jQuery('#header').height()-16)+'px'});
		});	
    	
    	<?php 
	    	if(is_single()){
	    		$bg_option = get_post_meta($post->ID, "bg-option-single", true);
	    		$bg_spec = get_post_meta($post->ID, "bg-spec-single", true);
	    	}else{
	    		$bg_option = get_post_meta($post->ID, "bg-option", true);
	    		$bg_spec = get_post_meta($post->ID, "bg-spec", true);	
	    	}
    		//Check the current page first
    		if(  (( is_front_page() || is_home()) && ($sdt_slide_ena == "yes" || $sdt_bg_main != "") ) || $bg_option =="The same as main slider" || $bg_option == "Specific image" || $sdt_bg_inner!=""):?>	
			//Supoersized
			jQuery(function($){
				$.supersized({
				
					//Functionality
					slideshow               :   1,		//Slideshow on/off
					autoplay				:	<?php if($sdt_slide_auto_played == 'yes') echo "1"; else echo "0"; ?>,		//Slideshow starts playing automatically
					start_slide             :   1,		//Start slide (0 is random)
					random					: 	0,		//Randomize slide order (Ignores start slide)
					slide_interval          :   <?php echo $sdt_slide_time_interval;?>,	//Length between transitions
					transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	500,	//Speed of transition
					new_window				:	1,		//Image links open in new window/tab
					pause_hover             :   0,		//Pause slideshow on hover
					keyboard_nav            :   1,		//Keyboard navigation on/off
					performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,		//Disables image dragging and right click with Javascript
					image_path				:	'<?php echo get_template_directory_uri();?>/img/supersized/', //Default image path

					//Size  Position
					min_width		        :   0,		//Min width allowed (in pixels)
					min_height		        :   0,		//Min height allowed (in pixels)
					vertical_center         :   1,		//Vertically center background
					horizontal_center       :   1,		//Horizontally center background
					fit_portrait         	:   1,		//Portrait images will not exceed browser height
					fit_landscape			:   0,		//Landscape images will not exceed browser width
					
					//Components
					navigation              :   1,		//Slideshow controls on/off
					thumbnail_navigation    :   1,		//Thumbnail navigation
					slide_counter           :   1,		//Display slide numbers
					slide_captions          :   1,		//Display slide numbers
					slide_title             :   1,		//Slide caption (Pull from "title" in slides array)
					slides 					:  	[ //Slideshow Images
<?php if($bg_option == "The same as main slider" || ( (is_front_page() || is_home()) && $sdt_slide_ena == "yes" ) ):
	$order = explode(",",$sdt_slide_order);
	$arr_size = sizeof($order);
	$j = 1;
	foreach($order as $i){ ?>
		<?php 
			$t1 = "sdt_slide_photo_";
			$t2 = "_link";
			$t3 = "_title";
			$t4 = "_caption";
			
			$temp_photo = $t1.$i;
			$photo = $$temp_photo;
			
			$temp_link = $t1.$i.$t2;
			$link = $$temp_link;		
			
			$temp_title = $t1.$i.$t3;
			$title = $$temp_title;			
			
			$temp_caption = $t1.$i.$t4;
			$caption = $$temp_caption;
		?>
		{image : '<?php echo $photo;?>',url: "<?php echo $link;?>", title : '<?php echo $title;?>', caption : '<?php echo $caption;?>'} <?php if($j < $arr_size) echo ",";?>
		<?php 
		$j++;	
	} //end for 
elseif( (is_front_page() || is_home()) && $sdt_bg_main != "" ): ?>
	{image : '<?php echo $sdt_bg_main;?>' }
<?php elseif($bg_spec!=""): ?>						
	{image : '<?php echo get_site_url()."/".$bg_spec;?>' }				
<?php elseif($sdt_bg_inner != ""): ?>
	{image : '<?php echo get_site_url()."/".$sdt_bg_inner;?>' }
<?php endif?>		
	]
				}); 
		    });
		 <?php endif?>  
</script>