<?php
return [
    'service_manager' => [
        'factories' => [
            \Warehouse\V1\Rest\Customers\CustomersResource::class => \Warehouse\V1\Rest\Customers\CustomersResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'warehouse.rest.customers' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/customers[/:customers_id]',
                    'defaults' => [
                        'controller' => 'Warehouse\\V1\\Rest\\Customers\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'warehouse.rest.customers',
        ],
    ],
    'api-tools-rest' => [
        'Warehouse\\V1\\Rest\\Customers\\Controller' => [
            'listener' => \Warehouse\V1\Rest\Customers\CustomersResource::class,
            'route_name' => 'warehouse.rest.customers',
            'route_identifier_name' => 'customers_id',
            'collection_name' => 'customers',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Warehouse\V1\Rest\Customers\CustomersEntity::class,
            'collection_class' => \Warehouse\V1\Rest\Customers\CustomersCollection::class,
            'service_name' => 'customers',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Warehouse\\V1\\Rest\\Customers\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Warehouse\\V1\\Rest\\Customers\\Controller' => [
                0 => 'application/vnd.warehouse.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Warehouse\\V1\\Rest\\Customers\\Controller' => [
                0 => 'application/vnd.warehouse.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Warehouse\V1\Rest\Customers\CustomersEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'warehouse.rest.customers',
                'route_identifier_name' => 'customers_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Warehouse\V1\Rest\Customers\CustomersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'warehouse.rest.customers',
                'route_identifier_name' => 'customers_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Warehouse\\V1\\Rest\\Customers\\Controller' => [
            'input_filter' => 'Warehouse\\V1\\Rest\\Customers\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Warehouse\\V1\\Rest\\Customers\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => '2',
                            'max' => '30',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'name',
                'description' => 'Name of the customer',
                'field_type' => 'text',
            ],
        ],
    ],
];
