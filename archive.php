<?php get_header();
$category = get_queried_object();

?>
<div class="wrapper">
  <div class="breadcrumbs">
    <a class="home-page-link" href="<?php echo get_url_path(); ?>"></a>
    <span>/</span>
    <a href="<?php echo get_permalink(get_option('page_for_posts')) ?>"><?php echo carbon_get_theme_option('blog_title' . carbon_lang_prefix()) ?></a>
    <span>/</span>
    <span><?php echo $category->name ?></span>
  </div>
  <h1 class="color-dark title-48-600"><?php echo carbon_get_theme_option('blog_title' . carbon_lang_prefix()) ?></h1>
  <?php get_template_part('template-parts/blog/categories'); ?>

  <div class="mb-18 mb-6-mobile">

    <?php
    global $post;

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $default_posts_per_page = get_option('posts_per_page');

    $query = new WP_Query([
      'posts_per_page' => $default_posts_per_page,
      'paged' => $paged,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'post',
      'post_status' => 'publish',
      'cat' => $category->term_id
    ]);

    ?>

    <?php if ($query->have_posts()) : ?>
      <div class="posts-list">
        <?php while ($query->have_posts()) {
          $query->the_post();
          get_template_part('template-parts/blog/post');
        }
        ?>
      </div>

      <div class="pagination center">
        <?php my_pagenavi(); ?>
      </div>

    <?php
      wp_reset_postdata();
    endif; ?>
  </div>



</div>

<?php get_footer(); ?>