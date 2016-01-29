<!--Рекламный блок-->
<div class="row ">
	<div class="col-md-12 adtv-box">
		<!--Тут вставляется рекламма-->
	</div>
</div>
<!--Конец рекламаного блока-->

</div>
<!--Конец Основного контент контейнера-->
<footer class="clearfix" >
	<nav class = "navbar navbar-default navbar-fixed-bottom" role = "navigation">
		<div class = "container">
			<div class = "col-md-3 col-xs-7">
				<p class = "navbar-text">
					<span class="hidden-xs">&copy;<?php echo date( "Y" );?></span>
					<?php echo " ";
					bloginfo( 'name' ); ?>
				</p>
			</div>
			<div class = "col-md-offset-7 col-md-2 col-xs-5 clearfix">
				<a class = "navbar-brand pull-right foot-paddings" href = "#top" id = "goTop">
							<span style = "color: #2e6da4; font-size: 24px"
							      class = "fa fa-arrow-up fa-3x"></span>
				</a>
				<a class="btn btn-social-icon btn-vk vk-a-style pull-right" href="https://vk.com/godzilla_cinema" target="_blank">
					<span class="fa fa-vk"></span>
				</a>

			</div>

		</div>
	</nav>
</footer>
<script>
	jQuery(document).ready(function () {
		$(".current-menu-item").addClass("active");
	});
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src = "js/bootstrap.min.js"></script>
<!--My custom scripts-->
<script src = "js/GoTop.js"></script>

<?php wp_footer(); ?>

<!-- Don't forget analytics -->

</body>

</html>

