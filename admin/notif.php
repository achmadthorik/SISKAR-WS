<?php
require_once './layout/head.php';
require_once './layout/nav.php';
require_once './layout/header.php';
?>

<div class="right_col" role="main">
    <div class="">
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="tile-stats">
                    <div class="icon">
                        <i class="fa fa-download"></i>
                    </div>
                    <div class="count" data-api></div>
                    <h3>API</h3>
                </div>
            </div>
             <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="tile-stats">
                    <div class="icon">
                        <i class="fa fa-upload"></i>
                    </div>
                    <div class="count" data-asap></div>
                    <h3>ASAP</h3>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-3 col-sm-3 col-xs-6">
                <div class="tile-stats">
                    <div class="icon">
                        <i class="fa fa-upload"></i>
                    </div>
                    <div class="count" data-status></div>
                    <h3>STATUS</h3>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <a href="#"><span class="fa fa-bar-chart-o" style="font-size:30px"> </span></a>
                    <a href="admin/Chart_Print.php"><span class="fa fa-print pull-right" style="font-size:30px"></span></a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="alert alert-warning" data-alert>
                        <h1><i class="fa fa-warning"></i> Warning!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "layout/footer.php"; ?>