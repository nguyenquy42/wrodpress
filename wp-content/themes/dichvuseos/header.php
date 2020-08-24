<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title>Vuzic Title</title>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

    
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Karmi_Sheba_HTML_TEMPLATE</title>
  <!-- Bootstrap Min CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
  <!-- animate.min css -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/animate.min.css" />
  <!-- jquery-ui css -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/jquery-ui.css" />
  <!-- venobox Min CSS -->
  <link rel=" stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/venobox.min.css" />
  <!-- FlatIcon CSS -->
  <link rel="stylesheet" href="http://mywordpress.com/wp-content/themes/dichvuseos/assets/font/flaticon.css" />
  <!-- Magnific Popup Min CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/magnific-popup.min.css" />
  <!-- Owl Carousel Min CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
  <!-- Font Awesome Min CSS -->
  <link rel="stylesheet" href="http://mywordpress.com/wp-content/themes/dichvuseos/assets/css/fontawesome.all.min.css" />
  <!-- Menu CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/meanmenu.css" />
  <!-- Color CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/color.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/style.css" />
  <!-- Menu-Custom CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/menu-custom.css" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/responsive.css" />
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?=get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico" />
  <style>
      .pad-20 {
    padding-bottom: 20px;
  }
  </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Navber Area Start -->
  <header>
    <div class="navbar-area">
      <div class="karmi-sheba-nav-responsive">
        <div class="container">
          <div class="plamb-responsive-menu">
            <div class="logo">
              <a href="<?= get_site_url()?>">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/project-logo/phutech-03.png" class="white-logo" alt="logo" />
                <img src="<?=get_template_directory_uri(); ?>/assets/img/project-logo/phutech-03.png" class="black-logo" alt="logo" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="karmi-sheba-nav">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="<?= get_site_url()?>">
              <img src="<?=get_template_directory_uri(); ?>/assets/img/project-logo/phutech-03.png" class="white-logo" alt="logo" />
              <img src="<?=get_template_directory_uri(); ?>/assets/img/project-logo/phutech-03.png" class="black-logo" alt="logo" />
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <?php wp_nav_menu( [
                'items_wrap'=> '<ul class="navbar-nav">%3$s</ul>',
                'container' => '',
                'add_li_class' => 'nav-item'
            ]);?>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Navbar Area End -->

