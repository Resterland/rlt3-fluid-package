<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'ResterLand Fluid Site Package',
    'description' => 'ResterLand TYPO3 fluid site package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Resterland\\Rlt3FluidPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'webmaster@resterland.org',
    'author_company' => 'ResterLand',
    'version' => '1.0.0',
];
