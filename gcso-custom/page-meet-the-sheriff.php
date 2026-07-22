<?php
/**
 * Template Name: Meet the Sheriff
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();

$sheriff_name  = gcso_get_option('gcso_sheriff_name', 'Sheriff Mitch Ralston');
$sheriff_photo = gcso_get_option('gcso_sheriff_photo', GCSO_URI . '/assets/images/sheriff-placeholder.jpg');
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page gcso-sheriff-profile">
            <section class="gcso-sheriff-profile__hero" aria-labelledby="sheriff-profile-heading">
                <div class="gcso-sheriff-profile__photo">
                    <img src="<?php echo esc_url($sheriff_photo); ?>" alt="<?php echo esc_attr($sheriff_name); ?>" loading="lazy">
                </div>
                <div class="gcso-sheriff-profile__intro">
                    <span class="gcso-sheriff-profile__eyebrow"><span aria-hidden="true"></span><?php esc_html_e('Meet the Sheriff', 'gcso'); ?></span>
                    <h2 id="sheriff-profile-heading"><?php echo esc_html($sheriff_name); ?></h2>
                    <p class="gcso-sheriff-profile__role"><?php esc_html_e('Gordon County Sheriff', 'gcso'); ?></p>
                    <p class="gcso-sheriff-profile__summary"><?php esc_html_e('Serving Gordon County with professionalism, integrity, and a commitment to public safety.', 'gcso'); ?></p>
                </div>
            </section>

            <section class="gcso-sheriff-profile__biography" aria-labelledby="sheriff-biography-heading">
                <div class="gcso-sheriff-profile__section-heading">
                    <h2 id="sheriff-biography-heading"><?php esc_html_e('Biography', 'gcso'); ?></h2>
                </div>
                <div class="gcso-sheriff-profile__text">
                    <p><?php esc_html_e('Sheriff Mitch Ralston was elected in November 2008 and took office on January 1, 2009. He is a native of Gordon County from an old and well-known family. He attended public schools in Gordon County and graduated from Calhoun High School.', 'gcso'); ?></p>
                    <p><?php esc_html_e('Sheriff Ralston began his career in public service after high school by joining the Calhoun Fire Department. He transferred from the Fire Department to the Calhoun Police Department in 1989 and obtained his peace officer certification. In 1991, Sheriff Ralston joined the Georgia State Patrol. After completing trooper school, he received a variety of assignments in north Georgia, including the GSP SWAT team and the elite “Nighthawk” Unit in metro Atlanta. In 2008, Sheriff Ralston retired from the State Patrol and successfully ran for Sheriff of Gordon County, receiving a record number of votes in a sheriff’s election.', 'gcso'); ?></p>
                    <p><?php esc_html_e('Since assuming office on January 1, 2009, Sheriff Ralston set about restructuring the Sheriff’s Office, bolstering the patrol, detective, school resource, and counter-drug units, as well as successfully completing the move from the old county jail on Piedmont Street to the current multi-million-dollar facility in Resaca, all without budgetary increases. Sheriff Ralston’s priorities have included changing the image of the Sheriff’s Office to that of a professional law enforcement agency, maintaining quality relationships with other local, state, and federal authorities, increasing required training for his staff, and offsetting costs in the new jail through methods such as efficient use of inmate labor and strict management of overtime expenditures.', 'gcso'); ?></p>
                    <p><?php esc_html_e('Several firsts for the Sheriff’s Office under Sheriff Ralston include a domestic violence investigation and prevention program and an Auxiliary Unit. Sheriff Ralston believes in delivering the finest quality law enforcement services to the people of Gordon County at the most efficient cost possible. On February 16, 2018, Sheriff Ralston was appointed to the Georgia Peace Officers Standards and Training Council by Governor Nathan Deal. Sheriff Ralston has maintained the operation of his office under budget each year since taking office in 2009. He was elected unopposed to a fourth term in 2020.', 'gcso'); ?></p>
                    <p><?php esc_html_e('Sheriff Ralston is a member of Coosawattee Lodge No. 306 F&AM and the Yaarab Shriners. He and his family make their church home at Ranger Baptist Church. Sheriff Ralston and his wife, Nikki, have three adult children.', 'gcso'); ?></p>
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
