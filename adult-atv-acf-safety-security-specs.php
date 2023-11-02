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
            'key' =>  'field_3620a544isnpq749',
            'label' => 'Safety & Security',
            'name' => 'atv_safety_security',
            'type' => 'group',
            'menu_order' => 3,
            'sub_fields' => array(
                array(
                    'key' => 'field_9762d535uwpel016',
                    'label' => 'Has Mirrors?',
                    'name' => 'atv_has_mirrors',
                    'type' => 'true_false',
                    'instructions' => 'Specify if the ATV comes with mirrors for enhanced visibility and safety.',
                ),
                array(
                    'key' => 'field_1490e505cyant614',
                    'label' => 'Sideview Mirrors',
                    'name' => 'atv_sideview_mirrors',
                    'type' => 'true_false',
                    'instructions' => 'Indicate if the ATV is equipped with sideview mirrors.',
                    'conditional_logic' => array(
                        array(
                            'field' => 'field_9762d535uwpel016',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_8886b994qvbzm476',
                    'label' => 'Rearview Mirror',
                    'name' => 'atv_rearview_mirrors',
                    'type' => 'true_false',
                    'instructions' => 'Indicate if the ATV has a rearview mirror and provide any specific details or features about it.',
                    'conditional_logic' => array(
                        array(
                            'field' => 'field_9762d535uwpel016',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_1588a421fjitm359',
                    'label' => 'Has Emergency Tether Switch?',
                    'name' => 'atv_has_emergency_tether_switch',
                    'type' => 'true_false',
                    'instructions' => 'Indicate if the ATV is equipped with an emergency tether switch for safety purposes.',
                ),
                array(
                    'key' => 'field_7414q679dbqgm105',
                    'label' => 'Speed Governor',
                    'name' => 'atv_speed_governor',
                    'type' => 'true_false',
                    'instructions' => 'Specify if the ATV has a device to limit its top speed, and if so, provide its details.',
                ),
                array(
                    'key' => 'field_2695f424tnbkf324',
                    'label' => 'Has Safety Harness?',
                    'name' => 'atv_has_safety_harness',
                    'type' => 'true_false',
                    'instructions' => 'Indicate whether the ATV comes with a safety harness to secure the rider.',
                ),
                array(
                    'key' => 'field_7003p316brlis823',
                    'label' => 'Type of Safety Harness',
                    'name' => 'atv_safety_harness_type',
                    'type' => 'select',
                    'instructions' => 'Select the ATV specific safety hardness type.',
                    'choices' => array(
                        '3-point harness' => '3-point harness',
                        '5-point harness' => '5-point harness',
                    ),
                    'conditional_logic' => array(
                        array(
                            'field' => 'field_2695f424tnbkf324',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_1436q481iiyeh831',
                    'label' => 'Has Security System',
                    'name' => 'atv_security_system',
                    'type' => 'true_false',
                    'instructions' => 'Specify if the ATV is equipped with a security system to prevent theft or unauthorized use.',
                ),
                array(
                    'key' => 'field_9540p832idnyb241',
                    'label' => 'Type of Security System',
                    'name' => 'atv_type_of_security_system',
                    'type' => 'select',
                    'instructions' => 'If the ATV has a security system, choose its specific type or design, such as alarm or immobilizer.',
                    'choices' => array(
                        'Keyed Ignition' => 'Keyed Ignition',
                        'Immobilizer' => 'Immobilizer',
                        'Alarm System' => 'Alarm System',
                        'GPS Tracking' => 'GPS Tracking',
                        'Pin Code' => 'Pin Code',
                    ),
                    'conditional_logic' => array(
                        array(
                            'field' => 'field_1436q481iiyeh831',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
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
                'value' => 'YOUR_CUSTOM_POST_TYPE', // Replace with your actual post type
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

endif;
