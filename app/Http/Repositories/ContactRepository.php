<?php

namespace App\Http\Repositories;

use App\Models\Contact;
use Exception;

class ContactRepository 
{
    private $model;
    public function __construct(Contact $model )
    {
        $this->model = $model;
    }

    public function contacts()
    {
        return $this->model->all();
    }
    
    public function create($data)
    {   
        try
        {
         return $this->model->create($data);

        }catch(Exception $e)
        {
            dd($e->getMessage());
        }
    }
}