<?php
/*
Template Name: Шаблон для страницы с проектами
*/
?>

<?php get_header(); ?>
<div class="wrapper">
    <div class="content">

        <div class="head">
            <h2 class="oval green"><?php the_title();?></h2>
        </div>

        
        <!-- Дополнительный текст -->
        <?php the_field('top_info'); ?>

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

        <!-- Вывод проектов -->
        <div class="cont grey">
            <div class="head noBorder">
                <h2 class="square"><?php the_title();?></h2>
            </div>
            <div class="galleryFrame">
                <?php $id = get_field('id_rubric'); ?>
                <?php $i = 0; $n = 20; $recent = new WP_Query("cat=$id&showposts=$n&order=ASC"); while($recent->have_posts()) : $recent->the_post(); ?>
                    <?php $price = get_field('project_price'); ?>
                <div class="wrapper col-lg-4 col-sm-4 col-xs-12 container_cat">
                    <div class="box-photo">
                        <a href="<?php the_permalink() ?>" class="img" style="background-image:url(<?php the_field('project_img'); ?>)"></a>
                    </div>
                    <div class="text">
                        <h4><?php the_title();?></h4>
                        <?php the_content(); ?>
                        <?php if ($price)
                            echo 'Цена: ' . $price . ' руб.'
                        ?>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>

        <!-- Основной текст -->
        <?php if (have_posts()) : while (have_posts()) : the_post();?>

            <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </div>
</div>
<?php get_footer(); ?>


