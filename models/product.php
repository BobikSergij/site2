<?php

class Product{

    const SHOW_BY_DEFAULT = 6;

    public static function getProductList($page=1){

        $offset = ($page-1)*self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();
        $productList = array();


        $result = $db->query("SELECT id, name, price, is_recommended FROM product "
        . " WHERE status ='1' "
        . " ORDER BY id ASC"
        . " LIMIT " . self::SHOW_BY_DEFAULT
        . " OFFSET  " . $offset );

        $i=0;
        while($row = $result->fetch()){
            $productList[$i]['id']=$row['id'];
            $productList[$i]['name']=$row['name'];
            $productList[$i]['price']=$row['price'];
            $productList[$i]['is_recommended']=$row['is_recommended'];
            $i++;
        }
        return $productList;
    }

    public static function getProduct(){

        $db = Db::getConnection();
        $productList = array();

        $result = $db->query("SELECT*FROM product "
            . " WHERE status ='1' "
            . " ORDER BY id ASC" );

        $i=0;
        while($row = $result->fetch()){
            $productList[$i]['id']=$row['id'];
            $productList[$i]['name']=$row['name'];
            $productList[$i]['price']=$row['price'];
            $productList[$i]['is_new']=$row['is_new'];
            $productList[$i]['is_recommended']=$row['is_recommended'];
            $productList[$i]['status']=$row['status'];
            $productList[$i]['code']=$row['code'];
            $productList[$i]['description']=$row['description'];
            $i++;
        }
        return $productList;
    }

    public static function updateProductAdmin($id){
        $id=intval($id);

        $db = Db::getConnection();
        $productList = array();

        $result = $db->query("SELECT*FROM product WHERE id= $id " );
        $i=0;
        while($row = $result->fetch()){
            $productList[$i]['id']=$row['id'];
            $productList[$i]['name']=$row['name'];
            $productList[$i]['price']=$row['price'];
            $productList[$i]['is_new']=$row['is_new'];
            $productList[$i]['is_recommended']=$row['is_recommended'];
            $productList[$i]['status']=$row['status'];
            $productList[$i]['code']=$row['code'];
            $productList[$i]['description']=$row['description'];
            $i++;
        }
        return $productList;
    }

    public static function getProductOrders(){

        $db = Db::getConnection();
        $productList = array();

        $result = $db->query("SELECT*FROM product_order " );

        $i=0;
        while($row = $result->fetch()){
            $productList[$i]['id']=$row['id'];
            $productList[$i]['name']=$row['name'];
            $productList[$i]['phone']=$row['phone'];
            $productList[$i]['comment']=$row['comment'];
            $productList[$i]['user_id']=$row['user_id'];
            $productList[$i]['status']=$row['status'];
            $productList[$i]['products']=$row['products'];
            $i++;
        }

        return $productList;
    }

    public static function getProductsOrders($id){

        $db = Db::getConnection();
        $productList = array();

        $result = $db->query("SELECT*FROM product_order WHERE id= $id " );
        $i=0;
        while($row = $result->fetch()){
            $productList[$i]['id']=$row['id'];
            $productList[$i]['name']=$row['name'];
            $productList[$i]['phone']=$row['phone'];
            $productList[$i]['comment']=$row['comment'];
            $productList[$i]['user_id']=$row['user_id'];
            $productList[$i]['status']=$row['status'];
            $productList[$i]['products']=$row['products'];
            $i++;
        }

        return $productList;
    }


    public static function createProduct($option){

        $db= Db::getConnection();

        $sql= 'INSERT INTO product (name,price,is_new,is_recommended, status,code, description)'
            . ' VALUES (:name,:price,:is_new,:is_recommended, :status,:code, :description)';

        $result=$db->prepare($sql);
        $result->bindParam(':name', $option['name'], PDO::PARAM_STR);
        $result->bindParam(':price', $option['price'], PDO::PARAM_INT);
        $result->bindParam(':is_new', $option['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $option['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $option['status'], PDO::PARAM_INT);
        $result->bindParam(':code', $option['code'], PDO::PARAM_INT);
        $result->bindParam(':description', $option['description'], PDO::PARAM_STR);
        return $result->execute();
    }


    public static function updateProductById($id, $option){

        $db=Db::getConnection();

        $sql='UPDATE product SET name= :name, price= :price, is_new= :is_new, is_recommended= :is_recommended,'
            . ' status= :status, code= :code, description= :description WHERE id= :id';

        $result=$db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $option['name'], PDO::PARAM_STR);
        $result->bindParam(':price', $option['price'], PDO::PARAM_INT);
        $result->bindParam(':is_new', $option['is_new'], PDO::PARAM_STR);
        $result->bindParam(':is_recommended', $option['is_recommended'], PDO::PARAM_STR);
        $result->bindParam(':status', $option['status'], PDO::PARAM_STR);
        $result->bindParam(':code', $option['code'], PDO::PARAM_STR);
        $result->bindParam(':description', $option['description'], PDO::PARAM_STR);
        return $result->execute();
    }



    public static function deleteProductById($id){

        $db = Db::getConnection();

        $sql = 'DELETE FROM product WHERE id = :id';

        $result = $db ->prepare($sql);
        $result ->bindParam(':id', $id, PDO::PARAM_INT);
        return $result -> execute();

    }


    public static function getTotalProduct(){

        $db = Db::getConnection();

        $result = $db->query("SELECT count(id) AS count FROM product WHERE status='1'");

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row=$result->fetch();
        return $row['count'];
    }

    public static function getProductById($id){

        $id=intval($id);

        $db=Db::getConnection();

        if($id){

            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }

    }

    public static function getProductRecommended(){

        $db=Db::getConnection();

        $productRecommended = array();

        $sql = "SELECT id, name, price FROM product WHERE status='1'"
            . " AND is_recommended='1'";

        $result = $db->query($sql);

        $i = 0;

        while($row = $result->fetch()){

            $productRecommended[$i]['id'] = $row['id'];
            $productRecommended[$i]['name'] = $row['name'];
            $productRecommended[$i]['price'] = $row['price'];
            $i++;

        }

        return $productRecommended;

    }



    public static function getProductByIds($productInCart){
        $products=array();

        $productIds = array_keys($productInCart);
        $ids = implode(',', $productIds);

        $db = Db::getConnection();

        $sql= "SELECT*FROM product WHERE status='1' AND id IN ($ids) ";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i=0;
        while($row = $result ->fetch()){
            $products[$i]['id']=$row['id'];
            $products[$i]['name']=$row['name'];
            $products[$i]['price']=$row['price'];
            $products[$i]['is_new']=$row['is_new'];
            $products[$i]['is_recommended']=$row['is_recommended'];
            $products[$i]['status']=$row['status'];
            $products[$i]['code']=$row['code'];
            $products[$i]['description']=$row['description'];
            $products[$i]['qty']= $productInCart[$row['id']]['qty'];
            $i++;
        }
        return $products;
    }


    public static function getProductsByIds($productIds){
        $products=array();

        $ids = implode(',', $productIds);

        $db = Db::getConnection();

        $sql= "SELECT*FROM product WHERE status='1' AND id IN ($ids) ";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i=0;
        while($row = $result ->fetch()){
            $products[$i]['id']=$row['id'];
            $products[$i]['name']=$row['name'];
            $products[$i]['price']=$row['price'];
            $products[$i]['is_new']=$row['is_new'];
            $products[$i]['is_recommended']=$row['is_recommended'];
            $products[$i]['status']=$row['status'];
            $products[$i]['code']=$row['code'];
            $products[$i]['description']=$row['description'];
            $i++;
        }
        return $products;
    }

}