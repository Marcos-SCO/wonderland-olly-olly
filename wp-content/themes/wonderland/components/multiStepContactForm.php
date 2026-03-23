<?php if (!defined('ABSPATH')) exit;

?>
<dialog data-js="multi-step-contact" class="multi-step-contact-dialog">
    <div class="multi-step-contact">
        <form class="multi-step-contact-form" method="GET" action="#">
            <header>
                <h2 class="heading"><?= __('Don’t wait any longer!', 'wonderland'); ?></h2>
                <small><?= __('Fill out this form and we’ll create the landscape of your dreams.', 'wonderland'); ?></small>
            </header>
        
            <div class="step-form-item active" data-step="1">
                <div class="form-group">
                    <label for="email"><?= __('Email*', 'wonderland'); ?></label>
                    <input type="email" id="email" placeholder="email@emial.com" name="email" required>
                </div>
                <small><?= __('By entering your email information, you accept to receive emails from Wonder-land.', 'wonderland'); ?></small>
            </div>
        
            <div class="step-form-item" data-step="2">
                <div class="form-group">
                    <label for="fullName"><?= __('First and last name', 'wonderland'); ?></label>
                    <input type="text" id="fullName" placeholder="<?= __('Your Full Name...', 'wonderland'); ?>" name="fullName" required>
                </div>
            </div>
        
            <div class="step-form-item" data-step="3">
                <div class="form-group">
                    <label for="phoneNumber"><?= __('Phone number*', 'wonderland'); ?></label>
                    <input type="phone" id="phoneNumber" placeholder="(000) 000 - 0000" name="phoneNumber" required>
                </div>
            </div>
        
            <div class="form-buttons">
                <button class="btn go-back"><?= __('Go back', 'wonderland'); ?></button>
        
                <button class="btn show"><?= __('Next', 'wonderland'); ?></button>
        
                <button class="btn" type="submit"><?= __('Submit', 'wonderland'); ?></button>
            </div>
        
            <div class="submit-success-feedback">
                <div class="ellipse-icon">
                    <?= $GLOBALS['svgLoader']->render('check_icon'); ?>
                </div>
        
                <div class="feed-back-message">
                    <p><?= __('Thank you!', 'wonderland'); ?></p>
                    <small><?= __('We’ve received your information and we’ll get back to you.', 'wonderland'); ?></small>
                </div>
            </div>
        
            <div class="indicator-stepper">
                <span class="step active" data-step="1"></span>
                <span class="step" data-step="2"></span>
                <span class="step" data-step="3"></span>
                <span class="step" data-step="4"></span>
            </div>
        </form>
    </div>
</dialog>