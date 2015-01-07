<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}

	set_cat_cols(3);

	//get_header();

	get_form_validation();

include('wp_header.php');?>
</head>
<body id="top" itemscope itemtype="http://schema.org/WebPage" class="home blog custom-background">
<?php
include('wp_body_top.php');
?>

	<section>
		<?php get_form();?>

	</section>

</div></div>

<div class="sidebar-frame">

    <div class="sidebar">
	<?php get_side(); ?>

</div></div>
</div></div>

	<?php get_footer(); ?>