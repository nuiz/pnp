<?php
require_once '../Manager.php';
foreach($_FILES['ufile']['name'] as $key => $value){
    $file = array();
    $file['name'] = $_FILES['ufile']['name'][$key];
    $file['tmp_name'] = $_FILES['ufile']['tmp_name'][$key];
    Manager::addPicture($file);
}
header( 'Location: index.php' );