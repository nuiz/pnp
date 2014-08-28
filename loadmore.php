<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 8/2/14
 * Time: 3:01 PM
 */

include_once 'Manager.php';

$offset = $_GET['page']*4;
$pgs = Manager::getProductGroupOffSet($offset)->fetchAll(PDO::FETCH_ASSOC);

$data = array();
foreach($pgs as $key => $r){
    $picsHTML = "";
    foreach (Manager::getProductByGroupId($r['product_group_id']) as $a ) {
        $picsHTML .= <<<HTML
                <a rel="{$a['product_group_id']}" href="pictures/{$a['path']}"  title="{$a['product_name']}" class="swipebox" style="display: none;">
                    <img src="pictures/{$a['path']}" alt="image" style="-webkit-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);
box-shadow: 4px 6px 3px 0px rgba(0,0,0,0.25);">
                </a>
HTML;

    }

    $html = <<<HTML
        <div class="ex-item" style="text-align: center;">
            <div>
                <a rel="{$r['product_group_id']}" href="pictures/{$r['thumbnail']}"  title="{$r['product_name']}" class="swipebox" >
                <img class="ex-item-img" src="pictures/{$r['thumbnail']}" width="460" alt="image" height="240" id="{$r['product_group_id']}">

                </a>
                {$picsHTML}
            </div>
            <div class="ex-item-name">{$r['product_name']}</div>
            <hr>
        </div>
HTML;

    $data[] = $html;
}

echo json_encode($data);