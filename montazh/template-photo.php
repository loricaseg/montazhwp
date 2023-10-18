<?php
/*
 Template Name: Проект фото общая
 */
get_template_part( 'header' ); 

?>

<header class="header-main header-inner header-photo">
    <div class="container">
        <div class="swiper-containerheader">
            <div class="swiper-wrapper">
                <div class="swiper-slide row row-space align-center">
                    <div class="header__left">
                        <!-- <div class="header__sub">
                            Акция!
                        </div> -->
                        <h1>
                            <?php echo get_the_title(); ?>
                        </h1>
                        <?php the_content() ?>

                        <a href="#form" class="btn2">
                            Заказать
                        </a>
                    </div>
                    <div class="header__right">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="header__back">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/bg3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg3.png" alt=""></picture>
            </div>
        </div>


    </div>
</header>

<section class="projects">
    <div class="container">

        <div class="projects__photo">

            <?php                                  
             $categories = get_categories( [
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
                foreach( $categories as $cat ){  $postid=get_the_ID(); ?> 

            <a href="<?php echo get_category_link( $cat ) ?>" class="swiper-slide">
              <img src="<?php echo get_field('foto_kategorii', $cat) ?>" alt="">
                <p> <?php echo $cat->name;?></p>
            </a>
            
                <?php  } ?>
            <?php  } ?>
            
          

        </div>

    </div>
</section>

<?php get_template_part( 'template-parts/text' ); ?>


<?php get_template_part( 'template-parts/form' ); ?>

<?php get_template_part( 'template-parts/map' ); ?>


<?php get_template_part( 'footer' ); ?>