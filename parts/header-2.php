<header class='l-header creative-layout'>
	<div class="top-bar-container contain-to-grid sticky ">
		<nav class="top-bar" data-topbar="">
			<ul class="title-area">
				<li class="name">
					<?php
					$roofing_logo_path = roofing_get_option('roofing_logo_path');
					if ($roofing_logo_path) {
						?>
						<h1><a title="<?php echo bloginfo('name') ?>" rel="home" href="<?php echo esc_url(home_url('/')); ?>">
								<img alt="<?php echo esc_attr__('logo','roofing') ?>" src="<?php echo esc_attr($roofing_logo_path) ?>"></a></h1>
						<?php
					} else {
						?>
						<h2 class="site_tite">
							<a title="<?php echo bloginfo('name') ?>" rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name') ?></a>
						</h2>
						<?php
					}
					?>
				</li>
				<li class="toggle-topbar menu-icon">
					<a href="#"><span><?php echo esc_html__('Menu','roofing'); ?></span></a>
				</li>
			</ul>
			<section class="creative top-bar-section right">
				<div class="hide-for-small creative-social">
					<ul class="social-icons inline-list">
						<?php if (roofing_get_option('roofing_phone', '') != ""): ?>
							<li class="call">
								<i class="fa fa-phone" style="display: inline;"></i><?php echo esc_html__('Call us:','roofing'); ?>
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
								<a href="<?php echo esc_attr(roofing_get_option('roofing_twitter', '')) ?>"><i class="fa fa-twitter"></i></a>
							</li>
						<?php endif ?>
						<?php if (roofing_get_option('roofing_google_plus', '') != ""): ?>
							<li class="googleplus">
								<a href="<?php echo esc_attr(roofing_get_option('roofing_google_plus', '')) ?>"><i class="fa fa-google-plus"></i></a>
							</li>
						<?php endif ?>
					</ul>
				</div>
				<?php wp_nav_menu(array('theme_location' => 'primary', 'walker' => new roofing_top_bar_walker, 'fallback_cb' => 'roofing_main_menu_fallback')) ?>
			</section>
		</nav>

	</div>

</header>