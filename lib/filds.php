<?php
// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}

// код блока
function extra_fields_box_func( $post ){
	?>
	<p>
		<label style="width: 20%">Жанр фильма: <input class="form-control" class="form-control"  type="text" name="extra[ganr]" style="width: 80%; ; float: right" value="<?php echo get_post_meta($post->ID, 'ganr', 1); ?>" /></label>
	</p>

	<p>
		<label style="width: 20%">Режисер:  <input type="text" class="form-control"  name="extra[director]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'director', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">Актеры:  <input type="text"  class="form-control" name="extra[actors]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'actors', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">Год:  <input type="text"  class="form-control" name="extra[year]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'year', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">Время:  <input type="text"  class="form-control" name="extra[time]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'time', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">Трейлер:  <textarea type="text" rows="1" name="extra[youtube_url]" style="width: 80%; float: right"><?php echo get_post_meta($post->ID, 'youtube_url', 1); ?></textarea></label>
	</p>

	<p>
		<label style="width: 20%">На сервере хранится в:
			<select name="extra[dir]">
				<?php $sel_v = get_post_meta($post->ID, 'dir', 1); ?>
				<option value="0">----</option>
				<option value="video1/hd" <?php selected( $sel_v, '1' )?> >video1/hd</option>
				<option value="video2/hd" <?php selected( $sel_v, '2' )?> >video2/hd</option>
				<option value="video4/hd" <?php selected( $sel_v, '3' )?> >video4/hd</option>
				<option value="video4/temp" <?php selected( $sel_v, '4' )?> >video4/temp</option>
			</select>
		</label>
	</p>

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
	if ( !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}

//для мультфильмов

// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_mult_extra_fields', 1);

function my_mult_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_mult_fields_box_func', 'multfilms', 'normal', 'high'  );
}

// код блока
function extra_mult_fields_box_func( $post ){
	?>
	<p>
		<label style="width: 20%">Жанр мультфильма: <input type="text" name="extra[ganr]" style="width: 80%; ; float: right" value="<?php echo get_post_meta($post->ID, 'ganr', 1); ?>" /></label>
	</p>

	<p>
		<label style="width: 20%">Режисер:  <input type="text" name="extra[director]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'director', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">Актеры:  <input type="text" name="extra[actors]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'actors', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">Год:  <input type="text" name="extra[year]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'year', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">Время:  <input type="text" name="extra[time]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'time', 1); ?>"/></label>
	</p>

	<p>
		<label style="width: 20%">На сервере лежит в:  <input type="text"  class="form-control" name="extra[dir]" style="width: 80%; float: right" value="<?php echo get_post_meta($post->ID, 'dir', 1); ?>"/></label>

	</p>

	<p>
		<label style="width: 20%">Трейлер:  <textarea type="text" rows="3" name="extra[youtube_url]" style="width: 80%; float: right"><?php echo get_post_meta($post->ID, 'youtube_url', 1); ?></textarea></label>
	</p>
	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_mult_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my__mult_extra_fields_update( $post_id ){
	if ( !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}