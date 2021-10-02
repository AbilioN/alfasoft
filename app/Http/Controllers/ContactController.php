<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ContactRepository;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ContactController extends Controller
{
    private $repo;
    public function __construct( ContactRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        $contacts = $this->repo->allContacts();
        return view('contact.index' , compact('contacts'));
    }

    public function createView(Request $request)
    {
        return view('contact.create');
    }
    public function create(ContactRequest $request)
    {
        $data = $request->all();
        $created = $this->repo->create($data);
        return redirect('/');

    }

    public function edit(Request $request, $contactId)
    {
        $contact = $this->repo->findContact($contactId);
        return view('contact.edit', compact('contact'));
    }

    public function update(ContactRequest $request)
    {
       $contactId = $request->contactId;
       unset($request['contactId']);
       unset($request['_token']);
       $data = $request->all();
       $this->repo->updateContact($contactId, $data);
       return redirect('/');
    }
    public function delete(Request $request)
    {   
        $contactId = $request->contact;
        $deleted = $this->repo->delete($contactId);
        return redirect('/');
    }
}
