<section class="form" id="form">
    <div class="container">
        <div class="form__wrapper row">
            <div class="form__left">
                <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img5.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img5.png" alt=""></picture>
            </div>
            <div class="form__right">
                <?php echo get_field('forms', 8) ?>

                <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]') ?>
                
            </div>
        </div>
    </div>
</section>