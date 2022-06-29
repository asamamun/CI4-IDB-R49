<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\ShoppingCart;
use App\Models\ProductModel;
use App\Libraries\Cart;

class CartController extends BaseController
{
    public function index()
    {
        //
    }
    //add to cart
    public function add($id)
    {
        
        $model = new ProductModel();
        $product = $model->find($id);       

        // Initialize Cart object
$cart = new Cart([
    // Can add unlimited number of item to cart
    'cartMaxItem'      => 0,
    
    // Set maximum quantity allowed per item to 99
    'itemMaxQuantity'  => 99,
    
    // Do not use cookie, cart data will lost when browser is closed
    'useCookie'        => true,
  ]);
  $cart->add($product['product_id'], 1, [
    'price'  => $product['product_price'],
    'name'   => $product['product_name'],
  ]);  
return view("product/success",['name'=>$product['product_name']]);
// return redirect()->to('/cart');

    }
    public function cartitems(){
        $cart = new Cart([
            // Can add unlimited number of item to cart
            'cartMaxItem'      => 0,
            
            // Set maximum quantity allowed per item to 99
            'itemMaxQuantity'  => 99,
            
            // Do not use cookie, cart data will lost when browser is closed
            'useCookie'        => true,
          ]);
        $allItems = $cart->getItems();
        $totalitems = $cart->getTotalItem();
        return view('product/cartitems', ['allItems' => $allItems, 'total'=>$totalitems]);
    }

    public static function count(){
        $count = 0;
        if(isset($_SESSION['cart_item'])){
            foreach($_SESSION['cart_item'] as $item){
                $count += $item['q'];
            }
        }
        return $count;        
    }

    public static function total(){
        $total = 0;
        if(isset($_SESSION['cart_item'])){
            foreach($_SESSION['cart_item'] as $item){
                $total += $item['p']*$item['q'];
            }
        }
        return $total;        
    }
    //remove
    public function remove($id){
        $cart = new Cart([
            // Can add unlimited number of item to cart
            'cartMaxItem'      => 0,
            
            // Set maximum quantity allowed per item to 99
            'itemMaxQuantity'  => 99,
            
            // Do not use cookie, cart data will lost when browser is closed
            'useCookie'        => true,
          ]);
        $cart->remove($id);
        //return back
        return redirect()->to('/cart');
    }
    //clear cart
    public function clear(){
        $cart = new Cart([
            // Can add unlimited number of item to cart
            'cartMaxItem'      => 0,
            
            // Set maximum quantity allowed per item to 99
            'itemMaxQuantity'  => 99,
            
            // Do not use cookie, cart data will lost when browser is closed
            'useCookie'        => true,
          ]);
        $cart->clear();
    }
}
