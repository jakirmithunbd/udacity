            <footer class="footer" dir="ltr">
                <div class="contain contain--small">
                    <section class="footer__logo">
                        <a id="ga-247d80" title="Udacity" href="">
                            <div class="footer__logo__mark">
                                <img src="<?php the_field('footer_logo','options'); ?>" alt="">
                            </div>
                        </a>
                    </section>
                    <section class="footer_widget">
                        <?php if ( is_active_sidebar( 'page-sidebar_1' ) ) : ?>
                            <div class="widget_item">
                                <?php dynamic_sidebar( 'page-sidebar_1' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'page-sidebar_2' ) ) : ?>
                            <div class="widget_item">
                                <?php dynamic_sidebar( 'page-sidebar_2' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'page-sidebar_3' ) ) : ?>
                            <div class="widget_item">
                                <?php dynamic_sidebar( 'page-sidebar_3' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'page-sidebar_4' ) ) : ?>
                            <div class="widget_item">
                                <?php dynamic_sidebar( 'page-sidebar_4' ); ?>
                            </div>
                        <?php endif; ?>
                    </section>
                    <section class="footer__secondary">
                        <div class="footer__col">
                            <?php wp_nav_menu( 
                                  array(
                                  'menu'               => 'Footer Menu',
                                  'theme_location'     => 'footer_menu',
                                  'depth'              => 2,
                                  'container'          => 'false',
                                  'menu_class'         => 'fineprint',
                                  'menu_id'            => '',
                                  ) 
                                ); 
                            ?>
                        </div>
                        <div class="footer__col">
                            <ul class="social">
                                <?php 
                                    $social_l = get_field('social_icon', 'options');
                                    foreach ($social_l as $social ) :
                                 ?>
                                    <li><a href="<?php echo $social['social_url']; ?>"><i class="fa fa-<?php echo $social['icon_name']; ?>"></i></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </section>
                    <section class="text-center">
                        <p class="micro mb-half"><?php the_field('copy_right_text', 'options') ?></p>
                    </section>
                </div>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>