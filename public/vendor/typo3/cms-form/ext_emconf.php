<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 CMS Form',
    'description' => 'Flexible TYPO3 frontend form framework that comes with a backend editor interface.',
    'category' => 'misc',
    'state' => 'stable',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '12.4.8',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.8',
            'frontend' => '12.4.8',
        ],
        'conflicts' => [],
        'suggests' => [
            'filelist' => '12.4.8',
            'impexp' => '12.4.8',
        ],
    ],
];
