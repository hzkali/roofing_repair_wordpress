<?php
/**
 * The template for displaying search forms in Roofing
 *
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchform" id="searchform" method="get">
				<div>
					
					<input type="text" id="s" name="s">
					<input type="submit" value="<?php echo esc_attr__('Search','roofing') ?>" id="searchsubmit">
				</div>
</form>