/**
 * @snippet       Explode Tabs @ WooCommerce Single Product Page
 * @author        codeithub.com
 */
 
function woocommerce_output_product_data_tabs() {
   $product_tabs = apply_filters( 'woocommerce_product_tabs', array() );
   if ( empty( $product_tabs ) ) return;
   echo '<div class="woocommerce-tabs wc-tabs-wrapper">';
   foreach ( $product_tabs as $key => $product_tab ) {
      ?>
         <div id="tab-<?php echo esc_attr( $key ); ?>">
            <?php
            if ( isset( $product_tab['callback'] ) ) {
               call_user_func( $product_tab['callback'], $key, $product_tab );
            }
            ?>
         </div>
      <?php         
   }
   echo '</div>';
}
