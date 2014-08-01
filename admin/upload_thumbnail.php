<?php
require_once '../Manager.php';
$product_group_id = $_POST['product_group_id'];
foreach($_FILES['ufile']['name'] as $key => $value){
    $file = array();
    $file['name'] = $_FILES['ufile']['name'][$key];
    $file['tmp_name'] = $_FILES['ufile']['tmp_name'][$key];
    Manager::addProductThumbnail($file,$product_group_id);
}
header( 'Location: index.php?page=product' );