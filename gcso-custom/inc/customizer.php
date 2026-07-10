<?php
/**
 * Theme Customizer
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

/**
 * Register customizer settings and controls.
 */
function gcso_customize_register($wp_customize) {

    // --- GCSO General Panel ---
    $wp_customize->add_panel('gcso_general', [
        'title'    => __('GCSO Settings', 'gcso'),
        'priority' => 30,
    ]);

    // --- Contact Info Section ---
    $wp_customize->add_section('gcso_contact', [
        'title' => __('Contact Information', 'gcso'),
        'panel' => 'gcso_general',
    ]);

    $wp_customize->add_setting('gcso_phone', [
        'default'           => '706-629-1244',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_phone', [
        'label'   => __('Office Phone Number', 'gcso'),
        'section' => 'gcso_contact',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_emergency_phone', [
        'default'           => '911',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_emergency_phone', [
        'label'   => __('Emergency Phone', 'gcso'),
        'section' => 'gcso_contact',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_address', [
        'default'           => '100 Public Safety Way, Calhoun, GA 30701',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_address', [
        'label'   => __('Office Address', 'gcso'),
        'section' => 'gcso_contact',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_email', [
        'default'           => 'info@gordonsheriff.org',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('gcso_email', [
        'label'   => __('Office Email', 'gcso'),
        'section' => 'gcso_contact',
        'type'    => 'email',
    ]);

    // --- Hero Section ---
    $wp_customize->add_section('gcso_hero', [
        'title' => __('Hero Section', 'gcso'),
        'panel' => 'gcso_general',
    ]);

    $wp_customize->add_setting('gcso_hero_heading', [
        'default'           => 'Serving and Protecting Gordon County',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_heading', [
        'label'   => __('Hero Heading', 'gcso'),
        'section' => 'gcso_hero',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_hero_description', [
        'default'           => 'Dedicated professionals committed to safety, integrity, and community.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_description', [
        'label'   => __('Hero Description', 'gcso'),
        'section' => 'gcso_hero',
        'type'    => 'textarea',
    ]);

    $wp_customize->add_setting('gcso_hero_image', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gcso_hero_image', [
        'label'   => __('Hero Background Image', 'gcso'),
        'section' => 'gcso_hero',
    ]));

    $wp_customize->add_setting('gcso_hero_btn1_text', [
        'default'           => 'Inmate Search',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_btn1_text', [
        'label'   => __('Primary Button Text', 'gcso'),
        'section' => 'gcso_hero',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_hero_btn1_url', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('gcso_hero_btn1_url', [
        'label'   => __('Primary Button URL', 'gcso'),
        'section' => 'gcso_hero',
        'type'    => 'url',
    ]);

    $wp_customize->add_setting('gcso_hero_btn2_text', [
        'default'           => 'Contact Us',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_btn2_text', [
        'label'   => __('Secondary Button Text', 'gcso'),
        'section' => 'gcso_hero',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_hero_btn2_url', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('gcso_hero_btn2_url', [
        'label'   => __('Secondary Button URL', 'gcso'),
        'section' => 'gcso_hero',
        'type'    => 'url',
    ]);

    // --- Hero Slide 2 ---
    $wp_customize->add_section('gcso_hero_slide2', [
        'title'       => __('Hero Slide 2', 'gcso'),
        'panel'       => 'gcso_general',
        'description' => __('Leave heading blank to disable this slide.', 'gcso'),
    ]);

    $wp_customize->add_setting('gcso_hero_slide2_heading', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_slide2_heading', [
        'label'   => __('Slide 2 Heading', 'gcso'),
        'section' => 'gcso_hero_slide2',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_hero_slide2_description', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_slide2_description', [
        'label'   => __('Slide 2 Description', 'gcso'),
        'section' => 'gcso_hero_slide2',
        'type'    => 'textarea',
    ]);

    $wp_customize->add_setting('gcso_hero_slide2_image', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gcso_hero_slide2_image', [
        'label'   => __('Slide 2 Background Image', 'gcso'),
        'section' => 'gcso_hero_slide2',
    ]));

    $wp_customize->add_setting('gcso_hero_slide2_btn_text', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_slide2_btn_text', [
        'label'   => __('Slide 2 Button Text', 'gcso'),
        'section' => 'gcso_hero_slide2',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_hero_slide2_btn_url', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('gcso_hero_slide2_btn_url', [
        'label'   => __('Slide 2 Button URL', 'gcso'),
        'section' => 'gcso_hero_slide2',
        'type'    => 'url',
    ]);

    // --- Hero Slide 3 ---
    $wp_customize->add_section('gcso_hero_slide3', [
        'title'       => __('Hero Slide 3', 'gcso'),
        'panel'       => 'gcso_general',
        'description' => __('Leave heading blank to disable this slide.', 'gcso'),
    ]);

    $wp_customize->add_setting('gcso_hero_slide3_heading', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_slide3_heading', [
        'label'   => __('Slide 3 Heading', 'gcso'),
        'section' => 'gcso_hero_slide3',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_hero_slide3_description', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_slide3_description', [
        'label'   => __('Slide 3 Description', 'gcso'),
        'section' => 'gcso_hero_slide3',
        'type'    => 'textarea',
    ]);

    $wp_customize->add_setting('gcso_hero_slide3_image', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gcso_hero_slide3_image', [
        'label'   => __('Slide 3 Background Image', 'gcso'),
        'section' => 'gcso_hero_slide3',
    ]));

    $wp_customize->add_setting('gcso_hero_slide3_btn_text', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_hero_slide3_btn_text', [
        'label'   => __('Slide 3 Button Text', 'gcso'),
        'section' => 'gcso_hero_slide3',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_hero_slide3_btn_url', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('gcso_hero_slide3_btn_url', [
        'label'   => __('Slide 3 Button URL', 'gcso'),
        'section' => 'gcso_hero_slide3',
        'type'    => 'url',
    ]);

    // --- Sheriff Message Section ---
    $wp_customize->add_section('gcso_sheriff', [
        'title' => __('Sheriff Message', 'gcso'),
        'panel' => 'gcso_general',
    ]);

    $wp_customize->add_setting('gcso_sheriff_name', [
        'default'           => 'Sheriff',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_sheriff_name', [
        'label'   => __('Sheriff Name', 'gcso'),
        'section' => 'gcso_sheriff',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_sheriff_photo', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gcso_sheriff_photo', [
        'label'   => __('Sheriff Photo', 'gcso'),
        'section' => 'gcso_sheriff',
    ]));

    $wp_customize->add_setting('gcso_sheriff_message', [
        'default'           => 'At the Gordon County Sheriff\'s Office, our mission is simple: to serve and protect every citizen with honor, integrity, and professionalism. We are committed to building strong partnerships, promoting safety, and improving the quality of life in our community.',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('gcso_sheriff_message', [
        'label'   => __('Sheriff Message', 'gcso'),
        'section' => 'gcso_sheriff',
        'type'    => 'textarea',
    ]);

    // --- Social Media Section ---
    $wp_customize->add_section('gcso_social', [
        'title' => __('Social Media', 'gcso'),
        'panel' => 'gcso_general',
    ]);

    $social_platforms = ['facebook', 'twitter', 'youtube', 'instagram'];
    foreach ($social_platforms as $platform) {
        $wp_customize->add_setting("gcso_social_{$platform}", [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("gcso_social_{$platform}", [
            'label'   => sprintf(__('%s URL', 'gcso'), ucfirst($platform)),
            'section' => 'gcso_social',
            'type'    => 'url',
        ]);
    }

    // --- Emergency Notice ---
    $wp_customize->add_section('gcso_emergency', [
        'title' => __('Emergency Notice', 'gcso'),
        'panel' => 'gcso_general',
    ]);

    $wp_customize->add_setting('gcso_emergency_active', [
        'default'           => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ]);
    $wp_customize->add_control('gcso_emergency_active', [
        'label'   => __('Show Emergency Notice', 'gcso'),
        'section' => 'gcso_emergency',
        'type'    => 'checkbox',
    ]);

    $wp_customize->add_setting('gcso_emergency_message', [
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('gcso_emergency_message', [
        'label'   => __('Emergency Notice Text', 'gcso'),
        'section' => 'gcso_emergency',
        'type'    => 'textarea',
    ]);

    // --- CTA / Careers Section ---
    $wp_customize->add_section('gcso_cta', [
        'title' => __('Careers CTA', 'gcso'),
        'panel' => 'gcso_general',
    ]);

    $wp_customize->add_setting('gcso_cta_heading', [
        'default'           => 'Making a Difference.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_cta_heading', [
        'label'   => __('CTA Heading', 'gcso'),
        'section' => 'gcso_cta',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_cta_subheading', [
        'default'           => 'Start Your Career with GCSO.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_cta_subheading', [
        'label'   => __('CTA Subheading', 'gcso'),
        'section' => 'gcso_cta',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_cta_description', [
        'default'           => 'Join a team dedicated to service, leadership, and community.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_cta_description', [
        'label'   => __('CTA Description', 'gcso'),
        'section' => 'gcso_cta',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_cta_btn_text', [
        'default'           => 'View Open Positions',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('gcso_cta_btn_text', [
        'label'   => __('CTA Button Text', 'gcso'),
        'section' => 'gcso_cta',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('gcso_cta_btn_url', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('gcso_cta_btn_url', [
        'label'   => __('CTA Button URL', 'gcso'),
        'section' => 'gcso_cta',
        'type'    => 'url',
    ]);
}
add_action('customize_register', 'gcso_customize_register');
