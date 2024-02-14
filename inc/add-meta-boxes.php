<?php

add_action('add_meta_boxes', function () {
  add_meta_box('review_camp', 'Кемп', 'review_camp_metabox', 'reviews', 'side', 'low');
  add_meta_box('admin_camp', 'Админ', 'admin_camp_metabox', 'camps', 'side', 'low');
}, 1);

function review_camp_metabox($post)
{
  $camps = get_posts(array('post_type' => 'camps', 'posts_per_page' => -1, 'orderby' => 'post_title', 'order' => 'ASC'));

  if ($camps) {
    echo '
		<div style="max-height:200px; overflow-y:auto;">
			<ul>
		';

    foreach ($camps as $camp) {
      echo '
			<li><label>
				<input type="radio" name="post_parent" value="' . $camp->ID . '" ' . checked($camp->ID, $post->post_parent, 0) . '> ' . esc_html($camp->post_title) . '
			</label></li>
			';
    }

    echo '
			</ul>
		</div>';
  } else
    echo 'Кемпов нет...';
}

function admin_camp_metabox($post)
{
  $admins = get_posts(array('post_type' => 'admins', 'posts_per_page' => -1, 'orderby' => 'post_title', 'order' => 'ASC'));

  if ($admins) {
    echo '
		<div style="max-height:200px; overflow-y:auto;">
			<ul>
		';

    foreach ($admins as $admin) {
      echo '
			<li><label>
				<input type="radio" name="post_parent" value="' . $admin->ID . '" ' . checked($admin->ID, $post->post_parent, 0) . '> ' . esc_html($admin->post_title) . '
			</label></li>
			';
    }

    echo '
			</ul>
		</div>';
  } else
    echo 'Админов нет...';
}
