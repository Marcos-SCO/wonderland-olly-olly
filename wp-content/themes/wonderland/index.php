<?php get_header(); ?>

<main>
    <article>
        <section class="hero">
            <div class="hero-wrapper">
                <div class="consultation-announcement">
                    <p><?= __('As a Court Appointed Expert Witness in Mold-Related Cases, We’re Trusted Across Washington, DC', 'wonderland') ?></p>
                    <p class="yellow-primary"><?= __('Contact Us for a Free Consultation', 'wonderland') ?></p>
                    
                    <small><?= __('Let our expertise guide you. Schedule a consultation to determine if on-site mold testing is the next step for you.', 'wonderland') ?></small>
                </div>

                <div class="call-to-action">
                    <a href="#" class="btn"><?= __('Schedule a visit', 'wonderland') ?></a>
                    <a href="#" class="btn white"><?= __('Call Us Now!', 'wonderland') ?></a>
                </div>

                <div class="review">
                    <div class="ellipse-icon">
                        <?= $GLOBALS['svgLoader']->render('leaf_icon'); ?>
                    </div>

                    <div class="info">
                        <div class="grade">
                            <div class="stars"></div>
                            <div class="score">4.95/5.00</div>
                        </div>

                        <div class="message">
                            <p><?= __('Over 14.5k happy customers on', 'wonderland'); ?> <a href="#">Yelp</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>