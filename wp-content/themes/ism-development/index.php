<?php get_header(); ?>

<main role="main">
	<?php get_template_part('partials/part', 'modal') ?>
</main>

<?php get_template_part( 'partials/part', 'slider' ); ?>
<?php get_template_part( 'partials/part', 'hero' ); ?>

<div id="go-wrapper">

<?php get_template_part( 'partials/part', 'featured' ); ?>
<?php get_template_part( 'partials/part', 'posts' ); ?>

</div>

<?php get_footer(); ?>