<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php
	if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
		if ( roofing_get_option( 'roofing_favicon_icon_path', '' ) != '' ) { ?>
			<link rel="shortcut icon" href="<?php echo esc_url(roofing_get_option( 'roofing_favicon_icon_path', '' )); ?>"/>
		<?php }
	} ?>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header-section') ?>