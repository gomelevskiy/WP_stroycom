		
<footer>
<a class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" alt=""></a>
    <?php wp_nav_menu( array(
        'menu_class'=>'menu',
        'theme_location'=>'footer-menu'
    ) ); ?>
</footer>

    </div>

<div class="modal fade" id="feedbackModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Связаться с нами</h4>
            </div>
            <div class="modal-body">
                <?php the_field('feedback',7); ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<!-- JS begin -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
<!--<script type="text/javascript" src="--><?php //bloginfo('template_directory'); ?><!--/js/lightbox.min.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fotorama.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
<!-- JS end -->

</body>

</html>