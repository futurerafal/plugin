<?php

return [
    'plugin' => [
        'general' => [
            'foo_bar' => 'test',
        ]
    ],
    'configuration' => [
        'rules' => [
            'plugin' => [
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
            'plugin' => [
                'foo_bar' => 'list:guest,customer,admin|details:guest,customer,admin',
            ],
            'existing_service' => [
                'something' => 'list:guest'
            ]
        ],
    ]
];