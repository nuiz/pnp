<?php
require_once '../Manager.php';
Manager::delProductById($_GET['id']);
header( 'Location: index.php?page=product' );