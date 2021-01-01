<?php
/*
Plugin Name: _ANDYP - Admin - Themes
Plugin URI: https://londonparkour.com
Description: Adds custom color themes for the admin dashboard.
Version: 1.0.0
Author: Andy Pearson
Author URI: https://londonparkour.com
*/

function andyp_additional_admin_color_schemes() {


    wp_admin_css_color( 
        'dev', 
        __( 'dev.londonparkour.com' ),
        plugins_url( '/', __FILE__ ) . '/css/dev.londonparkour.com.css' ,
        [ '#242424', '#53A5E3', '#E86546' ],
    );


    wp_admin_css_color( 
        'pulse', 
        __( 'dev.pulse.londonparkour.com' ),
        plugins_url( '/', __FILE__ ) . '/css/dev.pulse.londonparkour.com.css' ,
        [ '#242424', '#E86546', '#FAFAFA' ],
    );


    wp_admin_css_color( 
        'labs', 
        __( 'dev.labs.londonparkour.com' ),
        plugins_url( '/', __FILE__ ) . '/css/dev.labs.londonparkour.com.css' ,
        [ '#242424', '#38EF7D', '#ffffff' ],
    );

}
add_action( 'admin_init', 'andyp_additional_admin_color_schemes' );


// Switch based on domain.

add_filter('get_user_option_admin_color', 'switch_admin_scheme');

function switch_admin_scheme($result) {

    $site = get_site_url();
    
    // Dev: use 'dev' color scheme
    if((strpos($site, 'dev.londonparkour.com') !== false)) {
        return 'dev';
    } 
    
    if((strpos($site, 'labs.londonparkour.com') !== false)) {
        return 'labs';
    }
    
    if((strpos($site, 'pulse.londonparkour.com') !== false)) {
        return 'pulse';
    }

    return 'dev';
    
} ?>