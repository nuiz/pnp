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

    public function getSlidePicture () {
        $cn = self::getCn();
        $sql = "SELECT * FROM slide";
        return $cn->query($sql);

    }


} 