<?php
/*
 Template Name: Цены
 */
get_template_part( 'header' ); 
?>

<header class="header-main prices">
    <div class="container">
        <div class="container-prices">
            <div class="swiper-slide align-center row row-space ">
                <div class="header__left">
                    <h1>
                        <?php echo get_the_title() ?>
                    </h1>
                    <div class="price__header">
                        <?php the_content() ?>
                    </div>
                    <a href="#form" class="btn2">
                        Заказать 
                    </a>
                </div>
                <div class="header__right">
                    <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/header5.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header5.png" alt=""></picture>
                </div>
            </div>
            <div class="header__back">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/bg2.svg" alt="">
            </div>
        </div>
    </div>
</header>

<?php if( have_rows('price') ): ?>
<?php while( have_rows('price') ): the_row(); ?>
<section class="table">
    <div class="container">
        <h2><?php echo get_sub_field('price1'); ?></h2>
        
        <table class="table__wrapper">
            <tr class="table__top">
                <td>Виды работ</td>
                <td>Ед. измерения</td>
                <td>Цена в рублях</td>
            </tr>

            <?php if( have_rows('price2') ): ?>
            <?php while( have_rows('price2') ): the_row(); ?>
            <tr class="table__tr">
                <td><?php echo get_sub_field('price1_1'); ?></td>
                <td><?php echo get_sub_field('price2_1'); ?></td>
                <td><?php echo get_sub_field('price3_1'); ?></td>
            </tr>
            <?php endwhile; ?>                
            <?php endif; ?> 

        </table>
       
    </div>
</section>

<?php endwhile; ?>                
<?php endif; ?>

<?php get_template_part( 'template-parts/text' ); ?>

<?php get_template_part( 'template-parts/form' ); ?>

<?php get_template_part( 'template-parts/map' ); ?>

<?php get_template_part( 'footer' ); ?>