<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="top-info-bar">
            <div class="announcement-info">
                <p>
                    <span><?= __('Free consultations for the month of October!', 'wonderland'); ?></span>
                    <strong><?= __('I Want this Deal!', 'wonderland'); ?></strong>
                </p>
            </div>

            <address class="contact-info flex items-center">
                <div class="location">
                    <div class="ellipse-icon">
                        <div class="icon">
                            <?= $GLOBALS['svgLoader']->render('location_icon'); ?>
                        </div>
                    </div>

                    <p><?= __('Plano, TX', 'wonderland'); ?></p>
                </div>

                <div class="phone">
                    <a href="#" class="btn phone-button">
                        <div class="ellipse-icon"><span class="icon"><?= $GLOBALS['svgLoader']->render('phone_icon'); ?></span></div>

                        <span class="phone-info"><?= __('(508) 0000-0000', 'wonderland'); ?></span>
                    </a>
                </div>
            </address>
        </div>

        <nav class="navigation-bar">

            <div class="logo-container">
                <a href="<?= get_home_url(); ?>" title="<?= get_bloginfo('name'); ?>">
                    <?= $GLOBALS['svgLoader']->render('wonderland_logo'); ?>
                </a>
            </div>

            <button class="menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="links-container">
                <ul>
                    <li><a href="#"><?= __('About Us', 'wonderland'); ?></a></li>
                    <li><a href="#"><?= __('Our Services', 'wonderland'); ?></a></li>
                    <li><a href="#"><?= __('Maintenance Packages', 'wonderland'); ?></a></li>
                    <li>
                        <a href="#" class="btn"><?= __('I Want a Quote', 'wonderland'); ?></a>
                    </li>
                </ul>

            </div>

        </nav>
    </header>