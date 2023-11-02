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
                'key' => 'field_6468z961wpbqf697',
                'label' => 'Brake Details',
                'name' => 'atv_brakes',
                'type' => 'group',
                'menu_order' => 4,
                'sub_fields' => array(
                    array(
                        'key' => 'field_4267y274qvlzs221',
                        'label' => 'Front Braking System',
                        'name' => 'atv_front_braking_system',
                        'type' => 'select',
                        'choices' => array(
                            'Mechanical Disc brake',
                            'Hydraulic Disc Brake',
                            'Drum Brake',
                            'Hydraulic Drum Brake',
                        ),
                        'default_value' => 'Hydraulic Disc Brake',
                        'instructions' => 'Choose the type of front braking system the ATV uses (e.g., Disc, Drum).',
                    ),
                    array(
                        'key' => 'field_3932a546nsrlx276',
                        'label' => 'Rear Braking System',
                        'name' => 'atv_rear_braking_system',
                        'type' => 'select',
                        'choices' => array(
                            'Mechanical Disc brake',
                            'Hydraulic Disc Brake',
                            'Drum Brake',
                            'Hydraulic Drum Brake',
                        ),
                        'default_value' => 'Hydraulic Disc Brake',
                        'instructions' => 'Specify the type of rear braking system the ATV uses.',
                    ),
                    array(
                        'key' => 'field_5377x351nffhx578',
                        'label' => 'Front Brake Size (mm)',
                        'name' => 'atv_front_brake_size_mm',
                        'type' => 'number',
                        'placeholder' => 220,
                        'instructions' => 'Indicate the size of the front brake in millimeters.',
                    ),
                    array(
                        'key' => 'field_8742q044vgrzm893',
                        'label' => 'Rear Brake Size (mm)',
                        'name' => 'atv_rear_brake_size_mm',
                        'type' => 'number',
                        'placeholder' => 200,
                        'instructions' => 'Provide the size of the rear brake in millimeters.',
                    ),
                    array(
                        'key' => 'field_7744o866baxsf832',
                        'label' => 'Has Parking Brake?',
                        'name' => 'atv_has_parking_brake',
                        'type' => 'true_false',
                        'message' => 'Yes',
                        'instructions' => 'Specify if the ATV is equipped with a parking brake.',
                    ),
                    array(
                        'key' => 'field_5858h143uuutl843',
                        'label' => 'Parking Brake Type',
                        'name' => 'atv_parking_brake_type',
                        'type' => 'select',
                        'choices' => array(
                            'Mechanical',
                            'Electric',
                        ),
                        'default_value' => 'Mechanical',
                        'instructions' => 'If the ATV has a parking brake, indicate its type (e.g., Hand Lever, Foot Pedal).',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_5858h143uuutl843',
                                'operator' => '==',
                                'value' => 1,
                            ),
                        ),
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