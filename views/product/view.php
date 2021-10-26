<?php

/* @var $this yii\web\View */

use  yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3><?= $this->title ?> </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->
<!-- about_me  -->
<div class="counter_area">
    <div class="container">
        <div class="row">
            <div class="xl col-12">

                <h3> <?= $product->title ?> </h3>
                <p><?= $product->price ?></p>
                <p><?= $product->category->title ?></p>

            </div>
        </div>
    </div>
</div>
<!--/ about_me  -->