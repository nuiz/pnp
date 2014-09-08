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
    <div class="header-default">
        <img src="images/fab/06Fabric_03.jpg">
    </div>
    <div class="header-320">
        <img src="images/fab/fab-header_320.jpg">
    </div>
    <div class="fab-warp">
        <div class="pull-left fab-content">
            <p>ผ้าที่นำมาใช้ผลิต เสื้อยืดคอกลม และเสื้อ POLO สามารถแบ่งได้หลายประเภทตามลักษณะของเส้นด้าย
                ผ้าถูกแบ่งเป็นหลักๆ 4 ประเภท ตามตารางดังต่อไปนี้</p>
        </div>
        <div>
            <img src="images/fab/06Fabric_06.jpg">
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="fab-warp320">
        <div class="pull-left fab-content">
            <p>ผ้าที่นำมาใช้ผลิต เสื้อยืดคอกลม และเสื้อ POLO สามารถแบ่งได้หลายประเภทตามลักษณะของเส้นด้าย
                ผ้าถูกแบ่งเป็นหลักๆ 4 ประเภท ตามตารางดังต่อไปนี้</p>
        </div>
        <img src="images/fab/Fabric_320.jpg">
    </div>
    <div class="fab-warp768">
        <div class="fab-content">
            <p>ผ้าที่นำมาใช้ผลิต เสื้อยืดคอกลม และเสื้อ POLO สามารถแบ่งได้หลายประเภทตามลักษณะของเส้นด้าย
                ผ้าถูกแบ่งเป็นหลักๆ 4 ประเภท ตามตารางดังต่อไปนี้</p>
        </div>
        <img src="images/fab/Fabric_768.jpg">
    </div>
</div>
<style type="text/css">
    .header-default {
        display: block;
    }

    .header-320 {
        display: none;
    }


.fab-content {
    width: 690px;
    font-size: 22px;
    color: #4f453f;
}
.fab-content p {
    padding: 0 28px;
}

.fab-warp {
    display: block;
}

.fab-warp320 {
    display: none;
}
.fab-warp768 {
    display: none;
}

@media all and (max-width: 320px) {
    .header-default {
        display: none;
    }

    .header-320 {
        display: block;
    }


    .fab-warp {
        display: none;
    }

    .fab-warp320 {
        display: block;
    }
    .fab-warp768 {
        display: none;
    }

    .fab-content {
        width: 100%;
    }

}
@media all and (min-width:321px) and (max-width: 768px) {
    .fab-warp {
        display: none;
    }

    .fab-warp320 {
        display: none;
    }
    .fab-warp768 {
        display: block;
    }



    .fab-content {
        width: 100%;
    }

}
</style>