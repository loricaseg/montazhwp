<?php
/*
 Template Name: Отзывы
 */
get_template_part( 'header' ); 
?>

<header class="reviewspage">
    <div class="container">
        <h1>Отзывы</h1>
        <div class="swiper-container-reviews swiper-container-rev2">
            <div class="swiper-wrapper">

                <?php if( have_rows('reviews') ): ?>
                <?php while( have_rows('reviews') ): the_row(); ?>
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
</header>

<?php get_template_part( 'template-parts/projects' ); ?>

<?php get_template_part( 'template-parts/text' ); ?>

<?php get_template_part( 'template-parts/map' ); ?>


<?php get_template_part( 'footer' ); ?>