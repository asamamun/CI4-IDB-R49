<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Libraries\Cart;

class ProductController extends BaseController
{
    //constructor
    public function __construct()
    {

        helper('form');
    }
    public function index()
    {
        $cart = new Cart([
            // Can add unlimited number of item to cart
            'cartMaxItem'      => 0,
            
            // Set maximum quantity allowed per item to 99
            'itemMaxQuantity'  => 99,
            
            // Do not use cookie, cart data will lost when browser is closed
            'useCookie'        => true,
          ]);
          //total Items
            $totalitems = $cart->getTotalItem();
        
        //get all products
        $p = new ProductModel();
        $products = $p->findAll();
        //get all categories
        $cat = new CategoryModel();        
        $categories = $cat->findAll();
        return view('product/index', [
            'cat' => $categories,
            'products' => $products,
            'totalitems' => $totalitems
        ]);
    }
    //create
    public function create()
    {
        //$request = \Config\Services::request();
        //echo $request->getMethod();
        $c = new CategoryModel();
        //get all categories
        $categories = $c->findAll();
        //check post method
        if ($this->request->getMethod() == 'post') {           
            //get post data
            $data = $this->request->getPost(); 
            var_dump($data);         
                //create product
                $p = new ProductModel();
                $p->insert($data);
                //redirect to product list
                return redirect()->to(site_url('/products'));
           
        } else {
            return view('product/create', [
                'validation' => $this->validator,
                'categories' => $categories
            ]);
        }
    }
    //store
    public function store()
    {
        $request = \Config\Services::request();
        if ($request->getMethod() == 'post') {           
            //get post data
            $data = $this->request->getPost(); 
            //var_dump($data);         
                //create product
                $p = new ProductModel();
                $p->insert($data);
                //redirect to product list
                return redirect()->to(site_url('/products'));
           
        } 
    }
}
