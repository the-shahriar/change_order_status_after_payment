add_action( 'woocommerce_payment_complete', 'my_change_status_function' );

function my_change_status_function( $order_id ) {

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );

}