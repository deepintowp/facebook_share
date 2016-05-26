<?php 


//Plugin Name: Custon FB Button

function fb_button_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			
	),$atts,'fb_button'));
	
return '<button onclick="fabsharepost()">Facebook Share</button>';
}
add_shortcode('fb_button','fb_button_shortcode');

function open_winwos_scripts(){
	?>
	<script type="text/javascript">  
	
	function fabsharepost(){
		
		var myWindow = window.open("https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>", "", "width=400,height=400");
		
	}
	
	</script>
	<?php
}

add_action('wp_footer','open_winwos_scripts');