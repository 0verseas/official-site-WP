<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

remove_action('wp_head', 'wp_generator');

remove_action('wp_head', 'rsd_link');

remove_action('wp_head', 'wlwmanifest_link');

function wptls_cstm_favicn() {
    ?>
        <link rel="icon" type="image/x-icon" href="https://dev.overseas.ncnu.edu.tw/wp-content/uploads/2022/05/cropped-overseas_LOGO_512.webp" />
    <?php
}
add_action('wp_head', 'wptls_cstm_favicn');

