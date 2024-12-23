<?php

add_action('after_setup_theme', function () {
    register_nav_menu('header', 'Menu in header bar');
});


add_filter('nav_menu_css_class', function ($classes, $menu_item, $args, $depth) {
    $newClasses = ['nav-item'];
    return $newClasses;
}, 10, 4);

add_filter('nav_menu_item_id', function ($menu_id, $item, $args, $depth) {
    return '';
}, 10, 4);

add_filter('nav_menu_link_attributes', function ($atts, $item, $args, $depth) {


    if ($item->current) {
        $class = 'nav-link active';
        $atts['class'] = isset($atts['class']) ? "{$atts['class']} $class" : $class;
    } else {
        $class = 'nav-link';
        $atts['class'] = isset($atts['class']) ? "{$atts['class']} $class" : $class;
    }

    return $atts;
}, 10, 4);
