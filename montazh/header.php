<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package montazh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	
<div class="hidden-menu">
    <div class="menu-close">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/close.svg" alt="">
    </div>
    <div class="hidden-menu__wrapper">
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
         <?php 
                wp_nav_menu( array(
                'menu'              => 'menu-1', // ID, имя или ярлык меню
                'menu_class'        => 'menu-mob', // класс элемента <ul>
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
        <ul class="menu-mob">
            <li>
                <div class="row align-center contacts-links">
                    <a href="tel:<?php echo get_field('contacts1', 8); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/files/phone.svg" alt="">
                    </a>
                    <a href="viber://chat?number=%2B<?php echo get_field('contacts1_1', 8); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/viber.svg" alt=""></a>
                    <a href="tg://resolve?domain=<?php echo get_field('contacts1_2', 8); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" alt=""></a>
                    <a href="https://wa.me/<?php echo get_field('contacts1_3', 8); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ws.svg" alt=""></a>
                    <a href="tel:<?php echo get_field('contacts1', 8); ?>"><?php echo get_field('contacts1', 8); ?></span>
                </div>
            </li>
            <li>
                <a href="Skype:<?php echo get_field('contacts2', 8); ?>?add" class="row align-center contacts-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/files/skype.svg" alt="">
                    <span><?php echo get_field('contacts2', 8); ?></span>
                </a>
            </li>
        </ul>
    </div>
</div>

<menu>

    <div class="menu__top row row-space align-center">
        <a href="<?php echo home_url()  ?>" class="menu-mob logo-mob">
           <img src="<?php echo get_field('logotip', 8); ?>" alt="">
        </a>        
              
             <?php 
                wp_nav_menu( array(
                'menu'              => 'menu-1', // ID, имя или ярлык меню
                'menu_class'        => 'menu__main row', // класс элемента <ul>
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
           
        <div class="menu__trigger row">
            Монтаж
            <div class="menu__trigger__div">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <div class="menu__bottom row row-space align-center">
        <a href="<?php echo home_url()  ?>" class="menu__logo"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></picture></a>
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
            <a href="Skype:<?php echo get_field('contacts2', 8); ?>?add" class="row align-center contacts-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/skype.svg" alt="">
                <span><?php echo get_field('contacts2', 8); ?></span>
            </a>
        </div>
    </div>

</menu>
