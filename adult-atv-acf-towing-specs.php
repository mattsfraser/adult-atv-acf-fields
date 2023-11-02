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
                'key' => 'field_9965z657vokvz934',
                'label' => 'Towing Details',
                'name' => 'atv_towing_details',
                'type' => 'group',
                'menu_order' => 1,
                'sub_fields' => array(
                    array(
                        'key' => 'field_2922o297evoio850',
                        'label' => 'Has Towing Hitch?',
                        'name' => 'atv_has_towing_hitch',
                        'type' => 'true_false',
                        'instructions' => 'Specify if the ATV is equipped with a towing hitch.',
                    ),
                    array(
                        'key' => 'field_8952b305dfzbt163',
                        'label' => 'Towing Hitch Type',
                        'name' => 'atv_towing_hitch_type',
                        'type' => 'select',
                        'choices' => array(
                            'Ball Hitch' => 'Ball Hitch',
                            'Receiver Hitch' => 'Receiver Hitch',
                            '5th Wheel Hitch' => '5th Wheel Hitch',
                        ),
                        'instructions' => 'If the ATV has a towing hitch, select its specific type.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_2922o297evoio850',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_0346v203kbspv291',
                        'label' => 'Towing capacity (kg)',
                        'name' => 'atv_towing_capacity_kg',
                        'type' => 'number',
                        'placeholder' => 544,
                        'instructions' => 'Provide the maximum towing capacity of the ATV in kilograms.',
                    ),
                    array(
                        'key' => 'field_9803r732movzx021',
                        'label' => 'Towing capacity (lbs)',
                        'name' => 'atv_towing_capacity_lbs',
                        'type' => 'number',
                        'placeholder' => 1200,
                        'instructions' => 'Provide the maximum towing capacity of the ATV in pounds.',
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
