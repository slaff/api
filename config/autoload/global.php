<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-skeleton for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/LICENSE.md New BSD License
 */

return [
    'api-tools-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [
            'dummy' => [],
            'db2Adapter' => [
                'database' => '*LOCAL', // or name from WRKRDBDIRE, may be serial #
                'driver' => 'IbmDb2',
                'driver_options' => [
                    'autocommit' => DB2_AUTOCOMMIT_ON,
                    'i5_naming' => DB2_I5_NAMING_ON,
                    'i5_libl' => 'SCHEMA1 SCHEMA2 SCHEMA3',
                ],
                'username' => '',
                'password' => '',
                // 'persistent' => true,
                'platform' => 'IbmDb2',
                'platform_options' => ['quote_identifiers' => false],
            ]
        ],
    ],
];
