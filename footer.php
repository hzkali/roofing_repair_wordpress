

	<section class="wd-footer clearfix">
		<div class="row animation-parent" data-animation-delay="180">

					<?php
						  $roofing_footer_columns = roofing_get_option('roofing_footer_columns','three _columns');
						  switch ($roofing_footer_columns) {
							  case "one_columns":
								  $column_one = 12;
								  break;
							  case "tow_a_columns":
								  $column_one = 4;
								  $column_tow = 8;
								  break;
							  case "tow_b_columns":
								  $column_one = 8;
								  $column_tow = 4;
								  break;
							  case "tow_c_columns":
								  $column_one = 6;
								  $column_tow = 6;
								  break;
							  default:
								  $column_one = 4;
								  $column_tow = 4;
								  $column_three = 4;
						  } ?>

	            <div class="block large-<?php echo esc_attr($column_one) ?> medium-<?php echo esc_attr($column_one) ?> columns " >
	               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?><?php endif; ?>
	            </div>

						  <?php if($roofing_footer_columns == 'tow_a_columns' || $roofing_footer_columns == 'tow_b_columns' || $roofing_footer_columns == 'tow_c_columns' || $roofing_footer_columns == 'three_columns') {  ?>
		            <div class="block large-<?php echo esc_attr($column_tow) ?> medium-<?php echo esc_attr($column_tow) ?> columns " >
		               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?><?php endif; ?>
		            </div>
						  <?php }  ?>

	            <?php if( $roofing_footer_columns == 'three_columns' ) {  ?>
		            <div class="block large-<?php echo esc_attr($column_three) ?> medium-<?php echo esc_attr($column_three) ?> columns " >
		               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-3') ) : ?><?php endif; ?>
		            </div>
	            <?php }  ?>

		</div>

		<footer class="wd-copyright">
			<div class="row">
				<div class="large-12 columns">
						<?php wp_nav_menu( array('theme_location' => 'footer','container_class' => 'copyright-menu', 'fallback_cb' => 'roofing_main_menu_fallback' )) ?>

				</div>
				<div class="copyright large-12 columns">
					<?php
						 $roofing_copyright = roofing_get_option('roofing_copyright','© 2019 Roofing inc. All rights reserved.');
					?>
					<p>
						<?php echo html_entity_decode($roofing_copyright) ?>
					</p>
				</div>
			</div>
		</footer>
	</section>

<?php wp_footer() ?>
</body>
</html>
