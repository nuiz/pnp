<?php
require_once '../Manager.php';
Manager::delPicture($_GET['id']);
header( 'Location: index.php' );