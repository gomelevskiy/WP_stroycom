<?php get_header(); ?>
    <div class="wrapper">
        <div class="content">

            <div class="head">
                <h2 class="oval green"><?php the_title();?></h2>
            </div>
            

            <?php if( get_field('view_action') ): ?>
                <div class="head" id="catalog_anchor">
                    <h2 class="oval blue"><?php the_field('a_title',7); ?></h2>
                </div>
                <div class="cont">
                    <div class="col-lg-4 col-sm-4 col-xs-12" style="text-align: center;">
                        <a href="<?php the_field('a1_link',7); ?>">
                            <img src="<?php the_field('a1_img',7); ?>"/>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-12" style="text-align: center;">
                        <a href="<?php the_field('a2_link',7); ?>">
                            <img src="<?php the_field('a2_img',7); ?>"/>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-12" style="text-align: center;">
                        <a href="<?php the_field('a3_link',7); ?>">
                            <img src="<?php the_field('a3_img',7); ?>"/>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>

        </div>
    </div>
<?php get_footer(); ?>