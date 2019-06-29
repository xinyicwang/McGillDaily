<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

	<?php dynamic_sidebar( 'right-sidebar' ); ?>

	<div class="col-md-3 widget-area">
		<div class="container" style="border: 1px solid blue;">
			<div class="ad-space" style="width: 300px; height: 250px;">
				test
			</div>
		</div>
	</div>

</div><!-- #secondary -->
