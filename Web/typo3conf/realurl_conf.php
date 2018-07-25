<?php

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['_DEFAULT'] = array(
    'preVars' => [
        'site_cms8' => [
            'GETvar' => 'L',
            'valueMap' => [
                'nl' => 1,
                'de' => 2
            ],
            'noMatch' => 'bypass'
        ]
    ],
    'pagePath' => array(
        'type' => 'user',
        'spaceCharacter' => '-',
        'expireDays' => 7,
        'rootpage_id' => 1
    ),
    'fixedPostVars' => array(
        'newsDetailConfiguration' => [
            [
                'GETvar' => 'tx_news_pi1[controller]',
                'noMatch' => 'bypass'
            ],
            [
                'GETvar' => 'tx_news_pi1[action]',
                'noMatch' => 'bypass'
            ],
            [
                'GETvar' => 'tx_news_pi1[news]',
                'lookUpTable' => [
                    'table' => 'tx_news_domain_model_news',
                    'id_field' => 'uid',
                    'alias_field' => 'title',
                    'useUniqueCache' => 1,
                    'useUniqueCache_conf' => [
                        'strtolower' => 1,
                        'spaceCharacter' => '-',
                    ],
                ]
            ]
        ],
        '12' => 'newsDetailConfiguration'
    ),
    'postVarSets' => array(
        '_DEFAULT' => [
            'controller' => [
                [
                    'GETvar' => 'tx_news_pi1[controller]',
                    'noMatch' => 'bypass'
                ],
                [
                    'GETvar' => 'tx_news_pi1[action]',
                    'noMatch' => 'bypass'
                ],
            ],
            'dateFilter' => [
                [
                    'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
                ],
                [
                    'GETvar' => 'tx_news_pi1[overwriteDemand][month]',
                ],
            ],
            'page' => [
                [
                    'GETvar' => 'tx_news_pi1[@widget_0][currentPage]',
                ],
            ],
        ],
    ),
    'fileName' => [
        'index' => [
            'sitemap-pages.xml' => [
                'keyValues' => [
                    'type' => \YoastSeoForTypo3\YoastSeo\UserFunc\SitemapXml::DOKTYPE,
                    'tx_yoastseo_sitemap' => 'pages'
                ]
            ],
            'sitemap.xml' => [
                'keyValues' => [
                    'type' => \YoastSeoForTypo3\YoastSeo\UserFunc\SitemapXml::DOKTYPE
                ]
            ]
        ]
    ]
);