<?php

/* @var $this yii\web\View */


?>


<?php
//if (!empty($posts)) {
//    var_dump($posts);
//}
?>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="shap_pattern d-none d-lg-block">
                <img src="img/about/grid.png" alt="">
            </div>
            <div class="social_links">
                <ul>
                    <li><a href="https://vk.com/inugami_bakalai"> <i class="fa fa-vk"></i> </a></li>
                    <li><a href="https://t.me/inugami_bakalai"> <i class="fa fa-telegram "></i> </a></li>
                    <li><a href="https://www.instagram.com/inugami_bakalai"> <i class="fa fa-instagram"></i> </a></li>
                </ul>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>
                               PetProjOne
                            </h3>
                            <span>блог или портфолио</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->



    <!-- portfolio_area -->
    <div class="portfolio_area portfolio_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white_text text-center">
                        <span>Портфолио</span>
                        <h3>Несколько проектов</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ portfolio_area -->

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="row">
                <?php if (!empty($posts)){
                foreach ($posts as $post): ?>
                <div class="col-xl-6  col-md-8">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $post->img ).'"/>'?>
                        </div>

                        <div  class="portfolio_hover" >
                            <div class="title">
                                    <h3><a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>" > <?= $post->title ?> </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  endforeach;}  ?>

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_portfolio text-center">
                        <a class="line_btn" href="#">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ portfolio_image_area  -->

    <!-- about_me  -->
    <div class="about_me">
        <div class="about_large_title d-none d-lg-block">
                WEB
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_e_details">
                        <h3>Обо мне</h3>
                        <p>Начинающий web-бэкенд разработчик, делаю первые шаги. <br> Полон сил и энтузиазма.</p>
                        <div class="download_cv">
                            <a class="boxed-btn3" href="#">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_img">
                        <div class="color_pattern d-none d-lg-block">
                            <img src="img/about/color_grid.png" alt="">
                        </div>
                        <div class="my_Pic">
                                <img src="img/about/about.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_me  -->

    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3>
                            <span class="counter" >3 </span><span>+</span>
                        </h3>
                        <p>Total Projects</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3>
                            <span class="counter">2 </span>
                        </h3>
                        <p>On Going Projects</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3>
                            <span class="counter" >95 </span> <span>%</span>
                        </h3>
                        <p>Job Success</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area  -->
<!--    <div class="testimonial_area ">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-xl-12">-->
<!--                        <div class="testmonial_active owl-carousel">-->
<!--                            <div class="single_carousel">-->
<!--                                    <div class="single_testmonial text-center">-->
<!--                                            <div class="quote">-->
<!--                                                <img src="img/testmonial/quote.svg" alt="">-->
<!--                                            </div>-->
<!--                                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>-->
<!--                                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>-->
<!--                                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>-->
<!--                                            <div class="testmonial_author">-->
<!--                                                <div class="thumb">-->
<!--                                                        <img src="img/testmonial/thumb.png" alt="">-->
<!--                                                </div>-->
<!--                                                <h3>Robert Thomson</h3>-->
<!--                                                <span>Business Owner</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                            </div>-->
<!--                            <div class="single_carousel">-->
<!--                                    <div class="single_testmonial text-center">-->
<!--                                            <div class="quote">-->
<!--                                                <img src="img/testmonial/quote.svg" alt="">-->
<!--                                            </div>-->
<!--                                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>-->
<!--                                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>-->
<!--                                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>-->
<!--                                            <div class="testmonial_author">-->
<!--                                                <div class="thumb">-->
<!--                                                        <img src="img/testmonial/thumb.png" alt="">-->
<!--                                                </div>-->
<!--                                                <h3>Robert Thomson</h3>-->
<!--                                                <span>Business Owner</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                            </div>-->
<!--                            <div class="single_carousel">-->
<!--                                    <div class="single_testmonial text-center">-->
<!--                                            <div class="quote">-->
<!--                                                <img src="img/testmonial/quote.svg" alt="">-->
<!--                                            </div>-->
<!--                                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>-->
<!--                                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>-->
<!--                                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>-->
<!--                                            <div class="testmonial_author">-->
<!--                                                <div class="thumb">-->
<!--                                                        <img src="img/testmonial/thumb.png" alt="">-->
<!--                                                </div>-->
<!--                                                <h3>Robert Thomson</h3>-->
<!--                                                <span>Business Owner</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- /testimonial_area  -->


