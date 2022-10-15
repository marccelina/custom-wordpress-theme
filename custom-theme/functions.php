<?php

function scripts() {
    wp_enqueue_style( 'custom-wordpress-style', get_template_directory_uri() . '/dist/styles.css', array(), 1);
}
add_action( 'wp_enqueue_scripts', 'scripts' );

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'acf_init_blocks');
}
    function acf_init_blocks()
{

    acf_register_block_type(array(
        'name' => 'Section with boxes',
        'title' => __('Section with boxes'),
        'render_template' => 'template-parts/section-with-boxes.php',
        'icon' => 'list-view',
    ));
}


