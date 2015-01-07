<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}

	//get_header();

	get_map_js(map_venue_lat(), map_venue_lon(), 2, cal_url().'/img/pins/default.png');

include('wp_header.php');?>

</head>
<body onload="map_init()" id="top" itemscope itemtype="http://schema.org/WebPage" class="home blog custom-background">
<?php
include('wp_body_top.php');
?>

	<section>

		<div id="map_menu">
			<?php get_map_menu();?>
		</div>
		<div id="map_list" class="map_list_withoutlist" style="display:none;"></div>
		<div id="map_canvas" class="map_canvas_withoutlist" style="width:auto;"></div>
	</section>

</div></div>

<div class="sidebar-frame">

    <div class="sidebar">
	<?php get_side(); ?>

</div></div>
</div></div>

	<?php get_footer(); ?>