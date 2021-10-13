<?php

/* @var $this yii\web\View */

use  yii\widgets\ActiveForm;

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
                <?php  $form = ActiveForm::begin([
                        'id' => 'first-form',
                        'options'=> [
                                'class' => 'form-horizontal'
                        ]
                ]) ?>

                    <?= $form->field($model, 'title',
                    [
                        'template'=>"{label} \n <div class='col-md-5'>{input} </div> \n <div class='col-md-5'> {hint} </div> \n <div class='col-md-5'>{error}</div>"
                    ])->textInput([ 'maxLength'=> 50]) ?>
                    <?= $form->field($model, 'content')->textarea([ 'minLength'=>15, 'maxLength'=> 5000, 'rows'=>'6']) ?>
                    <?= $form->field($model, 'img')->fileInput() ?>
                    <?= $form->field($model, 'created_at')->Input('text') ?>
                    <?= $form->field($model, 'keywords')->textInput([ 'minLength'=>3, 'maxLength'=> 200]) ?>
                    <?= $form->field($model, 'description')->textInput([ 'minLength'=>5, 'maxLength'=> 500]) ?>

                    <div class="form-group">
                        <?= \yii\helpers\Html::submitButton('Отправить', ['class' => 'btn btn-default' ]) ?>
                    </div>

               <?php  ActiveForm::end() ?>

            </div>
        </div>
    </div>
</div>
<!--/ about_me  -->