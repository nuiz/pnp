<?php
/**
 * Created by PhpStorm.
 * User: Papangping
 * Date: 8/2/14
 * Time: 5:53 AM
 */

include_once 'Manager.php';

$rs = Manager::getProduct(array('page'=> $_GET['page']));
$data = $rs->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);