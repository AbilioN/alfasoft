<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ContactRepository;
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
        $contacts = $this->repo->contacts();

        return view('contact.index' , compact('contacts'));
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $created = $this->repo->create($data);

        // return view;
    }

    public function delete(Request $request)
    {   
        $contactId = $request->contact;
        $deleted = $this->repo->delete($contactId);
        return redirect('/');
    }
}
