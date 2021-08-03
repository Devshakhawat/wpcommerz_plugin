<?php
namespace Wpcommerz;

class Wpcommerz_Meta_Boxes {
    public function __construct() {
        add_action( 'add_meta_boxes', [ $this, 'wpcommerz_custom_metas' ] );
        add_action( 'save_post', [ $this, 'wpcommerz_save_meta_box_data' ] ); 
    } 

    /**
     * custom metas
     *
     * @since 1.0.0
     */
    public function wpcommerz_custom_metas() {
        add_meta_box( 
            'wpcommerz-advanced-meta',
            esc_html__( 'Settings', 'wpcommerz' ), 
            [ $this, 'custom_meta_callback' ],
            'wpcommerzgroup'
        );
    } 

    /**
     * metabox callback
     *
     * @since 1.0.0
     */
    public function custom_meta_callback( $post ) {
        $style          = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_style', true ) );
        $position       = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_position', true ) );
        $labelplacement = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_labelplacement', true ) );
        $instruction    = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_instruction', true ) );
        $number         = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_number', true ) );
        $desc           = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_desc', true ) );
        
        include_once WPCOMMERZ_DIR . '/templates/custom-meta-boxes-settings.php';
    } 

    /**
     * Save metabox data
     *
     * @since 1.0.0
     */
    public function wpcommerz_save_meta_box_data( $post_id ) {
        
        $style            = isset( $_REQUEST['style'] ) ? sanitize_text_field( $_REQUEST['style'] ) : '';
        $position         = isset( $_REQUEST['position'] ) ? sanitize_text_field( $_REQUEST['position'] ) : '';
        $labelplacement   = isset( $_REQUEST['labelplace'] ) ? sanitize_text_field( $_REQUEST['labelplace'] ) : '';
        $instruction      = isset( $_REQUEST['instruction'] ) ? sanitize_text_field( $_REQUEST['instruction'] ) : '';
        $number           = isset( $_REQUEST['number'] ) ? sanitize_text_field( $_REQUEST['number'] ) : '';
        $desc             = isset( $_REQUEST['desc'] ) ? sanitize_text_field( $_REQUEST['desc'] ) : '';

        update_post_meta( $post_id, 'wpcommerz_meta_style', $style );
        update_post_meta( $post_id, 'wpcommerz_meta_position', $position );
        update_post_meta( $post_id, 'wpcommerz_meta_labelplacement', $labelplacement );
        update_post_meta( $post_id, 'wpcommerz_meta_instruction', $instruction );
        update_post_meta( $post_id, 'wpcommerz_meta_number', $number );
        update_post_meta( $post_id, 'wpcommerz_meta_desc', $desc );
        
    } 
}