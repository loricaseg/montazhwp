<?php
/*
 Template Name: Главная
 */
get_template_part( 'header' ); 
?>

<header class="header-main">
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
                            Заказать 
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


<?php get_template_part( 'template-parts/photos' ); ?>


<section class="reviews">
    <div class="container">
        <h2>Что о нас говорят клиенты?</h2>
        <div class="swiper-container-rev1 swiper-container-reviews">
            <div class="swiper-wrapper">

                <?php if( have_rows('reviews', 12) ): ?>
                <?php while( have_rows('reviews', 12) ): the_row(); ?>
                    <div class="swiper-slide">
                        <div class="reviews__text">
                            <p><?php echo get_sub_field('reviews1') ?></p>
                        </div>
                        <span><?php echo get_sub_field('reviews2') ?></span>
                    </div>
                <?php endwhile; ?>                
                <?php endif; ?>

            </div>
            <div class="reviews__nav row">
                <div class="reviews-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                </div>
                <div class="reviews-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                </div>
            </div>
            <div class="reviews__pagination"></div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/text' ); ?>


<?php get_template_part( 'template-parts/form' ); ?>


<?php get_template_part( 'template-parts/projects' ); ?>



<?php get_template_part( 'footer' ); ?>