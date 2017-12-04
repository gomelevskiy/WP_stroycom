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

        <!-- Вывод проектов -->

        <!-- Основной текст -->
        <?php if (have_posts()) : while (have_posts()) : the_post();?>

            <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </div>
</div>
<?php get_footer(); ?>


