<?php

namespace App\Controllers;

use App\Models\Cuti;
use App\Controllers\BaseController;

class CutiController extends BaseController
{
    public $cuti;

    public function __construct(){
        $this->cuti= new Cuti();
    }

    public function index()
    {
        $data = $this->cuti->findAll();
        // dd($data);
        return view('cuti/index', compact('data'));
    }

    public function formTambah(){
        return view('cuti/form');
    }
}
