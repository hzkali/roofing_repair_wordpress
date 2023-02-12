<?php 
vc_map( array(
    "name" => esc_html__("Wd Empty Space", 'roofing'),
    "base" => "wd_empty_spaces",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true,
    "is_container" => FALSE,
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__("Height in Mobile", 'roofing'),
            "param_name" => "height_mobile",
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Height in Tablet", 'roofing'),
            "param_name" => "height_tablet",
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Height in Desktop", 'roofing'),
            "param_name" => "height_desktop",
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Extra Classes", 'roofing'),
            "param_name" => "extra_classes",
        )
    )
) );