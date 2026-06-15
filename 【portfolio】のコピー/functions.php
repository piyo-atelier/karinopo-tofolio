<?php

function piyo_files() {

    wp_enqueue_style(
        'ress',
        'https://unpkg.com/ress/dist/ress.min.css'
    );

    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        array('ress')
    );
}

add_action('wp_enqueue_scripts', 'piyo_files');