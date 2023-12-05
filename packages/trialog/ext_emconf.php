<?php

/**
 * Extension Manager/Repository config file for ext "trialog".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'trialog',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Trialog\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Laura Kloihofer',
    'author_email' => 's2210456016@fhooe.at',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
