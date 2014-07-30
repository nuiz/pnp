<?php
require_once '../Manager.php';
?>
<style>
    .picture-ul {
        list-style: none;
    }
    .picture-ul li img{
        width: 300px;
        margin: 10px;
        -webkit-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
        -moz-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
        box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
    }
</style>
<div class="page-header">
    <h1>Add Picture</h1>
</div>
<p>
    <form action="slide_upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <input name="ufile[]" type="file" id="ufile" multiple style="display: inline-block;width: 76px;"> เลือกไฟล์รูปสำรูป Slide Show หน้าแรก แล้วกดปุ่ม Upload Image
        <input type="submit" value="Upload Image">
    </form>
</p>
<div class="page-header">
    <h1>Picture</h1>
</div>
<p>
<ul class="picture-ul">
    <?php
    foreach (Manager::getSlidePicture() as $r) {
        echo <<<HTML
    <li><img src="../pictures/{$r['path']}"/>&nbsp;&nbsp;&nbsp;&nbsp; <a href="del_slide_picture.php?id={$r['id']}" class="btn btn-danger btn-large"><i class="icon-white icon-remove"></i> Remove</a></li>
    <hr>
HTML;
    }
    ?>
</ul>
</p>
