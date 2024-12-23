<?php

add_action('init', function () {
    register_post_type('gallery', [
        'labels'             => [
            'name'               => 'Galleries', // Основное название типа записи
            'singular_name'      => 'Gallery', // отдельное название записи типа Book
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new gallery',
            'edit_item'          => 'Edit gallery',
            'new_item'           => 'New gallery',
            'view_item'          => 'View gallery',
            'search_items'       => 'Find gallery',
            'not_found'          => 'Galleries not found',
            'not_found_in_trash' => 'No galleries found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Galleries'

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
        'supports'            => ['title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        //'taxonomies'          => [],
        //'has_archive'         => true,
        //'rewrite'             => ['with_front' => false,],
        //'query_var'           => true,
    ]);
});
