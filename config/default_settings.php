<?php

return [
    'plugin' => [
        'general' => [
            'foo_bar' => 'test',
        ]
    ],
    'configuration' => [
        'rules' => [
            'custom_plugin' => [
                'update' => [
                    'foo_bar' => 'string',
                ],
            ],
            'existing_service' => [
                'create' => [
                    'something' => 'string'
                ]
            ]
        ],
        'visibility' => [
            'custom_plugin' => [
                'foo_bar' => 'list:guest,customer,admin|details:guest,customer,admin',
            ],
            'existing_service' => [
                'something' => 'list:guest'
            ]
        ],
    ]
];