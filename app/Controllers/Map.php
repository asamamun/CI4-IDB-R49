<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Map extends BaseController
{
    //constructor __construct
    public function Map(){
        echo "map called";
    }
    
    //remap function
    public function _remap($method,...$p)
    {
       // echo $method;
       if(in_array($method,['create','add','new'])){
           var_dump($p);
           $this->mycreate();
       }
       if($method == "edit"){ $this->edit();}  
    }
    public function index()
    {
        echo "index called";
    }
    public function mycreate(){
        echo "create called";
    }
    public function edit(){
        echo "edit called";
    }
    public function update(){
        echo "update called";
    }
    public function delete(){
        echo "delete called";
    }
    public function showall(){
        echo "showall called";
    }
}
