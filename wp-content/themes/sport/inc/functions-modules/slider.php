<?php

add_action('init', function () {
    register_post_type('slider', [
        'labels'             => [
            'name'               => 'Sliders', // Основное название типа записи
            'singular_name'      => 'Slider', // отдельное название записи типа Book
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new slider',
            'edit_item'          => 'Edit slider',
            'new_item'           => 'New slider',
            'view_item'          => 'View slider',
            'search_items'       => 'Find slider',
            'not_found'          => 'Sliders not found',
            'not_found_in_trash' => 'No sliders found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Sliders'

        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        //'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        //'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        //'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail', 'post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        //'taxonomies'          => [],
        //'has_archive'         => true,
        //'rewrite'             => ['with_front' => false,],
        //'query_var'           => true,
    ]);
});
