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
                'menu_order' => 1,
                'type' => 'tab',
            ),
            array(
                'key' => 'field_1496h922wgmyf011',
                'label' => 'Comfort Features',
                'name' => 'atv_comfort',
                'menu_order' => 4,
                'type' => 'group',
                'sub_fields' => array(
                    array(
                        'key' => 'field_9046t049ddxsi014',
                        'label' => 'Seat Type',
                        'name' => 'atv_seat_type',
                        'type' => 'select',
                        'default_value' => 'Single Seat',
                        'choices' => array(
                            'Single Seat',
                            'Bench Seat',
                            'Adjustable Seat',
                            'Padded Seat',
                            'Sport Seat',
                            'Two-Up Seat'
                        ),
                        'instructions' => 'Select the type of seat the ATV is equipped with.',
                    ),
                    array(
                        'key' => 'field_2584t785xlnjz075',
                        'label' => 'Heated Seat',
                        'name' => 'atv_heated_seat',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV comes with a heated seat feature.',
                    ),
                    array(
                        'key' => 'field_9357s390rsrmj097',
                        'label' => 'Backrest',
                        'name' => 'atv_backrest',
                        'type' => 'true_false',
                        'instructions' => 'Specify if the ATV has a backrest for added comfort.',
                    ),
                    array(
                        'key' => 'field_5747i239rhude333',
                        'label' => 'Footrest',
                        'name' => 'atv_footrest',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV is equipped with footrests for rider support.',
                    ),
                    array(
                        'key' => 'field_5747i239rhude333',
                        'label' => 'Footrest',
                        'name' => 'atv_footrest',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV is equipped with footrests for rider support.',
                    ),
                    array(
                        'key' => 'field_7251d042qzmlj708',
                        'label' => 'Heated Grips',
                        'name' => 'atv_heated_grips',
                        'type' => 'true_false',
                        'instructions' => 'Specify if the ATV comes with heated grips for colder conditions.',
                    ),
                    array(
                        'key' => 'field_4327y976kmtvw935',
                        'label' => 'Hand Guards',
                        'name' => 'atv_hand_guards',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV has protective hand guards.',
                    ),
                    // ... Add more fields as needed ...
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'products',
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
