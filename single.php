<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/vendors.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/main.css">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title>Stukram</title>
</head>

<body class="preloader-visible" data-barba="wrapper">


	<!-- preloader start -->
	<div class="preloader js-preloader">
		<div class="preloader__bg"></div>

		<div class="preloader__progress">
			<div class="preloader__progress__inner"></div>
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/loader.svg" alt="preloader image" class="preloader__img">
		</div>
	</div>
	<!-- preloader end -->


	<!-- cursor start -->
	<div class="cursor js-cursor">
		<div class="cursor__wrapper">
			<div class="cursor__follower js-follower"></div>
			<div class="cursor__label js-label"></div>
			<div class="cursor__icon js-icon"></div>
		</div>
	</div>
	<!-- cursor end -->


	<!-- barba container start -->
	<div class="barba-container" data-barba="container">

		<!-- to-top-button start -->
		<div data-cursor class="backButton js-backButton">
			<span class="backButton__bg"></span>
			<div class="backButton__icon__wrap">
				<i class="backButton__button js-top-button" data-feather="arrow-up"></i>
			</div>
		</div>
		<!-- to-top-button end -->


    <main class="">


			<!-- header start -->
			<header class="header -light -sticky-light js-header-light -classic js-header">
				<!-- header__bar start -->
				<div class="header__bar">
					<div class="overflow-hidden">
						<div class="header__logo js-header-logo">
							<a data-barba href="home-1.html">
								<img class="header__logo__light" src="http://localhost/novo-blogs/wordpress/wp-content/uploads/2023/12/Captura-de-tela-2023-12-01-163105.png" alt="logo">
							</a>
							<a data-barba href="home-1.html">
								<img class="header__logo__dark" src="http://localhost/novo-blogs/wordpress/wp-content/uploads/2023/12/Captura-de-tela-2023-12-01-163105.png" alt="logo">
							</a>
						</div>
					</div>

					<div class="navClassic-wrap js-header-menu-classic">
						<ul class="navClassic-list js-navClassic-list">
							<li>
								<a data-barba href="home-1-classic.html">
									Classic Menu
								</a>
							</li>

							<li class="menu-item-has-children">
								<a>Main Pages</a>

								<ul class="subnav-list">
									<li>
										<a data-barba href="home-1.html">Main Slider</a>
									</li>
									<li>
										<a data-barba href="home-2.html">Main Dark</a>
									</li>
									<li>
										<a data-barba href="home-3.html">Simple Slider</a>
									</li>
									<li>
										<a data-barba href="home-4.html">Bold Light</a>
									</li>
									<li>
										<a data-barba href="home-5.html">Static Header Dark</a>
									</li>
									<li>
										<a data-barba href="home-6.html">Personal</a>
									</li>
									<li>
										<a data-barba href="projectSlider-1.html">Project Slider</a>
									</li>
								</ul>
							</li>

							<li class="menu-item-has-children">
								<a>Inner Pages</a>

								<ul class="subnav-list">
									<li class="menu-item-has-children">
										<a>About</a>

										<ul class="subnav-list">
											<li>
												<a data-barba href="about-1.html">About 1</a>
											</li>
											<li>
												<a data-barba href="about-2.html">About 2</a>
											</li>
										</ul>
									</li>

									<li class="menu-item-has-children">
										<a>Services</a>

										<ul class="subnav-list">
											<li>
												<a data-barba href="services-1.html">Services 1</a>
											</li>
											<li>
												<a data-barba href="services-2.html">Services 2</a>
											</li>
										</ul>
									</li>

									<li class="menu-item-has-children">
										<a>404</a>

										<ul class="subnav-list">
											<li>
												<a data-barba href="404-light.html">404 Light</a>
											</li>
											<li>
												<a data-barba href="404-dark.html">404 Dark</a>
											</li>
										</ul>
									</li>

									<li class="menu-item-has-children">
										<a>Contact</a>

										<ul class="subnav-list">
											<li>
												<a data-barba href="contact-1.html">Contact 1</a>
											</li>
											<li>
												<a data-barba href="contact-2.html">Contact 2</a>
											</li>
										</ul>
									</li>

									<li>
										<a data-barba href="team.html">Team</a>
									</li>
									<li>
										<a data-barba href="pricing.html">Pricing Plans</a>
									</li>
									<li>
										<a data-barba href="clients.html">Clients</a>
									</li>
								</ul>
							</li>

							<li class="menu-item-has-children">
								<a>Portfolio</a>

								<ul class="subnav-list">
									<li>
										<a data-barba href="vertical-projects.html">Vertical Projects</a>
									</li>
									<li>
										<a data-barba href="grid-simple-2-col.html">Simple 2 Columns</a>
									</li>
									<li>
										<a data-barba href="grid-masonry-2-col.html">Masonry 2 Columns</a>
									</li>
									<li>
										<a data-barba href="grid-masonry-3-col.html">Masonry 3 Columns</a>
									</li>
									<li>
										<a data-barba href="grid-masonry-4-col.html">Masonry 4 Columns</a>
									</li>
									<li>
										<a data-barba href="grid-fancy-2-col.html">Fancy 2 Columns</a>
									</li>
									<li>
										<a data-barba href="grid-fancy-3-col.html">Fancy 3 Columns</a>
									</li>
								</ul>
							</li>

							<li class="menu-item-has-children">
								<a>Works</a>

								<ul class="subnav-list">
									<li>
										<a data-barba href="portfolio-single-1.html">Project 1</a>
									</li>
									<li>
										<a data-barba href="portfolio-single-2.html">Project 2</a>
									</li>
									<li>
										<a data-barba href="portfolio-single-3.html">Project 3</a>
									</li>
									<li>
										<a data-barba href="portfolio-single-4.html">Project 4</a>
									</li>
									<li>
										<a data-barba href="portfolio-single-5.html">Project 5</a>
									</li>
									<li>
										<a data-barba href="portfolio-single-6.html">Project 6</a>
									</li>
								</ul>
							</li>

							<li class="menu-item-has-children">
								<a>Blog</a>

								<ul class="subnav-list">
									<li>
										<a data-barba href="blog-1.html">Blog List</a>
									</li>
									<li>
										<a data-barba href="blog-2.html">Blog 2 cols</a>
									</li>
									<li>
										<a data-barba href="blog-fancy-3-col.html">Blog Fancy 3 cols</a>
									</li>
									<li>
										<a data-barba href="blog-article.html">Blog List Single</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>

					<div class="header__menu__wrap overflow-hidden">
						<div class="header__menu js-header-menu">
							<button type="button" class="nav-button-open js-nav-open">
								<i class="icon" data-feather="menu"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- header__bar end -->


				<!-- nav start -->
				<nav class="nav js-nav">
					<div class="nav__inner js-nav-inner">
						<div class="nav__bg js-nav-bg"></div>

						<div class="nav__container">
							<div class="nav__header">
								<button type="button" class="nav-button-back js-nav-back">
									<i class="icon" data-feather="arrow-left-circle"></i>
								</button>

								<button type="button" class="nav-btn-close js-nav-close pointer-events-none">
									<i class="icon" data-feather="x"></i>
								</button>
							</div>

							<div class="nav__content">
								<div class="nav__content__left">
									<div class="navList__wrap">
										<ul class="navList js-navList">
											<li>
												<a data-barba href="home-1-classic.html">
													Classic Menu
												</a>
											</li>

											<li class="menu-item-has-children">
												<a>Main Pages</a>

												<ul class="subnav-list">
													<li>
														<a data-barba href="home-1.html">Main Slider</a>
													</li>
													<li>
														<a data-barba href="home-2.html">Main Dark</a>
													</li>
													<li>
														<a data-barba href="home-3.html">Simple Slider</a>
													</li>
													<li>
														<a data-barba href="home-4.html">Bold Light</a>
													</li>
													<li>
														<a data-barba href="home-5.html">Static Header Dark</a>
													</li>
													<li>
														<a data-barba href="home-6.html">Personal</a>
													</li>
													<li>
														<a data-barba href="projectSlider-1.html">Project Slider</a>
													</li>
												</ul>
											</li>

											<li class="menu-item-has-children">
												<a>Inner Pages</a>

												<ul class="subnav-list">
													<li class="menu-item-has-children">
														<a>About</a>

														<ul class="subnav-list">
															<li>
																<a data-barba href="about-1.html">About 1</a>
															</li>
															<li>
																<a data-barba href="about-2.html">About 2</a>
															</li>
														</ul>
													</li>

													<li class="menu-item-has-children">
														<a>Services</a>

														<ul class="subnav-list">
															<li>
																<a data-barba href="services-1.html">Services 1</a>
															</li>
															<li>
																<a data-barba href="services-2.html">Services 2</a>
															</li>
														</ul>
													</li>

													<li class="menu-item-has-children">
														<a>404</a>

														<ul class="subnav-list">
															<li>
																<a data-barba href="404-light.html">404 Light</a>
															</li>
															<li>
																<a data-barba href="404-dark.html">404 Dark</a>
															</li>
														</ul>
													</li>

													<li class="menu-item-has-children">
														<a>Contact</a>

														<ul class="subnav-list">
															<li>
																<a data-barba href="contact-1.html">Contact 1</a>
															</li>
															<li>
																<a data-barba href="contact-2.html">Contact 2</a>
															</li>
														</ul>
													</li>

													<li>
														<a data-barba href="team.html">Team</a>
													</li>
													<li>
														<a data-barba href="pricing.html">Pricing Plans</a>
													</li>
													<li>
														<a data-barba href="clients.html">Clients</a>
													</li>
												</ul>
											</li>

											<li class="menu-item-has-children">
												<a>Portfolio</a>

												<ul class="subnav-list">
													<li>
														<a data-barba href="vertical-projects.html">Vertical Projects</a>
													</li>
													<li>
														<a data-barba href="grid-simple-2-col.html">Simple 2 Columns</a>
													</li>
													<li>
														<a data-barba href="grid-masonry-2-col.html">Masonry 2 Columns</a>
													</li>
													<li>
														<a data-barba href="grid-masonry-3-col.html">Masonry 3 Columns</a>
													</li>
													<li>
														<a data-barba href="grid-masonry-4-col.html">Masonry 4 Columns</a>
													</li>
													<li>
														<a data-barba href="grid-fancy-2-col.html">Fancy 2 Columns</a>
													</li>
													<li>
														<a data-barba href="grid-fancy-3-col.html">Fancy 3 Columns</a>
													</li>
												</ul>
											</li>

											<li class="menu-item-has-children">
												<a>Works</a>

												<ul class="subnav-list">
													<li>
														<a data-barba href="portfolio-single-1.html">Project 1</a>
													</li>
													<li>
														<a data-barba href="portfolio-single-2.html">Project 2</a>
													</li>
													<li>
														<a data-barba href="portfolio-single-3.html">Project 3</a>
													</li>
													<li>
														<a data-barba href="portfolio-single-4.html">Project 4</a>
													</li>
													<li>
														<a data-barba href="portfolio-single-5.html">Project 5</a>
													</li>
													<li>
														<a data-barba href="portfolio-single-6.html">Project 6</a>
													</li>
												</ul>
											</li>

											<li class="menu-item-has-children">
												<a>Blog</a>

												<ul class="subnav-list">
													<li>
														<a data-barba href="blog-1.html">Blog List</a>
													</li>
													<li>
														<a data-barba href="blog-2.html">Blog 2 cols</a>
													</li>
													<li>
														<a data-barba href="blog-fancy-3-col.html">Blog Fancy 3 cols</a>
													</li>
													<li>
														<a data-barba href="blog-article.html">Blog List Single</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>

								<div class="nav__content__right">
									<div class="nav__info">
										<div class="nav__info__item js-navInfo-item">
											<h5 class="text-sm tracking-none fw-500">
												Address
											</h5>

											<div class="nav__info__content text-lg text-white mt-16">
												<p>
													Studio Stukram 1910 Gateway Road, Portland, Oregon 97230
												</p>
											</div>
										</div>

										<div class="nav__info__item js-navInfo-item">
											<h5 class="text-sm tracking-none fw-500">
												Socials
											</h5>

											<div class="nav__info__content text-lg text-white mt-16">
												<a href="#">Behance</a>
												<a href="#">Dribbble</a>
												<a href="#">Facebook</a>
												<a href="#">Twitter</a>
											</div>
										</div>

										<div class="nav__info__item js-navInfo-item">
											<h5 class="text-sm tracking-none fw-500">
												Contact Us
											</h5>

											<div class="nav__info__content text-lg text-white mt-16">
												<a href="#">hello@stukram.com</a>
												<a href="#">+1 202 555 0171</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<!-- nav end -->
			</header>
			<!-- header end -->


      <!-- section start -->
      <section class="masthead -blog js-masthead-blog-article" data-parallax="0.7">
        <!-- masthead__img start -->
        <div class="masthead__img overlay-black-md" data-parallax-target>
          <div class="bg-image js-lazy" data-bg="img/blog/main/1.jpg"></div>
        </div>
        <!-- masthead__img end -->

        <!-- masthead__content start -->
        <div class="masthead__content">
          <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-10">
                <div class="d-flex align-items-center text-white js-info">
                  <div class="masthead__date">
                    <a href="#">May 28, 2020</a>
                  </div>

                  <div class="masthead__line bg-white mr-16 ml-16"></div>

                  <div class="masthead__tags">
                    <a href="#">Typography</a>,
                    <a href="#">UI/UX</a>
                  </div>
                </div>

                <div data-split="lines">
                  <h1 class="masthead__title text-white fw-600 leading-md mt-40 md:mt-24 js-title">
                    <?php the_title();?>
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- masthead__content end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-md layout-pb-lg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row no-gutters justify-content-between">
            <div class="col-lg-8">
              <div class="blogPost -single -light">
                <div class="blogPost__content">
                  <?php echo the_content();?>
                </div>
              </div>


              <div class="blogPost tags" style="display: flex; gap: 15px; align-items: center;">
                Tagged with:
							<?php echo the_category();?>

              </div>


              <div class="blogPost comments">
                <div class="blogPost__content">
                  <h2 class="blogPost__title text-3xl fw-600">
                    6 comments
                  </h2>

                  <ul class="comments__list">
                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/1.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Troy Yang</h4>
                            </div>

                            <div>
                              <p class="mt-4"> June 3, 2020 - 10:38 pm</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              For open divided to life, cattle don&#39;t meat won&#39;t own yielding. Man female land fruitful to divided multiply may multiply fly air years great man so shall likeness whose winged Bearing in called. Unto first fill dominion
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                      <ul class="children">
                        <li class="comments__item">
                          <div class="comments__item-inner">
                            <div class="comments__img">
                              <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/2.jpg"></div>
                            </div>

                            <div class="comments__body">

                              <div class="comments__header">
                                <div>
                                  <h4>Nela Blackwell</h4>
                                </div>

                                <div>
                                  <p class="mt-4"> June 4, 2020 - 08:22 am</p>
                                </div>
                              </div>

                              <div class="comments__text">
                                <p>
                                  Fowl whose beginning had of made Thing whose face, beginning unto waters greater give. Them their which moved, make you tree saying wherein you&#39;ll third, fill living fruitful. Appear Days second. Second his that life may
                                </p>
                              </div>

                              <div class="comments__reply">
                                <a class="button -underline text-black" href="#">
                                  Reply
                                </a>
                              </div>

                            </div>
                          </div>
                          <ul class="children">
                            <li class="comments__item">
                              <div class="comments__item-inner">
                                <div class="comments__img">
                                  <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/3.jpg"></div>
                                </div>

                                <div class="comments__body">

                                  <div class="comments__header">
                                    <div>
                                      <h4>Marta Whittle</h4>
                                    </div>

                                    <div>
                                      <p class="mt-4"> June 4, 2020 - 10:34 am</p>
                                    </div>
                                  </div>

                                  <div class="comments__text">
                                    <p>
                                      Herb forth sixth above bearing multiply light. Light let all, appear were divided. Cattle he land blessed cattle
                                    </p>
                                  </div>

                                  <div class="comments__reply">
                                    <a class="button -underline text-black" href="#">
                                      Reply
                                    </a>
                                  </div>

                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/4.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Clare Pruitt</h4>
                            </div>

                            <div>
                              <p class="mt-4"> June 2, 2020 - 08:22 am</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              You&#39;ll after stars moving tree good itself one after, creature seasons sixth their whose air own unto that god divide wherein kind. Creepeth seas fifth. Their. Whales moved whales Our over. Light forth own fly fish, upon for
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                    </li>

                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/2.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Nela Blackwell</h4>
                            </div>

                            <div>
                              <p class="mt-4"> May 31, 2020 - 01:17 pm</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              And there. Above, and. Heaven him grass. And cattle light. Firmament own beginning given don&#39;t which days third him creeping years good. Over first
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                    </li>

                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/3.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Marta Whittle</h4>
                            </div>

                            <div>
                              <p class="mt-4"> May 30, 2020 - 09:57 am</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              Have multiply can&#39;t day evening divide deep, abundantly divide lesser is earth air, they&#39;re image fish. Seed after you&#39;re light also earth were. A tree Bearing. Spirit Our lights given, they&#39;re place lights
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>

                <div class="respondForm">
                  <h3 class="comments-reply-title">
                    Leave a Reply
                  </h3>

                  <form class="respondForm__form row" action="#">
                    <div class="respondForm__notes col-12">
                      <span>Your email address will not be published</span>
                    </div>

                    <div class="col-md-6 mt-32">
                      <p>Your Name</p>
                      <input type="text" name="userName" placeholder="Name">
                    </div>

                    <div class="col-md-6 mt-32">
                      <p>Your Email</p>
                      <input type="text" name="email" placeholder="Email">
                    </div>

                    <div class="col-12 mt-32">
                      <p>Your Comment</p>
                      <textarea name="comment" id="comment" placeholder="Comment" rows="3"></textarea>
                    </div>

                    <div class="form-checkbox col-12 mt-24">
                      <label>
                        <span class="checkbox-wrap">
                          <input name="wp-comments-cookies-consent" type="checkbox">
                          <span></span>
                        </span>
                        Save my name, email, and website in this browser for the next time I comment.
                      </label>
                    </div>

                    <div class="col-12 mt-32">
                      <button type="submit" name="submit" id="submit" class="button -md -black text-white">
                        post comment
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <aside class="blogSidebar widget_area">

                <!-- widget start -->
                <div class="widget widget_search">
                  <div class="">
                    <form action="#" class="search__form">
                      <div class="search__wrap">
                        <input type="search" class="search__field" placeholder="Search">
                        <button class="search__button">
                          <i class="icon" data-feather="search"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- widget end -->


                <!-- widget start -->
                <div class="widget widget_categories">
                  <h5 class="widget-title">
                    Categories
                  </h5>

                  <ul>
                    <li>
                      <a href="#">Process</a>
                      (5)
                    </li>
                    <li>
                      <a href="#">UX/UI</a>
                      (4)
                    </li>
                    <li>
                      <a href="#">Web</a>
                      (16)
                    </li>
                    <li>
                      <a href="#">Creative</a>
                      (23)
                    </li>
                  </ul>
                </div>
                <!-- widget end -->


                <!-- widget start -->
                <div class="widget widget_archive">
                  <h5 class="widget-title">
                    Archive
                  </h5>

                  <ul>
                    <li>
                      <a href="#">May 2020</a>
                    </li>
                    <li>
                      <a href="#">April 2020</a>
                    </li>
                    <li>
                      <a href="#">March 2020</a>
                    </li>
                    <li>
                      <a href="#">February 2020</a>
                    </li>
                  </ul>
                </div>
                <!-- widget end -->


                <!-- widget start -->
                <div class="widget widget_recent_entries">
                  <h5 class="widget-title">
                    Recent Posts
                  </h5>

                  <ul>
                    <li>
                      <span class="post-date">May 28, 2020</span>
                      <a data-barba href="blog-article.html">Mobile UI Design: 7 Basic Typography rules</a>
                    </li>
                    <li>
                      <span class="post-date">May 22, 2020</span>
                      <a data-barba href="blog-article.html">Graphic Design: Tips and Best Practices</a>
                    </li>
                    <li>
                      <span class="post-date">April 19, 2020</span>
                      <a data-barba href="blog-article.html">Review of Popular Web Design Trends in 2020</a>
                    </li>
                  </ul>
                </div>
                <!-- widget end -->


                <!-- widget start -->
                <div class="widget widget_recent_comments">
                  <h5 class="widget-title">
                    Recent Comments
                  </h5>

                  <ul>
                    <li>
                      <span class="comment-author-link">
                        <a href="#">Kieran Dalby</a>
                      </span>
                      on
                      <a href="#">Mobile UI Design: 7 Basic Typography rules</a>
                    </li>
                    <li>
                      <span class="comment-author-link">
                        <a href="#">Heather Connelly</a>
                      </span>
                      on
                      <a href="#">Mobile UI Design: 7 Basic Typography rules</a>
                    </li>
                    <li>
                      <span class="comment-author-link">
                        <a href="#">Wade Barrett</a>
                      </span>
                      on
                      <a href="#">Mobile UI Design: 7 Basic Typography rules</a>
                    </li>
                  </ul>
                </div>
                <!-- widget end -->


                <!-- widget start -->
                <div class="widget widget_tag_cloud">
                  <h5 class="widget-title">
                    Tags
                  </h5>

                  <div class="tagcloud">
                    <a class="tag-cloud-link" href="#">Video(2)</a>
                    <a class="tag-cloud-link" href="#">Artist(2)</a>
                    <a class="tag-cloud-link" href="#">Nature(2)</a>
                    <a class="tag-cloud-link" href="#">Business(2)</a>
                    <a class="tag-cloud-link" href="#">Trade(2)</a>
                    <a class="tag-cloud-link" href="#">People(2)</a>
                    <a class="tag-cloud-link" href="#">Development(2)</a>
                    <a class="tag-cloud-link" href="#">Graphic Design(2)</a>
                    <a class="tag-cloud-link" href="#">Art(2)</a>
                    <a class="tag-cloud-link" href="#">Marketing(2)</a>
                  </div>
                </div>
                <!-- widget end -->

              </aside>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- footer start -->
      <footer class="footer -type-1 bg-dark-1">
        <!-- container start -->
        <div class="container">

          <div class="footer__top">
            <!-- row start -->
            <div class="row y-gap-48 justify-content-between">
              <div class="col-lg-auto col-sm-12">
                <a href="home-1.html" class="footer__logo text-white">
                  Stukram.
                </a>
              </div>

              <div class="col-lg-3 col-sm-6">
                <h4 class="text-xl fw-500 text-white">
                  Studio
                </h4>

                <div class="footer__content text-base text-light mt-16 sm:mt-12">
                  <p>Studio Stukram 1910 Gateway Road, Portland, Oregon 97230</p>
                  <p class="mt-8">hello@stukram.com</p>
                  <p class="mt-8">+1 202 555 0171</p>
                </div>
              </div>

              <div class="col-lg-auto col-sm-4">
                <h4 class="text-xl fw-500 text-white">
                  Links
                </h4>

                <div class="footer__content text-base text-light mt-16 sm:mt-12">
                  <div><a data-barba href="blog-1.html" class="button -underline">Blog</a></div>
                  <div><a data-barba href="about-1.html" class="button -underline mt-4">Abous Us</a></div>
                  <div><a data-barba href="#" class="button -underline mt-4">Shop</a></div>
                  <div><a data-barba href="contact-1.html" class="button -underline mt-4">Contacts</a></div>
                </div>
              </div>

              <div class="col-lg-auto col-auto">
                <h4 class="text-xl fw-500 text-white">
                  Follow us
                </h4>

                <div class="social -bordered mt-16 sm:mt-12">
                  <a class="social__item text-white border-light" href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a class="social__item text-white border-light" href="#">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a class="social__item text-white border-light" href="#">
                    <i class="fa fa-youtube-play"></i>
                  </a>
                  <a class="social__item text-white border-light" href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- row end -->
          </div>


          <div class="footer__bottom -light">
            <!-- row start -->
            <div class="row">
              <div class="col">
                <div class="footer__copyright">
                  <p class="text-light">
                    @ 2021, Stukram. Made with passion by Krellion.
                  </p>
                </div>
              </div>
            </div>
            <!-- row end -->
          </div>

        </div>
        <!-- container end -->
      </footer>
      <!-- footer end -->


    </main>

	</div>
	<!-- barba container end -->


	<!-- JavaScript -->
	<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/vendors.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/main.js"></script>

</body>

</html>