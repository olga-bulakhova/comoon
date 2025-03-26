<?php

$camp_program = carbon_get_the_post_meta('camp_program');

if (!empty($camp_program)) : ?>

  <section class="camp-program mt-14 mt-6-mobile mb-8 mb-6-mobile color-dark">
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center">
        <?php echo pll__('Программа') ?>
      </h2>

      <div class="text-16-400 wrapper-sm"><?php echo carbon_get_the_post_meta('camp_program_description'); ?></div>

      <div class="program-list mt-4_8 mt-2_4-mobile">

        <?php foreach ($camp_program as $item) : ?>

          <div>
            <div class="program-item">
              <h3 class="title-24-600"><?php echo $item['camp_program_title'] ?></h3>
              <div><?php echo $item['camp_program_text'] ?></div>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
    </div>
  </section>
<?php endif; ?>