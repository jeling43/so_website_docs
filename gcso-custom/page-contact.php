<?php
/**
 * Template Name: Contact & Staff Directory
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-contact-page">
            <!-- Emergency -->
            <div class="gcso-alert-box">
                <p>
                    <strong><?php esc_html_e('For emergencies, call 911.', 'gcso'); ?></strong>
                </p>
            </div>

            <!-- Contact Information Cards -->
            <section class="gcso-contact-cards" aria-labelledby="contact-heading">
                <h2 id="contact-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Contact Directory', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-contact-cards__grid">
                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Non-Emergency', 'gcso'); ?></h3>
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Non-emergency phone number -->
                        <p><a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a></p>
                    </div>

                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Main Office', 'gcso'); ?></h3>
                        <p><?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?></p>
                        <p class="gcso-contact-card__sub"><?php esc_html_e('Monday–Friday, 8:00 AM–5:00 PM', 'gcso'); ?></p>
                    </div>

                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><rect x="3" y="3" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="2"/><line x1="3" y1="9" x2="21" y2="9" stroke="currentColor" stroke-width="2"/><line x1="9" y1="3" x2="9" y2="9" stroke="currentColor" stroke-width="2"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Jail', 'gcso'); ?></h3>
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Jail-specific phone number -->
                        <p><a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a></p>
                        <p class="gcso-contact-card__sub"><?php esc_html_e('24 hours, 7 days a week', 'gcso'); ?></p>
                    </div>

                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Records', 'gcso'); ?></h3>
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Records division phone number -->
                        <p><a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a></p>
                    </div>

                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><circle cx="12" cy="12" r="3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Criminal Investigations', 'gcso'); ?></h3>
                        <!-- TODO: VERIFY BEFORE PRODUCTION - CID phone number -->
                        <p><a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a></p>
                    </div>

                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><path d="M20 2H4a2 2 0 00-2 2v12a2 2 0 002 2h4l4 4 4-4h4a2 2 0 002-2V4a2 2 0 00-2-2z"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Tip Line', 'gcso'); ?></h3>
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Tip line phone number (706-879-5485 or 706-879-5515?) -->
                        <p><a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a></p>
                        <p class="gcso-contact-card__sub"><?php esc_html_e('Anonymous tips accepted', 'gcso'); ?></p>
                    </div>

                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Email', 'gcso'); ?></h3>
                        <p><a href="mailto:<?php echo esc_attr(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?>"><?php echo esc_html(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?></a></p>
                    </div>

                    <div class="gcso-contact-card">
                        <div class="gcso-contact-card__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        </div>
                        <h3 class="gcso-contact-card__title"><?php esc_html_e('Office Hours', 'gcso'); ?></h3>
                        <p><?php esc_html_e('Monday–Friday', 'gcso'); ?><br><?php esc_html_e('8:00 AM–5:00 PM', 'gcso'); ?></p>
                        <p class="gcso-contact-card__sub"><?php esc_html_e('Closed weekends and holidays', 'gcso'); ?></p>
                    </div>
                </div>
            </section>

            <!-- Staff Directory -->
            <section class="gcso-staff-directory" aria-labelledby="staff-heading">
                <h2 id="staff-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Staff Directory', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-staff-directory__grid">
                    <?php
                    $staff_query = new WP_Query([
                        'post_type'      => 'gcso_staff',
                        'posts_per_page' => -1,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                    ]);

                    if ($staff_query->have_posts()) :
                        while ($staff_query->have_posts()) : $staff_query->the_post();
                            $rank  = get_post_meta(get_the_ID(), '_gcso_staff_rank', true);
                            $title = get_post_meta(get_the_ID(), '_gcso_staff_title', true);
                    ?>
                        <div class="gcso-staff-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="gcso-staff-card__photo">
                                    <?php the_post_thumbnail('gcso-card', ['loading' => 'lazy']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="gcso-staff-card__info">
                                <h3 class="gcso-staff-card__name"><?php the_title(); ?></h3>
                                <?php if ($rank) : ?>
                                    <p class="gcso-staff-card__rank"><?php echo esc_html($rank); ?></p>
                                <?php endif; ?>
                                <?php if ($title) : ?>
                                    <p class="gcso-staff-card__position"><?php echo esc_html($title); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p><?php esc_html_e('Staff directory information will be available soon.', 'gcso'); ?></p>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Page Content -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (get_the_content()) : ?>
                    <article class="gcso-page-content">
                        <div class="gcso-page-content__body gcso-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
