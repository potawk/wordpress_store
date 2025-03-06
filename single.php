<?php get_header(); ?>

<main>
	<div class="wrap">
		<div class="detail__wrap">
			<?php if (have_posts()): ?>
				<?php while (have_posts()): ?>
					<?php the_post(); ?>
					<h2 class="section__title"><?php the_title(); ?></h2>
					<div class="detail__content">
						<div class="detail__img"><?php the_post_thumbnail(); ?></div>
						<div class="detail__txt">
							<?php the_content(); ?>
							<p>&yen;<?php the_field('price'); ?> +tax</p>
							<div>
								<dl class="deatail__des">
									<dt>SIZE：</dt>
									<dd><?php the_field('size'); ?></dd>
									<dt>COLOR：</dt>
									<dd><?php the_field('color'); ?></dd>
									<dt>MATERIAL：</dt>
									<dd><?php the_field('material'); ?></dd>
								</dl>
							</div>
						</div>
					</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<div class="detail__link"><a href="<?php echo esc_url( home_url('/category/products/') ); ?>">Back To Products</a></div>
	</div>
</main>

<?php get_footer(); ?>