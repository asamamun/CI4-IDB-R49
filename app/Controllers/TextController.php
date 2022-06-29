<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Faker\Factory;

class TextController extends BaseController
{
    public function __construct()
    {
        helper('text');
    }
    public function index()
    {
        $faker = Factory::create();
        $data['faker'] = $faker;
        $data['censorwords'] = ['quas','Dolorum', 'nostrum'];

        return view('text/index',$data);
    }
}
