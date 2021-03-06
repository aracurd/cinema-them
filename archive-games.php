<?php get_header(); ?>
    <?php
	    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	    $query_args = array('post_type' => 'games', 'paged' => $paged);
	    $the_query = new WP_Query( $query_args );
    ?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>

			<div class = "row rov-post-style" id = "post-<?php the_ID(); ?>">
				<div class = "col-md-12 col-xs-12">
					<h2 class = "page-header"><a href = "<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class = "col-md-3 col-xs-12">
					<?php echo get_the_post_thumbnail( $page->ID, 'poster-size' ); ?>

				</div>
				<div class = "col-md-9 col-xs-12">
					<p><?php the_content(); ?></p>
				</div>
				<div class = "col-md-offset-9 col-md-3 col-xs-offset-3 col-xs-6">
					<a type = "button" class = "btn btn-primary hidden-xs" data-toggle = "modal" href="#myModal-<? the_ID(); ?>" data-target="#myModal-<? the_ID(); ?>">
						Видео игры
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
								<h4 class = "modal-title" id = "myModalLabel">Видео к игре <?php the_title(); ?></h4>
							</div>
							<div class = "modal-body">
								<div class="youtube-respons-blk">
									<?php the_field('youtube_g_url'); ?>
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

<?php endwhile;?>

	<?php	if (function_exists("wp_bootstrap_pagination"))
				{wp_bootstrap_pagination();}
		?>
<?php else : ?>

	<h2>Not Found</h2>

<?php endif; ?>

<?php get_footer(); ?>