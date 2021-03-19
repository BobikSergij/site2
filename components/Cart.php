<?php

class Cart{

    public static function addProduct($id, $quantity){
        $id = intval($id);
        $quantity= intval($quantity);

        $productInCart = array( );

        if(isset($_SESSION['products'])){
            $productInCart = $_SESSION['products'];
        }

        if(array_key_exists($id, $productInCart)){
            $productInCart[$id]['qty'] = $productInCart[$id]['qty'] + $quantity;
            print_r($productInCart[$id]['qty']);die;
        }else{
            $productInCart[$id]['qty'] =$quantity;
        }

        $_SESSION['products'] = $productInCart;
        self::countItems();
    }

    public static function countItems(){

        if(isset($_SESSION['products'])){

            $count = 0;

            foreach($_SESSION['products'] as $id => $quantity){
                foreach($quantity as $quantitys){
                    $quantity=$quantitys;
                }
                $count = $count + $quantity;
            }
            return $count;
        }else{
            return 0;

        }

    }



    public static function getProduct(){
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products){
        $productsInCart=Cart::getProduct();

        $total=0;

        if($productsInCart){
            foreach($products as $item){
                foreach($productsInCart[$item['id']] as $quantity){
                    $total += $item['price'] * $quantity;

                }
            }
        }
        return $total;
    }


    public static function clear(){
        if(isset($_SESSION['products'])){
            unset ($_SESSION['products']);
        }
    }

}