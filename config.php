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
        ],
        'coaches' => [
            'path' => 'coaches/{-lastname}',
            'sort' => 'lastname'
        ],
        'partners' => [
            'path' => 'partner/{name}',
            'sort' => 'name'
        ],
        'articles' => [
            'path' => 'magazin/{-slug}',
            'sort' => 'publication_date'
        ]
    ],
];
