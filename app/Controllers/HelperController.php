<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Idb\MyClass;

class HelperController extends BaseController
{
    public function index()
    {
        helper("idb");
        a();
        b();
        c();
        echo '<br>';
        $mc = new MyClass();
        $mc->index();
    }
}
