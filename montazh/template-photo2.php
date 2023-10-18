<?php
/*
 Template Name: Проект фото категория
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
                            Фотопримеры работ по отделке деревянных домов виниловым сайдингом
                        </h1>
                        <p>
                            Фотогалерея работ по обшивке деревянного дома виниловым сайдингом в Москве и Московской области, ИП
                            Долгунов — фото работ и примеры готовых проектов.
                        </p>

                        <a href="" class="btn2">
                            Заказать
                        </a>
                    </div>
                    <div class="header__right">
                        <div class="photos__nav">
                            <div class="photos__nav__prev">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                            </div>
                            <div class="photos__nav__next">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-container-photo">
                            <div class="swiper-wrapper">
                                 <?php $categories = get_categories( [
                                    'taxonomy'     => 'photos_cat',
                                    'type'         => 'photos',
                                    'child_of'     => 0,
                                    'parent'       => '',
                                    'orderby'      => 'name',
                                    'order'        => 'ASC',
                                    'hide_empty'   => 1,
                                    'hierarchical' => 1,
                                    'exclude'      => '',
                                    'include'      => '',
                                    'number'       => 0,
                                    'pad_counts'   => false,
                                ] );

                                if( $categories ){
                                    foreach( $categories as $cat ){   ?> 

                                <a href="" class="swiper-slide">
                                    <?php echo $cat->name; ?>
                                </a>
                                    <?php  } ?>
                                <?php  } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__back">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.png" alt=""></picture>
            </div>
        </div>


    </div>
</header>

<section class="projects">
    <div class="container">

        <div class="projects__photo">

            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом</p>
            </a>
            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом Обшивка деревянного дома виниловым сайдиншом</p>
            </a>
            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом</p>
            </a>
            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом</p>
            </a>
            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом</p>
            </a>
            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом</p>
            </a>
            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом</p>
            </a>
            <a href="" class="swiper-slide">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img6.png" alt=""></picture>
                <p>Обшивка деревянного дома виниловым сайдиншом</p>
            </a>

        </div>

    </div>
</section>

<?php get_template_part( 'template-parts/text' ); ?>


<?php get_template_part( 'template-parts/form' ); ?>

<?php get_template_part( 'template-parts/map' ); ?>


<?php get_template_part( 'footer' ); ?>