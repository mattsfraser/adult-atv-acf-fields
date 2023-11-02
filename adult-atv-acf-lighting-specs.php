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
                'key' =>  'field_8149d594wuxgv068',
                'label' => 'Lighting Details',
                'name' => 'atv_lighting',
                'type' => 'group',
                'menu_order' => 5,
                'sub_fields' => array(
                    array(
                        'key' => 'field_9728a255kcxaq014',
                        'label' => 'Has Headlights?',
                        'name' => 'atv_has_headlights',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV is equipped with headlights.',
                    ),
                    array(
                        'key' => 'field_7040j908utyxy103',
                        'label' => 'Type of Headlights',
                        'name' => 'atv_headlight_type',
                        'type' => 'select',
                        'instructions' => 'If the ATV has headlights, specify their type (e.g., LED, Halogen).',
                        'choices' => array(
                            'Halogen' => 'Halogen',
                            'LED' => 'LED',
                        ),
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_9728a255kcxaq014',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_1488h255vjihf841',
                        'label' => 'Style of Headlights',
                        'name' => 'atv_headlight_style',
                        'type' => 'select',
                        'choices' => array(
                            'Standard' => 'Standard',
                            'Angel Eyes (Halo Rings)' => 'Angel Eyes (Halo Rings)',
                            'Projector' => 'Projector',
                        ),
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_9728a255kcxaq014',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_4273p430lhlzg546',
                        'label' => 'Tail Lights',
                        'name' => 'atv_tail_lights',
                        'type' => 'true_false',
                        'instructions' => 'Indicate the type and features of the ATV\'s tail lights.',
                    ),
                    array(
                        'key' => 'field_5745x137yducj713',
                        'label' => 'Brake Lights',
                        'name' => 'atv_brake_lights',
                        'type' => 'true_false',
                        'instructions' => 'Specify the type and features of the ATV\'s brake lights.',
                    ),
                    array(
                        'key' => 'field_5685d187mkarb798',
                        'label' => 'Turn Signals',
                        'name' => 'atv_turn_signals',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV has turn signals and their type.',
                    ),


                    // ... Add more fields as needed ...
                ),
            ),
        ),
        // ... Add other configurations such as location, menu_order, etc. ...
    ));

endif;
