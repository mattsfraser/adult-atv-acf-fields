<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_2630j655veliz956',
        'title' => 'ATV Product Specifications',
        'fields' => array(
            array(
                'key' => 'field_7324t175udeno275',
                'label' => 'Handling & Performance',
                'name' => '',
                'type' => 'tab',
                'menu_order' => 3,
            ),
            array(
                'key' => 'field_2927f886faymr894',
                'label' => 'Wheel Details',
                'name' => 'atv_wheels',
                'type' => 'group',
                'menu_order' => 3,
                'sub_fields' => array(
                    array(
                        'key' => 'field_8745t426aqjhs622',
                        'label' => 'Wheel Brand',
                        'name' => 'atv_wheel_brand',
                        'type' => 'text',
                        'instructions' => 'Specify the brand of the wheels equipped on the ATV.',
                    ),
                    array(
                        'key' => 'field_5562n795zcayg088',
                        'label' => 'Wheel Type',
                        'name' => 'atv_wheel_type',
                        'type' => 'select',
                        'choices' => array(
                            'Aluminum alloy' => 'Aluminum alloy',
                        ),
                        'instructions' => 'Choose the type of wheel the ATV uses (e.g., Alloy, Steel).',
                    ),
                    array(
                        'key' => 'field_1645w288rwdrq516',
                        'label' => 'Front Wheel Diameter (in)',
                        'name' => 'atv_front_wheel_diameter_in',
                        'type' => 'number',
                        'placeholder' => 14,
                        'instructions' => 'Indicate the diameter of the front wheel in inches.',
                    ),
                    array(
                        'key' => 'field_5105g144inrri502',
                        'label' => 'Front Wheel Diameter (cm)',
                        'name' => 'atv_front_wheel_diameter_cm',
                        'type' => 'number',
                        'placeholder' => 36,
                        'instructions' => 'Provide the diameter of the front wheel in centimeters.',
                    ),
                    array(
                        'key' => 'field_8303z599gbycu954',
                        'label' => 'Front Wheel Width (in)',
                        'name' => 'atv_front_wheel_width_in',
                        'type' => 'number',
                        'placeholder' => 7,
                        'instructions' => 'Specify the width of the front wheel in inches.',
                    ),
                    array(
                        'key' => 'field_3260b202ampnj466',
                        'label' => 'Front Wheel Width (cm)',
                        'name' => 'atv_front_wheel_width_cm',
                        'type' => 'number',
                        'placeholder' => 18,
                        'instructions' => 'Indicate the width of the front wheel in centimeters.',
                    ),
                    array(
                        'key' => 'field_5562w587fhkon207',
                        'label' => 'Rear Wheel Diameter (in)',
                        'name' => 'atv_rear_wheel_diameter_in',
                        'type' => 'number',
                        'placeholder' => 14,
                        'instructions' => 'Provide the diameter of the rear wheel in inches.',
                    ),
                    array(
                        'key' => 'field_9263s448cyufe448',
                        'label' => 'Rear Wheel Diameter (cm)',
                        'name' => 'atv_rear_wheel_diameter_cm',
                        'type' => 'number',
                        'placeholder' => 36,
                        'instructions' => 'Specify the diameter of the rear wheel in centimeters.',
                    ),
                    array(
                        'key' => 'field_6379f283wuffk575',
                        'label' => 'Rear Wheel Width (in)',
                        'name' => 'atv_rear_wheel_width_in',
                        'type' => 'number',
                        'placeholder' => 8,
                        'instructions' => 'Indicate the width of the rear wheel in inches.',
                    ),
                    array(
                        'key' => 'field_1356d855yaxgd814',
                        'label' => 'Rear Wheel Width (cm)',
                        'name' => 'atv_rear_wheel_width_cm',
                        'type' => 'number',
                        'placeholder' => 20,
                        'instructions' => 'Provide the width of the rear wheel in centimeters.',
                    ),


                    // ... Insert more fields above this line...
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
    ));

endif;