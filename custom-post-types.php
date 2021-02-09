<?php // ====== Work
add_action( 'init', 'custom_post_type_work', 0 );
function custom_post_type_work() {

    $labels = array(
        'name'                => _x( 'Work', 'Post Type General Name',  'silverlessstudio' ),
        'singular_name'       => _x( 'Work',  'Post Type Singular Name', 'silverlessstudio' ),
        'menu_name'           => __( 'Work',              'silverlessstudio' ),
        'parent_item_colon'   => __( 'Parent Work',        'silverlessstudio' ),
        'all_items'           => __( 'All Work',          'silverlessstudio' ),
        'view_item'           => __( 'View Work',          'silverlessstudio' ),
        'add_new_item'        => __( 'Add New Work',       'silverlessstudio' ),
        'add_new'             => __( 'Add Work',           'silverlessstudio' ),
        'edit_item'           => __( 'Edit Work',          'silverlessstudio' ),
        'update_item'         => __( 'Update Work',        'silverlessstudio' ),
        'search_items'        => __( 'Search Work',        'silverlessstudio' ),
        'not_found'           => __( 'Not Found',          'silverlessstudio' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'silverlessstudio' )
    );

    $args = array(
        'label'               => __( 'work', 'silverlessstudio' ),
        'description'         => __( 'Work', 'silverlessstudio' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail' ),
        'menu_icon'           => 'dashicons-admin-multisite',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'work', $args );
}

add_action( 'init', 'taxonomy_type', 0 );

// ====== Type Taxonomy
function taxonomy_type() {

    $labels = array(
        'name'              => _x( 'Type', 'taxonomy general name' ),
        'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Types'   ),
        'all_items'         => __( 'All Types'     ),
        'parent_item'       => __( 'Parent Type'   ),
        'parent_item_colon' => __( 'Parent Type:'  ),
        'edit_item'         => __( 'Edit Type'     ),
        'update_item'       => __( 'Update Type'   ),
        'add_new_item'      => __( 'Add New Type'  ),
        'new_item_name'     => __( 'New Type' ),
        'menu_name'         => __( 'Types'         )
    );

    register_taxonomy( 'type', array( 'work' ), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'type', 'hierarchical' => true )
    ));
}
