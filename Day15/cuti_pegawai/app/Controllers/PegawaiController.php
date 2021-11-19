<?php

namespace App\Controllers;

use App\Models\Pegawai;
use App\Controllers\BaseController;

class PegawaiController extends BaseController
{
    public $pegawai;

    public function __construct(){
        $this->pegawai = new Pegawai();
    }

    public function index()
    {
        $data = $this->pegawai->findAll();
        // dd($data);
        return view('pegawai/index', compact('data'));
    }
}
