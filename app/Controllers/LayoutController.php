<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LayoutController extends BaseController
{
    public function index()
    {
        $u = new UserModel();
        $data['activeusers'] = $u->where('is_active',1)->findAll();
        $data['inactiveusers'] = $u->where('is_active',0)->findAll();
        return view('users/partialview',$data);
    }
}
