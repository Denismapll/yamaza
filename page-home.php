<?php
/* Template Name: Home */

get_header(); ?>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

  <!-- Preloader -->
  <div class="preloader">
    <div class="dot-container">
      <div class="dot dot-1"></div>
      <div class="dot dot-2"></div>
      <div class="dot dot-3"></div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <defs>
        <filter id="goo">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" />
        </filter>
      </defs>
    </svg>
  </div>
  <!-- Preloader End -->

  <!--Header Start-->
  <header id="home" class="cursor-light">

    <div class="inner-header nav-icon no-shadow">
      <!--toggle btn-->

      <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
      </a>

      <a class="navbar-brand link" href="#home">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/logo-rgb.png" class="logo" alt="logo">
      </a>
    </div>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
      <div class="bg-overlay"></div>
      <div class="inner-wrapper">
        <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
        <div class="container">
          <div class="row w-100 side-menu-inner-content">
            <div class="col-12 d-flex justify-content-center align-items-center">
              <a href="#home" class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/logo-rgb.png" alt="logo"></a>
            </div>
            <div class="col-12 col-lg-8">
              <nav class="side-nav w-100">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#feature-sec">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#portfolio-sec">Trabalho</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#pricing-sec">Preço</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#contact-sec">Contato</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center">
              <div class="side-footer text-white w-100">
                <div class="menu-company-details">
                  <span>+1 631 123 4567</span>
                  <span>email@website.com</span>
                </div>
                <ul class="social-icons-simple">
                  <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                  <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                  <li><a class="youtube-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
                  <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="text-white">&copy; 2024 Yamaza. Made With Love by Mdd Web</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

  </header>
  <!--Header End-->
  <?php $textos = get_post_meta(get_the_id()); ?>
  <!--Banner start-->
  <section class="banner-slider position-relative cursor-light" id="banner-slider">
    <div class="row banner-slider-row no-gutters">
      <div class="col-12 col-lg-6 bg-blue banner-left-area d-flex justify-content-center align-items-center wow slideInLeft" data-wow-delay=".8s">
        <div class="left-banner">
          <div class="container">
            <div class="detail-text">
              <div class="inner-content position-relative text-center" data-depth="0.05">
                <h4 class="heading"><?= $textos['header1-title-s1'][0] ?></h4>
                <div class="main-ring">
                  <div class="slider-ring"></div>
                </div>
              </div>
            </div>
            <a href="https://vimeo.com/3024219" data-fancybox="" class="slider-play-btn link"><span><i class="las la-play"></i></span> Play Video</a>
          </div>
        </div>
        <div class="slider-object1"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/slider-object1.png"></div>
        <div class="slider-object2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/slider-object2.png"></div>
      </div>
      <div class="col-12 col-lg-6 banner-right-area wow slideInRight" data-wow-delay=".8s">
        <div class="row no-gutters">
          <div class="col-12 bg-yellow height-50 d-flex align-items-center slider-right-box">
            <div class="container-fluid">
              <div class="detail-text text-right ml-auto mr-4">
                <span class="sub-heading">Simples & Fácil</span>
                <h4 class="heading"><?= $textos['header2-title-s1'][0] ?></h4>
                <p class="text"><?= $textos['description2-s1'][0] ?> </p>
                <a class="btn white-trans-btn rounded-pill white-trans-btn-yellow-hvr">Clique aqui
                  <span></span><span></span><span></span><span></span>
                </a>
              </div>
            </div>
            <div class="img-object wow slideInUp" data-wow-delay="1.8s">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/slider-object3.png">
            </div>
          </div>
          <div class="col-12 bg-green height-50 d-flex align-items-center slider-right-box">
            <div class="container-fluid">
              <div class="detail-text text-left mr-auto ml-4">
                <span class="sub-heading">Simples & Fácil</span>
                <h4 class="heading"><?= $textos['header3-title-s1'][0] ?></h4>
                <p class="text"><?= $textos['description3-s1'][0] ?> </p>
                <a class="btn white-trans-btn rounded-pill white-trans-btn-green-hvr">Clique aqui
                  <span></span><span></span><span></span><span></span>
                </a>
              </div>
            </div>
            <div class="img-object right wow slideInRight" data-wow-delay="1.8s">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/slider-object4.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Banner End-->
  <!--Features sec start-->
  <section id="feature-sec" class="feature-sec padding-top padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 text-center">
          <div class="text">
            <div class="home-text text-black">
              <h4 class="heading"><?= $textos['titulo-inst-s2'][0] ?></h4>
              <p class="text"><?= $textos['description-inst-s2'][0] ?> </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row padding-top features-cards">
        <div class="col-12 col-lg-4">
          <div class="card box text-center">
            <div class="feature-icon text-center">
              <i class="lni lni-bulb"></i>
            </div>
            <div class="card-body">
              <p class="card-text sub-heading text-black"><?= $textos['titulo-inst2-s2'][0] ?></p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="card box text-center">
            <div class="feature-icon text-center">
              <i class="lni lni-briefcase color-green"></i>
            </div>
            <div class="card-body">
              <p class="card-text sub-heading text-black"><?= $textos['titulo-inst3-s2'][0] ?></p>
            </div>
          </div>

        </div>

        <div class="col-12 col-lg-4">
          <div class="card box text-center">
            <div class="feature-icon text-center">
              <i class="lni lni-heart"></i>
            </div>
            <div class="card-body">
              <p class="card-text sub-heading text-black"><?= $textos['titulo-inst4-s2'][0] ?></p>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-12 padding-top-half text-center">
          <a href="#" class="btn blue-btn btn-hvr btn-hvr-yellow rounded-pill"><?= $textos['botao-inst-s2'][0] ?>
            <span></span><span></span><span></span><span></span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--features sec End-->

  <!--Stats sec start-->
  <section id="stats" class="stats bg-light-gray padding-top padding-bottom">
    <div class="container">
      <div class="row m-0">
        <div class="col-12 col-md-10 offset-md-1 col-lg-7 offset-lg-0 text-left p-0 text-center text-lg-left">
          <div class="stats-text wow slideInLeft">
            <div class="home-text text-black">
              <span class="sub-heading"><?= $textos['header-title-institucional-s3'][0] ?></span>
              <h4 class="heading mt-3 mb-4"><?= $textos['title-institucional-s3'][0] ?></h4>
              <p class="text mb-3"><?= $textos['description-institucional-s3'][0] ?></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-5 d-flex justify-content-end">
          <div class="plant-img">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/plant.png" class="wow slideInRight" alt="img" data-wow-delay=".5s">
          </div>
        </div>
      </div>

      <div class="row padding-top-half">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-md-4 wow fadeInUp">
              <div class="stats-box d-flex">
                <div class="stats-icon">
                  <i class="fas fa-users color-green"></i>
                </div>
                <div class="stats-box-text ml-4">
                  <h1 class="numbering"><?= $textos['num-inst1-s3'][0] ?>+</h1>
                  <p class="stat-sub-heading">Clientes atendidos</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".2">
              <div class="stats-box d-flex">
                <div class="stats-icon">
                  <i class="fas fa-list color-blue"></i>
                </div>
                <div class="stats-box-text ml-4">
                  <h1 class="numbering"><?= $textos['num-inst2-s3'][0] ?>+</h1>
                  <p class="stat-sub-heading">Artes feitas</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".4">
              <div class="stats-box d-flex">
                <div class="stats-icon">
                  <i class="fas fa-check color-yellow"></i>
                </div>
                <div class="stats-box-text ml-4">
                  <h1 class="numbering"><?= $textos['num-inst3-s3'][0] ?>+</h1>
                  <p class="stat-sub-heading">Projetos concluidos</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Stats sec End-->

  <!--Team sec Start-->
  <section id="team" class="team padding-top padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-6 offset-lg-3 offset-md-1 text-center">
          <div class="team-text text-black">
            <h1 class="main-heading mb-4"><?= $textos['header-title-s4'][0] ?></h1>
            <p class="sub-heading mb-4"><?= $textos['description-s4'][0] ?></p>
          </div>
        </div>
      </div>

      <div class="row padding-top-half">
        <div class="col-12">

          <div id="team-carousal" class="owl-carousel owl-theme team-owl mt-100 text-center">
            <?php
            $i = 1;
            // Query custom post type 'Valores'
            $args = array(
              'post_type' => 'beneficios', // Nome do post type
              'posts_per_page' => 4,   // Número de posts para mostrar, -1 para todos
              'post_status' => 'publish' // Apenas posts publicados
            );

            // Executar a query
            $valores_query = new WP_Query($args);

            // Loop customizado
            if ($valores_query->have_posts()) :
              while ($valores_query->have_posts()) : $valores_query->the_post();
                // Exibir título e conteúdo do post
                // Listar todos os metadados do post
                $meta_values = get_post_meta(get_the_ID());
                if ($i == 1) {
                  $i += 1;
                } else {
                  $i = 1;
                }
            ?>
                <div class="item">
                  <div class="team-img">
                    <img src="<?php if (!empty($meta_values['benef-img'][0])) {
                                echo wp_get_attachment_image_url($meta_values['benef-img'][0]);
                              } else {
                                echo get_stylesheet_directory_uri() . '/assets/images/team1.png';
                              } ?>" alt="img">
                  </div>
                  <div class="team-tittle text-left mt-3 mb-3">
                    <div class="name-img">
                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg<?php echo $i; ?>.png" alt="img">
                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg-hvr.png" class="black-img" alt="img">
                      <h3 class="name mb-0"><?= $meta_values['benef-title'][0] ?></h3>
                    </div>
                    <p class="sub-heading mb-0 mt-1 text-center text-black"><?= $meta_values['benef-desc'][0] ?></p>
                    <!-- <div class="social-icons text-center">
                  <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="twt"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="drb"><i class="fab fa-dribbble"></i></a>
                </div> -->
                  </div>
                </div>
            <?php
              // Listar todos os metadados do post
              // $meta_values = get_post_meta(get_the_ID());
              // if ($meta_values) {
              // print_r($meta_values);
              // }
              endwhile;
              wp_reset_postdata(); // Reseta os dados da query
            else :
              echo '<p>No posts found</p>';
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Team sec End-->

  <!--Portfolio section start-->
  <section class="portfolio-sec padding-top padding-bottom bg-light-gray" id="portfolio-sec">
    <div class="container">
      <div class="row portfolio-heading-area text-center text-lg-left">
        <div class="col-6 col-md-10 offset-md-1 col-lg-5 offset-lg-0">
          <h4 class="heading wow fadeInLeft"><?= $textos['header-title-s5'][0] ?></h4>
        </div>
        <div class="col-12 col-md-10 offset-md-1 col-lg-7 offset-lg-0">
          <p class="text wow fadeInRight">
            <?= $textos['description-s5'][0] ?>
          </p>
        </div>
      </div>
      <div class="row position-relative">
        <div class="col-12">
          <div class="portfolio-carousel owl-carousel owl-item">
            <?php
            // Query custom post type 'Valores'
            $args = array(
              'post_type' => 'banners', // Nome do post type
              'posts_per_page' => -1,   // Número de posts para mostrar, -1 para todos
              'post_status' => 'publish',
              'order' => 'asc' // Apenas posts publicados
            );

            // Executar a query
            $valores_query = new WP_Query($args);

            // Loop customizado
            if ($valores_query->have_posts()) :
              while ($valores_query->have_posts()) : $valores_query->the_post();
                // Exibir título e conteúdo do post
                // Listar todos os metadados do post
                $meta_values = get_post_meta(get_the_ID());
            ?>
                <div class="item">
                  <div class="portfolio-image">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/p1.jpg"> -->
                    <img src="<?php if (!empty($meta_values['banner-img'][0])) {
                                echo wp_get_attachment_image_url($meta_values['banner-img'][0]);
                              } else {
                                echo get_stylesheet_directory_uri() . '/assets/images/p1.jpg';
                              } ?>">
                  </div>
                  <div class="row no-gutters portfolio-footer padding-top">
                    <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                      <div class="portfolio-mini-detail">
                        <h4 class="portfolio-mini-heading"><?= $meta_values['banner-cliente'][0] ?></h4>
                        <p class="text">Cliente</p>
                      </div>
                    </div>
                    <div class="col-4 col-lg-4 d-flex justify-content-center">
                      <div class="portfolio-mini-detail">
                        <h4 class="portfolio-mini-heading"><?= $meta_values['banner-data'][0] ?></h4>
                        <p class="text">Data</p>
                      </div>
                    </div>
                    <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                      <div class="portfolio-mini-detail">
                        <h4 class="portfolio-mini-heading"><?= $meta_values['banner-servico'][0] ?></h4>
                        <p class="text">Serviço</p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              // Listar todos os metadados do post
              // $meta_values = get_post_meta(get_the_ID());
              // if ($meta_values) {
              // print_r($meta_values['active'][0]);
              // }
              endwhile;
              wp_reset_postdata(); // Reseta os dados da query
            else : ?>
              <div class="item">
                <div class="portfolio-image">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/p1.jpg">
                </div>
                <div class="row no-gutters portfolio-footer padding-top">
                  <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                    <div class="portfolio-mini-detail">
                      <h4 class="portfolio-mini-heading">#</h4>
                      <p class="text">Cliente</p>
                    </div>
                  </div>
                  <div class="col-4 col-lg-4 d-flex justify-content-center">
                    <div class="portfolio-mini-detail">
                      <h4 class="portfolio-mini-heading">#</h4>
                      <p class="text">Data</p>
                    </div>
                  </div>
                  <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                    <div class="portfolio-mini-detail">
                      <h4 class="portfolio-mini-heading">#</h4>
                      <p class="text">Serviço</p>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endif;
            ?>
          </div>
        </div>
        <a class="portfolio-links" id="portfolio-arr-left"><i class="fas fa-angle-left"></i> </a>
        <a class="portfolio-links" id="portfolio-arr-right"><i class="fas fa-angle-right"></i> </a>
      </div>
    </div>
  </section>
  <!--Portfolio section end-->

  <!--Pricing section start-->
  <section class="pricing-sec padding-top padding-bottom" id="pricing-sec">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 offset-md-1 pricing-heading-area text-center">
          <h4 class="heading"><?= $textos['header-title-s6'][0]; ?></h4>
          <p class="text">
            <?= $textos['description-s6'][0]; ?>
          </p>
        </div>
      </div>
      <div class="row pricing-cards">
        <?php
        // Query custom post type 'Valores'
        $args = array(
          'post_type' => 'valores', // Nome do post type
          'posts_per_page' => -1,   // Número de posts para mostrar, -1 para todos
          'post_status' => 'publish' // Apenas posts publicados
        );

        // Executar a query
        $valores_query = new WP_Query($args);

        // Loop customizado
        if ($valores_query->have_posts()) :
          while ($valores_query->have_posts()) : $valores_query->the_post();
            // Exibir título e conteúdo do post
            // Listar todos os metadados do post
            $meta_values = get_post_meta(get_the_ID());
        ?>
            <div class="col-12 col-md-6 col-lg-3 pricing-card">
              <div class="pricing-box wow fadeInUp">
                <div class="pricing-box-header position-relative">
                  <div class="pricing-header-overlay"></div>
                  <div class="header-content">
                    <h4 class="pricing-price color-green"><?php print_r($meta_values['valor']['0']) ?></h4>
                    <i class="lni lni-real real">R$</i>
                    <p class="sub-text"><?php print_r($meta_values['titulo-valor']['0']) ?></p>
                  </div>
                </div>
                <div class="pricing-box-detail position-relative">
                  <div class="pricing-detail-overlay"></div>
                  <ul>
                    <?php print_r($meta_values['descricao-valor']['0']) ?>
                  </ul>
                </div>
              </div>
            </div>

        <?php
          // Listar todos os metadados do post
          // $meta_values = get_post_meta(get_the_ID());
          // if ($meta_values) {
          // print_r($meta_values['active'][0]);
          // }
          endwhile;
          wp_reset_postdata(); // Reseta os dados da query
        else :
          echo '<p>No posts found</p>';
        endif;
        ?>

      </div>
    </div>
  </section>
  <!--Pricing section end-->

  <style>
    @media screen and (max-width: 768px) {
      .row.mt-5.reverse {
        flex-direction: column-reverse !important;
      }
    }
  </style>

  <!--Blog section start-->
  <section id="blog-sec" class="blog-sec padding-top padding-bottom bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="blog-img wow fadeInLeft">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/blog-mokeup.png">
            <img src="<?php if (!empty($textos['image1-s7'][0])) {
                        echo wp_get_attachment_image_url($textos['image1-s7'][0]);
                      } else {
                        echo get_stylesheet_directory_uri() . '/assets/images/blog-mokup-img.png';
                      } ?>" id="mokeup-img">
          </div>
        </div>
        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0 text-center text-lg-left">
          <div class="blog-detail wow fadeInRight">
            <h4 class="heading"><?= $textos['header1-title-s7'][0]; ?></h4>
            <p class="text"><?= $textos['description1-s7'][0]; ?></p>
            <a class="btn blue-btn btn-hvr btn-hvr-green rounded-pill" href="design-agency/standalone.html">Conheça Mais
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
      <div class="row mt-5 reverse">
        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0 text-center text-lg-left">
          <div class="blog-detail wow fadeInRight">
            <h4 class="heading"><?= $textos['header2-title-s7'][0]; ?></h4>
            <p class="text"><?= $textos['description2-s7'][0]; ?></p>
            <a class="btn blue-btn btn-hvr btn-hvr-green rounded-pill" href="design-agency/standalone.html">Conheça Mais
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="blog-img wow fadeInLeft">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/blog-mokeup.png">
            <img src="<?php if (!empty($textos['image2-s7'][0])) {
                        echo wp_get_attachment_image_url($textos['image2-s7'][0]);
                      } else {
                        echo get_stylesheet_directory_uri() . '/assets/images/blog-mokup-img.png';
                      } ?>" id="mokeup-img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog section end-->

  <!--sponsers section start-->
  <!-- LightWidget WIDGET -->
  <div class="container">
    <!-- LightWidget WIDGET -->
    <!-- LightWidget WIDGET -->
    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/07c601db698f5aaa9bdad305d59ebf4a.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
  </div>
  <!--sponsers section end-->

  <!--testimonial section start-->
  <div class="testimonial-sec padding-top padding-bottom position-relative" id="testimonial-sec">
    <div class="container">
      <div class="testimonial-area">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-0 order-2 order-lg-1">
            <div class="testimonial-carousel wow fadeInRight">
              <div class="testimonial-box owl-carousel owl-theme">
                <?php
                // Query custom post type 'Valores'
                $args = array(
                  'post_type' => 'depoimentos', // Nome do post type
                  'posts_per_page' => -1,   // Número de posts para mostrar, -1 para todos
                  'post_status' => 'publish' // Apenas posts publicados
                );

                // Executar a query
                $valores_query = new WP_Query($args);

                // Loop customizado
                if ($valores_query->have_posts()) :
                  while ($valores_query->have_posts()) : $valores_query->the_post();
                    // Exibir título e conteúdo do post
                    // Listar todos os metadados do post
                    $meta_values = get_post_meta(get_the_ID());
                ?>
                    <div class="item text-center">
                      <div class="icon-holder">
                        <i class="fas fa-quote-right"></i>
                      </div>
                      <p class="text">
                        <?= $meta_values['depoimento-desc'][0] ?>
                      </p>
                      <div class="img-holder">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/test1.jpg"> -->
                        <img src="<?php if (!empty($meta_values['depoimento-img'][0])) {
                                    echo wp_get_attachment_image_url($meta_values['depoimento-img'][0]);
                                  } else {
                                    echo get_stylesheet_directory_uri() . '/assets/images/test1.jpg';
                                  } ?>">
                      </div>
                      <h4 class="user-name"><?= $meta_values['depoimento-cliente'][0] ?></h4>
                    </div>
                  <?php
                  // Listar todos os metadados do post
                  // $meta_values = get_post_meta(get_the_ID());
                  // if ($meta_values) {
                  // print_r($meta_values['active'][0]);
                  // }
                  endwhile;
                  wp_reset_postdata(); // Reseta os dados da query
                else :
                  ?>
                  <div class="item text-center">
                    <div class="icon-holder">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <p class="text">
                      Sem depoimento...
                    </p>
                    <div class="img-holder">
                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/test2.jpg">
                    </div>
                    <h4 class="user-name">Não há depoimentos :c</h4>
                  </div>
                <?php
                endif;
                ?>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-10 offset-md-1 col-lg-5 offset-lg-0 order-1 order-lg-2 offset-lg-1 d-flex justify-content-center align-items-center text-center text-lg-left">
            <div class="testimonial-details wow fadeInLeft">
              <h4 class="heading">Depoimentos <span>Clientes</span></h4>
              <p class="text">
                Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been
                the industry’s standard dummy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--testimonial section end-->

  <!--sponsers section start-->
  <div class="sponser-sec padding-top padding-bottom bg-light-gray" id="sponser-sec">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="sponser-tags owl-carousel owl-theme">
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/brand4.png">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/brand4.png">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/brand4.png">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/brand4.png">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/brand4.png">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/brand4.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- sponsers section end -->

  <!--Contact section start-->
  <section class="contact-sec padding-top padding-bottom" id="contact-sec">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-7 wow fadeInLeft">
          <h4 class="heading text-center text-lg-left">Duvidas ? <span>Entre em contato</span></h4>
          <?php echo do_shortcode('[wpforms id="42"]');?>	
        </div>
        <div class="col-12 col-lg-5 text-center text-lg-left position-relative d-flex align-items-center">
          <div class="contact-details wow fadeInRight">
            <ul>
              <li><i class="las la-map-marker addr color-blue"></i>123 Park Avenue, New York, United
                States </li>
              <li><i class="las la-phone-volume phone color-yellow"></i>
                <span>+1 631 1234 5678</span>
                <span>+1 631 1234 5678</span>
              </li>
              <li><i class="las la-paper-plane email color-green"></i>email@website.com</li>
            </ul>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/contact-background.png" class="contact-background" alt="contact">
        </div>
      </div>
    </div>
  </section>
  <!--Contact section end-->

  <!--Footer Start-->
  <?php get_footer(); ?>