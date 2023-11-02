<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_2630j655veliz956',
        'title' => 'ATV Product Specifications',
        'fields' => array(
            array(
                'key' => 'field_5634u848gjpdh562',
                'label' => 'Towing & Storage',
                'name' => '',
                'type' => 'tab',
                'menu_order' => 4,
            ),
            array(
                'key' => 'field_1858l874piroj476',
                'label' => 'Storage Details',
                'name' => 'atv_storage',
                'type' => 'group',
                'menu_order' => 3,
                'sub_fields' => array(
                    array(
                        'key' => 'field_8188r331ezxiq622',
                        'label' => 'Has Front Storage?',
                        'name' => 'atv_has_front_storage',
                        'type' => 'true_false',
                        'instructions' => 'Specify if the ATV comes with front storage compartments.',
                    ),
                    array(
                        'key' => 'field_4368u826sqitk567',
                        'label' => 'Front Storage Type',
                        'name' => 'atv_front_storage_type',
                        'type' => 'select',
                        'choices' => array(
                            'Rack Storage' => 'Rack Storage',
                            'Storage Boxes' => 'Storage Boxes',
                            'Front Baskets' => 'Front Baskets',
                            'Built-in Storage Compartments' => 'Built-in Storage Compartments',
                            'Bag Storage' => 'Bag Storage',
                            'Fuel Storage' => 'Fuel Storage',
                        ),
                        'instructions' => 'If the ATV has front storage, select its specific type or design.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_8188r331ezxiq622',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_8472y712oiami774',
                        'label' => 'Front Storage Capacity (L)',
                        'name' => 'atv_front_storage_capacity_litres',
                        'type' => 'number',
                        'placeholder' => 30,
                        'instructions' => 'Provide the volume capacity of the front storage in liters.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_8188r331ezxiq622',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_8400j943zzllz995',
                        'label' => 'Front Storage Capacity (kg)',
                        'name' => 'atv_front_storage_capacity_kg',
                        'type' => 'number',
                        'placeholder' => 25,
                        'instructions' => 'Specify the weight capacity of the front storage in kilograms.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_8188r331ezxiq622',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_5536w301pvbaf967',
                        'label' => 'Has Rear Storage?',
                        'name' => 'atv_has_rear_storage',
                        'type' => 'true_false',
                        'instructions' => 'Indicate if the ATV is equipped with rear storage compartments.',
                    ),
                    array(
                        'key' => 'field_9971u406gaeth870',
                        'label' => 'Rear Storage Type',
                        'name' => 'atv_rear_storage_type',
                        'type' => 'select',
                        'choices' => array(
                            'Rack Storage' => 'Rack Storage',
                            'Storage Boxes' => 'Storage Boxes',
                            'Front Baskets' => 'Front Baskets',
                            'Built-in Storage Compartments' => 'Built-in Storage Compartments',
                            'Bag Storage' => 'Bag Storage',
                            'Fuel Storage' => 'Fuel Storage',
                        ),
                        'instructions' => 'If the ATV has rear storage, select its specific type or design.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_5536w301pvbaf967',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_5196y776kzddu597',
                        'label' => 'Rear Storage Capacity (L)',
                        'name' => 'atv_rear_storage_capacity_litres',
                        'type' => 'number',
                        'placeholder' => 25,
                        'instructions' => 'Provide the volume capacity of the rear storage in liters.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_5536w301pvbaf967',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_9832s277dtlvz707',
                        'label' => 'Rear Storage Capacity (kg)',
                        'name' => 'atv_rear_storage_capacity_kg',
                        'type' => 'number',
                        'placeholder' => 20,
                        'instructions' => 'Specify the weight capacity of the rear storage in kilograms.',
                        'conditional_logic' => array(
                            array(
                                'field' => 'field_5536w301pvbaf967',
                                'operator' => '==',
                                'value' => '1',
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
