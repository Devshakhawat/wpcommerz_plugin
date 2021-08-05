<?php

/**
 * Create metas
 *
 * @since 1.0.0
 */
function wpcommerz_create_metas() {
    $args = array( 'post_type' => 'wpcommerzgroup' );

    $loop = new WP_Query( $args );
    
    while( $loop->have_posts() ) {
        $loop->the_post();

        $id         = get_the_ID();
        $post_title = get_the_title( $id );
        $location   = get_post_meta( $id, 'wpcommerz_meta_location', true );

        
        $unique_id = "wpcommerz-advanced-{$id}";

        add_meta_box( 
            $unique_id,
            $post_title, 
            'custom_meta_callback',
            $location
        );
    }

}

/**
 * meta callback
 *
 * @since 1.0.0
 */
function custom_meta_callback( $post ) {

    $label      = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_label', true ) );
    $inptype    = esc_html( get_post_meta( $post->ID, 'wpcommerz_meta_inptype', true ) );
    
    ?>
    <label for="metaform"><?php esc_html_e( $label ); ?></label>
    <input type="<?php esc_html_e( $inptype ); ?>" name="metaform" id="metaform">
    <?php
}
