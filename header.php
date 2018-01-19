<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <?php if (get_field('favicon', 'options')): ?>
        <link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('page-business corporate-training'); ?>>
        <header class="header container" dir="ltr" style="background: url(<?php the_field('banner_bg') ?>) no-repeat bottom; background-color: #000;">
            <div class="header__navbar">
                <div class="header__navbar--logo">
                    <img src="<?php the_field('logo', 'options') ?>" alt="">
                </div>
                <ul id="nav">
                    <li class="bars">
                        <div class="bar1"></div><div class="bar2"></div><div class="bar3"></div>
                    </li>
                </ul>
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
        