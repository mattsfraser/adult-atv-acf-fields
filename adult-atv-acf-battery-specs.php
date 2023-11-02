<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_2630j655veliz956',
        'title' => 'ATV Product Specifications',
        'fields' => array(
            array(
                'key' => 'field_8380g704pcdxs948',
                'label' => 'Engine & Fuel',
                'name' => '',
                'type' => 'tab',
                'menu_order' => 2,
            ),
            array(
                'key' => 'field_3369h497lmbms165',
                'label' => 'Battery Details',
                'name' => 'atv_battery',
                'type' => 'group',
                'menu_order' => 3,
                'sub_fields' => array(
                    array(
                        'key' => 'field_3517f586giczy066',
                        'label' => 'Battery Type',
                        'name' => 'atv_atv_battery_type',
                        'type' => 'select',
                        'choices' => array(
                            'Lead- Acid',
                            'AGM',
                            'Gel Cell',
                            'Lithium-Ion',
                        ),
                        'default_value' => 'Lithium-Ion',
                        'placeholder' => 'Select',
                        'instructions' => 'Choose the type of battery used in the ATV (e.g., Lead-Acid, Lithium-ion).',
                    ),
                    array(
                        'key' => 'field_0462n577khgkc361',
                        'label' => 'Battery Capacity',
                        'name' => 'atv_atv_battery_capacity',
                        'type' => 'number',
                        'placeholder' => 30,
                        'instructions' => 'Specify the battery\'s capacity.',
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