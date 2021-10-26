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

                <?php include __DIR__. "/flash.php"; ?>
                <?php foreach ($categories as $category): ?>
                    <h3> <?= $category->title ?> </h3>
                    <?php foreach ($category->products as $product): ?>
                        <p><?= $product->title ?></p>
                    <?php endforeach;  ?>
                <?php endforeach;  ?>





            </div>
        </div>
    </div>
</div>
<!--/ about_me  -->