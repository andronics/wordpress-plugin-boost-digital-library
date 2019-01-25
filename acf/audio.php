<?php

$mime_types = 'mp3,wav,midi';

acf_add_local_field_group(array(
    'key' => 'group_audio',
    'title' => 'Audio',
    'fields' => array(
        array(
            'key' => 'field_sample',
            'label' => 'Sample',
            'name' => 'audio_sample',
            'type' => 'file',
            'instructions' => 'Sample audio file containing small part or quantity intended to show what the whole is like.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => $mime_types,
        ),
        array(
            'key' => 'field_complete',
            'label' => 'Complete',
            'name' => 'audio_complete',
            'type' => 'file',
            'instructions' => 'A complete audio file containing the full recording.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => $mime_types,
        ),
        array(
            'key' => 'field_performers',
            'label' => 'Performers',
            'name' => 'performers',
            'type' => 'post_object',
            'instructions' => 'Group or individual who performing the piece.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'performer',
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
    'menu_order' => 50,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'left',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

?>