<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}

	//get_header();

	digest_venue_map_js();

include('wp_header.php');?>
</head>
<body onload="map_init()" id="top" itemscope itemtype="http://schema.org/WebPage" class="home blog custom-background">
<?php
include('wp_body_top.php');
?>

	<div id="fb-root"></div>

	<section id="digest">
		<?php digest_welcome();?>

		<hr />

		<article class="dgst dgst_bdr">
			<h3>Latest Calendar Updates:</h3>
			<?php digest_event_list(12,1,'%B %d');?>

		</article>
		<article class="dgst">
			<div id="map_canvas_single"></div>
			<?php digest_location_list(5);?>

		</article>

		<hr />

		<article class="dgst_news">
			<h3>Recent Newsletters:</h3>
			<?php digest_newsletter_list(5, '%A, %b %d');?>

		</article>

		<?php get_comments('',cal_url().'/index.php?com=digest',cal_name().' Recent Updates',1);?>

	</section>

</div></div>

<div class="sidebar-frame">

    <div class="sidebar">
	<?php get_side(); ?>

</div></div>
</div></div>

	<?php get_footer(); ?>