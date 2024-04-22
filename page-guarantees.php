<?php
/* Template Name: Сторінка Гарантії */
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
                            <li><a href="<?php echo get_the_permalink(203); ?>">Гарантии</a></li>
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

                    <?php
                    if( have_rows('accardion_rep') ):
                        $accordion_count = 0;
                        while ( have_rows('accardion_rep') ) : the_row();
                            $accordion_id = 'accordion' . $accordion_count;
                            $collapse_id = 'collapse' . $accordion_count;
                            ?>
                            <div class="accordion" id="<?php echo $accordion_id; ?>">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="true" aria-controls="<?php echo $collapse_id; ?>">
                                            <?php echo get_sub_field('accordion');?>
                                        </button>
                                    </h2>
                                    <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse <?php echo ($accordion_count == 0 ? 'show' : ''); ?>" aria-labelledby="heading<?php echo $accordion_count; ?>" data-bs-parent="#<?php echo $accordion_id; ?>">
                                        <div class="accordion-body">
                                            <div class="table-content">
                                                <?php
                                                if( have_rows('table_repeat') ):
                                                    while ( have_rows('table_repeat') ) : the_row();
                                                        ?>
                                                        <?php echo get_sub_field('table');?>
                                                    <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $accordion_count++;
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
            </div>
        </div>

<?php get_footer() ?>