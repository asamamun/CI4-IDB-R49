<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;

class UploadController extends BaseController
{
    
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        return view("upload/form", ['errors' => []]);
    }
    //upload
    public function upload()
    {
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,100]'
                    . '|max_dims[userfile,1024,768]',
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('upload/form', $data);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            return view('upload/upload_success', $data);
        }
        $data = ['errors' => 'The file has already been moved.'];

        return view('upload/form', $data);
    }

}
