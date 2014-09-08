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
        <img src="images/hto/05HowToOrder_03.jpg">
    </div>
    <div class="header-320">
        <img src="images/hto/hto-header.jpg">
    </div>
    <div style="margin-top: 23px;">
    </div>
    <div class="hto">
        <a class="absolute-link absolute-link-mail" href="mailto:pnptextitle@gmail.com"></a>
        <a class="absolute-link absolute-link-size" href="index.php?page=size_chart"></a>
        <a class="absolute-link absolute-link-fabric" href="index.php?page=fabric"></a>
        <img src="images/hto/05HowToOrder_06.jpg">
        <img src="images/hto/05HowToOrder_07.jpg">
    </div>
    <div class="hto320">
        <img src="images/hto/HowToOrder_320.jpg">
    </div>
    <div class="hto768">
        <img src="images/hto/HowToOrder_768.jpg">
    </div>
</div>

<style type="text/css">
    .header-default {
        display: block;
    }

    .header-320 {
        display: none;
    }

    .hto {
        display: block;
        position: relative;
    }

    .hto320 {
        display: none;
        position: relative;
    }
    .hto768 {
        display: none;
        position: relative;
    }

    .absolute-link {
        position: absolute;
    }

    .absolute-link-mail {
        width: 228px;
        height: 55px;
        top: 506px;
        left: 135px;
    }
    .absolute-link-size {
        width: 92px;
        height: 22px;
        top: 621px;
        left: 365px;
    }
    .absolute-link-fabric {
        width: 120px;
        height: 22px;
        top: 621px;
        left: 488px;
    }

    @media all and (max-width: 320px) {
        .header-default {
            display: none;
        }

        .header-320 {
            display: block;
        }

        .hto {
            display: none;
        }

        .hto320 {
            display: block;
        }

        .hto768 {
            display: none;
        }
    }

    @media all and (min-width:321px) and (max-width: 768px) {
        .hto {
            display: none;
        }

        .hto320 {
            display: none;
        }

        .hto768 {
            display: block;
        }
    }
</style>