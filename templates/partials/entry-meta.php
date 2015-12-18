<div class="entry-meta date">
  <?php
    if(function_exists('coauthors')) {
      coauthors_posts_links();
    } else {
      the_author_posts_link();
    }
  ?>,
  <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo the_time('F jS Y'); ?></time>
</div>
