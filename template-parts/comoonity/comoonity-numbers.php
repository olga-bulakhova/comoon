<section class="comoonity-numbers pt-9 pb-9">
  <div class="wrapper">
    <h2 class="color-dark title-48-600 mb-9"><?php echo pll__('COMOONity в цифрах')  ?></h2>
    <div class="numbers-list color-dark">
      <div class="numbers-item">
        <span class="icon icon-home"></span>
        <span class="number"><?php echo carbon_get_the_post_meta('comoonity_numbers_1') ?></span>
        <span class="text"><?php echo pll__('проведенных кемпов')  ?></span>
      </div>

      <div class="numbers-item">
        <span class="icon icon-smile"></span>
        <span class="number"><?php echo carbon_get_the_post_meta('comoonity_numbers_2') ?></span>
        <span class="text"><?php echo pll__('классных участников') ?></span>
      </div>

      <div class="numbers-item">
        <span class="icon icon-location"></span>
        <span class="number"><?php echo carbon_get_the_post_meta('comoonity_numbers_3') ?></span>
        <span class="text"><?php echo pll__('стран, где живут наши ребята') ?></span>
      </div>
    </div>
  </div>
</section>