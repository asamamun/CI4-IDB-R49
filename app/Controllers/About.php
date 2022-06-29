<?php
namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
       echo "about controller, index method called";
    }
    public function contact()
    {
       echo "about controller, contact method called";
       echo "<hr>";
       echo base_url();
       echo "<hr>";
       echo site_url();
       echo "<hr>";
       echo anchor('home/welcome','Home') . " |";
       echo anchor('about/contact','Contact'). " |";
         echo anchor('about','About'). " |";
    }
}
