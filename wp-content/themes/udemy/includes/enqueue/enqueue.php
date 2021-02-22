<?php

function ym_enqueue()
{
    $uri = get_theme_file_uri() . '/assets/css';
    $uri_js = get_theme_file_uri() . '/assets/js';
    $ver = YM_DEV_MODE ? time() : false;
    wp_register_style(
        'ym_google_fonts',
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',
        [],
        $ver
    );
    wp_register_style('ym_bootstrap', "{$uri}/bootstrap.css", [], $ver);
    wp_register_style('ym_style', "${uri}/style.css", [], $ver);
    wp_register_style('ym_dark', "${uri}/dark.css", [], $ver);
    wp_register_style('ym_font_icons', "${uri}/font-icons.css", [], $ver);
    wp_register_style('ym_animate', "${uri}/animate.css", [], $ver);
    wp_register_style('ym_magnific_popup', "${uri}/magnific-popup.css", [], $ver);
    wp_register_style('ym_custom', "${uri}/custom.css", [], $ver);
    wp_register_style('ym_responsive', "${uri}/responsive.css", [], $ver);

    wp_enqueue_style('ym_google_fonts');
    wp_enqueue_style('ym_bootstrap');
    wp_enqueue_style('ym_style');
    wp_enqueue_style('ym_dark');
    wp_enqueue_style('ym_font_icons');
    wp_enqueue_style('ym_animate');
    wp_enqueue_style('ym_magnific_popup');
    wp_enqueue_style('ym_custom');
    wp_enqueue_style('ym_responsive');

    wp_register_script('ym_plugins', "{$uri_js}/plugins.js", [], $ver, true);
    wp_register_script('ym_functions', "{$uri_js}/functions.js", [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ym_plugins');
    wp_enqueue_script('ym_functions');
}