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

    public function allContacts()
    {
        return $this->model->all();
    }
    
    public function findContact($contactId)
    {
        return $this->model->find($contactId);
    }

    public function updateContact($contactId, $data)
    {
        return $this->model->find($contactId)->update($data);
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

    public function delete($contactId)
    {
        try{
            return $this->model->find($contactId)->delete();
        }catch(Exception $e)    
        {

        }
    }
}