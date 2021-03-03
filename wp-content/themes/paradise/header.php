<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php bloginfo( 'description' ); ?></title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Russo+One&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
    <body>
        <div class="max-width" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/images/background-shine.png)">
            <div class="header-conteiner">
                <div class="header-top-shadow" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/images/header-top-shadow.png)"></div>
                <div class="header-main-shadow" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/images/header-shadow.png)"></div>
                <header style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/images/header-background.png)">
                    <div class="logo-conteiner">
                        <img class="logo-background" src="<?php the_field('logo-background') ?>">
                        <img class="logo" src="<?php the_field('logo') ?>">
                    </div>
                    <img class="header-decore-center" src="<?php bloginfo( 'template_url' ); ?> /assets/images/header-decore.png">
                    <img class="header-woman" src="<?php the_field('header-woman') ?>">
                    <img class="header-girl" src="<?php the_field('header-girl') ?>">
                    <img class="header-left-flowers" src="<?php bloginfo( 'template_url' ); ?> /assets/images/header-flowers-left.png">
                    <img class="header-package" src="<?php the_field('header-package') ?>">
                    <img class="header-right-flowers" src="<?php bloginfo( 'template_url' ); ?> /assets/images/header_flowers-right.png">
                    <img class="header-flower-left" src="<?php bloginfo( 'template_url' ); ?> /assets/images/Flower_2.png">
                    <img class="header-flower-right" src="<?php bloginfo( 'template_url' ); ?> /assets/images/Flower_1.png">
                    <img class="header-decore-left" src="<?php bloginfo( 'template_url' ); ?> /assets/images/header-decore-left.png">
                    <div class="big-logo-conteiner">
                        <img class="light-secondary" src="<?php bloginfo( 'template_url' ); ?> /assets/images/black-light.png">
                        <img class="light-primary" src="<?php bloginfo( 'template_url' ); ?> /assets/images/color-light.png">
                        <img class="big-logo" src="<?php the_field('big-logo') ?>">
                    </div>
                    <div class="header-conteiner-text">
                        <?php the_field('header-conteiner-text') ?>
                        <div class="list-conteiner">
                            <img class="top-line-list" src="<?php bloginfo( 'template_url' ); ?> /assets/images/language-background-line.png">
                            <img class="bottom-line-list" src="<?php bloginfo( 'template_url' ); ?> /assets/images/languge_background-line-bottom.png">
                            <ul class="languages">
                                <li><?php the_field('language-primary') ?></li>
                                <li><?php the_field('language-secondary') ?></li>
                                <li><?php the_field('language-tertiary') ?></li>
                            </ul>
                        </div>
                        
                    </div>
                </header>