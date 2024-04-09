<?php get_header();?>


<main class="main">
    <div class="container">
        <section class="top">
            <div class="tittle_slide">Первый производитель</div>
            <div class="subtitle_slide">и поставщик дверной фурнитуры в Украине</div>
            <div class="text_slide">30 апреля, в нашем фирменном салоне, прошла встреча друзей компании Модус</div>
            <div class="btn_slide"><a href="#">Смотреть каталог</a></div>
        </section>
    </div>


    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/slider.png)"></div>
            <div class="swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/slider.png)"></div>
        </div>

        <div class="swiper_btn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>


    <section class="our-info-block">
        <div class="container">
            <div class="info_up">
                <div class="big_title">Почему выбирают нас</div>
                <div class="small_title">Почему выбирают нас</div>
                <div class="text-title">Идейные соображения высшего порядка, а также дальнейшее развитие различных форм
                    деятельности позволяет оценить значение новых предложений.</div>
            </div>

            <div class="row our_info_nav text-center">
                <div class="col-3 info_nav_item">
                    <div class="info_nav_title">25 лет</div>
                    <div class="info_nav_subtitle">На рынке Украины</div>
                </div>
                <div class="col-3 info_nav_item">
                    <div class="info_nav_title">2500+</div>
                    <div class="info_nav_subtitle">Довольных клиентов</div>
                </div>
                <div class="col-3 info_nav_item">
                    <div class="info_nav_title">500+</div>
                    <div class="info_nav_subtitle">Вариантов дизайна ручек</div>
                </div>
                <div class="col-3 info_nav_item">
                    <div class="info_nav_title">3 года</div>
                    <div class="info_nav_subtitle">Гарантии</div>
                </div>
            </div>
        </div>

    </section>

    <section class="about_us_block">
        <div class="container ">
            <div class="row about_us_wrapper">
                <div class="col-6 text-about-us">
                    <div class="__title-about-us">О нас</div>
                    <div class="__text-about-us">Компания Modus постоянно следит за новыми тенденциями на международном рынке дверной мебели .
                        Мы помогаем молодым специалистам достичь своих возможностей и принять активное участие в разработке украинской концепции дизайна.
                        <p></p>
                        Мы постоянно запускаем инициативы и создаем проекты, которые дают лучшее представление о
                        сфере дизайна дверной мебели и помогают людям выбирать только высококачественные продукты и, как следствие, получать удовольствие от их использования.
                    </div>
                    <a href="#" class="btn-about-us">Узнать больше</a>
                </div>
                <div class="col-6 img-about-us">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle%20462.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="news_block">
        <div class="container">
            <div class="news_up">
                <div class="big_title_news">Новости</div>
                <div class="small_title_news">Новости</div>
                <div class="text-title_news">Идейные соображения высшего порядка, а также дальнейшее развитие различных форм
                    деятельности позволяет оценить значение новых предложений.</div>
            </div>

            <div class="news-block-wrapper">
                <div class="news-btn-block">
                    <div class="btn-news-item"><a href="#">Новости</a></div>
                    <div class="btn-news-item"><a href="#">События</a></div>
                    <div class="btn-news-item active"><a href="#">Все</a></div>
                </div>
            </div>

            <div class="card-block">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    $args = array(
                        'category_name' => 'news,event',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="card-body-item">
                                            <div class="card_body_item-left"><?php the_category(', '); ?></div>
                                            <div class="card-body_item-right"><?php the_time('j F, Y'); ?></div>
                                        </div>

                                        <div class="card-title"><?php the_title(); ?></div>
                                        <div class="card-text"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>



                </div>
            </div>

            <div class="btn-card-block">
                <a href="">Показать все</a>
            </div>
        </div>


        <div class="partners-block">
            <div class="container">
                <div class="row">
                    <div class="col-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/TERNO-SCORREVOLI-logo--300x300%201.png" alt=""></div>
                    <div class="col-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/geze-320x430%201.png" alt=""></div>
                    <div class="col-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_s%20tagline%201.png" alt=""></div>
                    <div class="col-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Linea%20Cali%201.png" alt=""></div>
                    <div class="col-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Giusti%201.png" alt=""></div>
                    <div class="col-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/geze-320x430%201.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

</main>



<?php get_footer();?>
