<?php get_header(); ?>

<div class="inner-wrapper">

	<div class="search-result">	<h2 class="go-title"><?php _e( 'Postagens em ', 'html5blank' ); single_cat_title(); ?></h2></div>

		<div class="go-blocks-full">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'partials/part', 'post' ); ?>

		<?php endwhile; ?>

		</div>

	<?php else: ?>

	<?php endif; ?>


	<?php get_template_part( 'partials/part',  'pagination'); ?>

</div>
</div>

<?php get_footer(); ?>
