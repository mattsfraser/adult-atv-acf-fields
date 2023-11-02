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
                'key' => 'field_7050t727dqnoy100',
                'label' => 'Tire Details',
                'name' => 'atv_tires',
                'type' => 'group',
                'menu_order' => 2,
                'sub_fields' => array(
                    array(
                        'key' => 'field_8368f320htjpz764',
                        'label' => 'Tire Brand',
                        'name' => 'atv_tire_brand',
                        'type' => 'text',
                        'instructions' => 'Specify the brand of the tires equipped on the ATV.',
                    ),
                    array(
                        'key' => 'field_8239p322pgvvz538',
                        'label' => 'Front Tire Type',
                        'name' => 'atv_front_tire_type',
                        'type' => 'select',
                        'choices' => array(
                            'All Terrain (AT)' => 'All Terrain (AT)',
                            'Mud' => 'Mud',
                            'Sand' => 'Sand',
                            'Trail' => 'Trail',
                            'Racing' => 'Racing',
                            'Snow' => 'Snow',
                        ),
                        'instructions' => 'Choose the type of front tire the ATV uses (e.g., All-Terrain, Mud).',
                    ),
                    array(
                        'key' => 'field_5307h369yardg350',
                        'label' => 'Front Tire Height (in)',
                        'name' => 'atv_front_tire_height_in',
                        'type' => 'number',
                        'placeholder' => 27,
                        'instructions' => 'Indicate the height of the front tire in inches.',
                    ),
                    array(
                        'key' => 'field_2922n005grhcr142',
                        'label' => 'Front Tire Height (cm)',
                        'name' => 'atv_front_tire_height_cm',
                        'type' => 'number',
                        'placeholder' => 69,
                        'instructions' => 'Provide the height of the front tire in centimeters.',
                    ),
                    array(
                        'key' => 'field_9150l952lsqer560',
                        'label' => 'Front Tire Width (in)',
                        'name' => 'atv_front_tire_width_in',
                        'type' => 'number',
                        'placeholder' => 10,
                        'instructions' => 'Specify the width of the front tire in inches.',
                    ),
                    array(
                        'key' => 'field_1941s542udkba934',
                        'label' => 'Front Tire Width (cm)',
                        'name' => 'atv_front_tire_width_cm',
                        'type' => 'number',
                        'placeholder' => 25,
                        'instructions' => 'Indicate the width of the front tire in centimeters.',
                    ),
                    array(
                        'key' => 'field_5246z198gytku102',
                        'label' => 'Front Wheel Diameter (in)',
                        'name' => 'atv_front_wheel_diameter_in',
                        'type' => 'number',
                        'placeholder' => 14,
                        'instructions' => 'Provide the diameter of the front wheel in inches.',
                    ),
                    array(
                        'key' => 'field_3418a788ovsqr779',
                        'label' => 'Front Wheel Diameter (cm)',
                        'name' => 'atv_front_wheel_diameter_cm',
                        'type' => 'number',
                        'placeholder' => 36,
                        'instructions' => 'Specify the diameter of the front wheel in centimeters.',
                    ),
                    array(
                        'key' => 'field_3730i234qfhwc368',
                        'label' => 'Rear Tire Type',
                        'name' => 'atv_rear_tire_type',
                        'type' => 'select',
                        'default_value' => 'All Terrain (AT)',
                        'choices' => array(
                            'All Terrain (AT)',
                            'Mud',
                            'Sand',
                            'Trail',
                            'Racing',
                            'Snow'
                        ),
                        'instructions' => 'Choose the type of rear tire the ATV uses (e.g., All-Terrain, Mud).',
                    ),
                    array(
                        'key' => 'field_9027c877edvvl506',
                        'label' => 'Rear Tire Height (in)',
                        'name' => 'atv_rear_tire_height_in',
                        'type' => 'number',
                        'placeholder' => 28,
                        'instructions' => 'Indicate the height of the rear tire in inches.',
                    ),
                    array(
                        'key' => 'field_0054z757xdoik190',
                        'label' => 'Rear Tire Height (cm)',
                        'name' => 'atv_rear_tire_height_cm',
                        'type' => 'number',
                        'placeholder' => 71,
                        'instructions' => 'Provide the height of the rear tire in centimeters.',
                    ),
                    array(
                        'key' => 'field_9461a037xfoqt391',
                        'label' => 'Rear Tire Width (in)',
                        'name' => 'atv_rear_tire_width_in',
                        'type' => 'number',
                        'placeholder' => 11,
                        'instructions' => 'Specify the width of the rear tire in inches.',
                    ),
                    array(
                        'key' => 'field_7797a955ckrws523',
                        'label' => 'Rear Tire Width (cm)',
                        'name' => 'atv_rear_tire_width_cm',
                        'type' => 'number',
                        'placeholder' => 28,
                        'instructions' => 'Indicate the width of the rear tire in centimeters.',
                    ),
                    array(
                        'key' => 'field_5980n415tqqin303',
                        'label' => 'Rear Wheel Diameter (in)',
                        'name' => 'atv_rear_wheel_diameter_in',
                        'type' => 'number',
                        'placeholder' => 14,
                        'instructions' => 'Provide the diameter of the rear wheel in inches.',
                    ),
                    array(
                        'key' => 'field_5956c918ljssv728',
                        'label' => 'Rear Wheel Diameter (cm)',
                        'name' => 'atv_rear_wheel_diameter_cm',
                        'type' => 'number',
                        'placeholder' => 36,
                        'instructions' => 'Specify the diameter of the rear wheel in centimeters.',
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