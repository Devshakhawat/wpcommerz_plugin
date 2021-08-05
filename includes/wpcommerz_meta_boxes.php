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

        $post_id = get_the_ID();
        $post_title = get_the_title( $post_id );

            add_meta_box( 
                'wpcommerz-advanced-meta',
                $post_title, 
                [ $this, 'custom_meta_callback' ],
                'wpcommerzgroup'
            );

           wpcommerz_create_metas();
    } 

    /**
     * metabox callback
     *
     * @since 1.0.0
     */
    public function custom_meta_callback( $post ) {

        $inptype    = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_inptype', true ) );
        $location   = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_location', true ) );
        $label      = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_label', true ) );
        
        include_once WPCOMMERZ_DIR . '/templates/custom-meta-boxes-settings.php';
    } 

    /**
     * Save metabox data
     *
     * @since 1.0.0
     */
    public function wpcommerz_save_meta_box_data( $post_id ) {

        $inptype      = isset( $_REQUEST['inputtype'] ) ? sanitize_text_field( $_REQUEST['inputtype'] ) : '';
        $location     = isset( $_REQUEST['location'] ) ? sanitize_text_field( $_REQUEST['location'] ) : '';
        $label        = isset( $_REQUEST['label'] ) ? sanitize_text_field( $_REQUEST['label'] ) : '';

        update_post_meta( $post_id, 'wpcommerz_meta_inptype', $inptype );
        update_post_meta( $post_id, 'wpcommerz_meta_location', $location );
        update_post_meta( $post_id, 'wpcommerz_meta_label', $label );
    } 
}
