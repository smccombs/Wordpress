<?Php

function registered_racers() {
	global $product;
	
	$units_sold = get_post_meta( $product->id, 'total_sales', true );

	if ( $product->id == 31) {
		echo '<h2 style="padding-top: 30px;">' . sprintf( __( '%s Racers Have Registered', 'woocommerce' ), $units_sold-1 ) . '</h2>';
	} elseif ($product->id == 981) {
		echo '<h2 style="padding-top: 30px;">' . sprintf( __( '%s Racers Have Registered', 'woocommerce' ), $units_sold ) . '</h2>';
	} else {
		echo '<h2 style="padding-top: 30px;">' . sprintf( __( 'Units Sold: %s', 'woocommerce' ), $units_sold ) . '</h2>';
	}
}
 
add_action( 'woocommerce_single_product_summary',  'registered_racers', 0 );
