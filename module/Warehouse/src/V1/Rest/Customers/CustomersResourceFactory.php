<?php
namespace Warehouse\V1\Rest\Customers;

class CustomersResourceFactory
{
    public function __invoke($services)
    {
        $db2Adapter = $services->get('db2Adapter');

        return new CustomersResource($db2Adapter);
    }
}
