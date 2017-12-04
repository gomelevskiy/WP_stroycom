<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header(); ?>

    <div class="wrapper">
        <div class="content">
            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Внимание! Страница не найдена!' ); ?></h1>
                </header><!-- .page-header -->
                <div class="page-content">
                    <p><?php _e( 'Страница не найдена! Возможно, вы не так ищете?' ); ?></p>
                    
                </div><!-- .page-content -->
            </section><!-- .error-404 -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
