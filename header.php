<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if (get_field('favicon', 'options')): ?>
        <link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('page-business corporate-training'); ?>>
        <header id="sidr" class="header container" dir="ltr">
            <div class="header__navbar">
                <div class="header__navbar--toggle">
                  <a href="#sidr" class="nav-toggle">
                    <span class="bar bar_top"></span>
                    <span class="bar bar_mid"></span>
                    <span class="bar bar_bottom"></span>
                  </a>
                </div>
                <div class="header__navbar--logo">
                    <img src="<?php the_field('logo', 'options') ?>" alt="">
                </div>
                <?php wp_nav_menu( 
                      array(
                      'menu'               => 'Primary Menu',
                      'theme_location'     => 'menu-1',
                      'depth'              => 2,
                      'container'          => 'false',
                      'menu_class'         => '',
                      'menu_id'            => 'nav',
                      //'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                      'walker'             => new wp_bootstrap_navwalker()
                      ) 
                    ); 
                ?>
            </div>
        </header>
        