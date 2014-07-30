<?php
require_once '../Manager.php';
$product_group_id = $_POST['product_group_id'];
$gn = null;
foreach (Manager::getProductGroupId($product_group_id) as $a) {
    $gn = $a['product_name'];
}

foreach($_FILES['ufile']['name'] as $key => $value){
    $file = array();
    $file['name'] = $_FILES['ufile']['name'][$key];
    $file['tmp_name'] = $_FILES['ufile']['tmp_name'][$key];
    Manager::addProduct($file,$gn,$product_group_id);
}
header( 'Location: index.php?page=product' );