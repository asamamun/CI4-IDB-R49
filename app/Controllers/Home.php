<?php
//http://localhost/r49/CI/cicomposerproject/public/home/welcome
namespace App\Controllers;
use App\Models\Actor;

class Home extends BaseController
{
    public function index()
    {
        // helper("idb");
        // a();
        //return view('test');
    }
    public function welcome()
    {
        return view('welcome_message');
    }
    public function sq($n,$m)
    {
        //return view('test');
        //echo $n*$m;
        return view("square",['firstval'=>$n,'secondval'=>$m]);
    }
    public function allactor(){
       $a = new Actor();
       return view('allactor',['q'=>$a->findAll()]);
    //    var_dump($a->findAll());
/*           $db      = \Config\Database::connect();
        $builder = $db->table('actor');                
        $query   = $builder->get();
        //var_dump($query->getResult());
        return view('allactor',['q'=>$query]); */
        return view('allactor',['q'=>$a->findAll()]);
}
}
