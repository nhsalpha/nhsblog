<article <?php post_class('post-summary'); ?>>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>
  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large') ?></a>
  <div class="entry">

    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="button">Read more</a>
  </div>

</article>
