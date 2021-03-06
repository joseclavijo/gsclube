<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-admin://blueprints/layout/section.yaml',
    'modified' => 1442615383,
    'data' => [
        'name' => 'Section',
        'description' => 'Layout section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'boxed' => [
                    'type' => 'select.selectize',
                    'label' => 'Layout',
                    'description' => 'Select between a Fullwidth and Boxed.',
                    'isset' => true,
                    'options' => [
                        0 => 'Fullwidth',
                        1 => 'Boxed'
                    ]
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Enter CSS class names.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ]
            ]
        ]
    ]
];
