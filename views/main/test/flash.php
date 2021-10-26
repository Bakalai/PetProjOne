
    <?php  if(Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
                <span aria-hidden="true"> <?=  Yii::$app->session->getFlash('success') ?> </span>
        </div>
    <?php  endif;  ?>

    <?php  if(Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
                <span aria-hidden="true">  <?=  Yii::$app->session->getFlash('error') ?> </span>
        </div>
    <?php  endif;  ?>
