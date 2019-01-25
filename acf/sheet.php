<?php

$mime_types = 'jpg,jpeg,pdf,png';

acf_add_local_field_group(array(
    'key' => 'group_sheet',
    'title' => 'Sheet',
    'fields' => array(
        array(
            'key' => 'field_sheet_sample',
            'label' => 'Sample',
            'name' => 'sheet_sample',
            'type' => 'file',
            'instructions' => 'Sample sheet music file containing small part or quantity intended to show what the whole is like.',
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
            'key' => 'field_sheet_complete',
            'label' => 'Complete',
            'name' => 'sheet_complete',
            'type' => 'repeater',
            'instructions' => 'Complete sheet music file(s) containing the whole.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_5c10e86058e67',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(
                array(
                    'key' => 'field_repeater_list',
                    'label' => 'File',
                    'name' => 'field_sheet_repeaterer',
                    'type' => 'file',
                    'instructions' => '',
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
            ),
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