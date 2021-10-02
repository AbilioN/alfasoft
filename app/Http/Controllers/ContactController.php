<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $repo;
    public function __construct( ContactRepository $repo)
    {
        $this->repo = $repo;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $created = $this->repo->create($data);

        // return view;
    }
}
