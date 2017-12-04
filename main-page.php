<?php
/*
Template Name: Шаблон для главной страницы
*/
?>

<?php get_header(); ?>

    <div class="wrapper">
        <!-- PAGE TITLE start -->

        <ul class="bxslider">
            <?php if( get_field('slide1_img',7) ): ?>
            <li>
                <img src="<?php the_field('slide1_img',7); ?>" />
                <div class="info_slide"><?php the_field('slide1_txt',7); ?></div>
            </li>
            <?php endif; ?>
            <?php if( get_field('slide2_img',7) ): ?>
            <li>
                <img src="<?php the_field('slide2_img',7); ?>" />
                <div class="info_slide"><?php the_field('slide2_txt',7); ?></div>
            </li>
            <?php endif; ?>
            <?php if( get_field('slide3_img',7) ): ?>
            <li>
                <img src="<?php the_field('slide3_img',7); ?>" />
                <div class="info_slide"><?php the_field('slide3_txt',7); ?></div>
            </li>
            <?php endif; ?>
            <?php if( get_field('slide4_img',7) ): ?>
            <li>
                <img src="<?php the_field('slide4_img',7); ?>" />
                <div class="info_slide"><?php the_field('slide4_txt',7); ?></div>
            </li>
            <?php endif; ?>
            <?php if( get_field('slide5_img',7) ): ?>
            <li>
                <img src="<?php the_field('slide5_img',7); ?>" />
                <div class="info_slide"><?php the_field('slide5_txt',7); ?></div>
            </li>
            <?php endif; ?>
        </ul>

        <div class="content">

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

            <div class="head" id="catalog_anchor">
                <h2 class="oval blue">
                    НАШИ УСЛУГИ И ПРОЕКТЫ!!	</h2>
            </div>

            <div class="cont">
                <div class="gallery">
                    <?php $i = 0; $id=1; $recent = new WP_Query("cat=$id&showposts=$n"); while($recent->have_posts()) : $recent->the_post(); ?>
                        <div class="gallery__item col-lg-4 col-sm-4 col-xs-12">
                            <a class="img" style="background-image:url(<?php the_field('img_project'); ?>);" href="<?php the_field('link_project'); ?>"></a>
                            <label><?php the_title(); ?></label>
                        </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>

            <div class="head">
                <h2 class="oval blue">
                    Как мы работаем???	</h2>
            </div>

            <div class="cont">
                <div class="wrappicon col-lg-3 col-sm-3 col-xs-6">
                    <div class="icon">
                        <div class="img" style="background-image:url(<?php the_field('b1_img',7); ?>);"></div>
                        <i class="fa fa-angle-double-right"></i>
                    </div>
                    <div class="text">
                        <?php the_field('b1_text',7); ?>
                    </div>
                </div>
                <div class="wrappicon col-lg-3 col-sm-3 col-xs-6">
                    <div class="icon">
                        <div class="img" style="background-image:url(<?php the_field('b2_img',7); ?>);"></div>
                        <i class="fa fa-angle-double-right"></i>
                    </div>
                    <div class="text">
                        <?php the_field('b2_text',7); ?>
                    </div>
                </div>
                <div class="wrappicon col-lg-3 col-sm-3 col-xs-6">
                    <div class="icon">
                        <div class="img" style="background-image:url(<?php the_field('b3_img',7); ?>);"></div>
                        <i class="fa fa-angle-double-right"></i>
                    </div>
                    <div class="text">
                        <?php the_field('b3_text',7); ?>
                    </div>
                </div>
                <div class="wrappicon col-lg-3 col-sm-3 col-xs-6">
                    <div class="icon">
                        <div class="img" style="background-image:url(<?php the_field('b4_img',7); ?>);"></div>
                    </div>
                    <div class="text">
                        <?php the_field('b4_text',7); ?>
                    </div>
                </div>
            </div>

            <div class="head">
                <h2 class="oval blue">
                    Наши работы	</h2>
            </div>

            <div class="cont">
                <div class="galleryFrameLong gallery small_container">
                    <div class="gallery_box_container">
                        <?php the_field('projects_gallery',7); ?>
                    </div>
                    <div class="cont linkLongGall">
                        <a href="/nashi-raboty/" class="green">
                            Посмотреть все работы &gt;
                        </a>
                    </div>
                </div>
            </div>

        </div>


    </div>

<?php get_footer(); ?>