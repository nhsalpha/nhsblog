<?php 
/* Template name: Campaign page */

the_post(); 

?>

<div class="row">

  <div class="large-12 columns">

    <main id="content" role="main">

      <header class="page-header">
        <h1><?php the_title(); ?></h1>
      </header>

      <div class="page-element row">

        <div class="medium-8 large-8 columns">

          <?php if ( get_field('show_video') == false ) { ?>
            <figure>
              <?php the_post_thumbnail('large'); ?>
            </figure>
          <?php } else { ?>
            <div class="flex-video">
              <?php _e( wp_oembed_get( get_field('featured_video_url') ) ); ?>
            </div>
          <?php } ?>

        </div>

        <div class="medium-4 large-4 columns">

          <article class="main-content">
            <?php the_content(); ?>
          </article>

        </div>

      </div>

     <?php if (get_field('left_block_title')) {

      $size = 'large';

    ?>
      
      <div class="page-element">

        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">

          <li>

            <article>
              <?php
                $image1 = get_field('left_block_image');
                $thumb1 = $image1['sizes'][ $size ];
              ?>

              <header>
                <h3><?php the_field('left_block_title') ?></h3>
              </header>

              <?php if ( get_field('blocks_with_images') == true ) { ?>
                <a class="image" href="<?php the_field('left_block_url'); ?>"><img class="th" src="<?php echo $thumb1; ?>" alt="<?php echo $image1['alt']; ?>"></a>
              <?php } ?>

              <?php echo get_field('left_block_text'); ?>

              <a href="<?php the_field('left_block_url'); ?>" class="button"><?php the_field('left_block_call_to_action'); ?></a>
            </article>

          </li>

          <li>

            <article>
              <?php
                $image2 = get_field('right_block_image');
                $thumb2 = $image2['sizes'][ $size ];
              ?>

              <header>
                <h3><?php the_field('right_block_title') ?></h3>
              </header>

              <?php if ( get_field('blocks_with_images') == true ) { ?>
                <a class="image" href="<?php the_field('right_block_url'); ?>"><img class="th" src="<?php echo $thumb2; ?>" alt="<?php echo $image2['alt']; ?>"></a>
              <?php } ?>

              <?php echo get_field('right_block_text'); ?>

              <a href="<?php the_field('right_block_url'); ?>" class="button"><?php the_field('right_block_call_to_action'); ?></a>
            </article>

          </li>

        </ul>

      </div>

     <?php } ?>

    </main>

  </div>

</div>

<?php get_template_part('partials/bottom-banner'); ?>
