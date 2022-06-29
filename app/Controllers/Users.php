<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    //constructor
    public function __construct()
    {
        helper(['form','url']);
    }
    public function index()
    {
        $alluser = new UserModel();
        //$users = $alluser->findAll();
        //var_dump($users);
        $data = [
            'allusers' => $alluser->paginate(10),//default 20
            'pager' => $alluser->pager,
        ];

        return view("users/index", $data);
    }
    public function form()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'first_name'=>'required|min_length[3]|max_length[20]',
            'last_name'=>['rules'=>'required|min_length[3]|max_length[20]',
        'errors'=>[
            'required'=>"Last Name is required",
            'min_length'=>"at least 3 chars",
            'max_length'=>"at most 20 chars",
        ]
        ],
            'email'=>[
                'rules'=>'required|valid_email|is_unique[users.email]',
                'errors'=>[
                    'required'=>'Please aponar email den',
                    'is_unique'=>'This email already exists.'
                ]
                ]         
        ]);        
        if($validation->withRequest($this->request)->run()==false){
            $data = [
                'validation'=>$validation,
                // 'oldInput'=>$this->request->getPost(),
            ];
            return view('users/form',$data);
        }else{
            // echo $_POST['first_name'];//post only
            // echo $this->request->getPost('first_name');//only get post
            // echo $this->request->getVar('first_name');//get or post
           // echo $this->request->getGet('first_name');//get only
            $user = new UserModel();
            $data = [
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'email' => $this->request->getVar('email'),
            ];
         
            $user->insert($data);
            //return redirect()->to('/users');  
        return view('users/success');
        }
    }
    //new user
    public function new()
    {
        //https://codeigniter4.github.io/userguide/libraries/validation.html
        $rules = [
            'first_name'=>'required|min_length[3]|max_length[20]',
            'last_name'=>'required|min_length[3]|max_length[20]',
            'email'=>[
                'rules'=>'required|valid_email|is_unique[users.email]',
                'errors'=>[
                    'required'=>'Please aponar email den',
                    'is_unique'=>'This email already exists.'
                ]
                ]         
        ];
        if (! $this->validate($rules)) {
            return view('users/new', [
                'validation' => $this->validator,
            ]);
        }
        
        //insert data into table
        $user = new UserModel();
        $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email' => $this->request->getVar('email'),
        ];
     
        $user->insert($data);
        //return redirect()->to('/users');
        //echo "validation success";
        //return view("users/new");
    }
    //edit
    public function edit($id)
    {        
        $user = new UserModel();
        $user = $user->find($id);
        // var_dump($user);
        // exit;

/*         $this->load->database();
        $query = $this->db->get_where('users', ['id' => $id]);
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        foreach ($query->result() as $row) {
            var_dump($row);
        } */
        // var_dump($user);
        // exit;
        $data = [
            'user' => $user,
        ];
        return view("users/edit", $data);
        
    }
    //update
    public function update()
    {
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email'  => $this->request->getVar('email'),
            'is_active' => $this->request->getVar('is_active'),
        ];
        $userModel->update($id, $data);
       
        return redirect()->to('/users');
    }
    //delete
    public function delete($id)
    {
        $user = new UserModel();
        $user->delete($id);
        return redirect()->to("/users");
    }
}
