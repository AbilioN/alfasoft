<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ContractRepository;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    private $repo;
    public function __construct( ContractRepository $repo)
    {
        $this->repo = $repo;
    }

    
}
