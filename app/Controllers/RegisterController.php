<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegisterModel;

class RegisterController extends BaseController
{
    public function index()
    {
        //
    }
    //create user
    public function add()
    {
        $m = new RegisterModel();
        $rand = rand(1, 100);
        $data = [
            'first_name' => 'FName'.$rand,
            'last_name' => 'LName'.$rand,
            'email' => 'abc'.$rand.'@example.com',
            'password' => password_hash('12345' , PASSWORD_DEFAULT  ),
        ];
        $m->insert($data);

        return view('register/create',['data'=> $data]);
    }
    //login
    public function login()
    {
        return view('register/login');
    }
}
