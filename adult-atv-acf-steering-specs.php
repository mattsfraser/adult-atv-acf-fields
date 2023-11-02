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
                'key' => 'field_4928a401qlpra065',
                'label' => 'Steering Details',
                'name' => 'atv_steering',
                'type' => 'group',
                'menu_order' => 6,
                'sub_fields' => array(
                    array(
                        'key' => 'field_6940i884owyho330',
                        'label' => 'Steering Type',
                        'name' => 'atv_steering_type',
                        'type' => 'select',
                        'choices' => array(
                            'Electric Power Steering (EPS)',
                            'Manual Steering',
                            'Hydraulic Power Steering',
                            'Rack and Pinion',
                        ),
                        'default_value' => 'Hydraulic Power Steering',
                        'instructions' => 'Choose the type of steering system the ATV uses (e.g., Manual, Power-Assisted).',
                    ),
                    array(
                        'key' => 'field_0020b019nvdqa068',
                        'label' => 'Minimum turning radius (mm)',
                        'name' => 'atv_min_turning_radius_mm',
                        'type' => 'number',
                        'placeholder' => 2500,
                        'instructions' => 'Indicate the minimum turning radius of the ATV in millimeters.',
                    ),
                    array(
                        'key' => 'field_0020b019nvdqa068',
                        'label' => 'Minimum turning radius (in)',
                        'name' => 'atv_min_turning_radius_in',
                        'type' => 'number',
                        'placeholder' => 98,
                        'instructions' => 'Indicate the minimum turning radius of the ATV in inches.',
                    ),
                    array(
                        'key' => 'field_9745o883sfoda464',
                        'label' => 'Steering Lock Angle',
                        'name' => 'atv_steering_lock_angle',
                        'type' => 'number',
                        'placeholder' => 35,
                        'instructions' => 'Specify the maximum angle to which the handlebars can be turned.',
                    ),
                    array(
                        'key' => 'field_2446n022nqhyc574',
                        'label' => 'Handlebar Width (cm)',
                        'name' => 'atv_handlebar_width_cm',
                        'type' => 'number',
                        'placeholder' => 80,
                        'instructions' => 'Indicate the width of the ATV\'s handlebars in cms.',
                    ),
                    array(
                        'key' => 'field_2446n022nqhyc574',
                        'label' => 'Handlebar Width (in)',
                        'name' => 'atv_handlebar_width_in',
                        'type' => 'number',
                        'placeholder' => 31.5,
                        'instructions' => 'Indicate the width of the ATV\'s handlebars in inches.',
                    ),
                    array(
                        'key' => 'field_9815y439ybrhq354',
                        'label' => 'Steering Damper',
                        'name' => 'atv_steering_damper',
                        'type' => 'select',
                        'choices' => array(
                            'None',
                            'Basic',
                            'Adjustable',
                            'Hydraulic',
                            'Electronic',
                        ),
                        'default_value' => 'Hydraulic',
                        'instructions' => 'Specify if the ATV is equipped with a steering damper and its type.',
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