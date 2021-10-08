<?php

/* @var $this yii\web\View */

use  yii\bootstrap4\ActiveForm;
?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Страница с формой</h3>
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
                <?php  $form = ActiveForm::begin() ?>

                    <?= $form->field($model, 'title')->textInput() ?>
                    <?= $form->field($model, 'content')->textarea() ?>
                    <?= $form->field($model, 'img')->fileInput() ?>
                    <?= $form->field($model, 'created_at') ?>
                    <?= $form->field($model, 'keywords')->textInput() ?>
                    <?= $form->field($model, 'description')->textInput() ?>

                    <div class="form-group">
                        <?= \yii\bootstrap4\Html::submitButton('Отправить', ['class' => 'btn btn-default' ]) ?>
                    </div>

               <?php  ActiveForm::end() ?>

            </div>
        </div>
    </div>
</div>
<!--/ about_me  -->