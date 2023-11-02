<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_2630j655veliz956',
        'title' => 'ATV Product Specifications',
        'fields' => array(
            array(
                'key' => 'field_5634u848gjpdh562',
                'label' => 'Towing & Storage',
                'name' => '',
                'type' => 'tab',
                'menu_order' => 4,
            ),
            array(
                'key' => 'field_1465i902hvyek273',
                'label' => 'Rack Details',
                'name' => 'atv_rack_details',
                'type' => 'group',
                'menu_order' => 2,
                'sub_fields' => array(
                    array(
                        'key' => 'field_4169x855dhojg649',
                        'label' => 'Has Front Rack?',
                        'name' => 'atv_has_front_rack',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV comes with a front rack.',
                    ),
                    array(
                        'key' => 'field_1029n538eevdc625',
                        'label' => 'Front Rack Capacity (kg)',
                        'name' => 'atv_front_rack_capacity_kg',
                        'type' => 'text',
                        'placeholder' => 50,
                        'instructions' => 'Specify the weight capacity of the front rack in kilograms.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_4169x855dhojg649',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_6077s066jdjxr380',
                        'label' => 'Front Rack Capacity (lbs)',
                        'name' => 'atv_front_rack_capacity_lbs',
                        'type' => 'text',
                        'placeholder' => 110,
                        'instructions' => 'Specify the weight capacity of the front rack in pounds.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_4169x855dhojg649',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_3607s417fiagx976',
                        'label' => 'Has Rear Rack?',
                        'name' => 'atv_has_rear_rack',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV is equipped with a rear rack.',
                    ),
                    array(
                        'key' => 'field_3867d337pcbke504',
                        'label' => 'Rear Rack Capacity (kg)',
                        'name' => 'atv_rear_rack_capacity_kg',
                        'type' => 'number',
                        'placeholder' => 70,
                        'instructions' => 'Provide the weight capacity of the rear rack in kilograms.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_3607s417fiagx976',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_2319l516anqgd016',
                        'label' => 'Rear Rack Capacity (lbs)',
                        'name' => 'atv_rear_rack_capacity_lbs',
                        'type' => 'number',
                        'placeholder' => 155,
                        'instructions' => 'Provide the weight capacity of the rear rack in pounds.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_3607s417fiagx976',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),


                    // ... Placeholder for more fields ...
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
