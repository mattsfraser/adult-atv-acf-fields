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
                'key' => 'field_1777q301brqbh647',
                'label' => 'Weight & Dimensions',
                'name' => 'atv_weight_dimensions',
                'type' => 'group',
                'menu_order' => 6,
                'sub_fields' => array(
                    array(
                        'key' => 'field_0000o015yxpjy132',
                        'label' => 'Net Weight (kg)',
                        'name' => 'atv_net_weight_kg',
                        'type' => 'number',
                        'placeholder' => 490,
                        'instructions' => 'Provide the ATV\'s net weight in kilograms.',
                    ),
                    array(
                        'key' => 'field_1927u100jyksx255',
                        'label' => 'Max Loading Weight (kg)',
                        'name' => 'atv_max_loading_weight_kg',
                        'type' => 'number',
                        'placeholder' => 280,
                        'instructions' => 'Specify the maximum weight the ATV can carry, including rider, passenger, and cargo, in kilograms.',
                    ),

                    array(
                        'key' => 'field_8276i668auvvz429',
                        'label' => 'Dry Weight (kg)',
                        'name' => 'atv_dry_weight_kg',
                        'type' => 'number',
                        'placeholder' => 650,
                        'instructions' => "Indicate the ATV's weight without any fluids (e.g., oil, fuel) in kilograms.",
                    ),
                    array(
                        'key' => 'field_6199h741qdtbf284',
                        'label' => 'Unit Length (L) (in)',
                        'name' => 'atv_unit_length_in',
                        'type' => 'number',
                        'placeholder' => 48,
                        'instructions' => "Specify the ATV's length in inches.",
                    ),
                    array(
                        'key' => 'field_0755n898ubugo184',
                        'label' => 'Unit Width (W) (in)',
                        'name' => 'atv_unit_width_in',
                        'type' => 'number',
                        'placeholder' => 29,
                        'instructions' => "Indicate the ATV's width in inches.",
                    ),
                    array(
                        'key' => 'field_8326e689ccrvp935',
                        'label' => 'Unit Height (H) (in)',
                        'name' => 'atv_unit_height_in',
                        'type' => 'number',
                        'placeholder' => 33,
                        'instructions' => "Provide the ATV's height in inches.",
                    ),
                    array(
                        'key' => 'field_0316r834oogev342',
                        'label' => 'Unit Length (L) (cm)',
                        'name' => 'atv_unit_length_cm',
                        'type' => 'number',
                        'placeholder' => 122,
                        'instructions' => "Specify the ATV's length in centimeters.",
                    ),
                    array(
                        'key' => 'field_5787o936mpltw155',
                        'label' => 'Unit Width (W) (cm)',
                        'name' => 'atv_unit_width_cm',
                        'type' => 'number',
                        'placeholder' => 74,
                        'instructions' => "Indicate the ATV's width in centimeters.",
                    ),
                    array(
                        'key' => 'field_9232e767gepur253',
                        'label' => 'Unit Height (H) (cm)',
                        'name' => 'atv_unit_height_cm',
                        'type' => 'number',
                        'placeholder' => 84,
                        'instructions' => "Provide the ATV's height in centimeters.",
                    ),
                    array(
                        'key' => 'field_8279s722iftaq059',
                        'label' => 'Seat Height (in)',
                        'name' => 'atv_seat_height_in',
                        'type' => 'number',
                        'placeholder' => 25,
                        'instructions' => "Specify the height of the ATV's seat from the ground in inches.",
                    ),
                    array(
                        'key' => 'field_5163n362ambxa211',
                        'label' => 'Seat Height (cm)',
                        'name' => 'atv_seat_height_cm',
                        'type' => 'number',
                        'placeholder' => 63,
                        'instructions' => "Indicate the height of the ATV's seat from the ground in centimeters.",
                    ),
                    array(
                        'key' => 'field_5818b903dqrgt534',
                        'label' => 'Minimum Ground Clearance (in)',
                        'name' => 'atv_min_ground_clearance_in',
                        'type' => 'number',
                        'placeholder' => 11,
                        'instructions' => "Provide the minimum distance between the ATV's lowest point and the ground in inches.",
                    ),
                    array(
                        'key' => 'field_0504z457fiebj317',
                        'label' => 'Minimum Ground Clearance (cm)',
                        'name' => 'atv_min_ground_clearance_cm',
                        'type' => 'number',
                        'placeholder' => 28,
                        'instructions' => "Specify the minimum distance between the ATV's lowest point and the ground in millimeters.",
                    ),
                    array(
                        'key' => 'field_8788i124rijdv197',
                        'label' => 'Wheelbase (in)',
                        'name' => 'atv_wheelbase_in',
                        'type' => 'number',
                        'placeholder' => 52,
                        'instructions' => "Indicate the distance between the centers of the front and rear wheels in inches.",
                    ),
                    array(
                        'key' => 'field_6646f574erbms566',
                        'label' => 'Wheelbase (cm)',
                        'name' => 'atv_wheelbase_cm',
                        'type' => 'number',
                        'placeholder' => 132,
                        'instructions' => "Provide the distance between the centers of the front and rear wheels in millimeters.",
                    ),

                    // INSERT NEW ARRAYS ABOVE HERE
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_category',
                    'operator' => '==',
                    'value' => 'category:adult-atvs',
                ),
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'products',
                ),
            ),
        ),
    ));

endif;

