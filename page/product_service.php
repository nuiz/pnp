<?php
/**
 * Created by PhpStorm.
 * User: Papangping
 * Date: 7/28/14
 * Time: 9:08 AM
 */
?>
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
        </div>
        <div>
            <?php for($i=0; $i< 10; $i++){?>
            <div class="ex-item">
                <div>
                    <img src="images/pd/atotech2-B.jpg" width="230">
                    <img src="images/pd/atotech2-F.jpg" width="230">
                </div>
                <div class="ex-item-name">Phi Phi Hotel Group</div>
                <hr>
            </div>
            <?php }?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $ChanceToShow: 2,
                $AutoCenter: 1,
                $SpacingX: 10
            },
            $AutoPlay: true
        };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>
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