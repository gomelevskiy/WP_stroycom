<!DOCTYPE html>
<!--[if lt IE 7 ]> <html  class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html  class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html  class="ie8"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--> <html> <!--<![endif]-->

<head>
    <title><?php bloginfo('name'); ?><?php '||' . wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>

    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="" >
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
    <!-- CSS begin -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/fonts.css" rel="stylesheet">
<!--    <link href="--><?php //bloginfo('template_directory'); ?><!--/css/lightbox.min.css" rel="stylesheet">-->
    <link href="<?php bloginfo('template_directory'); ?>/css/tables.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/index.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/media.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/fotorama.css" rel="stylesheet">
<!--    <link href="--><?php //bloginfo('template_directory'); ?><!--/css/woocommerce.css" rel="stylesheet">-->
    <link href="<?php bloginfo('template_directory'); ?>/css/main-style.css" rel="stylesheet">
    <!-- CSS end -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">


</head>

<body class="root woocommerce woocommerce-page">

    <div class="container">
        <div class="navHead">
            <div class="burger" data-trigger="menu.mobile.toggle">
                <div class="line"></div>
            </div>
            <span>Меню</span>
            <div class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" alt=""/>

                <div class="text">
                    Строительная <br>
                    компания
                </div>
            </div>
        </div>
        <header>
            <ul class="address">
                <?php if( get_field('k_address_1',7) ): ?>
                <li class="address__box">
                    <a href="/kontakty/"><?php the_field('k_address_1',7); ?></a>
                </li>
                <?php endif; ?>
                <?php if( get_field('k_address_2',7) ): ?>
                <li class="address__box">
                    <a href="/kontakty/"><?php the_field('k_address_2',7); ?></a>
                </li>
                <?php endif; ?>
                <li class="link">
                    <img src="<?php bloginfo('template_directory'); ?>/img/03.png" alt="">
                    <a href="/kontakty/">Как добраться?</a>
                </li>
                <?php if( get_field('k_address_3',7) ): ?>
                <li class="address__box">
                    <a href="/kontakty/"><?php the_field('k_address_3',7); ?></a>
                </li>
                <?php endif; ?>
                <div class="showAddress" data-trigger="address.mobile.toggle">
                    <img src="<?php bloginfo('template_directory'); ?>/img/04.png" alt="">
                    Все адреса
                    <i class="fa fa-angle-down"></i>
                </div>
            </ul>
            <div class="logo">
                <a href="/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
                </a>
                <div class="text">
                    Строительная <br>
                    компания
                </div>
            </div>
            <div class="call">
                <a class="oval green" data-toggle="modal" data-target="#feedbackModal">
                    Заказать звонок
                </a>
            </div>
            <div class="phone">
                <p><?php the_field('k_phone_1',7); ?></p>
                <p><?php the_field('k_phone_1',7); ?></p>
                <p><?php the_field('k_phone_1',7); ?></p>
            </div>

            <div class="emails">
                <p>
                    <a href="mailto:mailto:<?php the_field('k_mail_1',7); ?>"><?php the_field('k_mail_1',7); ?></a>
                </p>
                <p>
                    <a href="mailto:mailto:<?php the_field('k_mail_2',7); ?>"><?php the_field('k_mail_2',7); ?></a><br>
                </p>
            </div>

            <?php wp_nav_menu( array(
                'menu_class'=>'menu',
                'theme_location'=>'main'
            ) ); ?>

        </header>