<?php 

$dir = esc_url(get_template_directory_uri());

$args = array(
    'flex-width'    => true,
	'width'         => 980,
	'flex-width'    => true,
	'height'        => 200,
    'default-image' => $dir . '/images/main.jpg',
    'uploads'       => true,
    'video' => true,
    );
    add_theme_support( 'custom-header', $args );






?>