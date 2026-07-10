<?php
/**
 * Footer Template
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;
?>

<footer class="gcso-footer" role="contentinfo">
    <div class="gcso-footer__main">
        <div class="gcso-container gcso-footer__grid">
            <!-- Column 1: Branding & Contact -->
            <div class="gcso-footer__col gcso-footer__col--brand">
                <div class="gcso-footer__logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url(GCSO_URI . '/assets/images/gcso-badge.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" width="60" height="60">
                    <?php endif; ?>
                    <div class="gcso-footer__brand-text">
                        <strong>Gordon County</strong><br>Sheriff's Office
                    </div>
                </div>
                <address class="gcso-footer__address">
                    <p>
                        <svg class="gcso-icon" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
                        <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?>
                    </p>
                    <p>
                        <svg class="gcso-icon" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
                        <?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?>
                    </p>
                    <p>
                        <svg class="gcso-icon" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <?php echo esc_html(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?>
                    </p>
                </address>
            </div>

            <!-- Column 2: Office Hours -->
            <div class="gcso-footer__col">
                <h4 class="gcso-footer__heading"><?php esc_html_e('Office Hours', 'gcso'); ?></h4>
                <p>Monday – Friday<br>8:00 AM – 5:00 PM</p>
                <p>Closed Weekends<br>and Holidays</p>
            </div>

            <!-- Column 3: Quick Links -->
            <div class="gcso-footer__col">
                <h4 class="gcso-footer__heading"><?php esc_html_e('Quick Links', 'gcso'); ?></h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'gcso-footer__links',
                    'fallback_cb'    => 'gcso_footer_fallback_menu',
                    'depth'          => 1,
                ]);
                ?>
            </div>

            <!-- Column 4: Important Links -->
            <div class="gcso-footer__col">
                <h4 class="gcso-footer__heading"><?php esc_html_e('Important Links', 'gcso'); ?></h4>
                <ul class="gcso-footer__links">
                    <li><a href="https://www.georgiasheriffs.org/" target="_blank" rel="noopener noreferrer"><?php esc_html_e("Georgia Sheriffs' Association", 'gcso'); ?></a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer"><?php esc_html_e('GACJ (Georgia Association of Criminal Investigators)', 'gcso'); ?></a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Georgia Crime Information Center', 'gcso'); ?></a></li>
                    <li><a href="https://www.gov.uk/overseas-passports" target="_blank" rel="noopener noreferrer"><?php esc_html_e('GOV.UK – ePassport', 'gcso'); ?></a></li>
                    <li><a href="https://georgia.gov/" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Georgia.gov', 'gcso'); ?></a></li>
                </ul>
            </div>

            <!-- Column 5: Follow Us -->
            <div class="gcso-footer__col gcso-footer__col--social">
                <h4 class="gcso-footer__heading"><?php esc_html_e('Follow Us', 'gcso'); ?></h4>
                <?php gcso_social_icons(); ?>
                <div class="gcso-footer__badge">
                    <p><strong>Proudly Serving<br>Gordon County<br>Since 1857</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="gcso-footer__bottom">
        <div class="gcso-container gcso-footer__bottom-inner">
            <p class="gcso-footer__copyright">
                &copy; <?php echo esc_html(date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?>. <?php esc_html_e('All rights reserved.', 'gcso'); ?>
            </p>
            <nav class="gcso-footer__legal" aria-label="<?php esc_attr_e('Legal Navigation', 'gcso'); ?>">
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"><?php esc_html_e('Privacy Policy', 'gcso'); ?></a>
                <a href="<?php echo esc_url(home_url('/terms-of-use')); ?>"><?php esc_html_e('Terms of Use', 'gcso'); ?></a>
                <a href="<?php echo esc_url(home_url('/accessibility-statement')); ?>"><?php esc_html_e('Accessibility Statement', 'gcso'); ?></a>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
