<?php get_header(); ?>

    <div class="wrapper">

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

            <div class="cont">

                <div class="head noBorder">
                    <h2 class="name green"><?php the_title();?></h2>
                </div>

                <div class="detailed">

                    <div class="photoDetailed col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="fotorama" data-nav="thumbs" data-allow-full-screen="true">
                            <a href="<?php the_field('project_img'); ?>"><img src="<?php the_field('project_img'); ?>"></a>
                            <a href="<?php the_field('bg_1'); ?>"><img src="<?php the_field('bg_1'); ?>"></a>
                            <a href="<?php the_field('bg_2'); ?>"><img src="<?php the_field('bg_2'); ?>"></a>
                            <a href="<?php the_field('bg_3'); ?>"><img src="<?php the_field('bg_3'); ?>"></a>
                            <a href="<?php the_field('bg_4'); ?>"><img src="<?php the_field('bg_4'); ?>"></a>
                            <a href="<?php the_field('bg_5'); ?>"><img src="<?php the_field('bg_5'); ?>"></a>
                            <a href="<?php the_field('bg_6'); ?>"><img src="<?php the_field('bg_6'); ?>"></a>
                            <a href="<?php the_field('bg_7'); ?>"><img src="<?php the_field('bg_7'); ?>"></a>
                            <a href="<?php the_field('bg_8'); ?>"><img src="<?php the_field('bg_8'); ?>"></a>
                            <a href="<?php the_field('bg_9'); ?>"><img src="<?php the_field('bg_9'); ?>"></a>
                            <a href="<?php the_field('bg_10'); ?>"><img src="<?php the_field('bg_10'); ?>"></a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text">

                        <?php the_field('project_info'); ?>

                        <span class="price green">
                            Цена: <?php the_field('project_price'); ?> руб.
                        </span>

                        <p class="small">C учетом всех материалов и работ</p>
                        <a class="contactUs" data-toggle="modal" data-target="#feedbackModal">Cвязаться с нами</a>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text"><?php the_field('dop_content'); ?></div>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>