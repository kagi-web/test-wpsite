
<?php
add_filter('wpcf7_autop_or_not', function () {
    return false;
});

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

//css js読み込み
function my_scripts() {
  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/css/style.css'
  );

  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Zen+Maru+Gothic:wght@400&display=swap',
    [],
    null
  );

  wp_enqueue_script(
    'script',
    get_template_directory_uri() . '/js/script.js',
    [],
    false,
    true
  );
}

add_action('wp_enqueue_scripts', 'my_scripts');


// ギャラリー投稿
function create_gallery_post_type() {
  register_post_type('gallery', [
    'label' => 'ギャラリー',
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'gallery'],
    'menu_position' => 5,
    'supports' => ['title', 'thumbnail']
  ]);
}


add_action('init', 'create_gallery_post_type');

//仕事実績投稿
function create_work_post_type() {
  register_post_type('work', [
    'label' => 'お仕事',
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'work'],
    'menu_position' => 5,
    'supports' => ['title', 'editor', 'thumbnail']
  ]);
}
add_action('init', 'create_work_post_type');


function customize_posts_per_page($query) {
  if (!is_admin() && $query->is_main_query()) {

    // gallery
    if (is_post_type_archive('gallery')) {
      $query->set('posts_per_page', 12);
    }

    // work
    if (is_post_type_archive('work')) {
      $query->set('posts_per_page', 12);
    }

  }
}
add_action('pre_get_posts', 'customize_posts_per_page');