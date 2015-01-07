<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}

	event_browse_valid(1);

//	get_header();

include('wp_header.php');?>
</head>
<body class="home blog custom-background">
<?php
include('wp_body_top.php');
?>

	<section id="events">
		<?php event_browse(1);?>

	</section>


	<div id="filter">
		<?php mini_search('Search Events by Keyword',0);?>

		<?php cal_filter();?>

	</div>

</div></div>

<div class="sidebar-frame">

    <div class="sidebar">
	<?php get_side(); ?>

</div></div>
</div></div>

	<?php get_footer(); ?>