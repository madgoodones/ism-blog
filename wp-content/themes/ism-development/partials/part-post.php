<div data-aos="fade-up" data-aos-offset="200" class="__item item-full" onclick="location.href='<?php the_permalink() ?>'">

	<?php if (strlen(get_the_post_thumbnail_url()) > 0 ):  ?>
	
	<div class="thumb thumb-full" style="background: url('<?php the_post_thumbnail_url() ?>');">
	</div>

	<?php else: ?>

	<div class="thumb thumb-full" style="background: url('<?php get_site_url(); ?>/wp-content/uploads/2017/08/placeholder.jpg');">
	</div>

	<?php endif ?>

	<div class="content">
		<div class="category">
			<i class="fa fa-tags" aria-hidden="true"></i> <?php the_category( ' | ', '', false ); ?>
		</div>
		<div class="title item">
			<?php the_title(); ?>
		</div>
		<div class="text item">
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>
		<div class="footer">
			<div class="author item">
				<b>Por:</b> <?php the_author(); ?> |
			</div>
			<div class="date item">
				<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date(); ?>
			</div>
		</div>
	</div>
</div>