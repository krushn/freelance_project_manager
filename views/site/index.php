<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard | Project Statistics';

?>

<div class="page-heading">
    <h1>Dashboard<small>Project Statistics</small></h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-indigo" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="info">
                    <div class="tile-heading"><span>Total income</span></div>
                    <div class="tile-body"><span>$<?= $total_income ?></span></div>
                </div>
                <div class="stats">
                    <div class="tile-content">
                        <span class="material-icons tile-icon">attach_money</span>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-danger" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="info">
                    <div class="tile-heading"><span>Last month income</span></div>
                    <div class="tile-body "><span>$<?= $total_income_last_month ?></span></div>
                </div>
                <div class="stats">
                    <div class="tile-content">
                        <span class="material-icons tile-icon">attach_money</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-primary" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="info">
                    <div class="tile-heading"><span>This month income</span></div>
                    <div class="tile-body "><span>$<?= $total_income_month ?></span></div>
                </div>
                <div class="stats">
                    <div class="tile-content">
                        <span class="material-icons tile-icon">attach_money</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-success clearfix" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="info">
                    <div class="tile-heading"><span>This year income</span></div>
                    <div class="tile-body "><span>$<?= $total_income_year ?></span></div>
                </div>
                <div class="stats">
                    <div class="tile-content">
                        <span class="material-icons tile-icon">attach_money</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 full-width">
            <div class="panel panel-default no-shadow" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="panel-body">
                   <div class="pb-md">
                        <h4 class="mb-n" style="width: 100%;">
                            INCOME STATISTICS
                            <select id="graph_type" style="max-width: 100px;float: right;position: relative;top: -8px;">
                                <option value="day">Day</option>
                                <option value="month">Month</option>
                                <option value="year">Year</option>
                            </select>
                        </h4>
                    </div>
                    <div class="chart-holder" id="morris-chart-1" style="height: 220px!important; min-height:220px;"></div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .container-fluid -->
