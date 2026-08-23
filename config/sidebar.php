<?php

return [
    [
        'title' => 'Dashboard',
        'icon' => 'bi bi-speedometer',
        'url' => '/dashboard',
        'active' => 'dashboard*',
    ],
    [
        'title' => 'Tickets',
        'icon' => 'bi bi-ticket',
        'submenu' => [
            [
                'title' => 'All Tickets',
                'icon' => 'bi bi-circle',
                'url' => '#',
            ],
            [
                'title' => 'My Tickets',
                'icon' => 'bi bi-circle',
                'submenu' => [
                    [
                        'title' => 'Open',
                        'icon' => 'bi bi-dot',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Closed',
                        'icon' => 'bi bi-dot',
                        'url' => '#',
                    ],
                ]
            ]
        ]
    ],
    [
        'header' => 'ADMINISTRATION',
        'role' => 'Admin',
    ],
    [
        'title' => 'User Management',
        'icon' => 'bi bi-people',
        'url' => '#',
        'role' => 'Admin',
    ]
];
