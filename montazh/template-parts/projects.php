<?php $featured_posts = get_field('zapisi', 8); 
if( $featured_posts ): ?>

<section class="projects">
    <div class="container">
        <h2>Выполненные проекты</h2>
        <div class="swiper-container-projects">
            <div class="swiper-wrapper">

            
                <?php foreach( $featured_posts as $post ):
                      setup_postdata($post); ?>  
                <a href="<?php echo get_post_permalink() ?>" class="swiper-slide">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                   <!--  <p> <?php echo get_the_title(); ?></p> -->
                </a>  
               <?php endforeach; ?>

            </div>
        </div>
        <div class="projects__nav">
            <div class="reviews-button-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
            </div>
            <div class="reviews-button-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>     