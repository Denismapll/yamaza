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

      <a class="navbar-brand link" href="index-design-agency.html">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/logo-white-small.png" class="logo" alt="logo">
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
              <a href="index-design-agency.html" class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/logo-white.png" alt="logo"></a>
            </div>
            <div class="col-12 col-lg-8">
              <nav class="side-nav w-100">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#feature-sec">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#portfolio-sec">Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#pricing-sec">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#contact-sec">Contact</a>
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
                <p class="text-white">&copy; 2023 MegaOne. Made With Love by Themesindustry</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

  </header>
  <!--Header End-->

  <!--Banner start-->
  <section class="banner-slider position-relative cursor-light" id="banner-slider">
    <div class="row banner-slider-row no-gutters">
      <div class="col-12 col-lg-6 bg-blue banner-left-area d-flex justify-content-center align-items-center wow slideInLeft" data-wow-delay=".8s">
        <div class="left-banner">
          <div class="container">
            <div class="detail-text">
              <div class="inner-content position-relative text-center" data-depth="0.05">
                <h4 class="heading">Design.<span>Revolution</span></h4>
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
                <span class="sub-heading">Simple & Easy</span>
                <h4 class="heading">Digital Marketing</h4>
                <p class="text">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem
                  Ipsum has been the industry’s standard dummy. </p>
                <a class="btn white-trans-btn rounded-pill white-trans-btn-yellow-hvr">Get Started Now
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
                <span class="sub-heading">Simple & Easy</span>
                <h4 class="heading">Creative Websites</h4>
                <p class="text">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem
                  Ipsum has been the industry’s standard dummy. </p>
                <a class="btn white-trans-btn rounded-pill white-trans-btn-green-hvr">Get Started Now
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
              <h4 class="heading">We are Digital Agency</h4>
              <p class="text">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem
                Ipsum has been the industry’s standard dummy. </p>
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
              <p class="card-text sub-heading text-black">We have some creative ideas for you.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="card box text-center">
            <div class="feature-icon text-center">
              <i class="lni lni-briefcase color-green"></i>
            </div>
            <div class="card-body">
              <p class="card-text sub-heading text-black">Your business is our top priority.</p>
            </div>
          </div>

        </div>

        <div class="col-12 col-lg-4">
          <div class="card box text-center">
            <div class="feature-icon text-center">
              <i class="lni lni-heart"></i>
            </div>
            <div class="card-body">
              <p class="card-text sub-heading text-black">We love our valued customers.</p>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-12 padding-top-half text-center">
          <a href="#" class="btn blue-btn btn-hvr btn-hvr-yellow rounded-pill">Start Your Project
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
              <span class="sub-heading">Let us show you some stats</span>
              <h4 class="heading mt-3 mb-4">We have done great stuff over the past few years.</h4>
              <p class="text mb-3">There are many variations of passages of Lorem Ipsum available, but the
                majority have suffered alteration in some form, by injected .</p>
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
                  <h1 class="numbering">500+</h1>
                  <p class="stat-sub-heading">Happy Clients</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".2">
              <div class="stats-box d-flex">
                <div class="stats-icon">
                  <i class="fas fa-list color-blue"></i>
                </div>
                <div class="stats-box-text ml-4">
                  <h1 class="numbering">10740+</h1>
                  <p class="stat-sub-heading">Lines of Code</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".4">
              <div class="stats-box d-flex">
                <div class="stats-icon">
                  <i class="fas fa-check color-yellow"></i>
                </div>
                <div class="stats-box-text ml-4">
                  <h1 class="numbering">200+</h1>
                  <p class="stat-sub-heading">Project Completed</p>
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
            <h1 class="main-heading mb-4">Meet The Team</h1>
            <p class="sub-heading mb-4">Lorem ipsum is simply dummy text of the printing and typesetting.
              Lorem Ipsum has been the industry’s standard dummy.</p>
          </div>
        </div>
      </div>

      <div class="row padding-top-half">
        <div class="col-12">

          <div id="team-carousal" class="owl-carousel owl-theme team-owl mt-100 text-center">
            <div class="item">
              <div class="team-img">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team1.png" alt="img">
              </div>
              <div class="team-tittle text-left mt-3 mb-3">
                <div class="name-img">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg1.png" alt="img">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg-hvr.png" class="black-img" alt="img">
                  <h3 class="name mb-0">Alex Stoke</h3>
                </div>
                <p class="sub-heading mb-0 mt-1 text-center text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi placeat pariatur nulla quo vero excepturi architecto rem modi atque velit? Sapiente, impedit laudantium? Tenetur velit repellendus nesciunt delectus? Quae, aut!</p>
                <!-- <div class="social-icons text-center">
                  <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="twt"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="drb"><i class="fab fa-dribbble"></i></a>
                </div> -->
              </div>
            </div>
            <div class="item">
              <div class="team-img mt-20">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team2.png" alt="img">
              </div>
              <div class="team-tittle text-left mt-3 mb-3">
                <div class="name-img">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg2.png" alt="img">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg-hvr.png" class="black-img" alt="img">
                  <h3 class="name mb-0">Lisa Waren</h3>
                </div>
                <p class="sub-heading mb-0 mt-1 text-center text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aspernatur recusandae doloribus dignissimos nulla laboriosam ut unde modi consectetur quod, necessitatibus accusantium et? Facere tempore, optio atque inventore natus maxime?</p>
                <!-- <div class="social-icons text-center">
                  <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="twt"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="drb"><i class="fab fa-dribbble"></i></a>
                </div> -->
              </div>
            </div>
            <div class="item">
              <div class="team-img mt-20">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team3.png" alt="img">
              </div>
              <div class="team-tittle text-left mt-3 mb-3">
                <div class="name-img">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg3.png" alt="img">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/team-bg-hvr.png" class="black-img" alt="img">
                  <h3 class="name mb-0">Lisa Waren</h3>
                </div>
                <p class="sub-heading mb-0 mt-1 text-center text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minima autem voluptas facilis cupiditate magnam vero alias et officiis dignissimos tempore maiores unde, velit quibusdam labore nam? At, pariatur iusto.</p>
                <!-- <div class="social-icons text-center">
                  <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="twt"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="drb"><i class="fab fa-dribbble"></i></a>
                </div> -->
              </div>
            </div>
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
          <h4 class="heading wow fadeInLeft">Latest & <span>Creative Work</span></h4>
        </div>
        <div class="col-12 col-md-10 offset-md-1 col-lg-7 offset-lg-0">
          <p class="text wow fadeInRight">
            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the
            industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.
          </p>
        </div>
      </div>
      <div class="row position-relative">
        <div class="col-12">
          <div class="portfolio-carousel owl-carousel owl-item">
            <div class="item">
              <div class="portfolio-image">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/p1.jpg">
              </div>
              <div class="row no-gutters portfolio-footer padding-top">
                <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Earphones</h4>
                    <p class="text">Client</p>
                  </div>
                </div>
                <div class="col-4 col-lg-4 d-flex justify-content-center">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Aug 2020</h4>
                    <p class="text">Date</p>
                  </div>
                </div>
                <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Website Design</h4>
                    <p class="text">Services</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-image">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/p2.jpg">
              </div>
              <div class="row no-gutters portfolio-footer padding-top">
                <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Laptops</h4>
                    <p class="text">Client</p>
                  </div>
                </div>
                <div class="col-4 col-lg-4 d-flex justify-content-center">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Sep 2020</h4>
                    <p class="text">Date</p>
                  </div>
                </div>
                <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Website SEO</h4>
                    <p class="text">Services</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-image">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/p3.jpg">
              </div>
              <div class="row no-gutters portfolio-footer padding-top">
                <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Spray Tans</h4>
                    <p class="text">Client</p>
                  </div>
                </div>
                <div class="col-4 col-lg-4 d-flex justify-content-center">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">June 2020</h4>
                    <p class="text">Date</p>
                  </div>
                </div>
                <div class="col-4 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                  <div class="portfolio-mini-detail">
                    <h4 class="portfolio-mini-heading">Website SEO</h4>
                    <p class="text">Services</p>
                  </div>
                </div>
              </div>
            </div>
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
          <h4 class="heading">Web Design Packages</h4>
          <p class="text">
            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the
            industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.
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
          //   print_r($meta_values);
          // }
          endwhile;
          wp_reset_postdata(); // Reseta os dados da query
        else :
          echo '<p>No posts found</p>';
        endif;
        ?>
        <div class="col-12 col-md-6 col-lg-3 pricing-card">
          <div class="pricing-box wow fadeInUp">
            <div class="pricing-box-header position-relative">
              <div class="pricing-header-overlay"></div>
              <div class="header-content">
                <h4 class="pricing-price color-green">4.99</h4>
                <i class="lni lni-real real">R$</i>
                <p class="sub-text">Monthly Billing</p>
              </div>
            </div>
            <div class="pricing-box-detail position-relative">
              <div class="pricing-detail-overlay"></div>
              <ul>
                <li>Full access</li>
                <li>Unlimited Bandwidth</li>
                <li>Email Accounts</li>
                <li>4 Free Forks Every Months</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 pricing-card">
          <div class="pricing-box wow fadeInUp" data-wow-delay=".3s">
            <div class="pricing-box-header position-relative">
              <div class="pricing-header-overlay"></div>
              <div class="header-content">
                <h4 class="pricing-price color-yellow">11.95</h4>
                <i class="lni lni-real real">R$</i>
                <p class="sub-text">Quarterly Billing</p>
              </div>
            </div>
            <div class="pricing-box-detail position-relative">
              <div class="pricing-detail-overlay"></div>
              <ul>
                <li>Full access</li>
                <li>Unlimited Bandwidth</li>
                <li>Email Accounts</li>
                <li>4 Free Forks Every Months</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 pricing-card">
          <div class="pricing-box wow fadeInUp" data-wow-delay=".5s">
            <div class="pricing-box-header position-relative">
              <div class="pricing-header-overlay"></div>
              <div class="header-content">
                <h4 class="pricing-price color-blue">25.99</h4>
                <i class="lni lni-real real">R$</i>
                <p class="sub-text">Biannual Billing</p>
              </div>
            </div>
            <div class="pricing-box-detail position-relative">
              <div class="pricing-detail-overlay"></div>
              <ul>
                <li>Full access</li>
                <li>Unlimited Bandwidth</li>
                <li>Email Accounts</li>
                <li>4 Free Forks Every Months</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 pricing-card">
          <div class="pricing-box wow fadeInUp" data-wow-delay=".7s">
            <div class="pricing-box-header position-relative">
              <div class="pricing-header-overlay"></div>
              <div class="header-content">
                <h4 class="pricing-price color-green">45.95</h4>
                <i class="lni lni-real real">R$</i>
                <p class="sub-text">Yearly Billing</p>
              </div>
            </div>
            <div class="pricing-box-detail position-relative">
              <div class="pricing-detail-overlay"></div>
              <ul>
                <li>Full access</li>
                <li>Unlimited Bandwidth</li>
                <li>Email Accounts</li>
                <li>4 Free Forks Every Months</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Pricing section end-->

  <!--Blog section start-->
  <section id="blog-sec" class="blog-sec padding-top padding-bottom bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="blog-img wow fadeInLeft">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/blog-mokeup.png">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/blog-mokup-img.png" id="mokeup-img">
          </div>
        </div>
        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0 text-center text-lg-left">
          <div class="blog-detail wow fadeInRight">
            <h4 class="heading">Design Blogs</h4>
            <p class="text">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum
              has been the industry.</p>
            <a class="btn blue-btn btn-hvr btn-hvr-green rounded-pill" href="design-agency/standalone.html">Learn More
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog section end-->

  <!--testimonial section start-->
  <div class="testimonial-sec padding-top padding-bottom position-relative" id="testimonial-sec">
    <div class="container">
      <div class="testimonial-area">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-0 order-2 order-lg-1">
            <div class="testimonial-carousel wow fadeInRight">
              <div class="testimonial-box owl-carousel owl-theme">
                <div class="item text-center">
                  <div class="icon-holder">
                    <i class="fas fa-quote-right"></i>
                  </div>
                  <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi,
                    vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet
                    tellus, eu euismod dolor enim et mi. In at tempor purus.
                  </p>
                  <div class="img-holder">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/test1.jpg">
                  </div>
                  <h4 class="user-name">Sara Williams</h4>
                </div>
                <div class="item text-center">
                  <div class="icon-holder">
                    <i class="fas fa-quote-right"></i>
                  </div>
                  <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi,
                    vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet
                    tellus, eu euismod dolor enim et mi. In at tempor purus.
                  </p>
                  <div class="img-holder">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/test2.jpg">
                  </div>
                  <h4 class="user-name">Julia Miltese</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-10 offset-md-1 col-lg-5 offset-lg-0 order-1 order-lg-2 offset-lg-1 d-flex justify-content-center align-items-center text-center text-lg-left">
            <div class="testimonial-details wow fadeInLeft">
              <h4 class="heading">Happy <span>Customers</span></h4>
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
  <!--sponsers section end-->

  <!--Contact section start-->
  <section class="contact-sec padding-top padding-bottom" id="contact-sec">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-7 wow fadeInLeft">
          <h4 class="heading text-center text-lg-left">Questions? <span>Let's Get In Touch</span></h4>
          <form class="row contact-form" id="contact-form-data">
            <div class="col-sm-12" id="result"></div>
            <div class="col-12 col-md-5">
              <input type="text" name="userName" placeholder="Your Name" class="form-control">
              <input type="email" name="userEmail" placeholder="Email Address *" class="form-control">
              <input type="text" name="userSubject" placeholder="Subject" class="form-control">
            </div>
            <div class="col-12 col-md-7">
              <textarea class="form-control" name="userMessage" rows="6">Your Message</textarea>
            </div>
            <div class="col-12">
              <a href="javascript:void(0);" class="btn green-btn btn-hvr btn-hvr-blue rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i>Send Message
                <span></span><span></span><span></span><span></span><span></span>
              </a>
            </div>
          </form>
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