<?php
$comoonity_values = carbon_get_the_post_meta('comoonity_values');
if (!empty($comoonity_values)) : ?>


  <section class="you-are-getting pt-9 pb-9 pt-6-mobile">
    <div class="wrapper">
      <h2 class="color-dark title-48-600">
        <?php echo pll__('Что дает комьюнити') ?>
      </h2>
      <div class="you-are-getting-list">

        <?php foreach ($comoonity_values as $item) : ?>
          <?php $img = $item['comoonity_values_photo']; ?>
          <div class="you-are-getting-item">
            <div class="you-are-getting-img-wrapper">
              <div class="you-are-getting-img">
                <img src="<?php echo wp_get_attachment_image_url($img, size: 'medium')  ?>" alt="" width="100%" class="border-radius">
              </div>
            </div>
            <h3 class="color-dark title-24-600"><?php echo $item['comoonity_values_title'] ?></h3>
            <div><?php echo $item['comoonity_values_text'] ?></div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

<?php endif; ?>