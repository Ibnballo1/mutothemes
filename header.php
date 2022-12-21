<html <?php language_attributes() ?>>
<head>
  <base href="/">
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <link href="/favicon.png" rel="icon" type="image/png">
  <link href="/apple-icon.png" rel="apple-touch-icon">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="#000000" name="theme-color">
  <meta content="Löydä edullisin hinta muutollesi kymmenien muuttofirmojen joukosta. Tarjoamme edullisinta muuttopäivää hyödyntämällä muuttofirmojen vapaita resursseja." name="description">
  <meta content="Muutto, Halvin, Satasenmuutto, Muuttopalvelu, Halpa, Laskuri" name="keywords">
  <meta content="Flexwork Software Oy" name="author">
  <meta content="nb49qqfuk5gazdyv33v2l9cb1ef415" name="facebook-domain-verification">
  <link href="/manifest.json" rel="manifest">
  <link href="https://use.typekit.net/wmm4zup.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" crossorigin="anonymous" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr">
  <link href="css/customStyles.css" rel="stylesheet">
  <title>Halpa muuttopalvelu | Tilaa muutto helposti muuttolaskurilla</title>
  <meta content="s37DZDtyb80EGXrFifKdPdRV5O4WeEsvqXYYc2SFmwM" name="google-site-verification">
  <link href="css/2.b9753982.chunk.css" rel="stylesheet">
  <link href="css/main.0dda1e04.chunk.css" rel="stylesheet">
  <meta name="description" content="Varmista halpa hinta muuttopalveluille muuttolaskurilla. Hyödynnämme
 muuttofirmojen vapaita resursseja ja tarjoamme sinulle edullisinta hintaa." data-react-helmet="true">
 <script src="https://kit.fontawesome.com/210152c720.js" crossorigin="anonymous"></script>
 <?php wp_head(); ?>
</head>
<body class="presentation-page sidebar-collapse" data-new-gr-c-s-check-loaded="14.1088.0" data-gr-ext-installed="">
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
          <div class="collapse navbar-collapse" style="margin-left: 900px !important;">
            <?php
                $args = array(
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="ceva" class="ml-auto navbar-nav">%3$s</ul>',
                    'link_before'   => '<p class="navbar-text-front navbar-text-muuttofirmoille">',
                    'link_after'    => '</p>'
                );
            ?>
            <?php wp_nav_menu($args); ?>
            <ul id="ceva" class="ml-auto navbar-nav">
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
        <?php if (is_page('muuttofirmoille')) {?>
          <div class="page-header-image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/assets/images/movingHeader-bg.a3125faf.jpg);"></div>
        <?php } else {?>
          <div class="page-header-image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/assets/images/header-bg.8bb5039f.webp);"></div>
          <?php }?>
        </div>
        <div itemscope itemtype="https://schema.org/Service" class="mt-5 container">
          <?php
              if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
              }
            ?>
          <a href=" "><span itemprop="logo"><img alt="..." class="img img-raised rounded" src="<?php echo $logo[0] ?>" style="max-width: 18rem; box-shadow: none;"></span></a>
          <div class="space-50"></div>
          <div class="ml-auto mr-auto col-md-8">
            <div class="section-description text-center">
              <h1 class="title movingPageHeader-h1">Muuttolaskuri - Etsi halpa muutto</h1>
              <p style="font-weight: 500; font-size: 21px;">Varmista halpa hinta muuttopalveluille satasenmuutto.fi muuttolaskurilla. Hyödynnämme muuttofirmojen vapaita resursseja ja tarjoamme sinulle edullisinta hintaa. Jo kymmeniä muuttofirmoja mukana!</p>
              <a class="btn-round header-button mt-4 btn btn-outline-info btn-lg" href="/muuttolaskuri"><p class="mb-auto header-button-paragraph ml-4 mr-4">Laske hinta</p></a>
            </div>
          </div>
        </div>
      </div>
