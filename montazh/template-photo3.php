<?php
/*
 Template Name: Проект фото
 Template Post Type: photos
 */
get_template_part( 'header' ); 
?>

<header class="header-main header-inner header-photo2">
    <div class="container">
        <div class="swiper-containerheader">
            <div class="swiper-wrapper">
                <div class="swiper-slide row row-space align-center">
                    <div class="header__left">
                        <!-- <div class="header__sub">
                            Акция!
                        </div> -->
                        <h1>
                            <?php echo get_the_title() ?>
                        </h1>
                        <?php the_content() ?>

                        <a href="#form" class="btn2">
                            Заказать
                        </a>
                    </div>

                    <?php if(get_field('project1')): ?>
                    <div class="header__right header__right__project">
                        <div class="header__right__project__grid">
                            <?php if (get_field('project1')): ?>
                            <div class="header-photo2__item">
                                <span>Срок:</span> <?php echo get_field('project1') ?>
                            </div>
                            <?php endif; ?>
                            <?php if (get_field('project2')): ?>
                            <div class="header-photo2__item">
                                <span>Стоимость:</span> <?php echo get_field('project2') ?> руб.
                            </div>
                            <?php endif; ?>
                            <?php if (get_field('project3')): ?>
                            <div class="header-photo2__item">
                                <span>Материалы:</span> <?php echo get_field('project3') ?>
                            </div>
                            <?php endif; ?>
                            <?php if( have_rows('project5') ): ?>
                            <?php while( have_rows('project5') ): the_row(); ?>
                            <div class="header-photo2__item">
                               <span><?php echo get_sub_field('project5_1'); ?>:</span> <?php echo get_sub_field('project5_2'); ?>
                               </div>
                             <?php endwhile; ?>                
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
            </div>
             <?php if(get_field('project1')): ?>
            <div class="header__back">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.png" alt=""></picture>
            </div>
            <?php endif ?>
        </div>


    </div>
</header>

<?php $images = get_field('project4'); if( $images ): ?> 
<section class="projects">
    <div class="container">

        <div class="projects__photo projects__photo__gall">

                       
            <?php foreach( $images as $image_id ): ?>
                <a data-fancybox="gallery<?php echo get_row_index() ?>" data-src="<?php echo $image_id ?>" >
                   <img src="<?php echo $image_id ?>" alt="">               
                </a> 
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php endif; ?>


<?php get_template_part( 'template-parts/text' ); ?>


<?php get_template_part( 'template-parts/form' ); ?>

<?php get_template_part( 'template-parts/map' ); ?>


<?php get_template_part( 'footer' ); ?>