<?php

class ProductController{

    public function actionIndex($page=1){

        $page = preg_replace('/[^0-9]/', '', $page);


        $productList = array();
        $productList = Product::getProductList($page);

        $total= Product::getTotalProduct();

        $pagination= new Pagination($total, $page, Product::SHOW_BY_DEFAULT, '?p=');

        require_once(ROOT. '/views/Product/index.php');
        return true;

    }

    public function actionDetail($productId){

        $productDetail=array();
        $productDetail= Product::getProductById($productId);

        require_once(ROOT. '/views/Product/productDetail.php');
        return true;

    }

}