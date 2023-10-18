<section class="preference">
    <div class="container">
        <div class="preference__title">
            <h2><?php echo get_field('pref1', 8) ?></h2>
            <p><?php echo get_field('pref2', 8) ?></p>
            <div class="preference__sub">
                СТРОЙМОНТАЖ
            </div>
        </div>

        <div class="preference__grid">

            <?php if( have_rows('pref3', 8) ): ?>
            <?php while( have_rows('pref3', 8) ): the_row(); ?>
            <div class="preference__item">
                <img src="<?php echo get_sub_field('pref3_1'); ?>" alt="">
                <p><?php echo get_sub_field('pref3_2'); ?></p>
            </div>
            <?php endwhile; ?>                
            <?php endif; ?>
        </div>
    </div>
</section>