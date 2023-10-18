<?php
/*
 Template Name: Контакты
 */
get_template_part( 'header' ); 
?>

<header class="formpage row">
    <div class="formpage__left">
        <h1><?php echo get_the_title() ?></h1>
        <?php the_content() ?>
        <div class="formpage__row row">
            <a href="tel:<?php echo get_field('contacts1', 8); ?>" class="contacts-links row align-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/phone.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/viber.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ws.svg" alt="">
                <span><?php echo get_field('contacts1', 8); ?></span>
            </a>
            <a href="mailto:<?php echo get_field('contacts2', 8); ?>" class="row align-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/skype.svg" alt="">
                <span><?php echo get_field('contacts2', 8); ?></span>
            </a>
            <a href="Skype:<?php echo get_field('contacts3', 8); ?>?add" class="row align-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/mail.svg" alt="">
                <span><?php echo get_field('contacts3', 8); ?></span>
            </a>
        </div>
        <div class="formpage__form">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]') ?>
        </div>
    </div>
    <div class="formpage__right">
        <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/formback.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/formback.png" alt=""></picture>
    </div>
</header>

<?php get_template_part( 'template-parts/map' ); ?>

<?php get_template_part( 'footer' ); ?>