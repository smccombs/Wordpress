<?Php

function woo_add_custom_general_fields() {
  
  echo '<div class="options_group">';
  
  woocommerce_wp_text_input( 
	array( 
		'id'      => '_nameofrunner', 
		'label'   => __( 'Name of Runner', 'woocommerce' ),
		'placeholder' => 'Name of Runner',
		)
	);
  
  echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields', 11);

/*
// Text Field
woocommerce_wp_text_input( 
	array( 
		'id'          => '_text_field', 
		'label'       => __( 'My Text Field', 'woocommerce' ), 
		'placeholder' => 'http://',
		'desc_tip'    => 'true',
		'description' => __( 'Enter the custom value here.', 'woocommerce' ) 
	)
);

// Number Field
woocommerce_wp_text_input( 
	array( 
		'id'                => '_number_field', 
		'label'             => __( 'My Number Field', 'woocommerce' ), 
		'placeholder'       => '', 
		'description'       => __( 'Enter the custom value here.', 'woocommerce' ),
		'type'              => 'number', 
		'custom_attributes' => array(
				'step' 	=> 'any',
				'min'	=> '0'
			) 
	)
);

// Textarea
woocommerce_wp_textarea_input( 
	array( 
		'id'          => '_textarea', 
		'label'       => __( 'My Textarea', 'woocommerce' ), 
		'placeholder' => '', 
		'description' => __( 'Enter the custom value here.', 'woocommerce' ) 
	)
);

// Select
woocommerce_wp_select( 
array( 
	'id'      => '_select', 
	'label'   => __( 'My Select Field', 'woocommerce' ), 
	'options' => array(
		'one'   => __( 'Option 1', 'woocommerce' ),
		'two'   => __( 'Option 2', 'woocommerce' ),
		'three' => __( 'Option 3', 'woocommerce' )
		)
	)
);

// Checkbox
woocommerce_wp_checkbox( 
array( 
	'id'            => '_checkbox', 
	'wrapper_class' => 'show_if_simple', 
	'label'         => __('My Checkbox Field', 'woocommerce' ), 
	'description'   => __( 'Check me!', 'woocommerce' ) 
	)
);

// Hidden field
woocommerce_wp_hidden_input(
array( 
	'id'    => '_hidden_field', 
	'value' => 'hidden_value'
	)
);
*/

function woo_add_custom_general_fields_save( $post_id ){
	
	// Text Field
	$woocommerce_text_field = $_POST['_nameofrunner'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, '_nameofrunner', esc_attr( $woocommerce_text_field )
	);
}
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_display_custom_general_fields(){
	echo get_post_meta(get_the_ID(), '_nameofrunner', true);
}
add_action( 'woocommerce_before_variations_form', 'woo_display_custom_general_fields' );
