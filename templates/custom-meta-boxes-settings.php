<form>

    <!-- Label is here -->
  <label for="label"><b><?php esc_html_e( 'Label:', 'wpcommerz'); ?></b></label>
  <input type="text" id="label" name="label" class= "regular-text" value="<?php esc_html_e( $label ); ?>">
  <br><br>

  <!-- Input type Placement selectbox -->
  <label for="inptype"><b><?php esc_html_e( 'Input Type: ', 'wpcommerz'); ?></b></label>
  <select name= "inputtype" id="inptype">
    <option value="text" <?php selected( $inptype, 'text' ); ?> ><?php esc_html_e( 'Text', 'wpcommerz' ); ?></option>
    <option value="number" <?php selected( $inptype, 'number' ); ?> ><?php esc_html_e( 'number', 'wpcommerz' ); ?></option>
  </select>
  <br><br>

  <!-- Location selectbox -->
  <label for="location"><b><?php esc_html_e( 'Location: ', 'wpcommerz'); ?></b></label>
  <select name= "location" id="location">
    <option value="post" <?php selected( $location, 'post' ); ?> ><?php esc_html_e( 'Post', 'wpcommerz' ); ?></option>
    <option value="product" <?php selected( $location, 'product' ); ?> ><?php esc_html_e( 'Product', 'wpcommerz' ); ?></option>
    <option value="post,product" <?php selected( $location, 'post,product' ); ?> ><?php esc_html_e( 'Both', 'wpcommerz' ); ?></option>
  </select>
  <br><br>

</form>
