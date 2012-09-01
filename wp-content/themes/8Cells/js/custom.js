/*
	Easy plugin to get element index position
	Author: Peerapong Pulpipatnan
	http://themeforest.net/user/peerapong
*/

(function($) {

	$.fn.krioImageLoader = function(options) {
    	var opts = $.extend({}, $.fn.krioImageLoader.defaults, options);
		var imagesToLoad = $(this).find("img")
									.css({opacity: 0, visibility: "hidden"})
									.addClass("krioImageLoader");
		var imagesToLoadCount = imagesToLoad.size();

		var checkIfLoadedTimer = setInterval(function() {
			if(!imagesToLoadCount) {
				clearInterval(checkIfLoadedTimer);
				return;
			} else {
				imagesToLoad.filter(".krioImageLoader").each(function() {
					if(this.complete) {
						fadeImageIn(this);
						imagesToLoadCount--;
					}
				});
			}
		}, opts.loadedCheckEvery);

		var fadeImageIn = function(imageToLoad) {
			$(imageToLoad).css({visibility: "visible"})
							.animate({opacity: 1}, 
								opts.imageEnterDelay, 
								removeKrioImageClass(imageToLoad));
		};

		var removeKrioImageClass = function(imageToRemoveClass) {
			$(imageToRemoveClass).removeClass("krioImageLoader");
		};
	};

	$.fn.krioImageLoader.defaults = {
		loadedCheckEvery: 350,
		imageEnterDelay: 900
	};

})(jQuery);

var $j = jQuery.noConflict();

$j.fn.getIndex = function(){
	var $jp=$j(this).parent().children();
    return $jp.index(this);
}

$j.fn.setNav = function(){
	$j('#main_menu li ul').css({display: 'none'});

	$j('#main_menu li').each(function()
	{	
		var $jsublist = $j(this).find('ul:first');
		
		$j(this).hover(function()
		{	
			$jsublist.css({opacity: 1});
			
			$jsublist.stop().css({overflow:'hidden', height:'auto', display:'none'}).fadeIn(200, function()
			{
				$j(this).css({overflow:'visible', height:'auto', display: 'block'});
			});	
		},
		function()
		{	
			$jsublist.stop().css({overflow:'hidden', height:'auto', display:'none'}).fadeOut(200, function()
			{
				$j(this).css({overflow:'hidden', display:'none'});
			});	
		});

	});
	
	$j('#main_menu li').each(function()
	{
		
		$j(this).hover(function()
		{	
			$j(this).find('a:first').addClass('hover');
		},
		function()
		{	
			$j(this).find('a:first').removeClass('hover');
		});	
		
	});
	
	$j('#menu_wrapper .nav ul li ul').css({display: 'none'});

	$j('#menu_wrapper .nav ul li').each(function()
	{
		
		var $jsublist = $j(this).find('ul:first');
		
		$j(this).hover(function()
		{	
			$jsublist.css({opacity: 1});
			
			$jsublist.stop().css({overflow:'hidden', height:'auto', display:'none'}).fadeIn(200, function()
			{
				$j(this).css({overflow:'visible', height:'auto', display: 'block'});
			});	
		},
		function()
		{	
			$jsublist.stop().css({overflow:'hidden', height:'auto', display:'none'}).fadeOut(200, function()
			{
				$j(this).css({overflow:'hidden', display:'none'});
			});	
		});	
		
	});
	
	$j('#menu_wrapper .nav ul li').each(function()
	{
		
		$j(this).hover(function()
		{	
			$j(this).find('a:first').addClass('hover');
		},
		function()
		{	
			$j(this).find('a:first').removeClass('hover');
		});	
		
	});
}

$j(function () {

    	$j('.slideshow').anythingSlider({
    	        easing: "easeInOutExpo",
    	        autoPlay: false,
    	        startStopped: false,
    	        animationTime: 600,
    	        hashTags: false,
    	        buildNavigation: true,
    	        buildArrows: false,
    			pauseOnHover: true,
    			startText: "Go",
    	        stopText: "Stop"
    	    });
    	    
    });

$j(document).ready(function(){ 

	$j(document).setNav();
	
	$j('.img_frame').fancybox({ 
		padding: 10,
		overlayColor: '#fff',
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8
	});
	
	$j('.pp_gallery a').fancybox({ 
		padding: 10,
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8
	});
	
	$j('.flickr li a').fancybox({ 
		padding: 10,
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8
	});
	
	$j('.lightbox').fancybox({ 
		padding: 10,
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8
	});
	
	$j('.lightbox_youtube').fancybox({ 
		padding: 10,
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8
	});
	
	$j('.lightbox_vimeo').fancybox({ 
		padding: 10,
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8
	});
	
	$j('.lightbox_dailymotion').fancybox({ 
		padding: 10,
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8
	});
	
	$j('.lightbox_iframe').fancybox({ 
		padding: 10,
		type: 'iframe',
		overlayColor: '#fff', 
		transitionIn: 'fade',
		transitionOut: 'fade',
		overlayOpacity: .8,
		width: 900,
		height: 650
	});
	
	$j('a[rel=gallery]').fancybox({ 
		padding: 10,
		overlayColor: '#fff', 
		overlayOpacity: .8
	});
	
	if(BrowserDetect.browser == 'Explorer' && BrowserDetect.version < 8)
	{
		var zIndexNumber = 1000;
		$j('div').each(function() {
			$j(this).css('zIndex', zIndexNumber);
			zIndexNumber -= 10;
		});

		$j('#thumbNav').css('zIndex', 1000);
		$j('#thumbLeftNav').css('zIndex', 1000);
		$j('#thumbRightNav').css('zIndex', 1000);
		$j('#fancybox-wrap').css('zIndex', 1001);
		$j('#fancybox-overlay').css('zIndex', 1000);
	}
	
	$j(".pp_accordion_close").accordion({ active: 1, collapsible: true, clearStyle: true });
	
	$j(".pp_accordion").accordion({ active: 0, collapsible: true, clearStyle: true });
	
	$j(".tabs").tabs();
	
	$j('.post_img').hover(function()
	{  
 		$j(this).animate({'opacity': 0.6}, 300);
 	}
	,function()
	{	
		$j(this).animate({'opacity': 1}, 100);
	});  
  		
	
	$j('.pp_gallery a img').hover(function()
	{  
 			$j(this).animate({top: '-3px'}, 100);
 		}  
  		, function(){  
  		
  			$j(this).animate({top: '0px'}, 100);
  		}  
  		
	);
	
	$j('.home_portfolio_grid').hover(function(){  
 			$j(this).animate({top: '-5px'}, 300);
 		}  
  		, function(){  
  		
  			$j(this).animate({top: '5px'}, 300);
  		}  
  		
	);
	
	$j('.card_portfolio_grid').hover(function(){  
 			$j(this).animate({top: '-10px'}, 300);
 		}  
  		, function(){  
  		
  			$j(this).animate({top: '0px'}, 300);
  		}  
  		
	);
	
	$j('.pp_accordion').hover(function(){  
			$j(this).animate({boxShadow: '4px 4px 0px 0px rgba(150, 150, 150, 0.1)'});
 		}  
  		, function(){  
  			$j(this).animate({boxShadow: '0 0 0 #f9f9f9'});
  		}  
	);
	
	$j('.pp_accordion_close').hover(function(){  
			$j(this).animate({boxShadow: '4px 4px 0px 0px rgba(150, 150, 150, 0.1)'});
 		}  
  		, function(){  
  			$j(this).animate({boxShadow: '0 0 0 #f9f9f9'});
  		}  
	);
	
	if(BrowserDetect.browser != 'Explorer')
 	{
		$j('#slider_wrapper').hover(function(){  
				$j('.nivo-controlNav').fadeIn();
 			}  
  			, function(){  
  				$j('.nivo-controlNav').fadeOut();
  			}  
  			
		);
		
		$j('.nivo_border').hover(function(){  
				$j('.nivo-controlNav').fadeIn();
 			}  
  			, function(){  
  				$j('.nivo-controlNav').fadeOut();
  			}  
  			
		);
	}
	else
	{
		$j('#slider_wrapper').hover(function(){  
				$j('.nivo-controlNav').show();
 			}  
  			, function(){  
  				$j('.nivo-controlNav').hide();
  			}  
  			
		);
		
		$j('.nivo_border').hover(function(){  
				$j('.nivo-controlNav').show();
 			}  
  			, function(){  
  				$j('.nivo-controlNav').hide();
  			}  
  			
		);
	}
	
	$j('.tipsy').tipsy({fade: false, gravity: 's'});
	
	var footerLi = 0;
	$j('#footer .sidebar_widget li.widget').each(function()
	{
		footerLi++;
		
		if(footerLi%$j('#pp_footer_style').val() == 0)
		{ 
			$j(this).addClass('last');
		}
	});
	
	$j('#content_wrapper .sidebar .content .sidebar_widget li .widgettitle').each(function()
	{
		var currentContent = $j(this).html();
		$j(this).html('<span>'+currentContent+'</span>');
	});
	
	$j('.cufon').each(function()
	{
		var currentContent = $j(this).html();
		$j(this).html('<span>'+currentContent+'</span>');
	});
	
	$j('.portfolio-content div.project').each(function()
	{
		$j(this).hover(function()
		{	
			$j(this).find('a .overlay_detail').animate({'opacity': 0.9}, 300);
			$j(this).find('a .overlay_detail *').css('visibility', 'visible');
		},
		function()
		{	
			$j(this).find('a .overlay_detail').animate({'opacity': 0}, 100);
			$j(this).find('a .overlay_detail *').css('visibility', 'hidden');
		});		
	});
	
	$j('#home_portfolios div').each(function()
	{
		$j(this).hover(function()
		{	
			$j(this).find('a .overlay_detail').animate({'opacity': 0.9}, 300);
			$j(this).find('a .overlay_detail *').css('visibility', 'visible');
		},
		function()
		{	
			$j(this).find('a .overlay_detail').animate({'opacity': 0}, 100);
			$j(this).find('a .overlay_detail *').css('visibility', 'hidden');
		});		
	});
	
	$j('div[title=home_portfolios] div').each(function()
	{
		$j(this).hover(function()
		{	
			$j(this).find('a .overlay_detail').animate({'opacity': 0.9}, 300);
			$j(this).find('a .overlay_detail *').css('visibility', 'visible');
		},
		function()
		{	
			$j(this).find('a .overlay_detail').animate({'opacity': 0}, 100);
			$j(this).find('a .overlay_detail *').css('visibility', 'hidden');
		});	
	});
	
	VideoJS.setupAllWhenReady({
      controlsBelow: false, // Display control bar below video instead of in front of
      controlsHiding: true, // Hide controls when mouse is not over the video
      defaultVolume: 0.85, // Will be overridden by user's last volume if available
      flashVersion: 9, // Required flash version for fallback
      linksHiding: true // Hide download links when video is supported
    });
	
	$j('.home_portfolio img.frame').each(function()
	{
		$j(this).hover(function()
		{	
			$j(this).animate({top: '-10px'}, 300);
		},
		function()
		{	
			$j(this).animate({top: 0}, 300);
		});	
	});
	
	$j('#searchform input[type=text]').attr('title', 'Type keywords and hit enter...');
	
	$j('.html5_wrapper').hide();
	
	$j('input[title!=""]').hint();
	
	$j('textarea[title!=""]').hint();
	
	$j('.portfolio_title').tipsy({fade: true, gravity: 's'});
	
	$j('a.portfolio_image.gallery').tipsy({fade: true, gravity: 's'});
	
	$j('.tagline').css('visibility', 'visible');
	
	// Clone applications to get a second collection
	var $jdata = $j(".portfolio-content").clone();
	var pp_portfolio_sorting = $j('#pp_portfolio_sorting').val();

	$j('.portfolio-main li').click(function(e) {
	
		$j(".filter li").removeClass("active");	
		// Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
		var filterClass=$j(this).attr('class').split(' ').slice(-1)[0];
		
		if (filterClass == 'all-projects') {
			var $jfilteredData = $jdata.find('.project');
		} else {
			var $jfilteredData = $jdata.find('.project[data-type~=' + filterClass + ']');
		}
		$j(".portfolio-content").quicksand($jfilteredData, {
			duration: 500,
			easing: pp_portfolio_sorting,
			useScaling: false,
    		enhancement: function() {
    			$j('.img_frame').fancybox({ 
					padding: 10,
					overlayColor: '#fff',
					transitionIn: 'fade',
					transitionOut: 'fade',
					overlayOpacity: .8
				});
				
				$j('.lightbox_youtube').fancybox({ 
					padding: 10,
					overlayColor: '#fff', 
					transitionIn: 'fade',
					transitionOut: 'fade',
					overlayOpacity: .8
				});
				
				$j('.lightbox_vimeo').fancybox({ 
					padding: 10,
					overlayColor: '#fff', 
					transitionIn: 'fade',
					transitionOut: 'fade',
					overlayOpacity: .8
				});
    		
      			$j('.portfolio-content div.project').each(function()
				{
					$j(this).hover(function()
					{	
						$j(this).find('a .overlay_detail').animate({'opacity': 0.9}, 300);
						$j(this).find('a .overlay_detail *').css('visibility', 'visible');
					},
					function()
					{	
						$j(this).find('a .overlay_detail').animate({'opacity': 0}, 100);
						$j(this).find('a .overlay_detail *').css('visibility', 'hidden');
					});
				});
    		}
		});	
		$j(this).addClass("active"); 
					
		return false;
	});
	
	$j.validator.setDefaults({
		submitHandler: function() { 
		    var actionUrl = $j('#contact_form_widget').attr('action');
		    
		    $j.ajax({
  		    	type: 'GET',
  		    	url: actionUrl,
  		    	data: $j('#contact_form_widget').serialize(),
  		    	success: function(msg){
  		    		$j('#contact_form_widget').hide();
  		    		$j('#reponse_msg').html(msg);
  		    	}
		    });
		    
		    return false;
		}
	});
		    
		
	$j('#contact_form_widget').validate({
		rules: {
		    your_name: "required",
		    email: {
		    	required: true,
		    	email: true
		    },
		    message: "required"
		},
		messages: {
		    your_name: "Please enter your name",
		    email: "Please enter a valid email address",
		    agree: "Please enter some message"
		}
	});	
	
	$j('#galleria').galleria({
        width:960,
        height:500,
        transition: 'fade'
    });
    
    $j('pre').each(function()
	{
		preContent = $j(this).html();
	});
 	
 	if(BrowserDetect.browser != 'Explorer')
 	{
 		$j('#content_wrapper').krioImageLoader();
 	}
 	
 	Cufon.replace('h1.cufon');
	Cufon.replace('h2.cufon');
	Cufon.replace('h2.quote');
	Cufon.replace('h2.widgettitle');
	Cufon.replace('h3.cufon');
	Cufon.replace('h4.cufon');
	Cufon.replace('h5.cufon');
	Cufon.replace('h6.cufon');
	Cufon.replace('.tagline');
	Cufon.replace('#searchform label');
	Cufon.replace('.dropcap1');
	Cufon.replace('.ui-accordion-header');
	Cufon.replace('.post_header h3');
	Cufon.replace('.filtertitle');
	
});