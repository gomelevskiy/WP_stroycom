<div class="gallery">
    <?php while (have_posts()) : the_post(); ?>
        <div class="gallery__item col-lg-4 col-sm-4 col-xs-12">
            <a class="img" style="background-image:url(<?php the_field('img_project'); ?>);" href="<?php the_permalink() ?>"></a>
            <label><?php the_title(); ?></label>
        </div>
    <?php endwhile; ?>
</div>