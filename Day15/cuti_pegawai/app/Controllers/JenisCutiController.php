<?php

namespace App\Controllers;

use App\Models\JenisCuti;
use App\Controllers\BaseController;

class JenisCutiController extends BaseController
{
    public $jeniscuti;

    public function __construct(){
        $this->jeniscuti = new JenisCuti();
    }

    public function index()
    {
        $data = $this->jeniscuti->findAll();
        // dd($data);
        return view('jeniscuti/index', compact('data'));
    }
}
