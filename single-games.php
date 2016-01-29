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
					<p><?php the_content(); ?></p>
					<p class="treyler-style">
						<div class="youtube-respons-blk">
						<?php the_field('youtube_g_url'); ?>
						</div>
					</p>
				</div>
				<div class="col-md-12">
					<div class = "row">
						<h4>Скриншоты:</h4>
						<div class = "col-md-4"><img src = "<?php the_field('image_1');?>" alt = "" class = "img-responsive"></div>
						<div class = "col-md-4"><img src = "<?php the_field('image_2');?>" alt = "" class = "img-responsive"></div>
						<div class = "col-md-4"><img src = "<?php the_field('image_3');?>" alt = "" class = "img-responsive"></div>
					</div>
				</div>
			</div>


		<?php endwhile; ?>

		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>

<?php get_footer(); ?>