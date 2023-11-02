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
                'key' => 'field_4641v374vumrs621',
                'label' => 'Off-Road Features',
                'name' => 'atv_off_road',
                'type' => 'group',
                'menu_order' => 1,
                'sub_fields' => array(
                    array(
                        'key' => 'field_8439e587lksez854',
                        'label' => 'Has Snorkel?',
                        'name' => 'atv_has_snorkel',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV is equipped with a snorkel for water and mud riding.',
                    ),
                    array(
                        'key' => 'field_7980r406fcalh065',
                        'label' => 'Snorkel Type',
                        'name' => 'atv_snorkel_type',
                        'type' => 'select',
                        'choices' => array(
                            'Air Ram' => 'Air Ram',
                            'Vortex' => 'Vortex',
                        ),
                        'instructions' => 'If the ATV has a snorkel, select its specific type or design.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_8439e587lksez854',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_0425b763ajbfx453',
                        'label' => 'Has Winch?',
                        'name' => 'atv_has_winch',
                        'type' => 'true_false',
                        'instructions' => 'Specify if the ATV comes with a winch system for towing or pulling.',
                    ),
                    array(
                        'key' => 'field_2101w590cktvi297',
                        'label' => 'Type of Winch',
                        'name' => 'atv_winch_type',
                        'type' => 'select',
                        'choices' => array(
                            'Electric' => 'Electric',
                            'Manual' => 'Manual',
                            'Combo' => 'Combo',
                        ),
                        'instructions' => 'If the ATV is equipped with a winch, select its specific type or design.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_0425b763ajbfx453',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_8139j945viryv364',
                        'label' => 'Winch Capacity (kg)',
                        'name' => 'atv_winch_capacity_kg',
                        'type' => 'number',
                        'placeholder' => 500,
                        'instructions' => 'Provide the maximum weight capacity of the winch in kilograms.',
                    ),
                    array(
                        'key' => 'field_9437s231oyafe790',
                        'label' => 'Winch Capacity (lbs)',
                        'name' => 'atv_winch_capacity_lbs',
                        'type' => 'number',
                        'placeholder' => 1102,
                        'instructions' => 'Provide the maximum weight capacity of the winch in pounds.',
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