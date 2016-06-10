<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'layout'                => "dashboard/layout",
        'template_map'          => [
            'dashboard/layout'                  => __DIR__ . '/../templates/layout/dashboard.phtml',
            'template/footer'                   => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'template/navigation/sidebar'       => __DIR__ . '/../templates/layout/template/navigation/sidebar.phtml',
            'template/navigation/header'        => __DIR__ . '/../templates/layout/template/navigation/header.phtml',
            'template/navigation/breadcrumbs'   => __DIR__ . '/../templates/layout/template/navigation/breadcrumbs.phtml',
            'partial/navigation/header'         => __DIR__ . '/../templates/layout/partial/navigation/header.phtml',
            'partial/navigation/sidebar'        => __DIR__ . '/../templates/layout/partial/navigation/sidebar.phtml',
            'partial/navigation/breadcrumbs'    => __DIR__ . '/../templates/layout/partial/navigation/breadcrumbs.phtml',
        ],
        'template_path_stack'   => [
            'dashboard' => __DIR__ . '/../templates',
        ],
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'layout'    => "dashboard/layout",
        'map'       => [
            'dashboard/layout'                  => __DIR__ . '/../templates/layout/dashboard.phtml',
            'template/footer'                   => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'template/navigation/sidebar'       => __DIR__ . '/../templates/layout/template/navigation/sidebar.phtml',
            'template/navigation/header'        => __DIR__ . '/../templates/layout/template/navigation/header.phtml',
            'template/navigation/breadcrumbs'   => __DIR__ . '/../templates/layout/template/navigation/breadcrumbs.phtml',
            'partial/navigation/header'         => __DIR__ . '/../templates/layout/partial/navigation/header.phtml',
            'partial/navigation/sidebar'        => __DIR__ . '/../templates/layout/partial/navigation/sidebar.phtml',
            'partial/navigation/breadcrumbs'    => __DIR__ . '/../templates/layout/partial/navigation/breadcrumbs.phtml',
        ],
        'paths'     => [
            'dashboard' => [__DIR__ . '/../templates']
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
