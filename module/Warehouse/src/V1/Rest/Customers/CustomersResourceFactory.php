<?php
namespace Warehouse\V1\Rest\Customers;

use Laminas\Db\TableGateway\TableGateway;

class CustomersResourceFactory
{
    public function __invoke($services)
    {
        $db2Adapter = $services->get('db2Adapter');
        $tableGateway = new TableGateway('ZENDPHP74.SP_CUST', $db2Adapter);

        return new CustomersResource($tableGateway);
    }
}
