<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package montazh
 */

?>

<footer>
    <div class="container">
        <div class="footer__top row">
            <div class="footer__top__left">
                <a href="<?php echo home_url()  ?>" class="footer__logo">
                   <img src="<?php echo get_field('logotip', 8); ?>" alt="">
                </a>
                <p><?php echo get_field('footer3', 8); ?></p>
                <div class="row">
                    <div class="footer__sub">
                        <?php echo get_field('contacts4', 8); ?>
                    </div>
                    <a href="<?php echo get_field('footer2', 8); ?>" class="footer__sub" target="_blank">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
            <div class="footer__top__right row row-space">
                <div class="footer__top__col">
                     <?php 
                        wp_nav_menu( array(
                        'menu'              => 'menu-1', // ID, имя или ярлык меню
                        'menu_class'        => '', // класс элемента <ul>
                        'menu_id'           => '', // id элемента <ul>
                        'container'         => false, // тег контейнера или false, если контейнер не нужен
                        'container_class'   => '', // класс контейнера
                        'container_id'      => '', // id контейнера
                        'fallback_cb'       => 'wp_page_menu', // колбэк функция, если меню не существует
                        'before'            => '', // текст (или HTML) перед <a
                        'after'             => '', // текст после </a>
                        'link_before'       => '', // текст перед текстом ссылки
                        'link_after'        => '', // текст после текста ссылки
                        'echo'              => true, // вывести или вернуть
                        'depth'             => 0, // количество уровней вложенности
                        'walker'            => '', // объект Walker
                        'theme_location'    => 'menu-1', // область меню
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'      => 'preserve',                    
                    ) );
                    ?> 
                </div>
                <div class="footer__top__col">
                    
                    <?php 
                        wp_nav_menu( array(
                        'menu'              => 'menu-2', // ID, имя или ярлык меню
                        'menu_class'        => 'montazh-col', // класс элемента <ul>
                        'menu_id'           => '', // id элемента <ul>
                        'container'         => false, // тег контейнера или false, если контейнер не нужен
                        'container_class'   => '', // класс контейнера
                        'container_id'      => '', // id контейнера
                        'fallback_cb'       => 'wp_page_menu', // колбэк функция, если меню не существует
                        'before'            => '', // текст (или HTML) перед <a
                        'after'             => '', // текст после </a>
                        'link_before'       => '', // текст перед текстом ссылки
                        'link_after'        => '', // текст после текста ссылки
                        'echo'              => true, // вывести или вернуть
                        'depth'             => 0, // количество уровней вложенности
                        'walker'            => '', // объект Walker
                        'theme_location'    => 'menu-2', // область меню
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'      => 'preserve',                    
                    ) );
                    ?> 
                </div>
                <div class="footer__top__col">
                    
                    <?php 
                        wp_nav_menu( array(
                        'menu'              => 'menu-3', // ID, имя или ярлык меню
                        'menu_class'        => 'montazh-col', // класс элемента <ul>
                        'menu_id'           => '', // id элемента <ul>
                        'container'         => false, // тег контейнера или false, если контейнер не нужен
                        'container_class'   => '', // класс контейнера
                        'container_id'      => '', // id контейнера
                        'fallback_cb'       => 'wp_page_menu', // колбэк функция, если меню не существует
                        'before'            => '', // текст (или HTML) перед <a
                        'after'             => '', // текст после </a>
                        'link_before'       => '', // текст перед текстом ссылки
                        'link_after'        => '', // текст после текста ссылки
                        'echo'              => true, // вывести или вернуть
                        'depth'             => 0, // количество уровней вложенности
                        'walker'            => '', // объект Walker
                        'theme_location'    => 'menu-3', // область меню
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'      => 'preserve',                    
                    ) );
                    ?> 
                </div>
            </div>
        </div>
    </div>


    <div class="footer__bottom">
        <div class="container">
            <div class="menu__bottom__right row align-center">
               <div class="row align-center contacts-links">
                    <a href="tel:<?php echo get_field('contacts1', 8); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/phone.svg" alt="">
                    </a>
                    <a href="viber://chat?number=%2B<?php echo get_field('contacts1_1', 8); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/viber.svg" alt=""></a>
                    <a href="tg://resolve?domain=<?php echo get_field('contacts1_2', 8); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" alt=""></a>
                    <a href="https://wa.me/<?php echo get_field('contacts1_3', 8); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ws.svg" alt=""></a>
                    <a href="tel:<?php echo get_field('contacts1', 8); ?>"><?php echo get_field('contacts1', 8); ?></span>
                </div>
                <a href="Skype:<?php echo get_field('contacts2', 8); ?>?add" class="row align-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/files/skype.svg" alt="">
                    <span><?php echo get_field('contacts2', 8); ?></span>
                </a>
            </div>
            <div class="footer-descr">
                <?php echo get_field('footer1', 8); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
