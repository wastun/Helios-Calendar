<!doctype html>
<!--[if IE 7]>
<html class="ie ie7" lang="de-DE">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="de-DE">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="<?php echo get_lang_config('HTMLTemplate');?>">
<!--<![endif]-->
<head>
	<meta charset="<?php echo get_lang_config('CharSet');?>">
	<meta http-equiv="preview-refresh" content="3600" />
	<link rel="stylesheet" type="text/css" href="<?php echo cal_url();?>/themes/core.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo theme_dir();?>/css/style.css" />



	<script>
	//<!--
	var listDivs = ["hc_featured","hc_popular","hc_newest"];
	var listLinks = ["hc_l","hc_c","hc_r"];
	function toggleList(show){var i = 0;while(i < listDivs.length){document.getElementById(listDivs[i]).style.display = (i == show) ? "block" : "none";document.getElementById(listLinks[i]).className = (i == show) ? "on" : "off";i++;}}
	window.onscroll = function (e) {var pos = (window.pageYOffset) ? window.pageYOffset : document.documentElement.scrollTop;document.getElementById('bread_top').style.display = (pos > 0) ? 'block' : 'none';}
	//-->
	</script>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>#wastun | Initiative gegen die totale Überwachung</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://wastun.jetzt/xmlrpc.php" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://wastun.jetzt/wp-content/themes/firmness/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="#wastun &raquo; Feed" href="http://wastun.jetzt/feed/" />
<link rel="alternate" type="application/rss+xml" title="#wastun &raquo; Kommentar-Feed" href="http://wastun.jetzt/comments/feed/" />
<link rel='stylesheet' id='blueimp-gallery-css'  href='http://wastun.jetzt/wp-content/plugins/blueimp-lightbox/css/blueimp-gallery.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='blueimp-gallery-indicator-css'  href='http://wastun.jetzt/wp-content/plugins/blueimp-lightbox/css/blueimp-gallery-indicator.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='blueimp-gallery-video-css'  href='http://wastun.jetzt/wp-content/plugins/blueimp-lightbox/css/blueimp-gallery-video.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css'  href='http://wastun.jetzt/wp-content/themes/firmness/style.css?ver=4.1' type='text/css' media='all' />
<link rel='stylesheet' id='firmness-css'  href='http://wastun.jetzt/wp-content/themes/firmness-child/style.css?ver=4.1' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='http://wastun.jetzt/wp-content/themes/firmness/css/responsive.css?ver=4.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://wastun.jetzt/wp-content/themes/firmness/css/font-awesome.css?ver=4.1' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='http://wastun.jetzt/wp-content/themes/firmness/css/animate.css?ver=4.1' type='text/css' media='all' />
<script type='text/javascript' src='http://wastun.jetzt/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-content/themes/firmness/js/superfish.js?ver=4.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-content/themes/firmness/js/supersubs.js?ver=4.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-content/themes/firmness/js/jquery.flexslider.js?ver=4.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-content/themes/firmness/js/tinynav.js?ver=4.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-content/themes/firmness/js/jquery.refineslide.js?ver=4.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-content/themes/firmness/js/imgLiquid.js?ver=4.1'></script>
<script type='text/javascript' src='http://wastun.jetzt/wp-content/themes/firmness/js/wow.js?ver=4.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://wastun.jetzt/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://wastun.jetzt/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.1" />
<!--Custom Styling-->
<style media="screen" type="text/css">
.sidebar .widget .widget-title h4 { color:#111111}
.sidebar .widget .widget-title  { border-bottom: 4px solid #111111}
.sidebar .widget, .sidebar .widget a { color:#777777}
.sidebar .widget_text .widget-title h4 { color:#2298ad}
.sidebar .widget_text .widget-title { border-bottom: 4px solid #2298ad}
.sidebar .widget_text, .sidebar .widget_text a { color:#777777}
.sidebar .widget_tag_cloud .widget-title h4 { color:#111111}
.sidebar .widget_tag_cloud .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_tag_cloud, .sidebar .widget_tag_cloud a { color:#ffffff !important;}
.sidebar .widget_search .widget-title h4 { color:#111111}
.sidebar .widget_search .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget .searchform input#s { border: 1px solid #111111}
.sidebar .widget_search, .sidebar .widget_search a, .sidebar .searchform input#s { color:#777777}
.sidebar .widget_rss .widget-title h4 a { color:#111111}
.sidebar .widget_rss .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_rss, .sidebar .widget_rss a { color:#777777}
.sidebar .widget_recent_entries .widget-title h4 { color:#111111}
.sidebar .widget_recent_entries .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_recent_entries, .sidebar .widget_recent_entries a { color:#777777}
.sidebar .widget_recent_comments .widget-title h4 { color:#111111}
.sidebar .widget_recent_comments .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_recent_comments, .sidebar .widget_recent_comments a { color:#777777}
.sidebar .widget_pages .widget-title h4 { color:#111111}
.sidebar .widget_pages .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_pages, .sidebar .widget_pages a { color:#777777}
.sidebar .widget_meta .widget-title h4 { color:#111111}
.sidebar .widget_meta .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_meta, .sidebar .widget_meta a { color:#777777}
.sidebar .widget_links .widget-title h4 { color:#111111}
.sidebar .widget_links .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_links, .sidebar .widget_links a { color:#777777}
.sidebar .widget_nav_menu .widget-title h4 { color:#111111}
.sidebar .widget_nav_menu .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_nav_menu, .sidebar .widget_nav_menu a { color:#777777}
.sidebar .widget_calendar .widget-title h4 { color:#111111}
.sidebar .widget_calendar .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_calendar, .sidebar .widget_calendar a { color:#777777}
.sidebar .widget_categories .widget-title h4 { color:#111111}
.sidebar .widget_categories .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_categories, .sidebar .widget_categories a { color:#777777}
.sidebar .widget_archive .widget-title h4 { color:#111111}
.sidebar .widget_archive .widget-title { border-bottom: 4px solid #111111}
.sidebar .widget_archive a { color:#777777}
#footer { background-color:#252525}
#copyright { background-color:#252525}
.footer-widget-col h4 { color:#ffffff}
.footer-widget-col h4 { border-bottom: 4px solid #444444}
.footer-widget-col a, .footer-widget-col { color:#ffffff}
.footer-widget-col ul li { border-bottom: 1px solid #444444}
#site-navigation ul li a {font-family:Open Sans}
#site-navigation ul li a {font-size:14px}
#site-navigation ul li a {color:#ffffff}
#site-navigation {background-color:#2298ad}
#site-navigation {border-top: 4px solid #252525}
#site-navigation ul li ul.sub-menu ul.sub-menu {border-bottom: 5px solid #252525}
#site-navigation ul li ul.sub-menu {border-bottom: 5px solid #252525}
#site-navigation ul li a:hover {color:#ffffff}
#site-navigation ul li a:hover, #site-navigation ul li a:focus, #site-navigation ul li a.active, #site-navigation ul li a.active-parent, #site-navigation ul li.current_page_item a { background:#2298ad}
#site-navigation ul li ul.sub-menu { background:#519fad}
.main-navigation ul ul { background-color:#519fad}
.main-navigation li li { background-color:#519fad}
#menu-main-navigation .current-menu-item a { color:#ffffff}
#site-navigation ul li a {text-transform: uppercase;}
.about {color:#111111}
.about {background: none repeat scroll 0 0 #ffffff}
.content-boxes {color:#777777}
.content-boxes {background: none repeat scroll 0 0 #ffffff}
.content-boxes .circle, .feature .circle { background-color:#2298ad}
.boxtitle:after, .section-title:after { background: none repeat scroll 0 0 #2298ad}
.row .row-item .service i.fa { color:#2298ad}
.content-btn, #comments .form-submit #submit, .wpcf7-form p input.wpcf7-submit { background-image: linear-gradient(#fefefe 0%, #2298ad 100%);}
.content-btn, #comments .form-submit #submit, .wpcf7-form p input.wpcf7-submit { background-image: -o-linear-gradient(top, #fefefe 0%, #2298ad 100%);}
.content-btn, #comments .form-submit #submit, .wpcf7-form p input.wpcf7-submit { background-image: -moz-linear-gradient(top, #fefefe 0%, #2298ad 100%);}
.content-btn, #comments .form-submit #submit, .wpcf7-form p input.wpcf7-submit { background-image: -webkit-linear-gradient(top, #fefefe 0%, #2298ad 100%);}
.content-btn, #comments .form-submit #submit, .wpcf7-form p input.wpcf7-submit { background-image: -ms-linear-gradient(top, #fefefe 0%, #2298ad 100%);}
.content-btn, #comments .form-submit #submit, .wpcf7-form p input.wpcf7-submit { background-image: -webkit-gradient(linear, left top, color-stop(0, #fefefe), color-stop(1,#2298ad));}
.content-btn, #comments .form-submit #submit, .wpcf7-form p input.wpcf7-submit { border:1px solid #2298ad;}
.content-btn:hover, #comments .form-submit #submit:hover, .wpcf7-form p input.wpcf7-submit:hover { background-image: linear-gradient(#2298ad 0%, #fefefe 100%);}
.content-btn:hover, #comments .form-submit #submit:hover, .wpcf7-form p input.wpcf7-submit:hover { background-image: -o-linear-gradient(top, #2298ad 0%, #fefefe 100%);}
.content-btn:hover, #comments .form-submit #submit:hover, .wpcf7-form p input.wpcf7-submit:hover { background-image: -moz-linear-gradient(top, #2298ad 0%, #fefefe 100%);}
.content-btn:hover, #comments .form-submit #submit:hover, .wpcf7-form p input.wpcf7-submit:hover { background-image: -webkit-linear-gradient(top, #2298ad 0%, #fefefe 100%);}
.content-btn:hover, #comments .form-submit #submit:hover, .wpcf7-form p input.wpcf7-submit:hover { background-image: -ms-linear-gradient(top, #2298ad 0%, #fefefe 100%);}
.content-btn:hover, #comments .form-submit #submit:hover, .wpcf7-form p input.wpcf7-submit:hover { background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #2298ad), color-stop(1, #fefefe));}
.meta span i, .post-info span i, .sidebar ul.link-pages li i, .sidebar ul.link-pages li.next-link a span, .sidebar ul.link-pages li.previous-link a span, #article p a {color: #2298ad;}
.post-title h3:hover {color: #2298ad;}
.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button { background: none repeat scroll 0 0 #2298ad;}
.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt { background: none repeat scroll 0 0 #2298ad;}
blockquote, address { border-left:4px solid #2298ad;}
input[type="submit"], button { background: #2298ad;}
#social-bar ul li a { color:#111111}
#social-bar ul li a { background: none repeat scroll 0 0 #ffcc00}
.address-box, .phone-box, .phone-box a { color:#111111}
#cart-wrapper #shopping-cart { color:}
#cart-wrapper #shopping-cart a { color:}
.posts-featured-details-wrapper div { background: none repeat scroll 0 0 #ffcc00}
.posts-featured-details-wrapper, .posts-featured-details-wrapper a { color: #111111}
.back-to-top {color:#888888}
.back-to-top i.fa:hover {color:#ffffff}
#logo { margin-top:25px }
#logo { margin-bottom:25px }
#logo { margin-right:25px }
#logo {height:80px }
#logo {width:350px }
#logo {font-weight:700}
#logo .site-description {text-transform: uppercase}
#logo h5.site-description {font-size:16px }
#logo {text-transform: uppercase }
#logo {font-family:Open Sans}
#logo a {color:#111111}
#logo .site-description {color:#111111}
#logo {font-size:50px }
body {font-family:Open Sans !important}
body {font-size:15px !important}
body {color:#777777}
</style>
		<style type="text/css">
		.better-tag-cloud-shortcode li,
		.better-tag-cloud-shortcode li a,
		li#better-tag-cloud ul.wp-tag-cloud li,
		li#better-tag-cloud ul.wp-tag-cloud li a {
			display:	inline;
					}
		</style> <style type="text/css">.broken_link, a.broken_link {
	text-decoration: line-through;
}</style><style type="text/css" id="custom-background-css">
body.custom-background { background-image: url('http://wastun.jetzt/wp-content/themes/firmness/images/assets/default-bg.jpg'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
</style>

<!-- hc function-->
	<script src="<?php echo cal_url();?>/inc/javascript/validation.js"></script>
