<?php get_header(); ?>

	<main>
		<div class="wrap wrapper">
			<ul class="top__grid">
			<?php
			$news_query = new WP_Query(
				array(
					'post_type'      => 'post',
					'category_name' => 'products',
					'posts_per_page' => 8,
				)
			);
			?>
			<?php if ( $news_query->have_posts() ) : ?>
				<?php while ( $news_query->have_posts() ) : ?>
					<?php $news_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="top__grid-img"><?php the_post_thumbnail(); ?></div>
							<div class="top__grid-txt">
								<p><?php the_title(); ?></p>
								<p>&yen;<?php the_field('price'); ?></p>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			</ul>
			<div class="viewmore"><a href="<?php echo esc_url(home_url('/category/products/')); ?>" class="more">View More</a></div>
		</div>
	</main>

<?php get_footer(); ?>