<?php   
use app\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);

?>
<?php  $this->beginPage()  ?>
<!doctype html>
<html class="no-js" lang="<? Yii::$app->language ?>">

<head>
    <meta charset="<? Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php  $this->head()  ?>
</head>

<body>
    <?php  $this->beginBody()  ?>

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="http://petprojone/web/index.php?r=main/index">Главная</a></li>
                                        <li><a href="http://petprojone/web/index.php?r=main/about">Обо мне</a></li>
                                        <li><a href="#">Блог</a>
                                        <li><a href="#">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <?= $content ?>

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="menu_links">
                            <ul>
                                <li><a href="http://petprojone/web/index.php?r=main/index">Главная</a></li>
                                <li><a href="http://petprojone/web/index.php?r=main/about">Обо мне</a></li>
                                <li><a href="#">Блог</a>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="socail_links">
                            <ul>
                                <li><a href="https://vk.com/inugami_bakalai"> <i class="fa fa-vk"></i> </a></li>
                                <li><a href="https://t.me/inugami_bakalai"> <i class="fa fa-telegram"></i> </a></li>
                                <li><a href="https://www.instagram.com/inugami_bakalai"> <i class="fa fa-instagram"></i> </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

<?php $this->endBody() ?>    
</body>

</html>
<?php $this->endPage() ?>