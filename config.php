<?php

return [
    'production' => true,
    'baseUrl' => 'https://behindtheclasses.com',
    'site' => [
        'title' => 'BEHIND THE CLASSES',
        'description' => 'A reliable online platform for SSC,HSC&Admission students of Bangladesh',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Lutfor Rashid Sayed',
    ],
    'links' => [
        'twitter' => 'https://twitter.com/abusayed0206',
        'github' => 'https://github.com/abusayed0206',
        'website' => 'https://abusayed.dev', 
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'behindtheclasses',
        'formcarry' => 'LzZGFFXfPTi',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
