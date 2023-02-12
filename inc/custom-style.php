<?php
$roofing_custom_css = "";
$roofing_custom_css .= "";
//______________ background header pages ______________________________
global $wp_query;
global $post;
define('roofing_PAGE_ID', 0);
if (!roofing_is_blog()) {
  if (is_object($wp_query) && is_object($wp_query->post) && isset($wp_query->post->ID)) {
    $GLOBALS['roofing_PageID'] = $wp_query->post->ID;
  } else {
    $GLOBALS['roofing_PageID'] = '';
  }
} else {
  $GLOBALS['roofing_PageID'] = get_option('page_for_posts');
}

$roofing_page_bg_img = get_post_meta($GLOBALS['roofing_PageID'], 'roofing_page_title_area_bg_img', true);

if ($roofing_page_bg_img != '') {
  $roofing_custom_css .= "
			.wd-title-bar {
				background:url(" . $roofing_page_bg_img . ") no-repeat #6DD676;
				background-size:cover;
			}
		";
}
$roofing_page_title_color = get_post_meta($GLOBALS['roofing_PageID'], 'roofing_page_title_color', true);
if ($roofing_page_title_color != '') {
  $roofing_custom_css .= "
			.wd-title-bar div h2,
			.wd-title-bar div h5 {
				color: " . $roofing_page_title_color . ";
			}
		";
}
//______________ background header single pages ______________________________
if(!is_404()) {
    $bg_single_post = get_post_meta($post->ID, 'roofing_page_title_area_bg_img', true);
}


if (!empty($bg_single_post)) {
  $roofing_single_post_bg_img = $bg_single_post;
  $roofing_custom_css .= "
			.single-post .wd-title-bar {
				background:url(" . $roofing_single_post_bg_img . ") no-repeat #6DD676;
				background-size:cover;
			}
		";

} elseif (roofing_get_option('roofing_bg_single_post_path', '') != '') {
  $roofing_single_post_bg_img = roofing_get_option('roofing_bg_single_post_path', '');
  $roofing_custom_css .= "
			.single-post .wd-title-bar {
				background:url(" . $roofing_single_post_bg_img . ") no-repeat #6DD676;
				background-size:cover;
			}
		";

}


//______________ Typography  ______________________________
if ((roofing_get_option('roofing_body_font_familly', 'Open Sans') != 'default') && (roofing_get_option('roofing_body_font_familly', 'Open Sans') != false)) {
  $roofing_custom_css .= "body ,body p {
    	font-family :'" . roofing_get_option('roofing_body_font_familly', 'Open Sans') . "';
    	font-weight :" . roofing_get_option('roofing_body_font_weight', '400') . ";
    }";
} else {
  $roofing_custom_css .= "body ,body p {
    	font-family: 'Open Sans', sans-serif;
    	font-weight :" . roofing_get_option('roofing_body_font_weight', '400') . ";
    }";
}
if ((roofing_get_option('roofing_body-font-size', '14') != 'default') && (roofing_get_option('roofing_body-font-size', '14') != false)) {
  $roofing_custom_css .= "body p {
    	font-size :" . roofing_get_option('roofing_body-font-size', '14') . "px;
    }";
}
if ((roofing_get_option('roofing_head_font_familly', 'Raleway') != 'default') && (roofing_get_option('roofing_head_font_familly', 'Raleway') != false)) {
  $roofing_custom_css .= "h1, h2, h3, h4, h5, h6, .menu-list a {
    	font-family :'" . roofing_get_option('roofing_head_font_familly', 'Raleway') . "';
    	font-weight :" . roofing_get_option('roofing_heading-font-weight-style', '700') . ";
    }";
} else {
  $roofing_custom_css .= "h1, h2, h3, h4, h5, h6, .menu-list a {
    	font-family: 'Open Sans', sans-serif;
    	font-weight :" . roofing_get_option('roofing_heading-font-weight-style', '400') . ";
    }";
}

if (roofing_get_option('roofing_navigation_font_familly', 'Raleway') != "default") {
  $roofing_custom_css .= ".top-bar-section ul li > a {
				font-family : '" . roofing_get_option('roofing_navigation_font_familly', 'Raleway') . "';
			}";
} else {
  $roofing_custom_css .= ".top-bar-section ul li > a {
				font-family: 'Open Sans', sans-serif;
			}";
}
if (roofing_get_option('roofing_navigation-font-weight-style', '400') != "") {
  $roofing_custom_css .= ".top-bar-section ul li > a {
				font-weight : " . roofing_get_option('roofing_navigation-font-weight-style', '400') . ";
			}";
}

if (roofing_get_option('roofing_navigation-transform', 'normal') != "") {
  $roofing_custom_css .= ".top-bar-section ul li > a {
				text-transform : " . roofing_get_option('roofing_navigation-transform', 'normal') . ";
			}";
}
if ((roofing_get_option('roofing_navigation-font-size', '14') != 'default') && (roofing_get_option('roofing_navigation-font-size', '14') != false)) {
  $roofing_custom_css .= ".top-bar-section ul li > a {
    	font-size :" . roofing_get_option('roofing_navigation-font-size', '14') . "px;
    }";
}
if (roofing_get_option('roofing_heading-transform', 'normal') != "") {
  $roofing_custom_css .= "h1, h2, h3, h4, h5, h6, .menu-list a {
				text-transform : " . roofing_get_option('roofing_heading-transform', 'normal') . ";
			}";
}
if (roofing_get_option('roofing_text-transform', 'normal') != "") {
  $roofing_custom_css .= "body ,body p {
				text-transform : " . roofing_get_option('roofing_text-transform', 'normal') . ";
			}";
}


//_______________ background Primary color___________________________
$roofing_custom_css .= "
					.primary-color,#filters li:hover,#filters li:first-child, #filters li:focus, #filters li:active,
					.wd-section-blog-services.style-3 .wd-blog-post h4:after,
					.box-icon img, .box-icon i,
					button:hover, button:focus, .button:hover, .button:focus,
					button, .button,
					.wd-latest-news .wd-image-date span strong,
					.wd-section-blog.style2 h4:after,
					.pricing-table.featured .title,
					.accordion .accordion-navigation > a, .accordion dd > a,
					.searchform #searchsubmit,.wd-pagination span,.blog-page .quote-format blockquote,
					.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
					.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
					.products .product .button,
					.woocommerce #content input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt,
					.woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce-page #content input.button.alt,
					.woocommerce-page #respond input#submit.alt, .woocommerce-page a.button.alt,
					.woocommerce-page button.button.alt, .woocommerce-page input.button.alt,
					.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, 
					.woocommerce a.button:hover, .woocommerce button.button:hover, 
					.woocommerce input.button:hover, .woocommerce-page #content input.button:hover, 
					.woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover,
					.woocommerce-page button.button:hover, .woocommerce-page input.button:hover,
					.woocommerce span.onsale, .woocommerce-page span.onsale,
					.woocommerce-page button.button, .widget_product_search #searchsubmit, .widget_product_search #searchsubmit:hover,
					.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button
					{
						background:" . roofing_get_option('roofing_primary_color', '#83ca13') . ";
					}
	";
//_______________ svg stroke Primary color___________________________
$roofing_custom_css .= "
	.wd-section-blog-services.style-3 .wd-blog-post .shape {
		stroke: " . roofing_get_option('roofing_primary_color', '#83ca13') . "
	}
	";

$roofing_custom_css .= "
	.wd-menu3-logo {
		border-top: 70px solid " . roofing_get_option('roofing_nav_bg_color', '#83ca13') . "
	}
	";
$roofing_custom_css .= "
        .creative-layout .contain-to-grid.sticky {
          background: linear-gradient(180deg, " . roofing_get_option('roofing_nav_bg_color', 'rgba(0,0,0,0.45)') . " 0px,rgba(0,0,0,0) 97%);
        }
    ";

$roofing_custom_css .= "
	.triongle {
		background-color: " . roofing_get_option('roofing_nav_bg_color', '#83ca13') . "
	}
	";


//_______________ text Primary color___________________________
$roofing_custom_css .= "
			
			.blog-page .read-more-link,
			#wp-calendar a,.wd-testimonail blockquote cite,
			.list-icon li:before
			{
				color:" . roofing_get_option('roofing_primary_color', '#83ca13') . ";
			}
	
	";
//_______________ background secondary Primary color___________________________
$roofing_custom_css .= "
		.hvr-underline-from-center:before,
		.hvr-outline-in:before
			{
				border-color:" . roofing_get_option('roofing_secondary_color', '#83ca13') . ";
			}
    .creative-layout .top-bar-section ul li > a, .wd-menu3-nav .top-bar-section ul li > a{
			color:" . roofing_get_option('roofing_nav_color', '#fff') . ";
		}
		.top-bar-section li.active_menu:not(.has-form) a:not(.button), 
		.creative-layout .top-bar-section ul li:hover:not(.has-form) > a,
		.top-bar-section ul li:hover:not(.has-form) > a, 
    .top-bar-section .dropdown li:hover:not(.has-form):not(.active) > a:not(.button){
			color:" . roofing_get_option('roofing_nav_hover_color', '') . ";
		}
		.creative-layout .contain-to-grid.sticky.fixed{
			background-color: " . roofing_get_option('navigation_bg_color_sticky', 'RGBA(0, 0, 0, 0.8)') . ";
		}
		.creative-layout .fixed .top-bar-section ul li > a{
			color:" . roofing_get_option('navigation_color_sticky', '') . ";
		}
		.creative-layout .fixed .top-bar-section ul li > a:hover {
    border-bottom: 1px solid " . roofing_get_option('navigation_color_hover_sticky', '') . ";
    }
		.top-bar-section .has-dropdown>a:after {
		  border-color:" . roofing_get_option('roofing_nav_color', 'rgba(255, 255, 255, 1)') . 'transparent transparent transparent' . ";
		}
		.creative-layout .fixed .top-bar-section ul li > a:hover, 
		.creative-layout .fixed .top-bar-section ul li.active_menu:not(.has-form) > a,
		.fixed .top-bar-section .dropdown li:hover:not(.has-form):not(.active) > a:not(.button){
			color:" . roofing_get_option('navigation_color_hover_sticky', '') . ";
		}
	";

$roofing_custom_css .= "
		.wd-footer, .wd-copyright {
		    background: rgb(44, 44, 44) url(" . roofing_get_option('roofing_footer_bg_path', '') . ");
		    background-size: cover;
		    background-position: bottom;
		}
	";
//_______________ custom css ___________________________
$roofing_custom_css .= roofing_get_option('roofing_theme_custom_css', '');