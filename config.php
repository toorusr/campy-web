<?php

return [
    'baseUrl' => '',
    'contact' => 'Martin Betz',
    'production' => false,
    'collections' => [
        'camps' => [
            'path' => 'camps/{-slug}/{date|ym}',
            'sort' => 'city'
        ]
    ],
];
