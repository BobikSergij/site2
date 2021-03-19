<?php

class AdminOrderController extends AdminBase{

    public function actionIndex(){

        AdminBase::checkAdmin();
        $products = Product::getProductOrders();

        require_once (ROOT. '/views/admin_order/index.php');
        return true;

    }

    public function actionDelete($id){

        AdminBase::checkAdmin();
        if(isset($_POST['submit'])){
            Order::orderDelete($id);

            header("Location: /index.php/admin/order");
        }

        require_once (ROOT. '/views/admin/delete.php');
        return true;

    }

    public function actionUpdate($id){

        AdminBase::checkAdmin();
        $products=Product::getProductOrders($id);
        foreach($products as $product);
        if(isset($_POST['submit'])){

            $option['name']=$_POST['name'];
            $option['phone']=$_POST['phone'];
            $option['status']=$_POST['status'];
            Order::orderUpdate($id, $option);

            header("Location: /index.php/admin/order");
        }
        require_once (ROOT. '/views/admin_order/update.php');
        return true;

    }

    public function actionView($id){

        AdminBase::checkAdmin();
        $order= Product::getProductsOrders($id);
//        var_dump($order);die;

        foreach($order as $product){
            $productQuantity= json_decode($product['products'], true);
            $productIds= array_keys($productQuantity);
            $products=Product::getProductsByIds($productIds);
            $status= $product['status'];
            Order::getTextStatus($status);
        }


        require_once (ROOT. '/views/admin_order/views.php');
        return true;
    }

}
