<?php
require_once 'Manager.php';
?>
<style>
    .btn-custom {
        background-color: hsl(201, 100%, 30%) !important;
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00a5ff", endColorstr="#006399");
        background-image: -khtml-gradient(linear, left top, left bottom, from(#00a5ff), to(#006399));
        background-image: -moz-linear-gradient(top, #00a5ff, #006399);
        background-image: -ms-linear-gradient(top, #00a5ff, #006399);
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #00a5ff), color-stop(100%, #006399));
        background-image: -webkit-linear-gradient(top, #00a5ff, #006399);
        background-image: -o-linear-gradient(top, #00a5ff, #006399);
        background-image: linear-gradient(#00a5ff, #006399);
        border-color: #006399 #006399 hsl(201, 100%, 25%);
        color: #fff !important;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
        -webkit-font-smoothing: antialiased;
    }
    .myButton {
        -moz-box-shadow:inset 0px 1px 0px 0px #a6827e;
        -webkit-box-shadow:inset 0px 1px 0px 0px #a6827e;
        box-shadow:inset 0px 1px 0px 0px #a6827e;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7d5d3b), color-stop(1, #634b30));
        background:-moz-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
        background:-webkit-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
        background:-o-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
        background:-ms-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
        background:linear-gradient(to bottom, #7d5d3b 5%, #634b30 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d5d3b', endColorstr='#634b30',GradientType=0);
        background-color:#7d5d3b;
        -moz-border-radius:3px;
        -webkit-border-radius:3px;
        border-radius:3px;
        border:1px solid #54381e;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:arial;
        font-size:13px;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #4d3534;
    }
    .myButton:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #634b30), color-stop(1, #7d5d3b));
        background:-moz-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
        background:-webkit-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
        background:-o-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
        background:-ms-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
        background:linear-gradient(to bottom, #634b30 5%, #7d5d3b 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#634b30', endColorstr='#7d5d3b',GradientType=0);
        background-color:#634b30;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }

</style>



<div>
    <div class="pnp-gray-bg" style="height: 25px;"></div>
    <div>
        <img src="images/wwa/wwa-header.jpg">
    </div>
    <div>
        <div class="pull-left pd-content">
            <p>เสื้อพนักงาน เสื้อบริษัท เสื้อกีฬาสี เสื้อโฆษณา เสื้อส่งเสริมการขาย เสื้อชมรม เสื้อสโมสร เสื้อสถาบัน  เราให้บริการรับผลิตเสื้อตามแบบดีไซน์ที่ลูกค้า
                ต้องการและยังให้บริการออกแบบเสื้อ เพื่อใช้ในวาระโอกาสต่างๆ อีกด้วย </p>
        </div>
        <div class="ex-text">
            ตัวอย่างลูกค้าของเรา
            <hr>
        </div>
        <div id="list-pd">
            <?php
            foreach (Manager::getProductGroupOffSet(0) as $r) {
                $picsHTML = "";
                foreach (Manager::getProductByGroupId($r['product_group_id']) as $a ) {
                    $picsHTML .= <<<HTML
                    <a rel="{$a['product_group_id']}" href="pictures/{$a['path']}"  title="{$r['product_name']}" class="swipebox" style="display: none;">
	                    <img src="pictures/{$a['path']}" alt="image" style="-webkit-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);">
                    </a>
HTML;

                }
                echo <<<HTML
            <div class="ex-item" style="text-align: center;">
                <div>
                    <a rel="{$r['product_group_id']}" href="pictures/{$r['thumbnail']}" class="swipebox"  title="{$r['product_name']}">
                    <img src="pictures/{$r['thumbnail']}" width="460" alt="image" height="240" id="{$r['product_group_id']}" style="-webkit-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);">

                    </a>
                    {$picsHTML}
                </div>
                <div class="ex-item-name">{$r['product_name']}</div>
                <hr>
            </div>
HTML;
            }

            ?>
            <!--
            <?php //for($i=0; $i< 10; $i++){?>
            <div class="ex-item">
                <div>
                    <img src="images/pd/atotech2-B.jpg" width="230">
                    <img src="images/pd/atotech2-F.jpg" width="230">
                </div>
                <div class="ex-item-name">Phi Phi Hotel Group</div>
                <hr>
            </div>
            <?php //}?>
        </div>
        -->
    </div>
    <div class="clearfix"></div>
    <div style="text-align: center"><a href="#" class="myButton loadmore">Load more...</a></div>
    <div class="clearfix"></div>
</div>
<style type="text/css">
.bt-t {
    margin-left: 15px;
    width: 310px;
}
.pd-content {
    font-size: 21px;
}
.pd-content p {
    padding: 12px 28px;
}

.ex-text {
    color: #e0922f;
    font-size: 36px;
    padding: 0 28px;
}

.ex-item {
    width: 466px;
    float: left;
    margin-left: 28px;
}
.ex-item:nth-child(2n-1){
    margin-left: 0;
}

.ex-item hr {
    height: 4px;
    border: none;
    background: #f1f1f1;
}

.ex-item-name {
    text-align: center;
    font-size: 30px;
}
</style>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $('.swipebox' ).swipebox({
        useCSS : true, // false will force the use of jQuery for animations
        useSVG : false, // false to force the use of png for buttons
        hideBarsOnMobile : true, // false will show the caption and navbar on mobile devices
        hideBarsDelay : 3000, // delay before hiding bars
        videoMaxWidth : 1140, // videos max width
        beforeOpen: function() {}, // called before opening
        afterClose: function() {} // called after closing
    });

    var page = 0;
    var listEl = $('#list-pd');
    $('.loadmore').click(function(e){
        e.preventDefault();
        page++;
        $.get("loadmore.php?page="+page, function(data){
            for(var i in data){
                listEl.append(appendItem(data[i]));
            }
        }, 'json');
    });

    function appendItem(html){
        var item = $(html);
        listEl.append(item);
        $('.swipebox', item).swipebox({
            useCSS : true, // false will force the use of jQuery for animations
            useSVG : false, // false to force the use of png for buttons
            hideBarsOnMobile : true, // false will show the caption and navbar on mobile devices
            hideBarsDelay : 3000, // delay before hiding bars
            videoMaxWidth : 1140, // videos max width
            beforeOpen: function() {}, // called before opening
            afterClose: function() {} // called after closing
        });
    }
});
</script>