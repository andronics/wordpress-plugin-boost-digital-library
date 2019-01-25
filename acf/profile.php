<?php

$mime_types = 'jpg,jpeg,pdf,png';

acf_add_local_field_group(array(
    'key' => 'group_profile',
    'title' => 'Profile',
    'fields' => array(

        array(
            'key' => 'field_genres',
            'label' => 'Genres',
            'name' => 'genres',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'genre',
            ),
            'taxonomy' => '',
            'allow_null' => 1,
            'multiple' => 1,
            'return_format' => 'object',
            'ui' => 1,
        ),
        array(
            'key' => 'field_key',
            'label' => 'Key',
            'name' => 'key',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'key',
            ),
            'taxonomy' => '',
            'allow_null' => 1,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'composition',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'left',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
    


?>