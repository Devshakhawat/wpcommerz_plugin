<?php
namespace Wpcommerz;

/**
 * Added custom field
 *
 * @since 1.0.0
 */
class Wpcommerz_Custom_Post {
    public function __construct() {
        add_action( 'admin_menu', [ $this, 'add_menu_at_admin' ] );
        add_action( 'init', [ $this, 'wpcommerz_custom_field' ] );
    } 

    /**
     * add menu page
     *
     * @since 1.0.0
     */
    public function add_menu_at_admin() {
        add_menu_page( 
            __( 'Advanced Custom Field', 'Wpcommerz' ),
            __( 'Advanced Custom Field', 'Wpcommerz' ),
            'manage_options',
            'edit.php?post_type=wpcommerzgroup',
            null
     );
    }  

    /**
     * Add custom field
     *
     * @since 1.0.0
     */
    public function wpcommerz_custom_field() {
      
        $labels = array(
            'name'                  => __( 'Courses', 'droit-lms' ),
            'singular_name'         => __( 'Course',  'droit-lms' ),
            'menu_name'             => __( 'Course',  'droit-lms' ),
            'name_admin_bar'        => __( 'Course', 'droit-lms' ),
            'add_new'               => __( 'Add New', 'droit-lms' ),
            'add_new_item'          => __( 'Add New Course', 'droit-lms' ),
            'new_item'              => __( 'New Course', 'droit-lms' ),
            'edit_item'             => __( 'Edit Course', 'droit-lms' ),
            'view_item'             => __( 'View Course', 'droit-lms' ),
            'all_items'             => __( 'All Courses', 'droit-lms' ),
            'search_items'          => __( 'Search Courses', 'droit-lms' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => false,
            'query_var'          => true,
            'rewrite'            => false,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        );
          
        register_post_type( 'wpcommerzgroup', $args );
    } 
}
