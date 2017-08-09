<?php get_header(); ?>

<div class="inner-wrapper">

	<div class="search-result">	<h1 class="go-title"><?php echo sprintf( __( '%s Resultados para ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1></div>

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
