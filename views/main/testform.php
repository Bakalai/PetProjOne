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
                <?php  $form = ActiveForm::begin([
                        'id' => 'first-form',
                        'layout' => 'horizontal',
                        'fieldConfig'=> [
                                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                            'horizontalCssClasses'=> [
                                'label' => 'col-sm-2',
                                'offset'=>'offset-sm-2',
                                'wrapper'=>'col-sm-10',
                                'error'=>'',
                                'hint'=>'',
                            ],
                        ],
                ]) ?>

                    <?= $form->field($model, 'title')->textInput([ 'maxLength'=> 50, 'placeholder'=>'Введите заголовок']) ?>
                    <?= $form->field($model, 'content')->textarea([ 'minLength'=>15, 'maxLength'=> 5000, 'rows'=>'6', 'placeholder'=>'Введите текст']) ?>
                    <?= $form->field($model, 'img')->fileInput([ 'placeholder'=>'Загрузите изображение']) ?>
                    <?= $form->field($model, 'created_at')->textInput() ?>
                    <?= $form->field($model, 'keywords')->textInput([ 'minLength'=>3, 'maxLength'=> 200, 'placeholder'=>'Ключевые слова']) ?>
                    <?= $form->field($model, 'description')->textInput([ 'minLength'=>5, 'maxLength'=> 500, 'placeholder'=>'Описание...']) ?>

                    <div class="form-group">
                        <div class="col-md-5 col-md-offset-2">
                            <?= \yii\helpers\Html::submitButton('Отправить', ['class' => 'btn btn-default' ]) ?>
                        </div>

                    </div>

               <?php  ActiveForm::end() ?>

            </div>
        </div>
    </div>
</div>
<!--/ about_me  -->