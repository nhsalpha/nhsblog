<div class="row">
  <div class="large-12 columns">

    <header class="page-header">
        <div class="header-group">
          <h1>NHS.UK Alpha</h1>

                </div>
      </header>

    <div class="row">

      <div class="medium-8 large-8 columns">
        <?php

        show_archived_sticky_posts();
        show_archived_not_sticky_posts();

        get_template_part('partials/nav', 'pager');

        ?>
      </div>

      <aside class="sidebar medium-4 columns" role="complementary">
        <?php dynamic_sidebar('sidebar-primary') ?>
      </aside>

    </div>

  </div>
</div>
