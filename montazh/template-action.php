<?php
/*
 Template Name: Акции
 */
get_template_part( 'header' ); 
?>

<header class="header-main" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/header3.png') no-repeat center; background-size: cover;">
    <div class="container">
        <div class="swiper-container-header">
            <div class="swiper-wrapper">

                <?php if( have_rows('header') ): ?>
                <?php while( have_rows('header') ): the_row(); ?>
                <div class="swiper-slide row row-space ">
                    <div class="header__left">
                        <div class="header__sub">
                            <?php echo get_sub_field('header1') ?>
                        </div>
                        <h1>
                            <?php echo get_sub_field('header2') ?>
                        </h1>
                        <p><?php echo get_sub_field('header3') ?>
                        </p>
                        <a href="#form" class="btn2">
                            Заказать по акции
                        </a>
                    </div>
                    <div class="header__right">
                        <img src="<?php echo get_sub_field('header4') ?>" alt="">
                    </div>
                </div>
                <?php endwhile; ?>                
                <?php endif; ?>

            </div>
            <div class="header__back">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/bg2.svg" alt="">
            </div>
        </div>

        <div class="header__bottom row align-center">
            <div class="header__nav row row-space align-center">
                <div class="header-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                </div>
                <div class="header__pagination"></div>
                <div class="header-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</header>

<?php get_template_part( 'template-parts/tabs' ); ?>

<?php get_template_part( 'template-parts/preference' ); ?>

<?php get_template_part( 'template-parts/text' ); ?>


<?php get_template_part( 'template-parts/form' ); ?>


<?php get_template_part( 'template-parts/map' ); ?>

<?php get_template_part( 'footer' ); ?>