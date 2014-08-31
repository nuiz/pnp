<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 7/30/14
 * Time: 3:23 PM
 */

class Manager {
    protected static $cn, $setting;
    public static function getSetting(){
        if(is_null(self::$setting)){
            self::$setting = include(dirname(__FILE__).'/setting.php');
        }
        return self::$setting;
    }

    public static function getCn(){
        if(is_null(self::$cn)){
            $setting = self::getSetting();
            $db_setting = $setting['db'];

            $db_host = $db_setting['host'];
            $db_name = $db_setting['database'];
            $db_user = $db_setting['username'];
            $db_pass = $db_setting['password'];

            self::$cn = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_pass);
        }
        return self::$cn;
    }

    public static function addPicture($file){
        $setting = self::getSetting();
        $dir = $setting['upload_dir'];

        if(!is_file($file['tmp_name'])){
            return false;
        }

        $allowed =  array('gif','png' ,'jpg', 'pdf');
        $filename = $file['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            return false;
        }

        $name = uniqid().".".$ext;
        $path = $dir.'/'.$name;
        move_uploaded_file($file['tmp_name'], $path);

        $cn = self::getCn();
        $sql = "INSERT INTO slide(path, seq) VALUES(:path, :seq)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "path"=> $name,
            "seq"=> 1
        ));
    }

    public static function delPicture($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM slide WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function getSlidePicture () {
        $cn = self::getCn();
        $sql = "SELECT * FROM slide";
        return $cn->query($sql);

    }

    public static function addProduct ($file,$product_name,$product_group_id) {
        $setting = self::getSetting();
        $dir = $setting['upload_dir'];

        if(!is_file($file['tmp_name'])){
            return false;
        }

        $allowed =  array('gif','png' ,'jpg', 'pdf');
        $filename = $file['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            return false;
        }

        $name = uniqid().".".$ext;
        $path = $dir.'/'.$name;
        move_uploaded_file($file['tmp_name'], $path);

        $cn = self::getCn();
        $sql = "INSERT INTO product(path, product_name , product_group_id) VALUES(:path, :product_name, :product_group_id)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "path"=> $name,
            "product_name"=> $product_name,
            "product_group_id" =>$product_group_id
        ));
    }
    public static function addProductGroupId ($id,$product_name) {
        $cn = self::getCn();
        $sql = "INSERT INTO product_group_id(product_group_id,product_name) VALUES(:product_group_id,:product_name)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "product_group_id" =>$id,
            "product_name" => $product_name
        ));
    }
    public static function getProduct () {
        $cn = self::getCn();
        $sql = "SELECT * FROM product";
        return $cn->query($sql);
    }

    public static function getProductByGroupId ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM product where product_group_id = ".$id;
        return $cn->query($sql);
    }

    public static function getProductGroupId () {
        $cn = self::getCn();
        $sql = "SELECT * FROM product_group_id";
        return $cn->query($sql);
    }

    public static function delProductById ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM product WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function delProductByGroupId ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM product WHERE product_group_id = ".$id;
        $cn->query($sql);
        $sql2 = "DELETE FROM product_group_id WHERE product_group_id = ".$id;
        $cn->query($sql2);
    }

    public static function editProductByGroupId ($id, $params) {
        $cn = self::getCn();
        $sql = "UPDATE product_group_id SET product_name='{$params['product_name']}' WHERE product_group_id = ".$id;
        $cn->query($sql);
    }

    public static function addProductThumbnail ($file,$product_group_id) {
        $setting = self::getSetting();
        $dir = $setting['upload_dir'];

        if(!is_file($file['tmp_name'])){
            return false;
        }

        $allowed =  array('gif','png' ,'jpg', 'pdf');
        $filename = $file['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            return false;
        }

        $name = uniqid().".".$ext;
        $path = $dir.'/'.$name;
        move_uploaded_file($file['tmp_name'], $path);
        $cn = self::getCn();
        $sql = "UPDATE product_group_id SET thumbnail = '".$name."' WHERE product_group_id = '".$product_group_id."'";
        $cn->query($sql);
    }


    public static function getProductGroupOffSet($offset) {
        $cn = self::getCn();
        $sql = "SELECT * FROM `product_group_id` ORDER BY id DESC LIMIT 4 OFFSET ".$offset;
        return $cn->query($sql);
    }

    public static function countProduct(){
        $cn = self::getCn();
        $sql = "SELECT COUNT(*) as c FROM product_group_id";
        $result = $cn->query($sql);
        $c = $result->fetch(PDO::FETCH_ASSOC);
        return $c['c'];
    }
} 