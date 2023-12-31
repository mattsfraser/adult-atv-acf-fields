<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_2630j655veliz956',
    'title' => 'ATV Product Specifications',
    'fields' => array(
        array(
            'key' => 'field_2630j655veliz956',
            'label' => 'Vehicle Overview',
            'menu_order' => 1,
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' =>  'field_1496h922wgmyf011',
            'label' => 'Vehicle Details',
            'menu_order' => 1,
            'name' => 'atv_vehicle_details',
            'type' => 'group',
            'sub_fields' => array(
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
                    'placeholder' => '1N4BL24E38C136060',
                    'maxlength' => '24',
                ),
				array(
    				'key' => 'field_9769b964etezv351',
    				'label' => 'Stock Number',
    				'name' => 'atv_stock_number',
    				'type' => 'text',
    				'placeholder' => 'ATV-2310-001',
    				'instructions' => 'Enter the unique stock number the ATV',
    				),
				array(
    				'key' => 'field_8473b464yttzv452',
    				'label' => 'Supplier SKU',
    				'name' => 'tp_supplier_sku',
    				'type' => 'text',
    				'placeholder' => 'GB200HSB20',
    				'instructions' => 'Enter the manufacturer/suppliers SKU for reference purposes.',
    			),
				array(
    				'key' => 'field_5726u331peymw817',
    				'label' => 'Condition',
    				'name' => 'atv_condition',
    				'type' => 'select',
    				'choices' => array(
        				'New' => 'New',
        				'Used' => 'Used',
        				'Demo' => 'Demo',
    				),
    				'default_value' => 'New',
    				'placeholder' => 'Select',
    				'instructions' => 'Choose whether the ATV is new or previously owned.',
					),
				array(
    				'key' => 'field_9576l811zrpaf018',
    				'label' => 'ATV Color',
    				'name' => 'atv_color',
    				'type' => 'select',
    				'choices' => array(
        				'Blue' => 'Blue',
        				'Green' => 'Green',
        				'Orange' => 'Orange',
        				'Pink' => 'Pink',
        				'Red' => 'Red',
        				'Batman' => 'Batman',
        				'Black Spiderman' => 'Black Spiderman',
        				'Black' => 'Black',
        				'White' => 'White',
    				),
    				'placeholder' => 'Select',
    				'instructions' => 'Choose the color of the ATV.',
				),
				array(
    				'key' => 'field_7387r288mqoux705',
    				'label' => 'ATV Type',
    				'name' => 'atv_type',
    				'type' => 'select',
    				'choices' => array(
        				'Sport' => 'Sport',
        				'Utility' => 'Utility',
    			),
    				'default_value' => 'Sport',
    				'placeholder' => 'Select',
    				'instructions' => 'Select the specific type or category of the ATV from the dropdown menu.',
				),
				array(
    				'key' => 'field_2188i908cjkzz505',
    				'label' => 'Seating Capacity',
    				'name' => 'atv_seating_capacity',
    				'type' => 'select',
    				'choices' => array(
        				'1' => '1',
        				'2' => '2',
        				'3' => '3',
        				'4' => '4',
        				'5' => '5',
        				'6' => '6',
    				),
    					'default_value' => '1',
    					'placeholder' => 'Select',
    					'instructions' => 'Indicate the maximum number of riders the ATV can accommodate.',
				),
				array(
    				'key' => 'field_3354d299rwqip856',
    				'label' => 'Top Speed (km/hr)',
    				'name' => 'atv_top_speed_km',
    				'type' => 'number',
    				'placeholder' => 193,
    				'instructions' => 'Enter the ATV\'s maximum speed in kilometers per hour.',
				),
				array(
    				'key' => 'field_9482o290qorkm653',
    				'label' => 'Top Speed (mph)',
    				'name' => 'atv_top_speed_mi',
    				'type' => 'number',
    				'placeholder' => 120,
    				'instructions' => 'Enter the ATV\'s maximum speed in miles per hour.',
				),
				array(
    				'key' => 'field_4610k049siqbc480',
    				'label' => 'Maintenance Schedule',
    				'name' => 'atv_maintenance_schedule',
    				'type' => 'textarea',
    				'instructions' => 'Provide details or a link to the recommended maintenance schedule for the ATV.',
				),
				array(
    				'key' => 'field_4610k049siqb5481',
    				'label' => 'Has Manufacturers Warranty?',
    				'name' => 'atv_has_manufacturers_warranty',
    				'type' => 'true_false',
    				'instructions' => 'Check this box if the ATV comes with a manufacturer\'s warranty.',
				),
				array(
    				'key' => 'field_4238p822diizc533',
    				'label' => 'Manufacturers Warranty Length',
    				'name' => 'atv_manufacturers_warranty_term',
    				'type' => 'select',
    				'choices' => array(
        				'6 Months' => '6 Months',
        				'1 Year' => '1 Year',
        				'2 Years' => '2 Years',
        				'3 Years' => '3 Years',
        				'5 Years' => '5 Years',
    			),
    			'placeholder' => 'Select',
    			'instructions' => 'Select the duration of the manufacturer\'s warranty for this product.',
    			'conditional_logic' => array(
					array(
            			'field' => 'field_4610k049siqb5481',
            			'operator' => '==',
            			'value' => '1',
        ),
    ),
				array(
    				'key' => 'field_4238p822diizc534',
    				'label' => 'Manufacturers Warranty',
    				'name' => 'atv_manufacturers_warranty_details',
    				'type' => 'textarea',
    				'instructions' => 'Provide a detailed description of the manufacturer\'s warranty terms, including what is covered, any exclusions, and other relevant details.',
    				'conditional_logic' => array(
        		array(
            		'field' => 'field_4610k049siqb5481',
            		'operator' => '==',
            		'value' => '1',
        ),
    ),
				array(
    				'key' => 'field_4238p822diizc535',
    				'label' => 'Has Extended Warranty?',
    				'name' => 'atv_has_extended_warranty',
    				'type' => 'true_false',
    				'instructions' => 'Check this box if there\'s an option for an extended warranty for this ATV.',
),
				array(
    				'key' => 'field_5495l472mpxnn336',
    				'label' => 'Extended Warranty Term',
    				'name' => 'atv_extended_warranty_term',
    				'type' => 'select',
    				'choices' => array(
        			'1 Additional Year' => '1 Additional Year',
        			'2 Additional Years' => '2 Additional Years',
        			'3 Additional Years' => '3 Additional Years',
    			),
    				'placeholder' => 'Select',
    				'instructions' => 'Select the length/term of the extended warranty option for this ATV.',
    				'conditional_logic' => array(
        			array(
            			'field' => 'field_4238p822diizc535',
            			'operator' => '==',
            			'value' => '1',
        ),
    ),
				 array(
            'key' => 'field_4238p822diizc536',
            'label' => 'Extended Warranty Details',
            'name' => 'atv_extended_warranty_details',
            'type' => 'textarea',
            'instructions' => 'Provide more detailed information about the extended warranty, such as what\'s covered, any exclusions, costs, etc.',
            'conditional_logic' => array(
                array(
                    'field' => 'field_4238p822diizc535',
                    'operator' => '==',
                    'value' => '1',
                ),
            ),
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
                'value' => 'adult-atvs',
            ),
        ),
    ),
),

endif;
