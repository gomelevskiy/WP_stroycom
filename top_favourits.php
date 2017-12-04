<?php
/*
Template Name: Шаблон для Лучших предложений
*/
?>

<?php get_header(); ?>
<div class="wrapper">
    <div class="content">

        <div class="head">
            <h2 class="oval green"><?php the_title();?></h2>
        </div>

        <p></p>
        <hr>
        <h2 style="text-align: center;"><a href="<?php the_field('best_link1',11); ?>" target="_blank"><?php the_field('best_name1',11); ?></a></h2>
        <p style="text-align: center;">Общая площадь помещений – <?php the_field('best_sq1',11); ?> м2,  площадь застройки – <?php the_field('best_sqs1',11); ?> м2</p>
        <hr>
        <p>
            <img src="<?php the_field('best_img1',11); ?>" alt="<?php the_field('best_name1',11); ?>" width="50%" style="line-height: 1.6em; float: left; margin: 0px 50px 10px 0px;">
            <?php the_field('best_text1',11); ?>
        </p>

        <p></p>
        <hr>
        <h2 style="text-align: center;"><a href="<?php the_field('best_link2',11); ?>" target="_blank"><?php the_field('best_name2',11); ?></a></h2>
        <p style="text-align: center;">Общая площадь помещений – <?php the_field('best_sq2',11); ?> м2,  площадь застройки – <?php the_field('best_sqs2',11); ?> м2</p>
        <hr>
        <p>
            <img src="<?php the_field('best_img2',11); ?>" alt="<?php the_field('best_name2',11); ?>" width="50%" style="line-height: 1.6em; float: left; margin: 0px 50px 10px 0px;">
            <?php the_field('best_text2',11); ?>
        </p>

        <p></p>
        <hr>
        <h2 style="text-align: center;"><a href="<?php the_field('best_link3',11); ?>" target="_blank"><?php the_field('best_name3',11); ?></a></h2>
        <p style="text-align: center;">Общая площадь помещений – <?php the_field('best_sq3',11); ?> м2,  площадь застройки – <?php the_field('best_sqs3',11); ?> м2</p>
        <hr>
        <p>
            <img src="<?php the_field('best_img3',11); ?>" alt="<?php the_field('best_name3',11); ?>" width="50%" style="line-height: 1.6em; float: left; margin: 0px 50px 10px 0px;">
            <?php the_field('best_text3',11); ?>
        </p>







    </div>
</div>
<?php get_footer(); ?>
