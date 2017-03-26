<?Php

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10);
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );