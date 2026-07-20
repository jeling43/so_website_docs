<?php
/**
 * Template Name: Jail
 *
 * Gordon County Jail Division information, contacts, policies, and services.
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();

$jailatm_url = 'https://deposits.jailatm.com/webdeposits/';
$paytel_url  = 'https://www.paytelconnect.com/';
$maps_url    = 'https://www.google.com/maps/search/?api=1&query=2700+US+41+Highway+NW+Calhoun+GA+30701';
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page gcso-jail-page">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('The Jail Division is responsible for the safe and secure operation of the county jail and its inmate occupants and for maintaining the required records of incarcerated persons.', 'gcso'); ?></p>
                <p><?php esc_html_e('The current Gordon County Jail is a modern, 81,000-square-foot detention facility that opened in May 2009 and has capacity for 376 inmates. The Jail houses male and female pre-trial and convicted persons charged with criminal offenses occurring within Gordon County, including the cities of Calhoun, Fairmount, and Resaca.', 'gcso'); ?></p>
            </div>

            <div class="gcso-alert-box gcso-jail-mission">
                <p><strong><?php esc_html_e('Our Mission:', 'gcso'); ?></strong> <?php esc_html_e('To provide a safe and secure environment for the citizens of Gordon County and inmates by adhering to federal and state laws and standards.', 'gcso'); ?></p>
            </div>

            <section class="gcso-jail-actions" aria-labelledby="jail-actions-heading">
                <h2 id="jail-actions-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Quick Actions', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards gcso-jail-quick-grid">
                    <div class="gcso-info-card gcso-info-card--highlight">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Inmate Information', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Search the in-house inmate database. Information is updated automatically every 15 minutes.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url(gcso_get_inmate_search_url()); ?>" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Search Inmates', 'gcso'); ?></a></p>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-info-card--highlight">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Video Visitation & Messaging', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Create a JailATM account for remote or on-site video visitation, messaging, and online inmate services.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url($jailatm_url); ?>" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open JailATM', 'gcso'); ?></a></p>
                        </div>
                    </div>
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Add Inmate Funds', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Add funds online through JailATM or use the self-service kiosk in the Jail lobby.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url($jailatm_url); ?>" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Add Funds Online', 'gcso'); ?></a></p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Telephone Account', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Telephone service is provided by Pay Tel Communications.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url($paytel_url); ?>" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open Pay Tel Connect', 'gcso'); ?></a></p>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-labelledby="jail-contact-heading">
                <h2 id="jail-contact-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Jail Contacts', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards gcso-jail-command">
                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Major Pat Bedford', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Judicial Bureau Commander / Jail Administrator', 'gcso'); ?></p>
                            <p class="gcso-jail-command-card__description"><?php esc_html_e('For information regarding county jail operations and Sheriff’s Office Court Services Division operations.', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17066291244">706-629-1244</a>
                                <a href="mailto:pat.bedford@gordoncountyga.gov">pat.bedford@gordoncountyga.gov</a>
                            </div>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Captain Dylan Nicholas', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Jail Division Commander', 'gcso'); ?></p>
                            <p class="gcso-jail-command-card__description"><?php esc_html_e('For information regarding jail operations, inmates, releases, bonds, and booking records.', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17066291246">706-629-1246</a>
                                <a href="mailto:dylan.nicholas@gordoncountyga.gov">dylan.nicholas@gordoncountyga.gov</a>
                            </div>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Lieutenant John Vick', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Assistant Jail Division Commander, Jail Operations', 'gcso'); ?></p>
                            <p class="gcso-jail-command-card__description"><?php esc_html_e('For information regarding jail operations, inmates, releases, bonds, and booking records.', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17066291246">706-629-1246</a>
                                <a href="mailto:john.vick@gordoncountyga.gov">john.vick@gordoncountyga.gov</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Jail Address & Telephone', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <address>
                                2700 U.S. 41 Highway, N.W.<br>
                                Calhoun, GA 30701
                            </address>
                            <p><a href="tel:+17066291246">706-629-1246</a></p>
                            <p><a href="<?php echo esc_url($maps_url); ?>" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Driving Directions', 'gcso'); ?></a></p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Jail Lobby Hours', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><strong><?php esc_html_e('Monday–Friday: 8:00 a.m.–5:00 p.m.', 'gcso'); ?></strong></p>
                            <p><?php esc_html_e('The Jail lobby can be accessed after hours and on weekends for official Jail business only.', 'gcso'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-labelledby="jail-information-heading">
                <h2 id="jail-information-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Policies & Services', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-jail-accordions">
                    <details class="gcso-jail-accordion" open>
                        <summary><?php esc_html_e('Bonding', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <p><?php esc_html_e('A bond is a financial guarantee to assure a defendant’s appearance in court. The defendant must appear unless otherwise directed by a judge of the appropriate court. The Gordon County Jail accepts the following types of bonds:', 'gcso'); ?></p>

                            <h3><?php esc_html_e('Cash Bond', 'gcso'); ?></h3>
                            <p><?php esc_html_e('A cash bond may be posted by anyone and requires U.S. currency in the exact full amount of the bond; the Jail cannot make change. Cash bonds are forwarded to the clerk of the court where the defendant must appear. The appropriate court clerk handles return of the bond after the case is completed. A separate $20 cash bond fee, in exact change, must be posted for each person being bonded out in accordance with state law.', 'gcso'); ?></p>
                            <p><strong><?php esc_html_e('Note:', 'gcso'); ?></strong> <?php esc_html_e('The Gordon County Jail does not accept cash bonds for City of Calhoun cases. Those bonds must be paid at the City of Calhoun Municipal Court.', 'gcso'); ?></p>

                            <h3><?php esc_html_e('Property Bond', 'gcso'); ?></h3>
                            <p><?php esc_html_e('A property bond may be posted by individuals who own property within Gordon County with an assessed value equal to or greater than the bond amount. Jail staff will verify ownership, property value, and current taxes using Gordon County Tax Office records. All listed owners must be present and sign the bond. If the records system is offline, owners must provide tax records from the Tax Office. The same property cannot secure multiple bonds at one time, and property owned or co-owned by the incarcerated person cannot secure that person’s bond. A separate $20 cash bond fee, in exact change, is required for each person being bonded out.', 'gcso'); ?></p>

                            <h3><?php esc_html_e('Transfer Bond', 'gcso'); ?></h3>
                            <p><?php esc_html_e('A transfer bond is a property bond signed by individuals who own property in another Georgia county. It must be signed at the Sheriff’s Office where the property is located and returned to the Gordon County Jail in a sealed envelope from that Sheriff’s Office. Gordon County residents may complete a transfer bond at the Gordon County Jail to bond a person out of another Georgia jail. A separate $20 cash bond fee, in exact change, is required for each person being bonded out.', 'gcso'); ?></p>

                            <h3><?php esc_html_e('Professional Bonding Companies', 'gcso'); ?></h3>
                            <p><?php esc_html_e('Inmates may use a professional bonding company as surety. Only companies approved by the Sheriff may write bonds at the Gordon County Jail, and they may write only bonds returnable to courts within Gordon County. Individuals pay the bonding company directly for its services. Jail employees cannot recommend a company or discuss its service fees. A list of approved companies is displayed in the Jail lobby.', 'gcso'); ?></p>
                        </div>
                    </details>

                    <details class="gcso-jail-accordion">
                        <summary><?php esc_html_e('First Appearance Hearings', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <p><?php esc_html_e('All persons admitted to the Gordon County Jail are brought before a judicial officer for a First Appearance Hearing in accordance with applicable law. Hearings are generally held Monday through Friday at approximately 2:00 p.m. and on weekends or at other times designated by the Magistrate Judge. Bonds and bond conditions are set at this time. Hearings are conducted by video from the Jail courtroom and can be viewed in the Jail lobby at the scheduled times.', 'gcso'); ?></p>
                        </div>
                    </details>

                    <details class="gcso-jail-accordion">
                        <summary><?php esc_html_e('Visitation', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <p><?php esc_html_e('The Gordon County Jail provides remote internet visitation through JailATM. Each inmate may have four remote visitation sessions daily. On-site visitation is limited to one session per week, and hours are limited. All remote and on-site visits are conducted by video monitor; no in-person contact visitation is permitted. A JailATM account is required for all visits. Visit JailATM for current remote visitation rates.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url($jailatm_url); ?>" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Set Up Visitation Through JailATM', 'gcso'); ?></a></p>

                            <h3><?php esc_html_e('On-Site Visitation Hours', 'gcso'); ?></h3>
                            <div class="gcso-jail-hours" role="table" aria-label="On-site visitation hours">
                                <p><strong><?php esc_html_e('Saturday:', 'gcso'); ?></strong> 9:00 a.m.–3:30 p.m. and 6:00–8:30 p.m.</p>
                                <p><strong><?php esc_html_e('Sunday:', 'gcso'); ?></strong> 9:00 a.m.–3:30 p.m. and 6:00–8:30 p.m.</p>
                                <p><strong><?php esc_html_e('Monday:', 'gcso'); ?></strong> 9:00 a.m.–3:30 p.m. and 6:00–8:30 p.m.</p>
                                <p><strong><?php esc_html_e('Tuesday:', 'gcso'); ?></strong> 9:00 a.m.–3:30 p.m. and 6:00–6:30 p.m.</p>
                                <p><strong><?php esc_html_e('Wednesday:', 'gcso'); ?></strong> 9:00 a.m.–3:30 p.m. and 6:00–8:30 p.m.</p>
                                <p><strong><?php esc_html_e('Thursday:', 'gcso'); ?></strong> <?php esc_html_e('No visits', 'gcso'); ?></p>
                                <p><strong><?php esc_html_e('Friday:', 'gcso'); ?></strong> 9:00 a.m.–3:30 p.m. and 6:00–8:30 p.m.</p>
                            </div>

                            <h3><?php esc_html_e('In-Person Visitor Rules', 'gcso'); ?></h3>
                            <ol>
                                <li><?php esc_html_e('Visitors 18 years of age or older must show photo identification.', 'gcso'); ?></li>
                                <li><?php esc_html_e('Persons under 18 must be accompanied by an adult, parent, or guardian.', 'gcso'); ?></li>
                                <li><?php esc_html_e('No more than three people may visit an inmate at one time.', 'gcso'); ?></li>
                                <li><?php esc_html_e('Visitors must be appropriately dressed.', 'gcso'); ?></li>
                                <li><?php esc_html_e('Food and drinks are not allowed in the visitation room.', 'gcso'); ?></li>
                                <li><?php esc_html_e('Visitors must not be loud, profane, disorderly, or disruptive in speech or conduct.', 'gcso'); ?></li>
                            </ol>
                            <p><strong><?php esc_html_e('Notice:', 'gcso'); ?></strong> <?php esc_html_e('Visitation is subject to cancellation at any time.', 'gcso'); ?></p>
                        </div>
                    </details>

                    <details class="gcso-jail-accordion">
                        <summary><?php esc_html_e('Messaging & Commissary', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <h3><?php esc_html_e('Messaging', 'gcso'); ?></h3>
                            <p><?php esc_html_e('The Gordon County Jail uses JailATM for all messaging. Former inmates who need access to messages from a former inmate account should use JailATM account support.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url($jailatm_url); ?>" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open JailATM Messaging', 'gcso'); ?></a></p>

                            <h3><?php esc_html_e('Commissary', 'gcso'); ?></h3>
                            <p><?php esc_html_e('Legacy Commissary Services provides inmate commissary service. Inmates may purchase items from the commissary menu weekly. Individuals may also place orders directly for inmates online through JailATM.', 'gcso'); ?></p>
                        </div>
                    </details>

                    <details class="gcso-jail-accordion">
                        <summary><?php esc_html_e('Telephone System', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <p><?php esc_html_e('Telephone service is provided by Pay Tel Communications. Accounts can be opened through Pay Tel Connect.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url($paytel_url); ?>" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open a Pay Tel Account', 'gcso'); ?></a></p>
                            <p><strong><?php esc_html_e('Customer Service:', 'gcso'); ?></strong> <a href="tel:+18007298355">1-800-729-8355</a></p>
                        </div>
                    </details>

                    <details class="gcso-jail-accordion">
                        <summary><?php esc_html_e('Inmate Funds', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <p><?php esc_html_e('Upon admission, all currency is collected from the inmate during booking. The money is deposited into the Gordon County Inmate Commissary account and credited to the inmate. Additional funds may be added online through JailATM or through the self-service kiosk in the Jail lobby.', 'gcso'); ?></p>
                            <p><a href="<?php echo esc_url($jailatm_url); ?>" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Add Funds Through JailATM', 'gcso'); ?></a></p>
                        </div>
                    </details>

                    <details class="gcso-jail-accordion">
                        <summary><?php esc_html_e('Inmate Mail', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <p><?php esc_html_e('For current incoming-mail requirements and instructions, contact the Gordon County Jail before sending mail.', 'gcso'); ?></p>
                            <p><a href="tel:+17066291246" class="gcso-btn gcso-btn--outline-navy"><?php esc_html_e('Call the Jail: 706-629-1246', 'gcso'); ?></a></p>
                        </div>
                    </details>

                    <details class="gcso-jail-accordion">
                        <summary><?php esc_html_e('Inmate Property Release', 'gcso'); ?></summary>
                        <div class="gcso-jail-accordion__content">
                            <p><?php esc_html_e('A current inmate’s property will not be released after it has been inventoried and sealed. A supervisor may approve an exception only when necessary. Inmates transferred to the Georgia Department of Corrections may leave property for pickup by a designated person. Property will be disposed of after 30 days.', 'gcso'); ?></p>
                        </div>
                    </details>
                </div>
            </section>

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
