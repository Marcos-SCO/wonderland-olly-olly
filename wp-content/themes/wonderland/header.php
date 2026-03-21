<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
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
    </header>