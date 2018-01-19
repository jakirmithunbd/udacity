            <footer class="footer" dir="ltr">
                <div class="contain contain--small">
                    <section class="footer__logo">
                        <a id="ga-247d80" title="Udacity" href="">
                            <div class="footer__logo__mark">
                                <img src="<?php the_field('footer_logo','options'); ?>" alt="">
                            </div>
                        </a>
                    </section>
                    <nav class="footer__primary" role="navigation">
                        <ul class="footer__nav">
                            <?php if ( is_active_sidebar( 'page-sidebar-1' ) ) : ?>
                                <li class="footer__nav__col">
                                   <?php dynamic_sidebar( 'page-sidebar-1' ); ?> 
                                </li>
                            <?php endif; ?>
                            <?php if ( is_active_sidebar( 'page-sidebar-2' ) ) : ?>
                                <li class="footer__nav__col">
                                   <?php dynamic_sidebar( 'page-sidebar-2' ); ?> 
                                </li>
                            <?php endif; ?>
                            <?php if ( is_active_sidebar( 'page-sidebar-3' ) ) : ?>
                                <li class="footer__nav__col">
                                   <?php dynamic_sidebar( 'page-sidebar-3' ); ?> 
                                </li>
                            <?php endif; ?>
                            <?php if ( is_active_sidebar( 'page-sidebar-4' ) ) : ?>
                                <li class="footer__nav__col">
                                   <?php dynamic_sidebar( 'page-sidebar-4' ); ?> 
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
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
        </section>
        <?php wp_footer(); ?>
    </body>
</html>