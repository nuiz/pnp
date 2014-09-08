<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>PNP : TEXTILE CO., LTD</title>
    <link rel="stylesheet" href="css/style.css?v=0.11">
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
        <div id="social_top" class="pull-right" style="position: relative;">
            <a href="https://www.facebook.com/pnppologroup?ref=profile" style="display: block;
position: absolute;
bottom: 15px;
width: 30px;
height: 40px;
left: 4px;"></a></div>
        <div class="clearfix"></div>
        <div id="navigation">
            <a href="index.php?page=home" class="<?php if(@$_GET['page']=='home') echo 'active';?>">HOME</a>
            <a href="index.php?page=who_we_are" class="<?php if(@$_GET['page']=='who_we_are') echo 'active';?>">WHO WE ARE</a>
            <a href="index.php?page=product_service" class="<?php if(@$_GET['page']=='product_service') echo 'active';?>">PRODUCT & SERVICE</a>
            <a href="index.php?page=size_chart" class="<?php if(@$_GET['page']=='size_chart') echo 'active';?>">SIZE CHART</a>
            <a href="index.php?page=how_to_order" class="<?php if(@$_GET['page']=='how_to_order') echo 'active';?>">HOW TO ORDER</a>
            <a href="index.php?page=fabric" class="<?php if(@$_GET['page']=='fabric') echo 'active';?>">FABRIC</a>
            <a href="index.php?page=contact" class="<?php if(@$_GET['page']=='contact') echo 'active';?>">CONTACT US</a>
        </div>
        <div class="bt-fixed-header pnp-gray-bg"></div>
    </div>
</div>
<div class="wrapper container">
    <?php $page = isset($_GET['page'])? $_GET['page']: 'home'; include("page/".$page.'.php'); ?>
</div>
<div class="wrapper">
    <div id="bt-nav">
        <a href="index.php?page=home" class="<?php if(@$_GET['page']=='home') echo 'active';?>">Home</a>
        <a href="index.php?page=who_we_are" class="<?php if(@$_GET['page']=='who_we_are') echo 'active';?>">Who We Are</a>
        <a href="index.php?page=product_service" class="<?php if(@$_GET['page']=='product_service') echo 'active';?>">Product & Service</a>
        <a href="index.php?page=size_chart" class="<?php if(@$_GET['page']=='size_chart') echo 'active';?>">Size Chart</a>
        <a href="index.php?page=how_to_order" class="<?php if(@$_GET['page']=='how_to_order') echo 'active';?>">How To Order</a>
        <a href="index.php?page=fabric" class="<?php if(@$_GET['page']=='fabric') echo 'active';?>">Fabric</a>
        <a href="index.php?page=contact" class="<?php if(@$_GET['page']=='contact') echo 'active';?>">Contact Us</a>
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