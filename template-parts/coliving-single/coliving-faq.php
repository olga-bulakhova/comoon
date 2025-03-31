<?php
function taq_template($name)
{
  $complex = carbon_get_the_post_meta('faq_' . $name . '_complex');

  if (!empty($complex)) : ?>

    <h3 class="title-24-600 color-dark center-mobile accordion__title">
      <?php echo carbon_get_theme_option('faq_' . $name . carbon_lang_prefix()) ?>
    </h3>

    <?php foreach ($complex as $c) : ?>

      <div class="accordion__item border-radius">
        <div class="accordion__header color-dark">
          <?php echo $c['faq_' . $name . '_question'] ?>
        </div>

        <div class="accordion__content text-18-400 hidden">
          <?php echo $c['faq_' . $name . '_answer'] ?>
        </div>
      </div>

    <?php endforeach; ?>

<?php endif;
}
?>

<section class="camp-faq pt-14 pt-6-mobile pb-18 pb-6-mobile light-background">
  <div class="wrapper">
    <h2 class="title-48-600 color-dark mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('faq_title' . carbon_lang_prefix()) ?></h2>
    <div class="accordion">
      <div class="accordion-row">
        <div class="accordion-col">
          <?php
          taq_template('accommodation');
          taq_template('entertainment');
          taq_template('job');
          ?>
        </div>

        <div class="accordion-col">
          <?php
          taq_template('nutrition');
          taq_template('how_to_get');
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
