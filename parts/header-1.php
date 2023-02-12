<header class=" wd-menu3-header ">
	<div class="show-for-medium-up wd-menu3-logo">
		<?php
		$roofing_logo_path = roofing_get_option('roofing_logo_path');
		if ($roofing_logo_path) {
			?>
			<h1><a title="<?php echo bloginfo('name') ?>" rel="home" href="<?php echo esc_url(home_url('/')); ?>">
					<img alt="logo" src="<?php echo esc_attr($roofing_logo_path) ?>"></a></h1>
			<?php
		} else {
			?>
			<h2 class="site_tite">
				<a title="<?php echo bloginfo('name') ?>" rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name') ?></a>
			</h2>
			<?php
		}
		?>
	</div>
	<div class=" wd-menu3-nav">
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'walker' => new roofing_top_bar_walker, 'fallback_cb' => 'roofing_main_menu_fallback')) ?>
			</section>
		</nav>
	</div>
	<div class="show-for-large-up triongle"></div>
	<div class="show-for-large-up wd-menu3-social">
		<ul class="social-icons inline-list">
			<?php if (roofing_get_option('roofing_phone', '') != ""): ?>
				<li class="call">
					<i class="fa fa-phone" style="display: inline;"></i> Call us:
					<span><?php echo html_entity_decode(roofing_get_option('roofing_phone', '')); ?></span>
				</li>
			<?php endif ?>
			<?php if (roofing_get_option('roofing_phone', '') != ""): ?>
				<li class="call"><?php echo esc_html__('Call us: ', 'roofing');
					echo html_entity_decode(roofing_get_option('roofing_phone', '')); ?>
				</li>
			<?php endif ?>
			<?php if (roofing_get_option('roofing_facebook', '') != ""): ?>
				<li class="facebook">
					<a href="<?php echo esc_url(roofing_get_option('roofing_facebook', '')) ?>"><i class="fa fa-facebook"></i></a>
				</li>
			<?php endif ?>
			<?php if (roofing_get_option('roofing_twitter', '') != ""): ?>
				<li class="twitter">
					<a href="<?php echo esc_url(roofing_get_option('roofing_twitter', '')) ?>"><i class="fa fa-twitter"></i></a>
				</li>
			<?php endif ?>
			<?php if (roofing_get_option('roofing_google_plus', '') != ""): ?>
				<li class="googleplus">
					<a href="<?php echo esc_url(roofing_get_option('roofing_google_plus', '')) ?>"><i class="fa fa-google-plus"></i></a>
				</li>
			<?php endif ?>
		</ul>
	</div>

</header>