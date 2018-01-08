<?php

return [
    'fulldate' => function ($shortdate) {
        return date('l d.m.Y', $shortdate);
    },
    'baseUrl' => '',
    'contact' => 'Martin Betz',
    'production' => false,
    'collections' => [
        'camps' => [
            'path' => 'camps/{-slug}/{date_start|ym}',
            'sort' => 'city'
        ]
    ],
];
