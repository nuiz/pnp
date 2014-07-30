<?php
require_once '../Manager.php';
$product_name = $_POST['product_name'];
$product_group_id = $_POST['product_group_id'];
Manager::addProductGroupId($product_group_id,$product_name);
foreach($_FILES['ufile']['name'] as $key => $value){
    $file = array();
    $file['name'] = $_FILES['ufile']['name'][$key];
    $file['tmp_name'] = $_FILES['ufile']['tmp_name'][$key];
    Manager::addProduct($file,$product_name,$product_group_id);
}
header( 'Location: index.php?page=product' );