<?php
/*
 Template Name: Спасибо
 */
get_template_part( 'header' ); 
?>


<div class="empty-page spasibo">
    <div class="container row row-space align-center">
        <div class="empty__left">
            <h1>Спасибо за Вашу заявку!</h1>
            <p>
                Мы свяжемся максимально оперативно
            </p>
            <a href="<?php echo home_url()  ?>" class="btn">Вернуться на главную</a>
        </div>
        <div class="empty__right">
            <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/404.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt=""></picture>
        </div>
    </div>
</div>

<?php get_template_part( 'footer' ); ?>