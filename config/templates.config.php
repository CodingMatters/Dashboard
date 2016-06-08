<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'layout'                => "dashboard/layout",
        'template_map'          => [
            'dashboard/layout'  => __DIR__ . '/../view/layout/dashboard.phtml',                      
        ],
        'template_path_stack'   => [
            'dashboard' => __DIR__ . '/../view',
        ],
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'layout'    => "dashboard/layout",
        'map'       => [
            'dashboard/layout'  => __DIR__ . '/../view/layout/dashboard.phtml',
        ],
        'paths'     => [
            'dashboard' => [__DIR__ . '/../view']
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
