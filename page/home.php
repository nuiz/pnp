<?php
/**
 * Created by PhpStorm.
 * User: Papangping
 * Date: 7/28/14
 * Time: 9:08 AM
 */
require_once 'Manager.php';
?>
<script type="text/javascript" src="js/jssor.core.js"></script>
<script type="text/javascript" src="js/jssor.utils.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<div>
    <div class="pnp-gray-bg" style="height: 25px;"></div>
    <div>
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 960px; height: 400px;">
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 960px; height: 400px;">
                <?php
                $slidePics = Manager::getSlidePicture();
                foreach($slidePics as $key => $pic){
                    echo <<<HTML
                <div><img u="image" src="pictures/{$pic['path']}" /></div>
HTML;
                }
                ?>
            </div>

            <!-- Bullet Navigator Skin Begin -->
            <style>
                /* jssor slider bullet navigator skin 11 css */
                /*
                .jssorb11 div           (normal)
                .jssorb11 div:hover     (normal mouseover)
                .jssorb11 .av           (active)
                .jssorb11 .av:hover     (active mouseover)
                .jssorb11 .dn           (mousedown)
                */
                .jssorb11 div, .jssorb11 div:hover, .jssorb11 .av
                {
                    background: url(img/b11.png) no-repeat;
                    overflow:hidden;
                    cursor: pointer;
                }
                .jssorb11 div { background-position: -10px -10px; }
                .jssorb11 div:hover, .jssorb11 .av:hover { background-position: -40px -10px; }
                .jssorb11 .av { background-position: -70px -10px; }
                .jssorb11 .dn, .jssorb11 .dn:hover { background-position: -100px -10px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb11" style="position: absolute; bottom: -32px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 11px; HEIGHT: 11px;"></div>
            </div>
            <!-- Bullet Navigator Skin End -->

            <a style="display: none" href="http://www.jssor.com">javascript</a>
            <!-- Trigger -->
            <script>
                //jssor_slider1_starter('slider1_container');
            </script>
        </div>
        <div style="height: 54px;"></div>
        <div>
            <div class="pull-left bt-t" style="margin-left: 0px;"><img src="images/home/1/01home_09.jpg"><img src="images/home/1/01home_14.jpg"></div>
            <div class="pull-left bt-t"><img src="images/home/1/01home_11.jpg"><img src="images/home/1/01home_14.jpg"></div>
            <div class="pull-left bt-t"><img src="images/home/1/01home_13.jpg"><img src="images/home/1/01home_14.jpg"></div>
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
            $FillMode: 2,
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
</style>