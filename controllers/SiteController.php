<?php

class SiteController{

   public function actionIndex($id){
       $product=Product::getProductById($id);
       $recommended=Product::getProductRecommended();

       require_once(ROOT. '/views/site/index.php');
       return true;

   }

    public function actionContact(){

        require_once(ROOT. '/views/site/contact.php');
        return true;

    }

}