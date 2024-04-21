<?php
/* Template Name: Сторінка Сертифікати */
?>
<?php get_header() ?>

<div class="catalog-blog">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="sidebar">
                    <ul>
                        <li><a href="<?php echo get_the_permalink(117); ?>">Каталоги</a></li>
                        <li><a href="<?php echo get_the_permalink(174); ?>">Сертификаты</a></li>
                        <li><a href="<?php echo get_the_permalink(171); ?>">Бренды</a></li>
                        <li><a href="#">Гарантии</a></li>
                        <li><a href="#">Видео</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <?php
                if ( have_posts('') ) :
                    while ( have_posts() ) : the_post();
                        ?>


                        <div class="post-content">
                            <h1 class="post-title"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>


                    <?php

                    endwhile;
                endif;
                ?>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Гарантия на замки
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">

                                    <div class="row">
                                        <div class="col">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Бренд</th>
                                                    <th>Категория продукции</th>
                                                    <th>Срок</th>
                                                    <th>Примечание</th>
                                                    <th>Тип</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Linea Cali</td>
                                                    <td>Ручки плантунные</td>
                                                    <td>5 лет</td>
                                                    <td>На функционирование</td>
                                                    <td>гг* + гг**</td>
                                                </tr>
                                                <!-- Дублирование строк для примера -->
                                                <tr>
                                                    <td>Linea Cali</td>
                                                    <td>Ручки плантунные со спецпокрытием</td>
                                                    <td>10 лет</td>
                                                    <td>На покрытие</td>
                                                    <td>3 года</td>
                                                </tr>
                                                <!-- Повторите столько строк, сколько нужно -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <?php

                        if( have_rows('catalog') ):
                            while ( have_rows('catalog') ) : the_row();
                                ?>
                                <div class="certificate-block">
                                    <div class="certificate-thumbnail">
                                        <img src="<?php echo get_sub_field('catalog_img');?>" alt="Certificate Thumbnail">
                                    </div>
                                    <div class="certificate-info">
                                        <div class="certificate-title"><?php echo get_sub_field('title');?></div>
                                        <div class="certificate-descr"><?php echo get_sub_field('catalog_text');?></div>
                                    </div>
                                </div>


                            <?php
                            endwhile;
                            reset_rows();
                        endif;

                        ?>

            </div>
        </div>
    </div>
    <div class="btn-card-block">
        <a href="">Показать все</a>
    </div>
</div>

<?php get_footer() ?>
