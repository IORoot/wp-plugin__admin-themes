<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Admin - Remove Comments',
        'icon'      => 'monitor-dashboard',
        'color'     => '#b71c1c',
        'path'      => __FILE__,
    ]);
} );