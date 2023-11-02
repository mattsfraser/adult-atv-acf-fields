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
                'key' => 'field_4348j930hjyuy613',
                'label' => 'Engine Details',
                'name' => 'atv_engine',
                'type' => 'group',
                'menu_order' => 1,
                'sub_fields' => array(
                    array(
                        'key' => 'field_6147x927isbap124',
                        'label' => 'Engine Model',
                        'name' => 'atv_engine_model',
                        'type' => 'text',
                        'placeholder' => '2V91W-A',
                        'instructions' => 'Enter the specific engine model. E.g., 2V91W-A. Refer to the ATV\'s manual or manufacturer\'s specifications if unsure.',
                    ),
                    array(
                        'key' => 'field_6903v670ppxwm924',
                        'label' => 'Engine Displacement (cc)',
                        'name' => 'atv_engine_displacement_cc',
                        'type' => 'number',
                        'placeholder' => 500,
                        'instructions' => 'Enter the engine\'s displacement in cubic centimeters.',
                    ),
                    array(
                        'key' => 'field_4845v678vdbtr744',
                        'label' => 'Engine Management',
                        'name' => 'atv_engine_management',
                        'type' => 'select',
                        'choices' => array(
                            'Carbureted Engine',
                            'Fuel Injected Engine',
                            'Electronic Fuel Injection (EFI)',
                            'Direct Injection',
                        ),
                        'default_value' => 'Electronic Fuel Injection (EFI)',
                        'instructions' => 'Choose the engine management system (e.g., Fuel Injected, Carbureted).',
                    ),
                    array(
                        'key' => 'field_9239f343ozsxt633',
                        'label' => 'Carburetor',
                        'name' => 'atv_carburetor',
                        'type' => 'text',
                        'instructions' => 'If applicable, specify the type and model of the carburetor.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_4348j930hjyuy613',
                                'operator' => '==',
                                'value' => 'Carbureted Engine',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_1378f931gboey304',
                        'label' => 'Horsepower',
                        'name' => 'atv_horse_power',
                        'type' => 'number',
                        'placeholder' => 85,
                        'instructions' => 'Provide the engine\'s horsepower rating.',
                    ),
                    array(
                        'key' => 'field_4389k793jfqcx955',
                        'label' => 'Cylinders',
                        'name' => 'atv_cylinders',
                        'type' => 'select',
                        'choices' => array(
                            'Single-cylinder',
                            'Twin-cylinder',
                        ),
                        'default_value' => 'Single-cylinder',
                        'instructions' => 'Indicate the number of cylinders in the engine.',
                    ),
                    array(
                        'key' => 'field_1571n691takkg273',
                        'label' => 'Cylinder Configuration',
                        'name' => 'atv_cylinder_configuration',
                        'type' => 'select',
                        'choices' => array(
                            'Inline',
                            'V-Twin',
                            'Boxer',
                            'Parallel Twin',
                        ),
                        'default_value' => 'Inline',
                        'instructions' => 'Select the arrangement of the engine\'s cylinders (e.g., V-Twin, Inline).',
                    ),
                    array(
                        'key' => 'field_1256t582cecsn032',
                        'label' => 'Torque Value',
                        'name' => 'atv_torque_value',
                        'type' => 'text',
                        'placeholder' => '7.5',
                        'instructions' => 'Enter the maximum torque produced by the engine.',
                    ),
                    array(
                        'key' => 'field_0956k128rexxz668',
                        'label' => 'RPM Start for Max Torque',
                        'name' => 'atv_rpm_start_torque',
                        'type' => 'number',
                        'placeholder' => 4500,
                        'instructions' => 'Specify the RPM range\'s starting point where the engine produces maximum torque.',
                    ),
                    array(
                        'key' => 'field_7773k369yrbno527',
                        'label' => 'RPM End for Max Torque',
                        'name' => 'atv_rpm_end_torque',
                        'type' => 'number',
                        'placeholder' => 5500,
                        'instructions' => 'Indicate the RPM range\'s endpoint where the engine produces maximum torque.',
                    ),
                    array(
                        'key' => 'field_7864x687fxksw321',
                        'label' => 'Bore (mm)',
                        'name' => 'atv_engine_bore_mm',
                        'type' => 'number',
                        'placeholder' => 91,
                        'instructions' => 'Provide the engine\'s bore diameter in millimeters.',
                    ),
                    array(
                        'key' => 'field_5681b403htnat668',
                        'label' => 'Stroke (mm)',
                        'name' => 'atv_engine_stroke_mm',
                        'type' => 'number',
                        'placeholder' => 74,
                        'instructions' => 'Indicate the engine\'s stroke length in millimeters.',
                    ),
                    array(
                        'key' => 'field_3441f823luovl673',
                        'label' => 'Bore (in)',
                        'name' => 'atv_engine_bore_in',
                        'type' => 'number',
                        'placeholder' => 3.6,
                        'instructions' => 'Provide the engine\'s bore diameter in inches.',
                    ),
                    array(
                        'key' => 'field_3218i249aujqy392',
                        'label' => 'Stroke (in)',
                        'name' => 'atv_engine_stroke_in',
                        'type' => 'number',
                        'placeholder' => 2.9,
                        'instructions' => 'Indicate the engine\'s stroke length in inches.',
                    ),
                    array(
                        'key' => 'field_6018h232yqiio528',
                        'label' => 'Compression',
                        'name' => 'atv_engine_compression',
                        'type' => 'text',
                        'placeholder' => '10.6: 1',
                        'instructions' => 'Enter the engine\'s compression ratio.',
                    ),
                    array(
                        'key' => 'field_4596t012bvzfq408',
                        'label' => 'Cooling System',
                        'name' => 'atv_engine_cooling_system',
                        'type' => 'select',
                        'choices' => array(
                            'Air-cooled',
                            'Liquid-cooled',
                            'Oil-cooled',
                        ),
                        'default_value' => 'Liquid-cooled',
                        'instructions' => 'Select the type of cooling system used by the engine (e.g., Air-cooled, Liquid-cooled).',
                    ),
                    array(
                        'key' => 'field_6326j772ajvyo022',
                        'label' => 'Air Filter',
                        'name' => 'katv_air_filter',
                        'type' => 'select',
                        'choices' => array(
                            'Paper Filter',
                            'Foam Filter',
                            'Cotton Filter',
                            'None',
                        ),
                        'default_value' => 'Paper Filter',
                    ),
                    array(
                        'key' => 'field_3795m019dxlfx619',
                        'label' => 'Ignition Type',
                        'name' => 'atv_engine_ignition_type',
                        'type' => 'select',
                        'choices' => array(
                            'Electronic ignition',
                            'CDI',
                            'Points Ignition',
                            'Magneto Ignition',
                        ),
                        'default_value' => 'Electronic ignition',
                        'instructions' => 'Choose the ignition system type (e.g., Electronic, CDI).',
                    ),
                    array(
                        'key' => 'field_8625k264wouqg628',
                        'label' => 'Starting',
                        'name' => 'atv_engine_starting_method',
                        'type' => 'select',
                        'choices' => array(
                            'Electric start',
                            'Kick Start',
                            'Pull Start',
                            'Combination Start',
                        ),
                        'default_value' => 'Electric start',
                        'instructions' => 'Specify the starting method for the ATV (e.g., Electric Start, Kick Start).',
                    ),
                    array(
                        'key' => 'field_3686o304msrvo097',
                        'label' => 'Number of Strokes',
                        'name' => 'atv_number_of_strokes',
                        'type' => 'select',
                        'choices' => array(
                            '2-Stroke',
                            '4-Stroke',
                        ),
                        'default_value' => '4-Stroke',
                        'instructions' => 'Indicate whether the engine is a 2-stroke or 4-stroke.',
                    ),
                    array(
                        'key' => 'field_7960g018pkmdd389',
                        'label' => 'Number of Engine Valves',
                        'name' => 'atv_number_of_engine_valves',
                        'type' => 'number',
                        'placeholder' => 8,
                        'instructions' => 'Provide the total number of valves in the engine.',
                    )

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