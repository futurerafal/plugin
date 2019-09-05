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
        ],
        'visibility' => [
            'plugin' => [
                'foo_bar' => 'list:guest,customer,admin|details:guest,customer,admin',
            ],
            'shipping' => [
                'methods.braintree.merchantId' => 'list:guest,customer,admin|details:admin'
            ]
        ],
    ]
];