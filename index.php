<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_2630j655veliz956',
    'title' => 'ATV Product Specifications',
    'fields' => array(
        array(
            'key' => 'field_2630j655veliz956',
            'label' => 'Vehicle Overview',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_2412u193iakcz577',
            'label' => 'Model Year',
            'name' => 'atv_model_year',
            'type' => 'select',
            'choices' => array(
                '2023' => '2023',
                '2022' => '2022',
                '2021' => '2021',
                '2020' => '2020',
            ),
            'default_value' => '2023',
            'instructions' => 'Choose the ATV model year.',
        ),
        array(
            'key' => 'field_9750o862jfzoh449',
            'label' => 'Model Name',
            'name' => 'atv_model_name',
            'type' => 'text',
            'placeholder' => '300-D',
            'instructions' => 'Enter the model name of the ATV',
        ),
		array(
			'key' => 'field_4946a687zsdmv875',
			'name' => 'atv_vin',
			'label' => 'VIN',
			'type' => 'text',
			'instructions' => 'Enter the Vehicle Identification Number (VIN) of the ATV',
    	),
			'default_value' => '',
			'placeholder' => '1N4BL24E38C136060',
			'prepend' => '',
			'append' => '',
    		'maxlength' => '24',
  		)        
		array(
			'key' => 'field_9769b964etezv351',
		'name' => 'atv_stock_number',
		'label' => 'Stock Number',
		'type' => 'text',
		'placeholder' => 'ATV-2310-001',
		'instructions' => 'Enter the unique stock number the ATV',
	)	
		
// Supplier SKU Field
if( function_exists('acf_add_local_field') ) {
    acf_add_local_field(array(
        'key' => 'field_8473b464yttzv452',
        'name' => 'tp_supplier_sku',
        'label' => 'Supplier SKU',
        'type' => 'text',
        'default_value' => '-',
        'placeholder' => 'GB200HSB20',
        'instructions' => 'Enter the manufacturer/suppliers SKU for reference purposes.',
        'required' => false,
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'active' => 1
    ));
}

// Condition Field
if( function_exists('acf_add_local_field') ) {
    acf_add_local_field(array(
        'key' => 'field_5726u331peymw817',
        'name' => 'atv_condition',
        'label' => 'Condition',
        'type' => 'select',
        'default_value' => 'New',
        'choices' => array(
            'New' => 'New',
            'Used' => 'Used',
            'Demo' => 'Demo'
        ),
        'placeholder' => 'Select',
        'instructions' => 'Choose whether the ATV is new or previously owned.',
        'required' => false,
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'active' => 1
    ));
}

// ATV Color Field
if( function_exists('acf_add_local_field') ) {
    acf_add_local_field(array(
        'key' => 'field_9576l811zrpaf018',
        'name' => 'atv_color',
        'label' => 'ATV Color',
        'type' => 'select',
        'default_value' => '-',
        'choices' => array(
            'Blue' => 'Blue',
            'Green' => 'Green',
            'Orange' => 'Orange',
            'Pink' => 'Pink',
            'Red' => 'Red',
            'Batman' => 'Batman',
            'Black Spiderman' => 'Black Spiderman',
            'Black' => 'Black',
            'White' => 'White'
        ),
        'placeholder' => 'Select',
        'instructions' => 'Choose the color of the ATV.',
        'required' => false,
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'active' => 1
    ));
}
		
		// ... [I'll continue with the rest of the fields]
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'product',
            ),
            array(
                'param' => 'product_cat',
                'operator' => '==',
                'value' => 'adult-atvs', // Assuming the slug for "Adult ATVs" is "adult-atvs"
            ),
        ),
    ),
    'menu_order' => 1,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'active' => 1,
));

endif;


?>
