<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_2630j655veliz956',
        'title' => 'ATV Product Specifications',
        'fields' => array(
            array(
                'key' => 'field_1473m770hdlku946',
                'label' => 'Vehicle Overview',
                'menu_order' => 1,
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_1473m770hdlku946',
                'label' => 'Dashboard Features',
                'name' => 'atv_dashboard',
                'menu_order' => 2,
                'type' => 'group',
                'sub_fields' => array(
                    array(
                        'key' => 'field_2450w672kylnn894',
                        'label' => 'Instrumentation',
                        'name' => 'atv_instrumentation',
                        'type' => 'select',
                        'choices' => array(
                            'Digital' => 'Digital',
                            'Analog' => 'Analog',
                            'Combination' => 'Combination',
                        ),
                        'default_value' => 'Digital',
                        'instructions' => 'Specify the types of instruments and gauges available on the ATV\'s dashboard.',
                    ),
                    array(
                        'key' => 'field_7635b810hzrhu259',
                        'label' => 'Has Fuel Guage?',
                        'name' => 'atv_has_fuel_guage',
                        'type' => 'true_false',
                        'instructions' => 'Indicate whether the ATV is equipped with a fuel gauge.',
                    ),
                    array(
                        'key' => 'field_8287s905viobx737',
                        'label' => 'Fuel Gauge Type',
                        'name' => 'atv_fuel_gauge_type',
                        'type' => 'select',
                        'choices' => array(
                            'LCD Digital Display' => 'LCD Digital Display',
                            'Analog Needle Display' => 'Analog Needle Display',
                            'LED Indicator Bars' => 'LED Indicator Bars',
                        ),
                        'instructions' => 'Select the specific type or design of the fuel gauge if the ATV has one.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_7635b810hzrhu259',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_9408q560dgzag762',
                        'label' => 'Has Speedometer?',
                        'name' => 'atv_has_speedometer',
                        'type' => 'true_false',
                        'instructions' => 'Indicate whether the ATV comes with a speedometer.',
                    ),
                    array(
                        'key' => 'field_3585y591ofubn698',
                        'label' => 'Speedometer Type',
                        'name' => 'atv_speedometer_type',
                        'type' => 'select',
                        'choices' => array(
                            'LCD Digital Display' => 'LCD Digital Display',
                            'Analog Needle Display' => 'Analog Needle Display',
                            'LED Indicator Bars' => 'LED Indicator Bars',
                        ),
                        'instructions' => 'Choose the specific type or design of the speedometer if the ATV has one.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_9408q560dgzag762',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_3273a720qfril180',
                        'label' => 'Has Odometer?',
                        'name' => 'atv_has_odometer',
                        'type' => 'true_false',
                        'instructions' => 'Specify if the ATV is equipped with an odometer to measure distance traveled.',
                    ),
                    array(
                        'key' => 'field_2027c755kunbc784',
                        'label' => 'Odometer Type',
                        'name' => 'atv_odometer_type',
                        'type' => 'select',
                        'choices' => array(
                            'LCD Digital Display' => 'LCD Digital Display',
                            'Analog Needle Display' => 'Analog Needle Display',
                            'Trip and Total Distance' => 'Trip and Total Distance',
                        ),
                        'instructions' => 'If the ATV has an odometer, select its specific type or design.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_3273a720qfril180',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_8261z725kzuyn474',
                        'label' => 'Has Tachometer?',
                        'name' => 'atv_has_tachometer',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV comes with a tachometer to measure engine speed.',
                    ),
                    array(
                        'key' => 'field_2993k942scofi371',
                        'label' => 'Tachometer Type',
                        'name' => 'atv_tachometer_type',
                        'type' => 'select',
                        'choices' => array(
                            'LCD Digital Display' => 'LCD Digital Display',
                            'Analog Needle Display' => 'Analog Needle Display',
                            'Trip and Total Distance' => 'Trip and Total Distance',
                        ),
                        'instructions' => 'If the ATV has a tachometer, choose its specific type or design.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_8261z725kzuyn474',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_2299u834yfpnw049',
                        'label' => 'Has Warning Indicators?',
                        'name' => 'atv_has_warning_indicators',
                        'type' => 'true_false',
                        'instructions' => 'Specify whether the ATV\'s dashboard has warning indicators for system alerts.',
                    ),
                    array(
                        'key' => 'field_5067y633nhrcg877',
                        'label' => 'Warning Indicators',
                        'name' => 'atv_warning_indicators',
                        'type' => 'select',
                        'choices' => array(
                            'Engine Temperature' => 'Engine Temperature',
                            'Oil Pressure' => 'Oil Pressure',
                            'Battery Charge' => 'Battery Charge',
                            'Brake Warning' => 'Brake Warning',
                            'Turn Signal Indicators' => 'Turn Signal Indicators',
                            'High Beam Indicator' => 'High Beam Indicator',
                            'Neutral Gear Indicator' => 'Neutral Gear Indicator',
                            'Check Engine' => 'Check Engine',
                            'Service Indicator' => 'Service Indicator',
                        ),
                        'instructions' => 'Select the types of warning indicators present, such as oil pressure, engine temperature, etc.',
                        'multiple' => 1,
                        'default_value' => array('Engine Temperature', 'Oil Pressure', 'Battery Charge'),
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_2299u834yfpnw049',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),

                    // ... Add more fields as needed ...
                ),
            ),
        ),
    ));

endif;
