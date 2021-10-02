<?php

namespace App\Http\Repositories;

use App\Models\Contract;


class ContractRepository 
{
    private $model;
    public function __construct(Contract $model )
    {
        $this->model = $model;
    }

    public function create($data)
    {
        return $this->model->firstOrCreate($data);
    }
}