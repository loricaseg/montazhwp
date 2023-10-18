<?php if (get_field('text1')): ?>
<section class="text">
    <div class="container">
        <h2><?php echo get_field('text1') ?></h2>
        <div class="text__wrapper">
            <?php echo get_field('text2') ?>
        </div>
    </div>
</section>
<?php endif; ?>