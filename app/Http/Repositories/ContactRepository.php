<?php

namespace App\Http\Repositories;

use App\Models\Contact;
use Exception;
use Laracasts\Flash\Flash;

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
        try{
            $updated = $this->model->find($contactId)->update($data);
           
            Flash::message('Contact updated successfully')->success();
            return $updated;
        }catch(Exception $e)
        {
            Flash::message($e->getMessage())->error();
            redirect()->back();
        }
    }
    public function create($data)
    {   
        try
        {
            return $this->model->create($data);

        }catch(Exception $e)
        {
            Flash::message($e->getMessage())->error();
            redirect()->back();

        }
    }

    public function delete($contactId)
    {
        try{
            $deleted = $this->model->find($contactId)->delete();
            Flash::message('Contact deleted successfully')->success();
            return $deleted;
        }catch(Exception $e)    
        {
            Flash::message($e->getMessage())->error();
            redirect()->back();
        }
    }
}