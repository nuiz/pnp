<?php
require_once '../Manager.php';
?>
<div class="page-header">
    <h1>Add Product</h1>
</div>
<style>
    .product-ul {
        width: 1024px;
        list-style: none;
    }
    .product-ul li {
        display: inline-block;
        text-align: center;
    }
    .product-ul li img{
        width: 192px;
        margin: 10px;
        -webkit-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
        -moz-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
        box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
    }
</style>
<p>
<form action="product_upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <input type="hidden" name="product_group_id" id="product_group_id" value="<?php echo time();?>">
    <input type="text" name="product_name" id="product_name" placeholder="Product Name" style="width: 300px;">
    <input name="ufile[]" type="file" id="ufile" multiple style="display: inline-block;width: 200px;">
    <input type="submit" value="Upload Image">
</form>
</p>
<div class="page-header">
    <h1>Add Product to Group</h1>
</div>
<p>
<form action="product_upload_group.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <select name="product_group_id">
        <?php
        foreach (Manager::getProductGroupId() as $r) {
            echo <<<HTML
            <option value="{$r['product_group_id']}">{$r['product_name']}</option>
HTML;
        }
        ?>
    </select>
    <input name="ufile[]" type="file" id="ufile" multiple style="display: inline-block;width: 200px;">
    <input type="submit" value="Upload Image">
</form>
</p>
<div class="page-header">
    <h1>Product</h1>
</div>
<p>

<ul class="product-ul">
    <?php
    foreach (Manager::getProductGroupId() as $r) {
        echo <<<HTML
        <div style="font-size: 30px;font-weight: bolder;">Product Name : {$r['product_name']}<a href="del_product_group.php?id={$r['product_group_id']}" class="btn btn-warning btn-large" style="margin-left: 20px;"><i class="icon-white icon-remove"></i> Remove Group</a></div>
        <div>
            <form action="edit_product.php?id={$r['product_group_id']}" method="post">
                <input type="text" name="product_name" value="{$r['product_name']}"> <input type="submit" value="edit">
            </form>
        </div>
        <div><img src="../pictures/{$r['thumbnail']}" style="width: 300px;-webkit-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);-moz-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);margin: 20px;"/></div>
        <div>
            <form action="upload_thumbnail.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <input type="hidden" name="product_group_id" id="product_group_id" value="{$r['product_group_id']}">
            <input name="ufile[]" type="file" id="ufile" multiple style="display: inline-block;width: 200px;">
            <input type="submit" value="Upload Image">
        </form>
        </div>
        <hr>
        <div style="font-size: 20px;">Product Gallery : {$r['product_name']}</div>
HTML;

        foreach (Manager::getProductByGroupId($r['product_group_id']) as $a ) {
            echo <<<HTML
    <li><img src="../pictures/{$a['path']}"/><br><a href="del_product_picture.php?id={$a['id']}" class="btn btn-danger btn-large"><i class="icon-white icon-remove"></i> Remove</a></li>
HTML;
        }
        echo <<<HTML
        <hr>
HTML;

    }


    /*
    foreach (Manager::getSlidePicture() as $r) {
        echo <<<HTML
    <li><img src="../pictures/{$r['path']}"/>&nbsp;&nbsp;&nbsp;&nbsp; <a href="del_slide_picture.php?id={$r['id']}" class="btn btn-danger btn-large"><i class="icon-white icon-remove"></i> Remove</a></li>
    <hr>
HTML;
    }*/
    ?>
</ul>
</p>
