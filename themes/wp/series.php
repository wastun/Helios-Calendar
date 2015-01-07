<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}

	$mySeries = series_fetch(1);
	$myMeta = series_meta($mySeries);
	//get_header();

	series_map($mySeries);

include('wp_header.php');?>

	<meta property="og:title" content="<?php echo event_lang('SeriesTitle').' '.$myMeta[0]?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="<?php echo cal_url().'/index.php?com=series&amp;sID='.$myMeta[2];?>"/>
	<meta property="og:image" content="<?php echo cal_url().'/img/like/event.png';?>"/>
	<meta property="og:site_name" content="<?php echo cal_name();?>"/>
	<meta property="og:description" content="<?php echo str_replace('"',"'",cleanBreaks(strip_tags($myMeta[1])));?>"/>

</head>
<body onload="map_init()" id="top" itemscope itemtype="http://schema.org/WebPage" class="home blog custom-background">
<?php
include('wp_body_top.php');
?>

	<div id="fb-root"></div>

	<section id="series">
		<?php series_list($mySeries);?>

	</section>

</div></div>

<div class="sidebar-frame">

    <div class="sidebar">
	<?php get_side(); ?>

</div></div>
</div></div>

	<?php get_footer(); ?>