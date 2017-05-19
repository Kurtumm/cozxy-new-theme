<?php
use frontend\assets\MyAccountAsset;

MyAccountAsset::register($this);
?>

<div class="container login-box">
    <div class="size32">&nbsp;</div>
    <div class="row">
        <div class="col-xs-12 bg-yellow1 b" style="padding:18px 18px 10px;">
            <p class="size20 size18-xs">MY ACCOUNT</p>
        </div>
        <div class="col-xs-12 bg-white">
            <div class="size12 size10-xs">&nbsp;</div>
            <!--TABs-->
            <ul class="nav nav-pills size18 size14-xs b" role="tablist">
                <li role="presentation" class="active"><a href="#account-detail" aria-controls="account-detail" role="tab" data-toggle="tab">Account Detail</a></li>
                <li role="presentation"><a href="#order-history" aria-controls="order-history" role="tab" data-toggle="tab">Order History</a></li>
                <li role="presentation"><a href="#wish-list" aria-controls="wish-list" role="tab" data-toggle="tab">Wish List</a></li>
                <li role="presentation"><a href="#tracking" aria-controls="tracking" role="tab" data-toggle="tab">Tracking</a></li>
            </ul>
            <div class="size18 size14-xs">&nbsp;</div>
        </div>
        <div class="col-xs-12 bg-white myData">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="account-detail">
                    <?=$this->render('_account_detail')?>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="order-history">
                    <?=$this->render('_order_history')?>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="wish-list">
                    <?=$this->render('_wish_list')?>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="tracking">
                    <?=$this->render('_tracking')?>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="size32">&nbsp;</div>