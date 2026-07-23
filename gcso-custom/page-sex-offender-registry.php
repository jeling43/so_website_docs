<?php
/**
 * Template Name: Sex Offender Registry
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

        <div class="gcso-service-page gcso-registry-page">
            <div class="gcso-service-page__intro gcso-registry-intro">
                <p><?php esc_html_e('O.C.G.A. 42-1-12 requires the Sheriff to maintain and post a list of every sexual offender residing in this county, including other relevant information and requirements.', 'gcso'); ?></p>
                <p><?php esc_html_e('The Gordon County Sheriff\'s Office makes every effort to ensure that the information contained on this website is as accurate and up to date as possible. However, because this information is continually changing and contains information provided by other agencies and persons, the Gordon County Sheriff\'s Office makes no expressed or implied guarantee concerning the accuracy of this information.', 'gcso'); ?></p>
            </div>

            <h2 class="gcso-section-heading gcso-registry-section-heading">
                <span class="gcso-section-heading__line"></span>
                <?php esc_html_e('Official Registry Resources', 'gcso'); ?>
                <span class="gcso-section-heading__line"></span>
            </h2>

            <div class="gcso-info-cards gcso-registry-primary-actions">
                <div class="gcso-info-card gcso-info-card--full gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Gordon County Registry', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('View the current list of all registered sex offenders residing in Gordon County.', 'gcso'); ?></p>
                        <p>
                            <a href="https://sexoffenderindex.com/gordoncoga" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('View Gordon County registered sex offenders (opens external site)', 'gcso'); ?>">
                                <?php esc_html_e('View Gordon County Registry', 'gcso'); ?>
                                <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="gcso-info-card gcso-info-card--full gcso-registry-contact-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Sex Offender Registry Information', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Any information or questions regarding Gordon County registered sex offenders should be directed to:', 'gcso'); ?></p>
                        <p class="gcso-registry-contact">
                            <strong><?php esc_html_e('Sgt. Bill Kuhlman', 'gcso'); ?></strong><br>
                            <a href="tel:+17068795533">706-879-5533</a><br>
                            <a href="mailto:bill.kuhlman@gordoncountyga.gov">bill.kuhlman@gordoncountyga.gov</a>
                        </p>
                        <p class="gcso-registry-contact">
                            <strong><?php esc_html_e('Deputy Tabb Fowler', 'gcso'); ?></strong><br>
                            <a href="tel:+17068795479">706-879-5479</a><br>
                            <a href="mailto:tabb.fowler@gordoncountyga.gov">tabb.fowler@gordoncountyga.gov</a>
                        </p>
                        <p><strong><?php esc_html_e('Group email:', 'gcso'); ?></strong> <a href="mailto:sort@gordoncountyga.gov">sort@gordoncountyga.gov</a></p>
                    </div>
                </div>
            </div>

            <aside class="gcso-alert-box gcso-registry-disclaimer">
                <h2><?php esc_html_e('Map Accuracy Notice', 'gcso'); ?></h2>
                <p><?php esc_html_e('The registry map uses address coordinates from a third-party web-based mapping tool. The Gordon County Sheriff\'s Office is not responsible for the accuracy of plotted map locations and maintains the registered addresses in its database. Although an address may be correct, its exact plotted location may not be completely accurate.', 'gcso'); ?></p>
            </aside>

            <h2 class="gcso-section-heading gcso-registry-section-heading">
                <span class="gcso-section-heading__line"></span>
                <?php esc_html_e('Additional Searches', 'gcso'); ?>
                <span class="gcso-section-heading__line"></span>
            </h2>

            <div class="gcso-info-cards gcso-registry-secondary-actions">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Out-of-County Employment', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('View the list of out-of-county sex offenders employed in Gordon County.', 'gcso'); ?></p>
                        <p><a href="https://www.gordonsheriff.org/resources/sex-offender-registry/xoffender-employed-in-county/" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('View out-of-county sex offenders employed in Gordon County (opens external site)', 'gcso'); ?>"><?php esc_html_e('View Employment Registry', 'gcso'); ?></a></p>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Statewide Registry', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Search the Georgia Bureau of Investigation\'s statewide Sex Offender Registry.', 'gcso'); ?></p>
                        <p><a href="https://state.sor.gbi.ga.gov/sort_public/" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Search Georgia Sex Offender Registry (opens external site)', 'gcso'); ?>"><?php esc_html_e('Search Statewide Registry', 'gcso'); ?></a></p>
                    </div>
                </div>
            </div>

            <h2 class="gcso-section-heading gcso-registry-section-heading">
                <span class="gcso-section-heading__line"></span>
                <?php esc_html_e('Registration Information', 'gcso'); ?>
                <span class="gcso-section-heading__line"></span>
            </h2>

            <div class="gcso-info-cards gcso-registry-requirements">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Registration Requirements', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Georgia law requires all sex offenders to register with the Sheriff\'s Office in the county of their residence. Offenders must:', 'gcso'); ?></p>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('Register within 72 hours of establishing residence', 'gcso'); ?></li>
                            <li><?php esc_html_e('Update information when changes occur', 'gcso'); ?></li>
                            <li><?php esc_html_e('Verify address annually (or more frequently, depending on classification)', 'gcso'); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Questions & Concerns', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('If you have questions about the registry or would like to report a concern, contact the Gordon County Sheriff\'s Office registry team.', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Gordon County Sheriff\'s Office', 'gcso'); ?></strong><br>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a>
                        </p>
                        <p><a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>" class="gcso-btn gcso-btn--outline-navy"><?php esc_html_e('Call the Sheriff\'s Office', 'gcso'); ?></a></p>
                        <p><a href="mailto:sort@gordoncountyga.gov" class="gcso-btn gcso-btn--outline-navy"><?php esc_html_e('Email the Registry Team', 'gcso'); ?></a></p>
                    </div>
                </div>
            </div>

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
