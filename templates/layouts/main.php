<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" <?php language_attributes() ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes() ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <link rel="dns-prefetch" href="//maps.gstatic.com">
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/favicon.ico?0.13.0" type="image/x-icon" />

  <!-- Size for iPad and iPad mini (high resolution) -->
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/apple-touch-icon-152x152.png?0.13.0">
  <!-- Size for iPhone and iPod touch (high resolution) -->
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/apple-touch-icon-120x120.png?0.13.0">
  <!-- Size for iPad 2 and iPad mini (standard resolution) -->
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/apple-touch-icon-76x76.png?0.13.0">
  <!-- Default non-defined size, also used for Android 2.1+ devices -->
  <link rel="apple-touch-icon-precomposed" href="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/apple-touch-icon-60x60.png?0.13.0">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/opengraph-image.png?0.13.0">

  <link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/e3854e97-b35c-4f31-bf5d-f804408f2ef8.css"/>
  <?php wp_head() ?>
  <!--[if lt IE 9]>
    <script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/../assets/js/ie/browser-support.js"></script>
  <![endif]-->
</head>
<body <?php body_class() ?>>
  <!--[if lt IE 8]>
    <div class="alert-box alert">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</div>
  <![endif]-->
    <div class="header-wrapper">
      <div class="row">
        <div class="header-logo">
          <a href="/" id="logo">
            <img src="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/nhslogo.png" height="31" alt="NHS logo"></a>
        </div>
      </div>
    </div>

  <header class="site-header" role="banner">
    <div class="row">
      <div class="medium-12 columns">
        <a href="<?php echo home_url('/') ?>" class="logo"><?php bloginfo('name') ?></a>

      </div>

    </div>
  </header>



  <?php w_requested_template() ?>

  <footer class="site-footer" role="contentinfo">


    <div class="credits">
      <div class="row">
        <div class="medium-12 columns">
<p><a href="http://www.england.nhs.uk"><img src="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/nhsengland_mono_1000.png" height="50" class="brand" alt="NHS England logo"></a><a href="https://www.gov.uk/government/organisations/department-of-health"><img src="<?php get_site_url(); ?>/wp-content/themes/govsite/assets/img/dh_mono_1000.png" height="50" class="brand" alt="Department of Health logo"></a>
</p>
<p><a href="/comments-and-moderation-policy">Comments and moderation policy</a><br/>
Based on the <a href="https://github.com/dxw/govsite">GovSite</a> Wordpress theme.</p>


<p>All content is available under the <a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/">Open Government Licence v3.0</a>, except where otherwise stated.<br/>
&copy; Crown copyright</p>
        </div>

      </div>
    </div>

  </footer>

  <?php wp_footer() ?>

</body>
</html>
