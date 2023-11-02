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
                'key' => 'field_4015h606okkaf862',
                'label' => 'Suspension Details',
                'name' => 'atv_suspension',
                'type' => 'group',
                'menu_order' => 5,
                'sub_fields' => array(
                    array(
                        'key' => 'field_9748w306jzglf427',
                        'label' => 'Front Suspension',
                        'name' => 'atv_front_suspension_type',
                        'type' => 'select',
                        'choices' => array(
                            'Dual A-Arm',
                            'Double A-arm',
                            'Independent Suspension',
                            'MacPherson Strut',
                            'Swingarm',
                        ),
                        'instructions' => 'Choose the type of front suspension system the ATV uses (e.g., Dual A-Arm, Independent).',
                    ),
                    array(
                        'key' => 'field_3632b747bjhmz480',
                        'label' => 'Front Travel (mm)',
                        'name' => 'atv_front_travel_mm',
                        'type' => 'number',
                        'placeholder' => 185,
                        'instructions' => 'Indicate the travel distance of the front suspension in millimeters.',
                    ),
                    array(
                        'key' => 'field_5763j703xxwic401',
                        'label' => 'Front Travel (in)',
                        'name' => 'atv_front_travel_in',
                        'type' => 'number',
                        'placeholder' => 7.3,
                        'instructions' => 'Provide the travel distance of the front suspension in inches.',
                    ),
                    array(
                        'key' => 'field_7881g415tphfu110',
                        'label' => 'Rear Suspension',
                        'name' => 'atv_rear_suspension_type',
                        'type' => 'select',
                        'choices' => array(
                            'Dual A-Arm',
                            'Double A-arm',
                            'Independent Suspension',
                            'MacPherson Strut',
                            'Swingarm',
                        ),
                        'default_value' => 'Independent Suspension',
                        'instructions' => 'Specify the type of rear suspension system the ATV uses.',
                    ),
                    array(
                        'key' => 'field_7326e405zxcio748',
                        'label' => 'Rear travel (mm)',
                        'name' => 'atv_rear_travel_mm',
                        'type' => 'number',
                        'placeholder' => 215,
                        'instructions' => 'Indicate the travel distance of the rear suspension in millimeters.',
                    ),
                    array(
                        'key' => 'field_4677b739kotvq969',
                        'label' => 'Rear travel (in)',
                        'name' => 'atv_rear_travel_in',
                        'type' => 'number',
                        'placeholder' => 8.5,
                        'instructions' => 'Provide the travel distance of the rear suspension in inches.',
                    ),
                    array(
                        'key' => 'field_8147z462vizsr057',
                        'label' => 'Shock Absorbers',
                        'name' => 'atv_shock_absorbers',
                        'type' => 'select',
                        'choices' => array(
                            'Gas-filled shock absorbers',
                            'Coil spring dampers',
                            'Adjustable hydraulic shocks',
                            'Air shocks',
                            'Piggyback shocks',
                            'Reservoir shocks',
                            'Hydraulic w/ Nitrogen Assist',
                        ),
                        'default_value' => 'Adjustable hydraulic shocks',
                        'instructions' => 'Specify the type of shock absorbers the ATV uses (e.g., Gas-filled, Hydraulic).',
                    ),
                    array(
                        'key' => 'field_2039t132rclck072',
                        'label' => 'Shock Absorber Details',
                        'name' => 'atv_shock_absorber_details',
                        'type' => 'text area',
                        'placeholder' => 'High-performance, adjustable compression and rebound damping',
                        'instructions' => 'Detail any additional specifications or features of the ATV\'s shock absorbers.',
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