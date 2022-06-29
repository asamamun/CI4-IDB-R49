<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Film;

class FilmController extends BaseController
{
    public function index()
    {
        $f = new Film();
        $films = $f->where("length >","160")->findAll();
        
        //var_dump($films);
        return view('films/index', ['allfilms' => $films]);
    }
}
