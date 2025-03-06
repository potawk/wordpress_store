<?php get_header(); ?>

	<main>
		<div class="wrap product__wrap">
			<h2 class="section__title">Products</h2>
			<ul class="top__grid">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): ?>
					<?php the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="top__grid-img"><?php the_post_thumbnail(); ?></div>
							<div class="top__grid-txt">
								<p><?php the_title(); ?></p>
								<p>&yen;<?php the_field('price'); ?> +tax</p>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
			</ul>

			<?php the_posts_pagination(
				array(
						'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
						'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
						'type' => 'list',
				)
			); ?>
		</div>
	</main>

<?php get_footer(); ?>