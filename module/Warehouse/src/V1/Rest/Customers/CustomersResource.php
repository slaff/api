<?php

namespace Warehouse\V1\Rest\Customers;

use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\ApiTools\Rest\AbstractResourceListener;
use Laminas\Db\Adapter\Adapter;
use Laminas\Db\TableGateway\TableGateway;

class CustomersResource extends AbstractResourceListener
{
    /**
     * @var TableGateway
     */
    private $table;

    public function __construct(TableGateway $table)
    {
        $this->table = $table;
    }

    /**
     * Create a resource
     *
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        return new ApiProblem(405, 'The POST method has not been defined');
    }

    /**
     * Delete a resource
     *
     * @param mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        $row = $this->table->select(["CUST_ID" => $id]);
        return $row->current();
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        $rows = $this->table->select((array)$params);

        $data = [];
        foreach ($rows as $row) {
            // TODO: add only allowed columns to be visible.
            $data[$row['CUST_ID']] = $row;
            // TODO: Task - iterate over the $row fields and trim the value of every element
        }

        return $data;
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param mixed $id
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param mixed $id
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}
