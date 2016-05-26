<?php 

// Plugin Name: My FB Share


function myfbshare_js_sdk(){
	?>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1751684625069178";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php
}
add_action('wp_head', 'myfbshare_js_sdk');

function myfbshare_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
			
	),$atts,'fbshare'));
	
return '<div class="fb-share-button" data-href="'.get_the_permalink().'" data-layout="button_count" data-mobile-iframe="true"></div>';
}
add_shortcode('fbshare','myfbshare_shortcode');











