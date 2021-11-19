<?php

namespace App\Controllers;

use App\Models\Level;
use App\Controllers\BaseController;

class LevelController extends BaseController
{
    public $level;

    public function __construct(){
        $this->level = new Level();
    }

    public function index()
    {
        $data = $this->level->findAll();
        // dd($data);
        return view('level/index',compact('data'));
    }
}
