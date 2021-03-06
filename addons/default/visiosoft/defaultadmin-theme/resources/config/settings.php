<?php

return [
    'sidebar_hover' => 'anomaly.field_type.boolean',
    'navigation'    => [
        'type'       => 'anomaly.field_type.textarea',
        'input_view' => 'visiosoft.theme.defaultadmin::admin/navigation/settings',
    ],
    "icon" => [
        "type"   => "anomaly.field_type.file",
        "config" => [
            "folders"       => ['images'],
        ]
    ],
    "title" => [
        "type"   => "anomaly.field_type.text",
        "config" => [
            "default_value" => 'OpenClassify',
        ]
    ],
    "sidebar_main_color" => [
        "type"   => "anomaly.field_type.colorpicker",
        "config" => [
            "default_value" => '#252525',
        ]
    ],
    "sidebar_secondary_color" => [
        "type"   => "anomaly.field_type.colorpicker",
        "config" => [
            "default_value" => '#333333',
        ]
    ],
    "active_sidebar_border_color" => [
        "type"   => "anomaly.field_type.colorpicker",
        "config" => [
            "default_value" => '#c61db4',
        ]
    ],
];
