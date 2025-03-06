<?php
function my_enqueue_styles()
{
	wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('ress'), false, 'all');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

// アイキャッチ画像の有効化
add_action('init', function() {
	add_theme_support('post-thumbnails');
});