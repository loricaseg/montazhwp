<section class="tabs">
    <div class="container">
        <div class="tabs__buttons row">
            <a href="#tab1" class="tabs__buttons__item tabs__buttons__item--active">Монтаж сайдинга</a>
            <a href="#tab2" class="tabs__buttons__item">Монтаж кровли</a>

            <?php if( have_rows('actslider') ): ?>
                <a href="#tab3" class="tabs__buttons__item">Акции</a>
            <?php endif; ?>
        </div>

        <div class="tabs__container">
            <div class="tabs__container__item tabs__container__item--active" id="tab1">
                <h2>Монтаж сайдинга в Москве</h2>
                <div class="swiper-wrapper">
                                                     
                    <?php  
                    $args = array(
                      'post_type' => 'montazh',
                      'post_status' => 'publish',
                      'posts_per_page' => -1,
                      'orderby' => 'date',
                      'order' => 'DESC',
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'montazh_cat',
                          'field' => 'id',
                          'terms' => 7
                        )
                      )
                    );

                    $loop  = new WP_Query( $args ); 

                    // обрабатываем результат

                    while ( $loop ->have_posts() ) : $loop ->the_post();?>   
                        <a href="<?php echo get_permalink()  ?>" class="swiper-slide">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            <h4> <?php echo get_the_title() ?>
                            </h4>
                            <p>
                                <?php 
                                    $content = get_the_content(); 
                                    $trimmed_content = wp_trim_words( $content, 22, '...' );
                                    echo $trimmed_content;
                                ?>
                            </p>
                        </a>
                    <?php
                    endwhile;
                    wp_reset_query(); ?>
                    
                   
                </div>
                <div class="tabs__pagination"></div>
                <div class="tabs__nav row row-space align-center">
                    <div class="tabs-button-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                    </div>
                    <div class="tabs-button-next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="tabs__container__item" id="tab2">
                <h2>Монтаж кровли в Москве</h2>
                <div class="swiper-wrapper">
                     <?php  
                    $args = array(
                      'post_type' => 'montazh',
                      'post_status' => 'publish',
                      'posts_per_page' => -1,
                      'orderby' => 'date',
                      'order' => 'DESC',
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'montazh_cat',
                          'field' => 'id',
                          'terms' => 6
                        )
                      )
                    );

                    $loop  = new WP_Query( $args ); 

                    // обрабатываем результат

                    while ( $loop ->have_posts() ) : $loop ->the_post();?>   
                        <a href="<?php echo get_permalink()  ?>" class="swiper-slide">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            <h4> <?php echo get_the_title() ?>
                            </h4>
                            <p>
                                <?php 
                                    $content = get_the_content(); 
                                    $trimmed_content = wp_trim_words( $content, 22, '...' );
                                    echo $trimmed_content;
                                ?>
                            </p>
                        </a>
                    <?php
                    endwhile;
                    wp_reset_query(); ?>
                </div>
                <div class="tabs__pagination"></div>
                <div class="tabs__nav row row-space align-center">
                    <div class="tabs-button-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                    </div>
                    <div class="tabs-button-next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                    </div>
                </div>
            </div>

            <?php if( have_rows('actslider') ): ?>
            <div class="tabs__container__item" id="tab3">
                <h2>Наши акции</h2>
                <div class="swiper-wrapper">

                    <?php while( have_rows('actslider') ): the_row(); ?>  
                    <a href="<?php echo get_page_link(29) ?>" class="swiper-slide">
                       <img src="<?php echo get_sub_field('header4') ?>" alt="">
                        <h4><?php echo get_sub_field('header2') ?>
                        </h4>
                        <p><?php echo get_sub_field('header3') ?></p>
                    </a>
                    <?php endwhile; ?>   
                </div>
                <div class="tabs__pagination"></div>
                <div class="tabs__nav row row-space align-center">
                    <div class="tabs-button-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                    </div>
                    <div class="tabs-button-next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/arr.svg" alt="">
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>