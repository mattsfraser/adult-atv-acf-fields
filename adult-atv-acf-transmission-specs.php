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
                'key' => 'field_1843v166dsjcp968',
                'label' => 'Transmission Details',
                'name' => 'atv_transmission',
                'type' => 'group',
                'menu_order' => 4,
                'sub_fields' => array(
                    array(
                        'key' => 'field_0723t033qkkdy106',
                        'label' => 'Transmission Type',
                        'name' => 'atv_transmission_type',
                        'type' => 'select',
                        'choices' => array(
                            'CVT',
                            'Manual',
                            'Semi-Automatic',
                        ),
                        'default_value' => 'CVT',
                        'placeholder' => 'Select',
                        'instructions' => 'Choose the type of transmission system the ATV uses (e.g., Manual, Automatic).',
                    ),
                    array(
                        'key' => 'field_6378k962sovtl429',
                        'label' => 'Gear box',
                        'name' => 'atv_gear_box',
                        'type' => 'select',
                        'choices' => array(
                            'L : Low',
                            'H : High',
                            'N : Neutral',
                            'R : Reverse',
                            'P : Park',
                        ),
                        'multiple' => true,
                        'placeholder' => 'Select',
                        'instructions' => 'Specify the gearbox configuration (e.g., 5-speed, CVT).',
                    ),
                    array(
                        'key' => 'field_7748a497dnlec570',
                        'label' => 'Clutch System',
                        'name' => 'atv_clutch_system',
                        'type' => 'text',
                        'placeholder' => 'CV-Tech IBC',
                        'instructions' => 'Indicate the type of clutch system the ATV uses (e.g., Wet Multi-Plate, Automatic).',
                    ),
                    array(
                        'key' => 'field_5928a924chrss972',
                        'label' => 'Number of Speeds',
                        'name' => 'atv_number_of_speeds',
                        'type' => 'number',
                        'placeholder' => 5,
                        'instructions' => 'Provide the number of gear speeds the ATV has.',
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