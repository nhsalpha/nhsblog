<section class="page-banner">
  <div class="row">
    <div class="large-12 columns">
      <article class="rte">
        <?php the_content(); ?>
      </article>
      <?php if (get_field('main_button_url')) : ?>
        <a href="<?php the_field('main_button_url'); ?>" title="<?php the_field('main_button_description'); ?>" class="button-banner"><?php the_field('main_button_description'); ?></a>
      <?php endif ?>
    </div>
  </div>
</section>
