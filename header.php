<html class="no-js" <?php language_attributes(); ?>>
<head>
  <base href="/">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png" rel="icon" type="image/png">
  <!-- <link href="/apple-icon.png" rel="apple-touch-icon"> -->
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="#000000" name="theme-color">
  <meta content="Löydä edullisin hinta muutollesi kymmenien muuttofirmojen joukosta. Tarjoamme edullisinta muuttopäivää hyödyntämällä muuttofirmojen vapaita resursseja." name="description">
  <meta content="Muutto, Halvin, Satasenmuutto, Muuttopalvelu, Halpa, Laskuri" name="keywords">
  <meta content="Flexwork Software Oy" name="author">
  <meta content="nb49qqfuk5gazdyv33v2l9cb1ef415" name="facebook-domain-verification">

  <meta content="s37DZDtyb80EGXrFifKdPdRV5O4WeEsvqXYYc2SFmwM" name="google-site-verification">
  <meta name="description" content="Varmista halpa hinta muuttopalveluille muuttolaskurilla. Hyödynnämme
 muuttofirmojen vapaita resursseja ja tarjoamme sinulle edullisinta hintaa." data-react-helmet="true">
 <style type="text/css">
    @font-face {
      font-weight: 400;
      font-style:  normal;
      font-family: 'Circular-Loom';

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
    }

    @font-face {
      font-weight: 500;
      font-style:  normal;
      font-family: 'Circular-Loom';

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Medium.woff2') format('woff2');
    }

    @font-face {
      font-weight: 700;
      font-style:  normal;
      font-family: 'Circular-Loom';

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
    }

    @font-face {
      font-weight: 900;
      font-style:  normal;
      font-family: 'Circular-Loom';
      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Black.woff2') format('woff2');
    }
  </style>
  <?php wp_head(); ?>
</head>
<body class="presentation-page sidebar-collapse" data-new-gr-c-s-check-loaded="14.1088.0" data-gr-ext-installed="">
  <?php wp_body_open(); ?>
  <div id="root">
    <nav class="fixed-top navbar-transparent navbar navbar-expand-lg bg-white">
      <div class="container">
        <div class="navbar-translate">
          <button type="button" aria-expanded="false" class="navbar-toggler">
            <span class="navbar-toggler-bar top-bar"></span>
            <span class="navbar-toggler-bar middle-bar"></span>
            <span class="navbar-toggler-bar bottom-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="ceva" class="ml-auto navbar-nav">&3$s</ul>'
                )
            );
          ?>
          <ul id="ceva" class="ml-auto navbar-nav">
            <li class="navItem-normal text-center nav-item">
              <a class="nav-link" href="/"><p class="navbar-text-front">Etusivu</p></a>
            </li>
            <li class="navItem-normal text-center ml-5 mr-5 nav-item">
              <a class="nav-link" href="/muuttofirmoille"><p class="navbar-text-muuttofirmoille">Muuttofirmoille</p></a>
            </li>
            <li class="nav-item">
              <button type="button" href="" target="_blank" class="nav-link btn-custom btn btn-neutral">
                <p class="login-button-paragraph">Kirjaudu</p>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="wrapper">
    <div class="page-header clear-filter">
      <div class="rellax-header" data-rellax-speed="-4" style="transform: translate3d(0px, 0px, 0px) translate3d(0px, 0px, 0px);">
        <div class="page-header-image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/assets/images/header-bg.8bb5039f.webp);"></div>
      </div>
      <div class="mt-5 container">
        <?php
          if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
        ?>
        <a href=" "><img alt="..." class="img img-raised rounded" src="<?php echo $logo[0] ?>" style="max-width: 18rem; box-shadow: none;"></a>
        <div class="space-50"></div>
        <div class="ml-auto mr-auto col-md-8">
          <div class="section-description text-center">
            <h1 class="title movingPageHeader-h1"><?php the_title(); ?></h1>
            <p style="font-weight: 500; font-size: 21px;"><?php bloginfo('description') ?></p>
            <a class="btn-round header-button mt-4 btn btn-outline-info btn-lg" href="/muuttolaskuri"><p class="mb-auto header-button-paragraph ml-4 mr-4">Laske hinta</p></a>
          </div>
        </div>
      </div>
    </div>
