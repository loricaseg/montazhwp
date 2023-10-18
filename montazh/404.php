<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package montazh
 */

get_header();
?>

<div class="empty-page">
	<div class="container row row-space align-center">
		<div class="empty__left">
			<h1>404</h1>
			<p>
				Такой страницы
				не существует
			</p>
			<a href="<?php echo home_url()  ?>" class="btn">Вернуться на главную</a>
		</div>
		<div class="empty__right">
			<picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/404.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt=""></picture>
		</div>
	</div>
</div>

<?php
get_footer();
