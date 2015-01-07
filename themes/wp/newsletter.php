<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}

	//get_header();

include('wp_header.php');?>
</head>
<body id="top" itemscope itemtype="http://schema.org/WebPage" class="home blog custom-background">
<?php
include('wp_body_top.php');
?>

	<section>
		<div class="newsTools">
			<?php news_link_archive();?>
		</div>
		<?php echo news_lang('Welcome');?>

		<fieldset style="text-align:center;">
			<br />
			<?php news_link_signup();?>
				<span style="margin:0px 25px 0px 25px;">|</span>
			<?php news_link_edit();?>
			<br /><br />
		</fieldset>
	</section>

</div></div>

<div class="sidebar-frame">

    <div class="sidebar">
	<?php get_side(); ?>

</div></div>
</div></div>

	<?php get_footer(); ?>