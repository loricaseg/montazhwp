<?php
/*
 Template Name: Монтаж
 Template Post Type: montazh
 */
get_template_part( 'header' ); 
?>


<header class="header-main header-inner"
    style="background: url('<?php echo  get_template_directory_uri(); ?>/assets/img/header3.webp') no-repeat center; background-size: cover;">
    <div class="container">
        <div class="swiper-containerheader">
            <div class="swiper-wrapper">
                <div class="swiper-slide row row-space">
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
                    <div class="header__right">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="header__back">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/bg3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg3.png" alt=""></picture>
            </div>
        </div>


    </div>
</header>

<?php if( have_rows('actia1') ): ?>
<?php while( have_rows('actia1') ): the_row(); ?>
    <section class="action">
        <div class="container">
            <div class="action__sub">
                <?php echo get_sub_field('actia1_1') ?>
            </div>
            <h2><?php echo get_sub_field('actia1_2') ?></h2>
            <a href="#form" class="btn2">Заказать</a>
        </div>
    </section>
<?php endwhile; ?>                
<?php endif; ?>



<section class="jobs">

    <?php if( have_rows('job1') ): ?>
    <?php while( have_rows('job1') ): the_row(); ?>
        <div class="jobs__item row row-space">
            <div class="jobs__item__left">
                <img src=" <?php echo get_sub_field('job1_3') ?>" alt="" class="job__photo">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.png" alt="" class="job__pattern"></picture>
            </div>
            <div class="jobs__item__right">
                <h3>
                     <?php echo get_sub_field('job1_1') ?>
                </h3>
                <?php echo get_sub_field('job1_2') ?>
            </div>
        </div>
    <?php endwhile; ?>                
    <?php endif; ?>

</section>

<section class="also">
    <div class="container">

        <h2>Мы также выполним монтажные работы</h2>
        <div class="also__grid">

                <?php  
                $postid = get_the_ID();
                $recipeloop = new WP_Query( 
                    array( 
                        'post_type' => 'montazh',
                        'post__not_in'=> array($postid),
                        'posts_per_page' => -1, 
                                    
                    )
            ); ?>

                <?php while ( $recipeloop->have_posts() ) : $recipeloop->the_post();
                    
                    
                ?>  
                    <a href="<?php echo get_post_permalink() ?>" class="also__grid__item">
                       <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        <p>
                            <?php echo get_the_title(); ?>
                        </p>
                    </a>              
                  <?php  endwhile; wp_reset_postdata();?>
            
           
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/preference' ); ?>

<?php get_template_part( 'template-parts/photos' ); ?>

<?php get_template_part( 'template-parts/text' ); ?>

<?php get_template_part( 'template-parts/form' ); ?>

<?php get_template_part( 'template-parts/map' ); ?>

<?php get_template_part( 'footer' ); ?>