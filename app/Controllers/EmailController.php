<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmailController extends BaseController
{
    //constructor
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        //
    }
    //email
    public function email()
    {

        return view('email/email');
    }
    //send email
    public function send()
    {
        //
        // echo $this->request->getPost("email");
        // exit;
        $data = $this->request->getPost();
        var_dump($data);
        $email = \Config\Services::email();
        $config['protocol'] = 'smtp';
        $config['mailPath'] = '/usr/sbin/sendmail';
        $config['charset']  = 'utf-8';
        $config['wordWrap'] = true;

        $email->initialize($config);

        $email->setFrom($data['email'], $data['name']);
        $email->setTo('test@isdbstudents.com');
        $email->setCC(['info@isdbstudents.com', 'asamamun.web@gmail.com']);


        $email->setSubject($data['subject']);
        $email->setMessage($data['message']);
        if (! $email->send()) {
            echo 'Email was not sent.';
            echo 'Email error: ' . $email->printDebugger();
        } else {
            echo 'Email has been sent.';
        }
        
    }
}
