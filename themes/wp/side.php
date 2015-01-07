<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}?>

		<div class='widget wow fadeIn widget_text'>
		<?php cal_menu();?>
		</div>

		<div class='widget wow fadeIn widget_text'>
		<?php mini_cal_month();?>
		</div>

		<div class='widget wow fadeIn widget_text'>
		<div class="setting"><?php select_language(0);?></div>
		</div>

		<div class='widget wow fadeIn widget_text'>
		<a href="javascript:;" onmouseover="toggleList(0);" id="hc_l" class="on">Featured</a>
		<a href="javascript:;" onmouseover="toggleList(1);" id="hc_c" class="off">Most Popular</a>
		<a href="javascript:;" onmouseover="toggleList(2);" id="hc_r" class="off">Newest</a>

		<div id="hc_featured">
		<?php event_list(0);?>

		</div>

		<div id="hc_popular" style="display:none;">
		<?php event_list(1);?>

		</div>

		<div id="hc_newest" style="display:none;">
		<?php event_list(2);?>

		</div>
		</div>

		<div class='widget wow fadeIn widget_text'>
		<h2>Theme: <?php select_theme();?></h2>

		<h2>&nbsp;</h2>
		<?php theme_links();?>

