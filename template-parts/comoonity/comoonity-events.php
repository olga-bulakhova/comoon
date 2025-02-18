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

          <div class="mb-5_6 mt-5 mt-1_6-mobile mb-1_6-mobile">
            <?php echo pll__('Знаешь, мы не только про кемпы. Мы поддерживаем связь и до, и после кемпов.</br> Приходи к нам на ивенты, чтобы познакомиться с COMOONity и крутыми ребятами.')  ?>
          </div>



          <div class="custom-table custom-table-events border-radius">
            <div class="table-header">
              <div class="table-row">
                <div><?php echo pll__('Дата и время')  ?></div>
                <div><?php echo pll__('Страна и город')  ?></div>
                <div><?php echo pll__('Ивент')  ?></div>
                <div></div>
              </div>
            </div>

            <div class="table-body">
              <?php while ($query->have_posts()) : $query->the_post(); ?>

                <div class="table-row">
                  <div><?php echo  date("d.m, H:i", strtotime(carbon_get_the_post_meta('event_date_time'))); ?></div>
                  <div><?php echo carbon_get_the_post_meta('event_location') ?></div>
                  <div><?php the_title() ?></div>
                  <div>
                    <?php if (!empty(carbon_get_the_post_meta('number_of_seats'))) : ?>
                      <div class="badge badge-blue badge-sm">
                        <?php echo pll__('Осталось мест') . ' - ' .  carbon_get_the_post_meta('number_of_seats'); ?>
                      </div>

                    <?php endif; ?>

                    <?php if (carbon_get_the_post_meta('number_of_seats') == 0) : ?>
                      <div class="badge badge-red badge-no-icon badge-sm"><?php echo pll__('Мест нет')  ?></div>
                    <?php endif; ?>
                  </div>
                </div>

              <?php endwhile; ?>
            </div>
          </div>


        </div>
      </section>

    <?php endif;
    wp_reset_postdata(); ?>