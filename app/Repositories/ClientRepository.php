<?php
namespace App\Repositories;

use App\Models\Client;

class ClientRepository implements IRepository
{
    protected $model;

    public function __construct(Client $client)
    {
        $this->model = $client;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {

    }

    public function update(array $data, $id)
    {

    }

    public function delete($id)
    {

    }

    public function find($id)
    {

    }

}

