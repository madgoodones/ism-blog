<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php get_template_part( 'partials/part', 'post' ); ?>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
