<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>PNP : TEXTILE CO., LTD</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swipebox.min.css">
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/jquery.resizecrop-1.0.3.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="pnp-gray-bg web-top-section"></div>
<div class="fixed-header">
    <div id="bg_header" class="wrapper">
        <a href="" class="toggle-header"></a>
        <a href=""><div id="logo" class="pull-left"></div></a>
        <div id="social_top" class="pull-right"><a href="" style="display: block; height: 100%;"></a></div>
        <div class="clearfix"></div>
        <div id="navigation">
            <a href="index.php?page=home"></a>
            <a href="index.php?page=who_we_are"></a>
            <a href="index.php?page=product_service"></a>
            <a href="index.php?page=size_chart"></a>
            <a href="index.php?page=how_to_order"></a>
            <a href="index.php?page=fabric"></a>
            <a href="index.php?page=contact"></a>
        </div>
    </div>
</div>
<div class="wrapper container">
    <?php $page = isset($_GET['page'])? $_GET['page']: 'home'; include("page/".$page.'.php'); ?>
</div>
<div class="wrapper">
    <div id="bt-nav">
        <a href="index.php?page=home"></a>
        <a href="index.php?page=who_we_are"></a>
        <a href="index.php?page=product_service"></a>
        <a href="index.php?page=size_chart"></a>
        <a href="index.php?page=how_to_order"></a>
        <a href="index.php?page=fabric"></a>
        <a href="index.php?page=contact"></a>
    </div>
</div>
<div class="fixed-footer">
    Copyright © 2014 by www.polocolour.com  All Rights Reserved.
</div>
</body>
<script type="text/javascript">
    $(function(){
        $('.toggle-header').click(function(e){
            e.preventDefault();
            $('#bg_header').toggleClass('open');
        });
    });
</script>
</html>