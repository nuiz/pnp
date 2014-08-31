<?php
/**
 * Created by PhpStorm.
 * User: Papangping
 * Date: 9/1/14
 * Time: 3:04 AM
 */

require_once '../Manager.php';
$product_name = $_POST['product_name'];
$product_group_id = $_GET['id'];
Manager::editProductByGroupId($product_group_id, array('product_name'=> $product_name));
header( 'Location: index.php?page=product' );