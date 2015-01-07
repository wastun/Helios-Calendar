<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}

	//get_header();

include('wp_header.php');?>

</head>
<body onload="map_init()" id="top" itemscope itemtype="http://schema.org/WebPage" class="home blog custom-background">
<?php
include('wp_body_top.php');
?>
	<section>
		<fieldset id="signin">
			<legend>Select Your Account to Sign In</legend>
		<?php
			twitter_signin_button();
			facebook_signin_button();
			google_signin_button();?>

			<p>
				Event submissions will be associated with the account you sign in with.<br />Sign in with that account again to update your events.
			</p>
		</fieldset>
	</section>

</div></div>

<div class="sidebar-frame">

    <div class="sidebar">
	<?php get_side(); ?>

</div></div>
</div></div>

	<?php get_footer(); ?>