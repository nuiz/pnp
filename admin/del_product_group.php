<?php
require_once '../Manager.php';
Manager::delProductByGroupId($_GET['id']);
header( 'Location: index.php?page=product' );