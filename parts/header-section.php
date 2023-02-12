<?php 
$roofing_menu_style = roofing_get_option('roofing_menu_style','corporate');

if(isset($_GET['header']) && $_GET['header'] ){
	$roofing_menu_style = $_GET['header'];
}

if($roofing_menu_style == 'simple') {
	get_template_part('parts/header-1');
}else{
	get_template_part('parts/header-2');
}