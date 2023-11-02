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
                'key' => 'field_4203q700cwdue207',
                'label' => 'Drivetrain Details',
                'name' => 'atv_drivetrain',
                'type' => 'group',
                'menu_order' => 5,
                'sub_fields' => array(
                    array(
                        'key' => 'field_5458l323cphdo818',
                        'label' => 'Drive Train System',
                        'name' => 'atv_drive_train_system',
                        'type' => 'select',
                        'choices' => array(
                            '2WD',
                            '4WD',
                        ),
                        'default_value' => '4WD',
                        'placeholder' => 'Select',
                        'instructions' => 'Choose the type of drive train system the ATV uses (e.g., Chain, Shaft).',
                    ),
                    array(
                        'key' => 'field_7132a015ebixl537',
                        'label' => 'Locking Differential',
                        'name' => 'atv_locking_differential',
                        'type' => 'select',
                        'choices' => array(
                            'Electric Locking Differential',
                            'Manual Locking Differential',
                            'No Locking Differential',
                        ),
                        'placeholder' => 'Select',
                        'instructions' => 'Specify if the ATV has a locking differential feature.',
                    ),
                    array(
                        'key' => 'field_0880q914izwij757',
                        'label' => 'Final Drive',
                        'name' => 'atv_final_drive',
                        'type' => 'select',
                        'choices' => array(
                            'Chain Drive',
                            'Shaft Drive',
                            'Belt Drive',
                        ),
                        'placeholder' => 'Select',
                        'instructions' => 'Indicate the final drive configuration (e.g., Chain, Belt).',
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