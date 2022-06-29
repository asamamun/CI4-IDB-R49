<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class PostController extends BaseController
{
    public function index()
    {
        $p = new PostModel();
        $data = [
            'posts' => $p->where(['post_type'=>'post','post_status'=>'publish'])->paginate(10),
            // 'posts' => $p->paginate(10),
            'pager' => $p->pager,
        ];
        return view('posts/index', $data);
    }
}
