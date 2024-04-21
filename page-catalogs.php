<?php
/* Template Name: Сторінка Каталог*/
?>


<?php get_header(); ?>


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
                if ( have_posts() ) :
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

                <div class="card-catalog-block">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <?php

                        if( have_rows('catalog') ):
                            while ( have_rows('catalog') ) : the_row();
                                ?>
                                <div class="col">
                                    <div class="card">
                                        <img src="<?php echo get_sub_field('catalog_img');?>" class="card-img-top" alt="#">
                                        <div class="card-body">
                                            <?php echo date('Y')?>
                                            <p class="card-text"> <?php echo get_sub_field('catalog_text');?></p>
<!--              Тест get_the_permalink. При натисканні виводить пост по id                              -->
                                            <a href="<?php echo get_the_permalink(11)?>" class="btn btn-primary">Посмотреть каталог</a>
                                        </div>
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
        </div>
    </div>
    <div class="btn-card-block">
        <a href="">Показать все</a>
    </div>
</div>




<?php get_footer(); ?>

