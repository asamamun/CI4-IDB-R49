<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
class TableController extends BaseController
{
    public function index()
    {
        $users = new UserModel();
        $data['users'] = $users->findAll();
        return view('table/index', $data);
    }
}
