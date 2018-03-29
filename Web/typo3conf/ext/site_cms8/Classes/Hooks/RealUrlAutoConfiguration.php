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
                    'site_cms8' => [
                        'GETvar' => 'L',
                        'valueMap' => [
                            'nl' => 1,
                            'de' => 2
                        ],
                        'noMatch' => 'bypass'
                    ]
                ]
            ]
        );
    }
}