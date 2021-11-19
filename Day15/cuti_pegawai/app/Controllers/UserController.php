<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $user;

    public function __construct(){
        $this->user = new User();
    }

    public function index()
    {
        $data = $this->user->findAll();
        // dd($data);
        return view('user/index', compact('data'));
    }
}
