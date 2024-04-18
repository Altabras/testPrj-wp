<?php get_header();?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>

    <div class="container">
        <div class="post-content">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <?php echo the_time('j F, Y');?>
            <?php the_content(); ?>
        </div>
    </div>

        <?php

endwhile;

endif;
?>



<?php get_footer();?>