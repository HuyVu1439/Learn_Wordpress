<?php
/**
 * @package Make
 */

// Bail if this isn't being included inside of a MAKE_SocialIcons_ManagerInterface.
if ( ! isset( $this ) || ! $this instanceof MAKE_SocialIcons_ManagerInterface ) {
	return;
}

// Font Awesome social brand icons
$this->add_icons( array(
	'500px.com'          => array( 'title' => _x( '500px', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-500px' ) ),
	'amazon.com'         => array( 'title' => _x( 'Amazon', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-amazon' ) ),
	'angel.co'           => array( 'title' => _x( 'AngelList', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-angellist' ) ),
	'app.net'            => array( 'title' => _x( 'App.net', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-adn' ) ),
	'behance.net'        => array( 'title' => _x( 'Behance', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-behance' ) ),
	'bitbucket.org'      => array( 'title' => _x( 'Bitbucket', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-bitbucket' ) ),
	'codepen.io'         => array( 'title' => _x( 'CodePen', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-codepen' ) ),
	'delicious.com'      => array( 'title' => _x( 'Delicious', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-delicious' ) ),
	'deviantart.com'     => array( 'title' => _x( 'DeviantArt', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-deviantart' ) ),
	'digg.com'           => array( 'title' => _x( 'Digg', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-digg' ) ),
	'dribbble.com'       => array( 'title' => _x( 'Dribbble', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-dribbble' ) ),
	'facebook.com'       => array( 'title' => _x( 'Facebook', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-facebook-square' ) ),
	'flickr.com'         => array( 'title' => _x( 'Flickr', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-flickr' ) ),
	'foursquare.com'     => array( 'title' => _x( 'Foursquare', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-foursquare' ) ),
	'github.com'         => array( 'title' => _x( 'GitHub', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-github' ) ),
	'gitlab.com'         => array( 'title' => _x( 'GitLab', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-gitlab' ) ),
	'google.com'         => array( 'title' => _x( 'Google Plus', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-google-plus' ) ),
	'houzz.com'          => array( 'title' => _x( 'Houzz', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-houzz' ) ),
	'instagram.com'      => array( 'title' => _x( 'Instagram', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-instagram' ) ),
	'jsfiddle.net'       => array( 'title' => _x( 'JSFiddle', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-jsfiddle' ) ),
	'last.fm'            => array( 'title' => _x( 'Last.fm', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-lastfm' ) ),
	'leanpub.com'        => array( 'title' => _x( 'Leanpub', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-leanpub' ) ),
	'linkedin.com'       => array( 'title' => _x( 'LinkedIn', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-linkedin' ) ),
	'medium.com'         => array( 'title' => _x( 'Medium', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-medium' ) ),
	'ok.ru'              => array( 'title' => _x( 'Odnoklassniki', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-odnoklassniki' ) ),
	'pinterest.com'      => array( 'title' => _x( 'Pinterest', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-pinterest' ) ),
	'qzone.qq.com'       => array( 'title' => _x( 'QQ', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-qq' ) ),
	'reddit.com'         => array( 'title' => _x( 'Reddit', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-reddit' ) ),
	'renren.com'         => array( 'title' => _x( 'RenRen', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-renren' ) ),
	'slideshare.net'     => array( 'title' => _x( 'SlideShare', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-slideshare' ) ),
	'snapchat.com'       => array( 'title' => _x( 'Snapchat', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-snapchat' ) ),
	'soundcloud.com'     => array( 'title' => _x( 'SoundCloud', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-soundcloud' ) ),
	'spotify.com'        => array( 'title' => _x( 'Spotify', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-spotify' ) ),
	'stackexchange.com'  => array( 'title' => _x( 'StackExchange', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-stack-exchange' ) ),
	'stackoverflow.com'  => array( 'title' => _x( 'StackOverflow', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-stack-overflow' ) ),
	'steamcommunity.com' => array( 'title' => _x( 'Steam', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-steam' ) ),
	'stumbleupon.com'    => array( 'title' => _x( 'StumbleUpon', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-stumbleupon' ) ),
	't.qq.com'           => array( 'title' => _x( 'Tencent Weibo', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-tencent-weibo' ) ),
	'trello.com'         => array( 'title' => _x( 'Trello', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-trello' ) ),
	'tripadvisor.com'    => array( 'title' => _x( 'TripAdvisor', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-tripadvisor' ) ),
	'tumblr.com'         => array( 'title' => _x( 'Tumblr', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-tumblr' ) ),
	'twitch.tv'          => array( 'title' => _x( 'Twitch', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-twitch' ) ),
	'twitter.com'        => array( 'title' => _x( 'Twitter', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-twitter' ) ),
	'viadeo.com'         => array( 'title' => _x( 'Viadeo', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-viadeo' ) ),
	'vimeo.com'          => array( 'title' => _x( 'Vimeo', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-vimeo' ) ),
	'vine.co'            => array( 'title' => _x( 'Vine', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-vine' ) ),
	'vk.com'             => array( 'title' => _x( 'VK', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-vk' ) ),
	'weibo.com'          => array( 'title' => _x( 'Sina Weibo', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-weibo' ) ),
	'weixin.qq.com'      => array( 'title' => _x( 'Wei Xin', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-weixin' ) ),
	'wordpress.com'      => array( 'title' => _x( 'WordPress', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-wordpress' ) ),
	'wordpress.org'      => array( 'title' => _x( 'WordPress', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-wordpress' ) ),
	'xing.com'           => array( 'title' => _x( 'XING', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-xing' ) ),
	'yahoo.com'          => array( 'title' => _x( 'Yahoo', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-yahoo' ) ),
	'yelp.com'           => array( 'title' => _x( 'Yelp', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-yelp' ) ),
	'youtube.com'        => array( 'title' => _x( 'YouTube', 'brand name', 'make' ), 'class' => array( 'fab', 'fa-youtube' ) ),
) );
