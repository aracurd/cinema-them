<?php get_header(); ?>

	<?php query_posts( 'post_type=films_catalog' ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) :
	the_post(); ?>

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
						<dt>Актеры:</dt>
						<dd><?php echo( get_post_meta( $post->ID, 'actors', true ) ); ?></dd>
						<dt>Продолжительность:</dt>
						<dd><?php echo( get_post_meta( $post->ID, 'time', true ) ); ?></dd>
					</dl>
					<p><?php the_content(); ?></p>
									</div>

				<div class = "col-md-offset-9 col-md-3 col-xs-offset-3 col-xs-6">
					<a type = "button" class = "btn btn-primary hidden-xs" data-toggle = "modal" href="#myModal-<? the_ID(); ?>" data-target="#myModal-<? the_ID(); ?>">
						Трейлер
					</a>
					<a href = "<?php the_permalink() ?>" class = "btn btn-default" role = "button">Подробнее</a>

				</div>
				<!--Модальное окно для просмотра трейлера-->
				<div class = "modal fade" id="myModal-<? the_ID(); ?>" tabindex = "-1" role = "dialog"
				     aria-labelledby = "myModalLabel">
					<div class = "modal-dialog" role = "document">
						<div class = "modal-content">
							<div class = "modal-header">
								<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span
										aria-hidden = "true">&times;</span></button>
								<h4 class = "modal-title" id = "myModalLabel">Трейлер к <?php the_title(); ?></h4>
							</div>
							<div class = "modal-body">
								<div class="youtube-respons-blk">

									<?php echo get_post_meta($post->ID, 'youtube_url', 1); ?>
								</div>
							</div>
							<div class = "modal-footer">
								<button type = "button" class = "btn btn-default" data-dismiss = "modal">Закрыть
								</button>
							</div>
						</div>
					</div>
				</div>

			</div>



<?php endwhile; ?>
	<?php
			if (function_exists("wp_bootstrap_pagination"))
			{
				wp_bootstrap_pagination();
			}
			?>

<?php else : ?>

	<h2>Not Found</h2>

<?php endif; ?>

<?php get_footer(); ?>