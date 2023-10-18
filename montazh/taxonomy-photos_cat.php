<?php

get_template_part( 'header' ); 
$term = get_queried_object();
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
                            <?php echo single_cat_title() ?>
                        </h1>

                        <?php echo get_field('photo_descr', $term) ?>

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
                                    foreach( $categories as $cat ){   ?> 

                                <a href="<?php echo get_category_link( $cat ) ?>" class="swiper-slide">
                                    <?php echo $cat->name;?>
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
            <?php 
                $terms = wp_get_post_terms($post->ID, 'photos_cat');    

                foreach ( $terms as $term ) {
                $args = array(
                  'post_type' => 'photos',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'photos_cat',
                      'field' => 'name',
                      'terms' => $term->name
                    )
                  )
                );

                $loop  = new WP_Query( $args ); 

                // обрабатываем результат

                while ( $loop ->have_posts() ) : $loop ->the_post();?>  
                 <a href="<?php the_permalink() ?>" class="swiper-slide">
                    <img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="">
                    <p> <?php echo get_the_title(); ?></p>
                </a>               

                <?php
                 endwhile;
                wp_reset_query(); ?>
              <?php } ?>    

           
          

        </div>

    </div>
</section>

<?php get_template_part( 'template-parts/text' ); ?>


<?php get_template_part( 'template-parts/form' ); ?>

<?php get_template_part( 'template-parts/map' ); ?>


<?php get_template_part( 'footer' ); ?>