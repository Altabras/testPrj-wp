<footer class="footer">

    <div class="footer-form-block">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-5 others-questions-left">
                            <div class="question-title">Есть вопросы?</div>
                            <div class="question-text">Оставьте заявку
                                и мы бесплатно
                                проконсультируем
                                вас по всем вопросам!</div>
                        </div>
                        <div class="col-6">
                            <div class="others-questions">
                                <div class="questions_item">
                                    Необходио определиться
                                    с выбором?
                                </div>

                                <div class="questions_item">
                                    Нужна консультация по текущему заказу?
                                </div>

                                <div class="questions_item">
                                    Подсказать по доставке?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="form-name-email">
                                <div class="form-group">

                                    <input type="text" id="name" name="name" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" placeholder="Электронная почта:">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea id="message" name="message" placeholder="Сообщение:"></textarea>
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="btn">Задать вопрос</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="footer-down-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 left_footer_block">
                    <div class="footer-logo">
                        <a href=""><img src=<?php the_field( 'logo_footer', 'option'); ?> alt=""></a>
                    </div>
                    <div class="text_footer_logo">Более 20 лет является одним из крупнейших поставщиков качественной
                        дверной мебели в Украине
                    </div>
                    <div class="nav_footer_icon">
                        <ul>
                            <a href="">
                                <li class="nav_footer_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst.svg" alt=""></li>
                            </a>
                            <a href="">
                                <li class="nav_footer_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></li>
                            </a>
                            <a href="">
                                <li class="nav_footer_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt=""></li>
                            </a>
                            <a href="">
                                <li class="nav_footer_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/viber.svg" alt=""></li>
                            </a>
                            <a href="">
                                <li class="nav_footer_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt=""></li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6  nav_center_block">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer_1',
                        'container_class' => 'nav_center_footer' ) );
                    ?>

<!--                    --><?php //wp_nav_menu( array(
//                        'theme_location' => 'footer_2',
//                        'container_class' => 'nav_center_footer' ) );
//                    ?>
<!---->
<!--                    --><?php //wp_nav_menu( array(
//                        'theme_location' => 'footer_3',
//                        'container_class' => 'nav_center_footer' ) );
//                    ?>
<!---->
<!--                    --><?php //wp_nav_menu( array(
//                        'theme_location' => 'footer_4',
//                        'container_class' => 'nav_center_footer' ) );
//                    ?>
<!---->
<!--                    --><?php //wp_nav_menu( array(
//                        'theme_location' => 'footer_5',
//                        'container_class' => 'nav_center_footer' ) );
//                    ?>

                </div>
                <div class="col-lg-3 adress_block">

                    <div class="adress_info_footer">
                        Киев, Офис
                        <span class="adress_info_grey">
                        ул. Вишняковская, 9Б
                    </span>
                        <a href="#" class="number_info_footer">(044) 492-91-91</a>
                    </div>


                    <div class="adress_info_footer">
                        Киев, Офис
                        <span class="adress_info_grey">
                        ул. Вишняковская, 9Б
                    </span>
                        <a href="#" class="number_info_footer">(044) 492-91-91</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<?php wp_footer()?>
</body>
</html>
