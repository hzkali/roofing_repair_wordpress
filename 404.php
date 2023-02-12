<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta content="ie=edge, chrome=1" http-equiv="x-ua-compatible" />
		<meta http-equiv="ImageToolbar" content="false" />
		<meta name="viewport" content="width=device-width" />
		<?php if(roofing_get_option('webdevia_favicon_icon_path','')!= '') { ?>
		 <link rel="shortcut icon" href="<?php echo esc_url(roofing_get_option('webdevia_favicon_icon_path','')); ?>" />
		<?php } ?>
	<?php wp_head(); ?>
	</head>
	<body>
		


  	<div class="corp">
		<div class="row">
			<section class="oops">
				<h2><?php echo esc_html__('Oops!!','roofing'); ?></h2>
			</section>
			<section>
				<p class="message">
					<?php echo esc_html__('It looks like that page no longer exists. Would you like to go to','roofing'); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><strong><?php echo esc_html__('Home page','roofing'); ?></strong></a>  <?php echo esc_html__('instead?','roofing'); ?>
				</p>
			</section>
			<section class="large-6 columns">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="serch" method="get">
					   <input type="text" class="text-input" id="s" name="s" value="<?php echo esc_attr__('Search','roofing'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					   <input  type="submit" class="submit-input" value="<?php echo esc_attr__('Search','roofing'); ?>">
				    </form>
			</section>
		</div>	
	</div>
	<div class="oops-footer">
		<ul class="row social-icons accent inline-list">
					<?php if (roofing_get_option('roofing_facebook','') != ""): ?>
						<li class="facebook">
							<a href="<?php echo esc_url(roofing_get_option('roofing_facebook', '')); ?>"><i class="fa fa-facebook"></i></a>
						</li>
					<?php endif ?>
					<?php if (roofing_get_option('roofing_twitter','') != ""): ?>
						<li class="twitter">
							<a href="<?php echo esc_url(roofing_get_option('roofing_twitter', '')); ?>"><i class="fa fa-twitter"></i></a>
						</li>
					<?php endif ?>
					<?php if (roofing_get_option('roofing_google_plus','') != ""): ?>
						<li class="twitter">
							<a href="<?php echo esc_url(roofing_get_option('roofing_google_plus', '')); ?>"><i class="fa fa-google"></i></a>
						</li>
					<?php endif ?>
					
				</ul>
	</div>

	<?php wp_footer(); ?> 
</body>
</html>