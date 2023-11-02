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
                'key' => 'field_9509y074gzsok260',
                'label' => 'Fuel Details',
                'name' => 'atv_fuel',
                'type' => 'group',
                'menu_order' => 2,
                'sub_fields' => array(
                    array(
                        array(
                            'key' => 'field_4338n166ibyyr523',
                            'label' => 'Fuel Tank Capacity (L)',
                            'name' => 'atv_engine_fuel_tank_capacity_liters',
                            'type' => 'number',
                            'placeholder' => 28,
                            'instructions' => 'Specify the fuel tank\'s capacity in litres.',
                        ),
                        array(
                            'key' => 'field_0783p231jzszq408',
                            'label' => 'Fuel Tank Capacity (gal)',
                            'name' => 'atv_engine_fuel_tank_capacity_gal',
                            'type' => 'number',
                            'placeholder' => 7.3,
                            'instructions' => 'Indicate the fuel tank\'s capacity in gallons.',
                        ),
                        array(
                            'key' => 'field_1769v043lypkt670',
                            'label' => 'Fuel Type',
                            'name' => 'atv_engine_fuel_type',
                            'type' => 'select',
                            'choices' => array(
                                'Premium Gas',
                            ),
                            'default_value' => 'Premium Gas',
                            'instructions' => 'Select the type of fuel the ATV uses (e.g., premium gasoline).',
                        ),
                        array(
                            'key' => 'field_1847q027ctvoo458',
                            'label' => 'Fuel Efficiency (L/100km)',
                            'name' => 'atv_engine_fuel_efficiency_metric',
                            'type' => 'number',
                            'placeholder' => 10,
                            'instructions' => 'Provide the ATV\'s fuel efficiency in liters per 100 kilometers.',
                        ),
                        array(
                            'key' => 'field_1847q027ctvoo458',
                            'label' => 'Fuel Efficiency (mpg)',
                            'name' => 'atv_engine_fuel_efficiency_mpg',
                            'type' => 'number',
                            'placeholder' => 23.5,
                            'instructions' => 'Provide the ATV\'s fuel efficiency in mpg.',
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