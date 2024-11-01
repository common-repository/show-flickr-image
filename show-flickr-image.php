<?php
/*
Plugin Name: Show Flickr Image
Plugin URI: http://izeroone.com/plugins/show-flickr-image/
Description: Let visitors in China can see the Flickr Images you put in your post. The plugin replace the flickr image's default url to the available url which can be access in Mainland China.
Author: ZeroOne
Author URI: http://izeroone.com
Version: 1.2
*/ 

function show_flickr_image($text) {
  $exchangeSource = array(
		"/<img(.+?)src=\"http:\/\/static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm1\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm2\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm3\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm4\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm5\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm6\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm7\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm8\.static\.flickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm1\.staticflickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm2\.staticflickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm3\.staticflickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm4\.staticflickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm5\.staticflickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm6\.staticflickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm7\.staticflickr\.com\/(.*?)\"(.*?)>/i",
		"/<img(.+?)src=\"http:\/\/farm8\.staticflickr\.com\/(.*?)\"(.*?)>/i"
		);
	$exchangeDest = array(
		"<img$1src=\"http://ch1.farm1.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://ch1.farm1.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://ch1.farm2.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://ac4.farm3.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://ac4.farm4.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://ac4.farm5.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://bf1.farm6.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://bf1.farm7.static.flickr.com/$2\"$3>",
		"<img$1src=\"http://bf1.farm8.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://ch1.farm1.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://ch1.farm2.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://ac4.farm3.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://ac4.farm4.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://ac4.farm5.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://bf1.farm6.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://bf1.farm7.staticflickr.com/$2\"$3>",
		"<img$1src=\"http://bf1.farm8.staticflickr.com/$2\"$3>"
	);
	$text = preg_replace($exchangeSource,$exchangeDest,$text);
	return $text;
}

add_filter('the_content', 'show_flickr_image');
add_filter('the_excerpt', 'show_flickr_image');

?>
