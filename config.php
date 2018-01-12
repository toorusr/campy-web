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
            'sort' => 'date_start'
        ],
        'coaches' => [
            'path' => 'coaches/{-lastname}',
            'sort' => 'lastname'
        ],
        'partners' => [
            'path' => 'partner/{name}',
            'sort' => 'name'
        ],
        'testimonials' => [
            'path' => 'stimmen/{published_at|ym}/{-slug}',
            'sort' => '-published_at',
        ],
        'articles' => [
            'path' => 'magazin/{-slug}',
            'sort' => 'publication_date'
        ]
    ],
];
