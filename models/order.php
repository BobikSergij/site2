<?php

class Order{

    public static function save($name,$phone,$comment,$userId,$products){

        $products = json_encode($products);

        $db = Db::getConnection();

        $sql= "INSERT INTO product_order (name,phone,comment,user_id,products)"
            . "VALUES (:name, :phone, :comment, :user_id, :product)";

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name ,PDO::PARAM_STR);
        $result->bindParam(':phone', $phone ,PDO::PARAM_STR);
        $result->bindParam(':comment', $comment ,PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId ,PDO::PARAM_INT);
        $result->bindParam(':product', $products ,PDO::PARAM_STR);

        return $result->execute();

    }

    public static function orderDelete($id){

        $id=intval($id);

        $db= Db::getConnection();
        $sql = 'DELETE FROM product_order WHERE id = :id';
        $result = $db ->prepare($sql);
        $result ->bindParam(':id', $id, PDO::PARAM_INT);
        return $result -> execute();
    }

    public static function orderUpdate($id, $option){

        $db=Db::getConnection();

        $sql='UPDATE product_order SET name= :name, phone= :phone, status= :status WHERE id= :id';

        $result=$db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $option['name'], PDO::PARAM_STR);
        $result->bindParam(':phone', $option['phone'], PDO::PARAM_INT);
        $result->bindParam(':status', $option['status'], PDO::PARAM_STR);
        return $result->execute();

    }

    public static function getTextStatus($status){

        switch($status){
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Доставляеться';
                break;
            case '4':
                return 'Закрыт';
                break;
        }

    }


    }