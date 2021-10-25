
    <?php  if(Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">

                <span aria-hidden="true"> Успех </span>

            <?  Yii::$app->session->getFlash('success') ?>
        </div>
    <?php  endif;  ?>

    <?php  if(Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
                <span aria-hidden="true"> Не удалось </span>
            <?  Yii::$app->session->getFlash('error') ?>
        </div>
    <?php  endif;  ?>
