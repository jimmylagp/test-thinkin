<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#fbaac2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Satisfy&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- Header -->
    <header class="header">
        <div class="header__container container">
            <div class="header__row row">
                <div class="header__column column column--2">
                    <h1 class="header__logo">
                        <?php $logo = get_field('global_logo', 'option'); ?>
                        <img src="<?= $logo['url'] ? $logo['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-stickers_Logo.png'; ?>" alt="<?php $logo['alt'] ? $logo['alt'] : __('Bloggers love stickers', 'thikin-smart'); ?>" class="header__logo-img">
                    </h1>
                </div>
                <div class="header__column column column--2">
                    <nav class="header__nav">
                        <?php
                        wp_nav_menu([
                            'container' => false,
                            'theme_location'=> 'primary_menu',
                            'menu_class'    => 'header__nav-menu',
                            'echo'            => true,
                        ]);
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->