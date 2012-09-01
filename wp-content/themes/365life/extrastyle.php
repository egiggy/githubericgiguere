<?php //Get value form user's setting ?>
<?php include (TEMPLATEPATH.'/get-option.php'); ?>
		
	
		#body-2{
			<?php if( (is_front_page() || is_home()) && $sdt_slide_ena == "yes" ):?>
				margin-top: -150px;
			<?php endif?> 
		}
		#body-3{
			background-repeat:  no-repeat;
		}
		<?php //header ?>
		#header .logo{
			<?php if($sdt_logo_menu_align == "Logo on right"):?>
				float: right;
			<?php else: ?>
				float: left;
			<?php endif?>
			margin-top: <?php echo $sdt_logo_margin_top; ?>px;
			margin-left: <?php echo $sdt_logo_margin_right; ?>px;
			margin-right: <?php echo $sdt_logo_margin_right; ?>px;
		}
		
		
		<?php // ?>
		#container-inner-main{
			width: 700px;
		}
		
		a{
			color: #<?php echo $sdt_link_color;?>;
		}
		a:hover{
			color: #<?php echo $sdt_link_color_hover;?>;
		}
		.portfolio-link a{
			color: #<?php echo $sdt_title_color;?>;
		}
		
		
		<?php //menu position ?>
		.nav-wrapper{	
			<?php if($sdt_logo_menu_align == "Logo on right"):?>
				float: left;
			<?php else: ?>
				float: right;
			<?php endif?>
			margin-top: <?php echo $sdt_menu_margin_top;?>px;
			margin-left: <?php echo $sdt_menu_margin_left;?>px;
			margin-right: <?php echo $sdt_menu_margin_left;?>px;
		}
			
		
		<?php //slider ?>
			<?php if($sdt_slide_show_arrow != "yes"):?>	
				#prevs, #nexts{
					visibility: hidden;
				}
			<?php endif?>
			<?php //Slider Shortcodes?>
			
			
			<?php if($sdt_slide_style == "With nothing"):?>
				.nivo-controlNav {
					display: none;
				}
			<?php endif?>
			a.nivo-nextNav, a.nivo-prevNav {
				background-color: #<?php echo $sdt_element_color; ?> !important;
				opacity:0.8;
			    filter:alpha(opacity=80); /* For IE8 and earlier */
			}
			#slider2 .nivo-controlNav a {
				display:block;
				width:6px;
				height:6px;
				background: url('<?php echo get_template_directory_uri();?>/css/bullets.png') no-repeat -6px 0;
				text-indent:-9999px;
				border:0;
				margin-right:10px;
				float:left;
			}
			#slider2 .nivo-controlNav a.active {
				background-position:0px 0;
			}	
			
			#slider-wrapper .slider-content{	
				margin: 0px auto 0px;
			}
			
    		<?php 
	    		if(is_single()){
		    		$bg_option = get_post_meta($post->ID, "bg-option-single", true);
		    	}else{
		    		$bg_option = get_post_meta($post->ID, "bg-option", true);	
		    	}
		    	
    		if( ((is_front_page() || is_home() ) &&  $sdt_slide_ena != "yes") || $bg_option =="No background"):?>	
			 	#supersized-loader{
			 		display: none;
			 	}
		 	<?php endif ?>

			#supersized{
				position: fixed;
			}
		
		<?php //tag cloud link ?> 
			.tagcloud a{
				color: #<?php echo $sdt_sidebar_link_color;?> !important;
			}	
			.tagcloud a:hover{
				color: #<?php echo $sdt_sidebar_link_color_hover;?> !important;
			}
			#footer .tagcloud a{
				color: #<?php echo $sdt_footer_link_color;?> !important;
			}
			#footer .tagcloud a:hover{
				color: #<?php echo $sdt_footer_link_color_hover;?> !important;			
			}
			#wp-calendar td a{
				font-weight: bold;
				color: #<?php echo $sdt_link_color;?>;
			}
			#wp-calendar td a:hover{
				color: #<?php echo $sdt_link_color_hover;?>;
			}
		
		
		<?php //skin needed ?>
		
			<?php
			//assign color
				if($sdt_theme_color == "yellow"):
					$color = "f8c101";
				elseif($sdt_theme_color == "red"):
					$color = "E42B23";
				elseif($sdt_theme_color == "orange"):
					$color = "E77927";
				elseif($sdt_theme_color == "pink"):
					$color = "DE264C";
				elseif($sdt_theme_color == "purple"):
					$color = "82025A";
				elseif($sdt_theme_color == "blue"):
					$color = "00b5f8";
				elseif($sdt_theme_color == "green"):
					$color = "C0CF3A";
				elseif($sdt_theme_color == "white"):
					$color = "FFFFFF";
				elseif($sdt_theme_color == "black"):
					$color = "333333";
			?>	
					.day, .month, .year{
						color: #fff !important;
					}	
					<?php 	
				endif
					
			?>
			
		<?php //current nav style?>
			li.current-menu-item a ,li.current-menu-parent a{
				<?php if($sdt_theme_color == "black"):?>
					color: #fff !important;
				<?php else:?>
					color: #000 !important;		
				<?php endif?>
				font-weight: bold;
				background: #<?php echo $color?>;
			}
			.menu-wrapper li.current-menu-item ul li a,.menu-wrapper li.current-menu-parent ul li a{
				border-top: 0px !important;
		    	background: url('img/bg-menu2.png');
			}		
			li ul li.current-menu-item a,li ul li.current-menu-parent a{		
				border-bottom: 0px !important;
			}	
			.menu-wrapper ul li a:hover, .menu-wrapper ul li:hover > a{			
				<?php if($sdt_theme_color == "black"):?>
					color: #fff !important;
				<?php else:?>
					color: #000 !important;		
				<?php endif?>
				background: #<?php echo $color?>;
			}
			.menu-wrapper ul li ul li a{			
				border-bottom: 0px !important;
			}
			.menu-wrapper ul li ul li:hover > a{	
				border-bottom: 0px !important;
				background: url('img/bg-menu2.png');
			}
			.menu-wrapper ul li ul li a:hover{
				color: #<?php echo $color?> !important;
			}	
			
		
			#container{
				background-image: url('<?php echo get_template_directory_uri();?>/skin/<?php echo $sdt_theme_color;?>/stripe-thin.png');
				background-repeat: no-repeat;
				background-position: center 300px;
				background-attachment:fixed;
					
			}
			.blog-non-thumb{
				background: #<?php echo $color?>;
				width: 220px;
				height: 220px;
			}
			.blog-detail-wrapper, .post-date-wrapper-single{
				background: <?php echo '#'.$color;?> <?php if($sdt_theme_color != "black"):?>url('<?php echo get_template_directory_uri();?>/img/blog-date-shadow.png') no-repeat top left<?php endif?>;
				display: block;
				float: left;
			}
			#sidebar{
				border-top: 1px <?php echo '#'.$color;?> solid;
			}
			#searchinput{
				border-left: 3px <?php echo '#'.$color;?> solid;
			}
			.last-blog-item-link a, .blog-excerpt-wrapper .title-wrapper h4 a{
				color: <?php echo '#'.$color;?>;
			}
			.last-blog-item-link a:hover, .blog-excerpt-wrapper .title-wrapper h4  a:hover{
				color: <?php echo '#'.hexLighter($color,50);?>;
			}
			.port-hover-tl{
				background: url('<?php echo get_template_directory_uri();?>/skin/<?php echo $sdt_theme_color;?>/port-hover-tl.png') no-repeat;
			}
			.port-hover-br{
				background: url('<?php echo get_template_directory_uri();?>/skin/<?php echo $sdt_theme_color;?>/port-hover-br.png') no-repeat;
			}
			.last-port-title h3{
				color: <?php echo '#'.$color;?> !important;
			}
			
			.pagination .current{
				background: <?php echo '#'.$color; ?>;
			}
						
			.post-comment-single {
				background: url('<?php echo get_template_directory_uri();?>/img/comment<?php if($sdt_theme_color == "white")echo "-gr";?>.png') no-repeat;
			}
		<?php //Font using ?>		
			h1, h2, h3, h4, h5, h6{		
				font-family: '<?php echo $sdt_heading_font;?>';
			}		
			
			.last-port-item-link h4, .last-port-title  h3, .last-blog-title  h3, .heading-up .header, .heading .header, .heading .caption{		
				font-family: '<?php echo $sdt_heading_font;?>' !important;
			}
		<?php if($sdt_body_font != "Default"):?>
			body,p,pre,div,span{
					font-family: '<?php echo $sdt_body_font;?>' !important;
			}
		<?php endif?>		
			.bar-title h2, .bar-title h5{
				font-family: '<?php echo $sdt_caption_font;?>' !important;
			}
			.slider-title{	
				font-family: '<?php echo $sdt_slider_font;?>' !important;
			}	
		
	
		<?php //sidebar ?>
			#sidebar .sidebar-inner h3{
				color: #<?php echo $sdt_sidebar_title_color;?>;
			
			}
			#sidebar .sidebar-inner a, .last-post-wrapper-widget .blog-title h4 a{		
				color: #<?php echo $sdt_sidebar_link_color;?>;
			}
			#sidebar .sidebar-inner a:hover{
			
				color: #<?php echo $sdt_sidebar_link_color_hover;?>;
			}
		
		
		<?php //single left sidebar layout?>
		<?php if($sdt_post_layout== "Left Sidebar"): ?>	
		#single .page-wrapper{
			float: right;			
			margin: 30px 40px 0px 25px;
		}
		<?php endif ?>
		
	
		<?php //Footer link?>
		#footer a{
				color: #<?php echo $sdt_footer_link_color;?>;
				text-decoration: none;
			}
		#footer a:hover{
				color: #<?php echo $sdt_footer_link_color_hover;?>;
			}
		#footer .footer-inner h1,#footer .footer-inner h2{
			margin: 10px 0px;
			color: #<?php echo $sdt_footer_title_color;?> ;
			font-size: 17px;
		}
		
		
		
	<?php //Header Color ?>
		 h1, h2, h3, h4, h5, h6{
				color: #<?php echo $sdt_title_color;?>;
				font-weight: normal;
			}
	
	
	<?php if(isCufon($sdt_heading_font)):?>
		h1,h2,h3,h4,h5,h6{
			margin-bottom: 17px;
		}
		.last-port-item-link h4{
		}
		.last-blog-item-link h4{	
		}
		#page .title-wrapper h4{	
			padding-bottom: 3px;	
			margin-bottom: 0px
		}
	<?php endif?>
	
	
	<?php //stunning color ?>
	<?php if(!$sdt_stunning_text_below_ena):?>
	#footer .footer-bg-top2{
			background: none;
	}
	<?php endif ?>
	.stunning-icon{
		float: right;
		margin-top: <?php echo $sdt_stunning_image_top_margin;?>px;
		margin-right: <?php echo $sdt_stunning_image_right_margin;?>px;
	}
	.stunning-button .stunning-button-text{
		color: #<?php echo $sdt_stunning_link_color;?> !important;
		background-color: #<?php echo $sdt_stunning_button_color;?>;
		border-color: #<?php echo $sdt_stunning_button_color;?>;
	} 
	#stunning-text-inner h2{
		font-family: '<?php echo $sdt_stunningU_font;?>' !important;
		color: #<?php echo $sdt_stunning_color;?>;	
	}	
	#stunning-text-inner h3{
		font-family: '<?php echo $sdt_stunningU_font;?>' !important;
		color: #<?php echo $sdt_stunning_caption_color;?>;	
	}
	#front-manager  h1,#front-manager  h2,#front-manager  h3,#front-manager  h4,#front-manager  h5,#front-manager  h6{
			color: #<?php echo $sdt_title_color;?>;
		}
	#front-manager .dropcap h1{
		color: #333;
	}
	
	.dropcap, .dropcap_circle{
			color: #<?php echo $sdt_title_color;?>;
	}
	
	
	
		<?php //Button Style?>			
		.button,.button:hover, .button_big,.button_big:hover{			
			color:  #<?php echo $sdt_button_text_color;?>; 
			background-color: #<?php echo $sdt_button_color;?>; 
			border: 1px #<?php echo $sdt_button_color;?> solid;
		}
		
