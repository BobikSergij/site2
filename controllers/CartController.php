<?php

class CartController{

    public function actionIndex(){

        $productInCart = Cart::getProduct();

        if($productInCart){

            $products = Product::getProductByIds($productInCart);
            $total = Cart::getTotalPrice($products);
            $productInCart=$_SESSION['products'];

        }else{
            $str = "В корзине нет товаров!";
        }


        require_once(ROOT. "/views/cart/views.php");
        return true;

    }

    public function actionAdd(){

        if(isset($_POST['submit'])){

            $quantity = $_POST['quantity'];
            $idProduct = $_POST['id'];

            Cart::addProduct($idProduct, $quantity);

        }

        $referrer= $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");

    }

    public function actionDelete($id){

        $productInCart = Cart::getProduct();

        $_SESSION['products']=$productInCart;

        if(isset($_SESSION['products'][$id])){
            unset ($_SESSION['products'][$id]);
        }

        header("Location: /index.php/cart");

    }

    public function actionCheckout(){

        $name='';
        $email='';
        $phone='';
        $massage='';
        $result=false;

        if(isset($_POST['submit'])){

            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $comment=$_POST['comment'];

            $errors=array();

            if(!User::checkName($name)){
                $errors[] = 'Имя не должно быть меньше 3-х символов';
            }

            if($errors==false){

                $productInCart= Cart::getProduct();
                if(User::isGuest()){
                    $userId=$_SESSION['user'];
                }else{
                    $userId=0;
                }

                $result = Order::save($name,$phone,$comment,$userId,$productInCart);

                if($result){
                    $adminEmail="bobiksergij232@gmail.com";
                    $message="http//gfjhgjgxhj";
                    $object="Новое письмо";
                    mail($adminEmail,$message,$object);

                    Cart::clear();
                }
            }else{
                $productInCart = Cart::getProduct();
                $productInIds = array_keys($productInCart);
                $product = Product::getProductsByIds($productInIds);
                $priceTotal = Cart::getTotalPrice($product);
                $countProduct = Cart::countItems();

            }
        }else{

            $productInCart = Cart::getProduct();

            if($productInCart == false){
                header("location: /index.php");
            }else{
                $productInIds = array_keys($productInCart);
                $product = Product::getProductsByIds($productInIds);
                $priceTotal = Cart::getTotalPrice($product);
                $countProduct = Cart::countItems();

                $userName = false;
                $userPhone = false;
                $userComment = false;

                if(!User::isGuest()){

                }else{
                    $userId=User::checkLogged();

                    $user=User::getUserById($userId);
                }
            }

        }

        require_once(ROOT. "/views/cart/checkout.php");
        return true;

    }


}