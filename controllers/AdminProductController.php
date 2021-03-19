<?php

class AdminProductController extends AdminBase{

    public function actionIndex(){

        AdminBase::checkAdmin();
        $products=Product::getProduct();

        require_once (ROOT. '/views/admin_product/index.php');
        return true;

    }

    public function actionDelete($id){

        AdminBase::checkAdmin();
        $id=intval($id);

        if(isset($_POST['submit'])){
            Product::deleteProductById($id);

            header("Location: /index.php/admin/product");
        }
        require_once (ROOT. '/views/admin/delete.php');
        return true;
    }

    public function actionCreate(){

        AdminBase::checkAdmin();
        if(isset($_POST['submit'])){

            $option['name']=$_POST['name'];
            $option['price']=$_POST['price'];
            $option['is_new']=$_POST['is_new'];
            $option['is_recommended']=$_POST['is_recommended'];
            $option['status']=$_POST['status'];
            $option['code']=$_POST['code'];
            $option['description']=$_POST['description'];

            Product::CreateProduct($option);

            header("Location: /index.php/admin/product");
        }
        require_once (ROOT. '/views/admin/create.php');
        return true;

    }


    public function actionUpdate($id){

        AdminBase::checkAdmin();
        $id=intval($id);

        $product=Product::updateProductAdmin($id);

        if(isset($_POST['submit'])){

            $option['name']=$_POST['name'];
            $option['price']=$_POST['price'];
            $option['is_new']=$_POST['is_new'];
            $option['is_recommended']=$_POST['is_recommended'];
            $option['status']=$_POST['status'];
            $option['code']=$_POST['code'];
            $option['description']=$_POST['description'];
            if(Product::updateProductById($id, $option)){

                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/unpload/images/product/{$id}.jpg");
                }

            }
            header("Location: /index.php/admin/product");
        }

        require_once (ROOT. '/views/admin/update.php');
        return true;
    }
}