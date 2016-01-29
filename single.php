<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class = "row rov-post-style" id = "post-<?php the_ID(); ?>">
				<div class = "col-md-12 col-xs-12">
					<h2 class = "page-header"><a href = "<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class = "col-md-3 col-xs-12">
					<?php echo get_the_post_thumbnail( $page->ID, 'poster-size' ); ?>

				</div>
				<div class = "col-md-9 col-xs-12">
					<dl class = "dl-horizontal">
						<dt>Год выхода:</dt>
						<dd><?php echo( get_post_meta( $post->ID, 'year', true ) ); ?></dd>
						<dt>Жанр:</dt>
						<dd><?php echo( get_post_meta( $post->ID, 'ganr', true ) ); ?></dd>
						<dt>Режисер:</dt>
						<dd><?php echo( get_post_meta( $post->ID, 'director', true ) ); ?></dd>
						<dt>Продолжительность:</dt>
						<dd><?php echo( get_post_meta( $post->ID, 'time', true ) ); ?></dd>
						<dt>Актеры:</dt>
						<dd><?php echo( get_post_meta( $post->ID, 'actors', true ) ); ?></dd>
					</dl>
					<p><?php the_content(); ?></p>
					<p class="treyler-style">
					<div class="youtube-respons-blk">
						<?php echo( get_post_meta( $post->ID, 'youtube_url', true ) ); ?>
					</div>
					</p>
				</div>
			</div>


		<?php endwhile; ?>

		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>

<?php get_footer(); ?>