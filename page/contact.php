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
        <img src="images/contact/07ContactUs_03.jpg">
    </div>
    <div>
        <div class="pull-left ct-content" style="width: 338px;">
            <p>
                <strong class="hder">
                    บริษัท พี.เอ็น.พี เท็กซ์ไทล์ จำกัด
                </strong>
                <br />
                <span>
                    61/62 ซ.เพชรเกษม 75<br />
                    ถ.เพชรเกษม แขวงหนองค้างพลู<br />
                    เขตหนองแขม กรุงเทพมหานคร<br />
                    10160
                </span>
            </p>
            <p>
                <label>E-mail:</label> <span class="orange">pnptextile@gmail.com</span><br />
                <label>Tel:</label> 02-444-2326<br />
                <label>Fax:</label> 02-809-8383<br />
            </p>
        </div>
        <div class="right-content">
            <div class="hmap">แผนที่มาโรงงาน</div>
            <!--<div id="gmap-canvas"></div>-->
            <iframe class="gmap-iframe" src="https://mapsengine.google.com/map/embed?mid=zsgQiQEnpBnk.kRR0j5ngGiQE" frameborder="0"></iframe>
            <div class="gmap-shadow"></div>
            <div style="text-align: center; font-size: 22px;">
                ดู PNP Textitle Co.,Ltd ใน<a target="_blank" href="https://mapsengine.google.com/map/embed?mid=zsgQiQEnpBnk.kRR0j5ngGiQE" class="orange">แผนที่</a>ขนาดใหญ่
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<style type="text/css">
.orange {
    color: #e0922f;
}
.hder {
    font-size: 24px;
    color: #000000;
}
.hmap {
    font-size: 24px;
    color: #e0922f;
    margin-top: 27px;
}
.ct-content {
    padding-top: 47px;
    font-size: 21px;
    color: #4f453f;
}
.ct-content p {
    padding: 0 28px;
}
.ct-content label {
    width: 70px;
    display: inline-block;
}

#gmap-canvas {
    margin-top: 20px;
}
a.orange {
    text-decoration: none;
}

.gmap-iframe {
    width: 622px;
    height: 478px;
}


.right-content {
    float: right;
    width: 622px;
}

.gmap-shadow {
    background: url(images/contact/07ContactUs_07.jpg);
    background-size: 100%;
    width: 621px;
    height: 28px;
}

@media all and (max-width: 320px) {
    .gmap-iframe {
        width: 300px;
        height: 230px;
        margin: 0 auto;
    }

    .gmap-shadow {
        width: 300px;
        height: 12px;
    }

    .right-content {
        float: none;
        clear: both;
        margin: 0 auto;
        width: 300px;
    }
}
</style>
<script type="text/javascript">
    /*
    function initialize() {
        var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
        var mapOptions = {
            zoom: 4,
            center: myLatlng
        };

        var map = new google.maps.Map(document.getElementById('gmap-canvas'), mapOptions);

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">P.N.P Textile Co., Ltd.</h1>'+
            '<div id="bodyContent">'+
            '61/62 ซอยเพชรเกษม 75 ถ.เพชรเกษม แขวงหนองค้างพลู'+
            ' เขตหนองแขม กรุงเทพมหานคร 10160 <br>'+
            'ผู้ผลิตเสื้อยืด คอโปโล และ คอกลม รับผลิตเสื้อ โฆษณา เสื้อยูนิฟอร์มสำหรับบริษัท'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Uluru (Ayers Rock)'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    */
</script>