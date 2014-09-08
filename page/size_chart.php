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
        <img src="images/chart/04SizeChart_03.jpg">
    </div>
    <div class="header-320">
        <img src="images/chart/chart-header_320.jpg">
    </div>
    <div class="chart">
        <img src="images/chart/04SizeChart_05.jpg">
        <img src="images/chart/04SizeChart_06.jpg">
    </div>
    <div class="chart320">
        <img src="images/chart/SizeChart_320.jpg">
    </div>
    <div class="chart768">
        <img src="images/chart/SizeChart_768.jpg">
    </div>
</div>
<style type="text/css">

    .header-default {
        display: block;
    }

    .header-320 {
        display: none;
    }
    .chart {
        display: block;
    }

    .chart320 {
        display: none;
    }
    .chart768 {
        display: none;
    }
@media all and (max-width: 320px) {
    .header-default {
        display: none;
    }

    .header-320 {
        display: block;
    }

    .chart {
        display: none;
    }

    .chart320 {
        display: block;
    }
    .chart768 {
        display: none;
    }
}

@media all and (min-width:321px) and (max-width: 768px) {
    .chart {
        display: none;
    }

    .chart320 {
        display: none;
    }
    .chart768 {
        display: block;
    }
}
</style>