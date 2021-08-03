<form>
  <!-- style is here -->
  <label for="style"><b><?php esc_html_e( 'Style: ', 'wpcommerz'); ?></b></label>
  <select name= "style" id="style">
    <option value="Standard" <?php selected( $style, 'Standard' ); ?> ><?php esc_html_e( 'Standard( WP metabox )', 'wpcommerz' ); ?></option>
    <option value="Seamless" <?php selected( $style, 'Seamless' ); ?> ><?php esc_html_e( 'Seamless( no metabox )', 'wpcommerz' ); ?></option>
  </select>
  <br><br>

  <!-- Position select box -->
  <label for="position"><b><?php esc_html_e( 'Position: ', 'wpcommerz'); ?></b></label>
  <select name= "position" id="position">
    <option value="aftertitle" <?php selected( $position, 'aftertitle' ); ?> ><?php esc_html_e( 'High( after title )', 'wpcommerz' ); ?></option>
    <option value="aftercontent" <?php selected( $position, 'aftercontent' ); ?> ><?php esc_html_e( 'Normal( after content )', 'wpcommerz' ); ?></option>
    <option value="side" <?php selected( $position, 'side' ); ?> ><?php esc_html_e( 'Side( no metabox )', 'wpcommerz' ); ?></option>
  </select>
  <br><br>

  <!-- Label Placement selectbox -->
  <label for="labelplace"><b><?php esc_html_e( 'Label Placement: ', 'wpcommerz'); ?></b></label>
  <select name= "labelplace" id="labelplace">
    <option value="topaligned" <?php selected( $labelplacement, 'topaligned' ); ?> ><?php esc_html_e( 'Top Aligned', 'wpcommerz' ); ?></option>
    <option value="leftaligned" <?php selected( $labelplacement, 'leftaligned' ); ?> ><?php esc_html_e( 'Left Aligned', 'wpcommerz' ); ?></option>
  </select>
  <br><br>

  <!-- Instruction Placement selectbox -->
  <label for="instruction"><b><?php esc_html_e( 'Instruction Placement: ', 'wpcommerz'); ?></b></label>
  <select name= "instruction" id="instruction">
    <option value="belowlevel" <?php selected( $instruction, 'belowlevel' ); ?> ><?php esc_html_e( 'Below Label', 'wpcommerz' ); ?></option>
    <option value="leftfields" <?php selected( $instruction, 'leftfields' ); ?> ><?php esc_html_e( 'Left Fields', 'wpcommerz' ); ?></option>
  </select>
  <br><br>

  <!-- Order input here -->
  <label for="order"><b><?php esc_html_e( 'Order No. ', 'wpcommerz'); ?></b></label>
  <input type="number" id="order" name="number" value="<?php esc_html_e( $number ); ?>">
  <br><br>

  <!-- Description is here -->
  <label for="desc"><b><?php esc_html_e( 'Description:', 'wpcommerz'); ?></b></label>
  <input type="text" id="desc" name="desc" class= "regular-text" value="<?php esc_html_e( $desc ); ?>">
</form>
