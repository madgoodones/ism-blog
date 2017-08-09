<div class="clear"></div>

<footer>
	<div class="inner">
		<div class="inner-item">
			<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
			<?php dynamic_sidebar( 'footer_1' ); ?>
			<?php endif; ?>
		</div>

		<div class="inner-item">
			<?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
			<?php dynamic_sidebar( 'footer_2' ); ?>
			<?php endif; ?>
		</div>

		<div class="inner-item">
			<?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
			<?php dynamic_sidebar( 'footer_3' ); ?>
			<?php endif; ?>
		</div>
	</div>
</footer>
<div class="corp-footer">
	<div class="inner">
		<div class="inner-left">
			ISM SEGUROS - Todos os direitos reservados - 2017
		</div>

		<div class="inner-right">
			<a href="">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
			</a>
			<a href="">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a>
			<a href="">
				<i class="fa fa-linkedin" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</div>

<?php wp_footer() ?>
</body>
</html>

