    <?php
    global $post;

    $query = new WP_Query([
      'post_type' => 'events',
      'posts_per_page' => -1,
      'orderby' => [
        'event_date' => 'ASC',
      ],
      'meta_query' => [
        'event_date' => [
          'key' => 'event_date_time',
          'value' => date("Y-m-d"),
          'compare' => '>=',
          'type' => 'DATE'
        ]
      ]
    ]);

    if ($query->have_posts()) : ?>

      <a id="events"></a>
      <section class="comoonity-events pt-9 pb-9 pt-6-mobile pb-6-mobile">
        <div class="wrapper">
          <h2 class="color-dark title-48-600"><?php echo pll__('Предстоящие ивенты')  ?></h2>

          <div class="mb-5_6 mt-5 mt-1_6-mobile mb-4-mobile">
            <?php echo pll__('Знаешь, мы не только про кемпы. Мы поддерживаем связь и до, и после кемпов.</br> Приходи к нам на ивенты, чтобы познакомиться с COMOONity и крутыми ребятами.')  ?>
          </div>

          <?php get_template_part('template-parts/events/events-list', null, ['query' => $query]); ?>

        </div>
      </section>

    <?php endif;
    wp_reset_postdata(); ?>