<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset = "<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php if ( is_search() ) { ?>
		<meta name = "robots" content = "noindex, nofollow"/>
	<?php } ?>

	<title>
		<?php
		if ( function_exists( 'is_tag' ) && is_tag() ) {
			single_tag_title( "Tag Archive for &quot;" );
			echo '&quot; - ';
		} elseif ( is_archive() ) {
			wp_title( '' );
			echo ' Archive - ';
		} elseif ( is_search() ) {
			echo 'Search for &quot;' . wp_specialchars( $s ) . '&quot; - ';
		} elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
			wp_title( '' );
			echo ' - ';
		} elseif ( is_404() ) {
			echo 'Not Found - ';
		}
		if ( is_home() ) {
			bloginfo( 'name' );
			echo ' - ';
			bloginfo( 'description' );
		} else {
			bloginfo( 'name' );
		}
		if ( $paged > 1 ) {
			echo ' - page ' . $paged;
		}
		?>
	</title>

	<link rel = "shortcut icon" href = "/favicon.ico">
	<!-- Bootstrap -->
	<link href = "<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel = "stylesheet">
	<link href = "<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" rel = "stylesheet">
	<link href = "<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel = "stylesheet">
	<link href = "<?php echo get_template_directory_uri(); ?>/css/bootstrap-social.css" rel = "stylesheet">
	<!--my style-->
	<link href = "<?php echo get_template_directory_uri(); ?>/css/style.css" rel = "stylesheet">


	<link rel = "pingback" href = "<?php bloginfo( 'pingback_url' ); ?>">

	<?php if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	} ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<nav class = "navbar navbar-recolor navbar-top">
		<div class = "container">
			<div class = "row">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<a href = "<?php echo get_option( 'home' ); ?>">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/logo_godzila.png" alt = "logo" class = "img-logo img-responsive">
					</a>
				</div>
				<div class = "col-md-9 contact-style visible-lg visible-md">
					<address class="pull-right text-right">
						<span title = "Адресс" class="glyphicon glyphicon-map-marker glyphicon-align-left"> </span> ул. Дашкевича 19, ТРЦ "Крещатик", минус 3 этаж<br/>
						<span title = "Мобильный" class="glyphicon glyphicon-phone glyphicon-align-left"> </span> (067) 146-50-50
						<span title = "Стиционарный" class="glyphicon glyphicon-phone-alt glyphicon-align-left"> </span> 54-43-10
					</address>
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-12 col-sm-12 col-xs-12">
					<!--header logo-->
					<div class = "navbar-header">

						<button type="button" class="navbar-toggle collapsed nav-button-color" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar icon-bar-color"></span>
							<span class="icon-bar icon-bar-color"></span>
							<span class="icon-bar icon-bar-color"></span>
						</button>

						<a class = "navbar-brand header-stl"
						   href = "<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?>
						</a>
					</div>
					<!--				header navigation menu-->
					<menu id="navbar" class="navbar-collapse collapse " aria-expanded="false">
						<?php
						wp_nav_menu( array(
								'menu'       => 'headMenu',
								'depth'      => 2,
								'container'  => false,
								'menu_class' => 'nav navbar-nav menu-stl',

								'walker' => new wp_bootstrap_navwalker()
							)
						);
						?>

						<form class = "navbar-form navbar-right" role = "search" action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
							<div class = "form-group">
								<input type = "text" id="s" name="s" value="" class = "form-control" placeholder = "Search">
							</div>
						</form>
							<!--Адрес, виден только на мобильном-->
						<address class="pull-right text-right visible-xs">
							<span title = "Адресс" class="glyphicon glyphicon-map-marker glyphicon-align-left"> </span> ул. Дашкевича 19, ТРЦ "Крещатик", минус 3 этаж<br/>
							<span title = "Мобильный" class="glyphicon glyphicon-phone glyphicon-align-left"> </span> (067) 146-50-50
							<span title = "Стиционарный" class="glyphicon glyphicon-phone-alt glyphicon-align-left"> </span> 54-43-10
						</address>


					</menu>
				</div>
			</div>

		</div>
	</nav>
		<!--Основной контент контейнер-->
	<div class = "container theme-showcase" role = "main">

		<!--Рекламный блок-->
		<div class="row">
			<div class="col-md-12 adtv-box">
				<!--Тут вставляется рекламма-->
			</div>
		</div>
		<!--Конец рекламаного блока-->
