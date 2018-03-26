<?php
namespace Haassie\SiteCms8\Hooks;

class RealUrlAutoConfiguration
{
    public function addSiteConfiguration($params)
    {
        return array_merge(
            $params['config'],
            [
                'preVars' => [
                    '_DEFAULT' => [
                        'yoast' => [
                            'GETvar' => 'L',
                            'valueMap' => [
                                'nl' => 1,
                                'de' => 2
                            ],
                            'noMatch' => 'bypass'
                        ]
                    ]
                ]
            ]
        );
    }
}