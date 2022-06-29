<?php namespace App\Libraries;

class ShoppingCart
{

 public static function addtocart($itemArray){
    $session = \Config\Services::session();
    if(!isset($session->cart_item)){
        $session->cart_item = $itemArray;
    }else{
        $cart_item = $session->cart_item;
        foreach($itemArray as $k=>$v){
            if(array_key_exists($k, $cart_item)){
                $cart_item[$k]['q'] += $v['q'];
            }else{
                $cart_item[$k] = $v;
            }
        }
        $session->cart_item = $cart_item;
    }
    $userData = $session->get();
    var_dump($userData);

    $total_items = 0;
    foreach($_SESSION["cart_item"] as $k => $v) {
        $total_items += $v["q"];
    } 
    echo $total_items;

    }

    public static function cartitems(){
        $cart_item = [];
        if(isset($_SESSION['cart_item'])){
            foreach($_SESSION['cart_item'] as $k=>$item){
                $cart_item[$k] = $item;
            }
        }
        return $cart_item;
    }
}
