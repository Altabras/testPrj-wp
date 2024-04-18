<?php
/* Template Name: Сторінка Новости */
?>


<?php get_header(); ?>




<div class="container news-page-block">

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

<div class="card-block">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $args = array(
            'category_name' => 'news',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>

                <div class="col">

                    <div class="card h-100">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="card-img-top"
                                 alt="...">
                        </a>
                        <div class="card-body">
                            <div class="card-body-item">
                                <div class="card_body_item-left"><?php the_category(','); ?></div>
                                <div class="card-body_item-right"><?php the_time('j F, Y'); ?></div>
                            </div>

                            <div class="card-title"><?php the_title(); ?></div>
                            <div class="card-text"><?php the_excerpt(); ?></div>
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
</div>

<?php get_footer(); ?>
