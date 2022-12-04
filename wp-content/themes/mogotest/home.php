
<?php
/*
TempLate Name: home
 */
?>

<?php get_header(); ?>
<!-- ! header -->
		<main class="main">
			<!-- ! intro -->
			<div class="intro" id="intro">
				<div class="container">
					<div class="intro__inner">
						<h2 class="intro__suptitle">Creative Template</h2>
						<h1 class="intro__title">Welcome to MoGo</h1>

						<a class="btn" href="#">Learn More</a>
					</div>
				</div>

				<div class="slider">
					<div class="container">
						<div class="slider__inner">
							<div class="slider__item active">
								<span class="slider__num">01</span>
								<span class="slider__text">Intro</span>
							</div>
							<div class="slider__item">
								<span class="slider__num">02</span>
								<span class="slider__text">Work</span>
							</div>
							<div class="slider__item">
								<span class="slider__num">03</span>
								<span class="slider__text">About</span>
							</div>
							<div class="slider__item">
								<span class="slider__num">04</span>
								<span class="slider__text">Contacts</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ! /.intro -->

			<!-- ! about -->
			<section class="section" id="about">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">What we do</h3>
						<h2 class="section__title">Story about us</h2>
						<div class="section__text">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
								enim ad minim veniam, quis nostrud exercitation ullamco laboris
								nisi ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>

					<div class="card">
						<div class="card__item">
							<div class="card__inner">
								<div class="card__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/1.jpg" alt="" />
								</div>
								<div class="card__text">super team</div>
							</div>
						</div>

						<div class="card__item">
							<div class="card__inner">
								<div class="card__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/2.jpg" alt="" />
								</div>
								<div class="card__text">super team</div>
							</div>
						</div>

						<div class="card__item">
							<div class="card__inner">
								<div class="card__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/3.jpg" alt="" />
								</div>
								<div class="card__text">super team</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ! /.container -->
			</section>

			<!-- ! Statistics -->
			<div class="statistics">
				<div class="container">
					<div class="stat">
						<div class="stat__item">
							<div class="stat__count">42</div>
							<div class="stat__text">Web Design Projects</div>
						</div>
						<div class="stat__item">
							<div class="stat__count">123</div>
							<div class="stat__text">happy client</div>
						</div>
						<div class="stat__item">
							<div class="stat__count">15</div>
							<div class="stat__text">award winner</div>
						</div>
						<div class="stat__item">
							<div class="stat__count">99</div>
							<div class="stat__text">cup of coffee</div>
						</div>
						<div class="stat__item">
							<div class="stat__count">24</div>
							<div class="stat__text">members</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ! Services -->
			<section class="section" id="services">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">We work with</h3>
						<h2 class="section__title">Amazing Services</h2>
					</div>

					<div class="services">
						<div class="services__item services__item--border">
							<img
								class="services__icon"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/photography.png"
								alt="" />

							<div class="services__title">Photography</div>
							<div class="services__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor.
							</div>
						</div>
						<div class="services__item services__item--border">
							<img
								class="services__icon"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/webdesign.png"
								alt="" />

							<div class="services__title">Web Design</div>
							<div class="services__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor.
							</div>
						</div>
						<div class="services__item services__item--border">
							<img
								class="services__icon"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/creativity.png"
								alt="" />

							<div class="services__title">Creativity</div>
							<div class="services__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor.
							</div>
						</div>
						<div class="services__item">
							<img
								class="services__icon"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/seo.png"
								alt="" />

							<div class="services__title">seo</div>
							<div class="services__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor.
							</div>
						</div>
						<div class="services__item">
							<img
								class="services__icon"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/css-html.png"
								alt="" />

							<div class="services__title">Css/Html</div>
							<div class="services__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor.
							</div>
						</div>
						<div class="services__item">
							<img
								class="services__icon"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/digital.png"
								alt="" />

							<div class="services__title">digital</div>
							<div class="services__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor.
							</div>
						</div>
					</div>
				</div>
				<!-- ! /.container -->
			</section>

			<!-- ! Devices -->
			<section class="section section--devices">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">For all devices</h3>
						<h2 class="section__title">Unique design</h2>
					</div>

					<div class="devices">
						<img class="devices__item" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ipad.png" alt="" />
						<img
							class="devices__item devices__item--iphone"
							src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iphone.png"
							alt="" />
					</div>
				</div>
			</section>

			<!-- ! Wedo -->
			<section class="section">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">Service</h3>
						<h2 class="section__title">what we do</h2>
						<div class="section__text">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
								enim ad minim veniam, quis nostrud exercitation ullamco laboris
								nisi ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>

					<div class="wedo">
						<div class="wedo__item">
							<img class="wedo__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wedo.jpg" alt="" />
						</div>

						<div class="wedo__item">
							<div class="accordion">
								<div class="accordion__item" data-collapse="#wedo_1">
									<div class="accordion__header">
										<img
											class="accordion__icon"
											src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/photography.png"
											alt="" />
										<div class="accordion__title">Photography</div>
									</div>
									<div class="accordion__content" id="wedo_1">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit,
											sed do eiusmod tempor incididunt ut labore et dolore magna
											aliqua. Ut enim ad minim veniam, quis nostrud exercitation
											ullamco laboris nisi ut aliquip ex ea commodo consequat.
											Duis aute irure dolor in reprehenderit in voluptate velit
											esse cillum dolore eu fugiat nulla pariatur. Excepteur
											sint occaecat cupidatat non proident, sunt in culpa qui
											officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<div class="accordion__item active" data-collapse="#wedo_2">
									<div class="accordion__header">
										<img
											class="accordion__icon"
											src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/creativity.png"
											alt="" />
										<div class="accordion__title">Creativity</div>
									</div>
									<div class="accordion__content" id="wedo_2">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit,
											sed do eiusmod tempor incididunt ut labore et dolore magna
											aliqua. Ut enim ad minim veniam, quis nostrud exercitation
											ullamco laboris nisi ut aliquip ex ea commodo consequat.
											Duis aute irure dolor in reprehenderit in voluptate velit
											esse cillum dolore eu fugiat nulla pariatur. Excepteur
											sint occaecat cupidatat non proident, sunt in culpa qui
											officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<div class="accordion__item" data-collapse="#wedo_3">
									<div class="accordion__header">
										<img
											class="accordion__icon"
											src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services/webdesign.png"
											alt="" />
										<div class="accordion__title">web design</div>
									</div>
									<div class="accordion__content" id="wedo_3">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit,
											sed do eiusmod tempor incididunt ut labore et dolore magna
											aliqua. Ut enim ad minim veniam, quis nostrud exercitation
											ullamco laboris nisi ut aliquip ex ea commodo consequat.
											Duis aute irure dolor in reprehenderit in voluptate velit
											esse cillum dolore eu fugiat nulla pariatur. Excepteur
											sint occaecat cupidatat non proident, sunt in culpa qui
											officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>
							</div>
							<!-- ! /.accordion -->
						</div>
						<!-- ! /.wedo__item -->
					</div>
					<!-- ! /.wedo -->
				</div>
			</section>

			<!-- ! Reviews 1 -->
			<div class="section section--gray">
				<div class="container">
					<div class="reviews">
						<div data-slider>
							<div>
								<div class="reviews__item">
									<img
										class="reviews__photo"
										src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png"
										alt="" />
									<div class="reviews__text">
										вЂњLorem ipsum dolor sit amet, consectetur adipiscing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation.вЂќ
									</div>
									<div class="reviews__author">Jon Doe</div>
								</div>
							</div>

							<div>
								<div class="reviews__item">
									<img
										class="reviews__photo"
										src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png"
										alt="" />
									<div class="reviews__text">
										вЂњLorem ipsum dolor sit amet, consectetur adipiscing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation.вЂќ
									</div>
									<div class="reviews__author">Jon Doe</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ! Team -->
			<section class="section">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">Who we are</h3>
						<h2 class="section__title">Meet our team</h2>
						<div class="section__text">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
								enim ad minim veniam, quis nostrud exercitation ullamco laboris
								nisi ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>

					<div class="card">
						<div class="card__item">
							<div class="card__inner">
								<div class="card__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/1.jpg" alt="" />
								</div>
								<div class="card__text">
									<div class="social">
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-pinterest-p"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card__info">
								<div class="card__name">Matthew Dix</div>
								<div class="card__prof">Graphic Design</div>
							</div>
						</div>
						<!-- ! /.card__item -->

						<div class="card__item">
							<div class="card__inner">
								<div class="card__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/2.jpg" alt="" />
								</div>
								<div class="card__text">
									<div class="social">
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-pinterest-p"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card__info">
								<div class="card__name">Christopher Campbell</div>
								<div class="card__prof">Branding/UX design</div>
							</div>
						</div>
						<!-- ! /.card__item -->

						<div class="card__item">
							<div class="card__inner">
								<div class="card__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/3.jpg" alt="" />
								</div>
								<div class="card__text">
									<div class="social">
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-pinterest-p"></i>
										</a>
										<a class="social__item" href="#" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card__info">
								<div class="card__name">Michael Fertig</div>
								<div class="card__prof">Developer</div>
							</div>
						</div>
						<!-- ! /.card__item -->
					</div>
					<!-- ! /.card -->
				</div>
				<!-- ! /.container -->
			</section>

			<!-- ! Logos -->
			<div class="section section--gray">
				<div class="container">
					<div class="logos">
						<div class="logos__item">
							<img class="logos__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/1.png" alt="" />
						</div>
						<div class="logos__item">
							<img class="logos__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/2.png" alt="" />
						</div>
						<div class="logos__item">
							<img class="logos__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/3.png" alt="" />
						</div>
						<div class="logos__item">
							<img class="logos__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/4.png" alt="" />
						</div>
						<div class="logos__item">
							<img class="logos__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/5.png" alt="" />
						</div>
						<div class="logos__item">
							<img class="logos__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/6.png" alt="" />
						</div>
					</div>
				</div>
			</div>

			<!-- ! Works -->
			<section class="section" id="works">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">What we do</h3>
						<h2 class="section__title">some of our work</h2>
						<div class="section__text">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
								enim ad minim veniam, quis nostrud exercitation ullamco laboris
								nisi ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>
				</div>

				<div class="works">
					<div class="works__col">
						<div class="works__item">
							<img class="works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/1.jpg" alt="" />
							<div class="works__info">
								<div class="works__title">creatively designed</div>
								<div class="works__text">Lorem ipsum dolor sit</div>
							</div>
						</div>
						<div class="works__item">
							<img class="works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/2.jpg" alt="" />
							<div class="works__info">
								<div class="works__title">creatively designed</div>
								<div class="works__text">Lorem ipsum dolor sit</div>
							</div>
						</div>
					</div>

					<div class="works__col">
						<div class="works__item">
							<img class="works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/3.jpg" alt="" />
							<div class="works__info">
								<div class="works__title">creatively designed</div>
								<div class="works__text">Lorem ipsum dolor sit</div>
							</div>
						</div>
						<div class="works__item">
							<img class="works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/4.jpg" alt="" />
							<div class="works__info">
								<div class="works__title">creatively designed</div>
								<div class="works__text">Lorem ipsum dolor sit</div>
							</div>
						</div>
					</div>

					<div class="works__col">
						<div class="works__item">
							<img class="works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/5.jpg" alt="" />
							<div class="works__info">
								<div class="works__title">creatively designed</div>
								<div class="works__text">Lorem ipsum dolor sit</div>
							</div>
						</div>
					</div>

					<div class="works__col">
						<div class="works__item">
							<img class="works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/6.jpg" alt="" />
							<div class="works__info">
								<div class="works__title">creatively designed</div>
								<div class="works__text">Lorem ipsum dolor sit</div>
							</div>
						</div>
						<div class="works__item">
							<img class="works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/7.jpg" alt="" />
							<div class="works__info">
								<div class="works__title">creatively designed</div>
								<div class="works__text">Lorem ipsum dolor sit</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ! /.works -->
			</section>

			<!-- ! Reviews 2 -->
			<div class="section">
				<div class="container">
					<div class="reviews">
						<div data-slider>
							<div>
								<div class="reviews__item">
									<img
										class="reviews__photo"
										src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png"
										alt="" />
									<div class="reviews__text">
										вЂњLorem ipsum dolor sit amet, consectetur adipiscing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation.вЂќ
									</div>
									<div class="reviews__author">Jon Doe</div>
								</div>
							</div>

							<div>
								<div class="reviews__item">
									<img
										class="reviews__photo"
										src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png"
										alt="" />
									<div class="reviews__text">
										вЂњLorem ipsum dolor sit amet, consectetur adipiscing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation.вЂќ
									</div>
									<div class="reviews__author">Jon Doe</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ! Clients -->
			<section class="section section--clients">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">Happy Clients</h3>
						<h2 class="section__title">What people say</h2>
					</div>

					<div class="clients">
						<div class="clients__item">
							<img
								class="clients__photo"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/1.png"
								alt="" />
							<div class="clients__content">
								<div class="clients__name">Matthew Dix</div>
								<div class="clients__prof">Graphic Design</div>
								<div class="clients__text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim.
								</div>
							</div>
						</div>

						<div class="clients__item">
							<img
								class="clients__photo"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/2.png"
								alt="" />
							<div class="clients__content">
								<div class="clients__name">Nick Karvounis</div>
								<div class="clients__prof">Graphic Design</div>
								<div class="clients__text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim.
								</div>
							</div>
						</div>

						<div class="clients__item">
							<img
								class="clients__photo"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/3.png"
								alt="" />
							<div class="clients__content">
								<div class="clients__name">Jaelynn Castillo</div>
								<div class="clients__prof">Graphic Design</div>
								<div class="clients__text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim.
								</div>
							</div>
						</div>

						<div class="clients__item">
							<img
								class="clients__photo"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/4.png"
								alt="" />
							<div class="clients__content">
								<div class="clients__name">Mike Petrucci</div>
								<div class="clients__prof">Graphic Design</div>
								<div class="clients__text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim.
								</div>
							</div>
						</div>
					</div>
					<!-- ! /.clients -->
				</div>
				<!-- ! /.container -->
			</section>

			<!-- ! Blog -->
			<section class="section" id="blog">
				<div class="container">
					<div class="section__header">
						<h3 class="section__suptitle">Our stories</h3>
						<h2 class="section__title">Latest blog</h2>
					</div>

					<div class="blog">
						<div class="blog__item">
							<div class="blog__header">
								<a href="#">
									<img class="blog__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/1.jpg" alt="" />
								</a>
								<div class="blog__date">
									<div class="blog__date-day">15</div>
									Jan
								</div>
							</div>
							<div class="blog__content">
								<div class="blog__title">
									<a href="#">Lorem ipsum dolor sit amet</a>
								</div>
								<div class="blog__text">
									Consectetur adipiscing elit, sed do eiusmod tempor incididunt
									ut labore et dolore magna aliqua.
								</div>
							</div>
							<div class="blog__footer">
								<div class="blog-stat">
									<span class="blog-stat__item">
										<i class="far fa-eye"></i> 542
									</span>
									<span class="blog-stat__item">
										<i class="far fa-comment-dots"></i> 17
									</span>
								</div>
							</div>
						</div>

						<div class="blog__item">
							<div class="blog__header">
								<a href="#">
									<img class="blog__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/2.jpg" alt="" />
								</a>
								<div class="blog__date">
									<div class="blog__date-day">15</div>
									Jan
								</div>
							</div>
							<div class="blog__content">
								<div class="blog__title">
									<a href="#">Lorem ipsum dolor sit amet</a>
								</div>
								<div class="blog__text">
									Consectetur adipiscing elit, sed do eiusmod tempor incididunt
									ut labore et dolore magna aliqua.
								</div>
							</div>
							<div class="blog__footer">
								<div class="blog-stat">
									<span class="blog-stat__item">
										<i class="far fa-eye"></i> 542
									</span>
									<span class="blog-stat__item">
										<i class="far fa-comment-dots"></i> 17
									</span>
								</div>
							</div>
						</div>

						<div class="blog__item">
							<div class="blog__header">
								<a href="#">
									<img class="blog__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/3.jpg" alt="" />
								</a>
								<div class="blog__date">
									<div class="blog__date-day">15</div>
									Jan
								</div>
							</div>
							<div class="blog__content">
								<div class="blog__title">
									<a href="#">Lorem ipsum dolor sit amet</a>
								</div>
								<div class="blog__text">
									Consectetur adipiscing elit, sed do eiusmod tempor incididunt
									ut labore et dolore magna aliqua.
								</div>
							</div>
							<div class="blog__footer">
								<div class="blog-stat">
									<span class="blog-stat__item">
										<i class="far fa-eye"></i> 542
									</span>
									<span class="blog-stat__item">
										<i class="far fa-comment-dots"></i> 17
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- ! /.blog -->
				</div>
				<!-- ! /.container -->
			</section>

			<!-- ! Map -->
			<section class="section section--map">
				<div class="container">
					<div class="map">
						<h2 class="map__title">
							<div><i class="fas fa-map-marker-alt"></i></div>
							<a href="https://goo.gl/maps/F8YpeCGqwrG2" target="_blank"
								>Open Map</a
							>
						</h2>
					</div>
				</div>
			</section>

			<!-- ! footer -->
			<footer class="footer" id="footer">
				<div class="container">
					<div class="footer__inner">
						<div class="footer__col footer__col--first">
							<div class="footer__logo">MoGo</div>
							<div class="footer__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
								enim ad minim veniam, quis nostrud exercitation ullamco laboris
								nisi ut aliquip ex ea commodo consequat.
							</div>

							<div class="footer__social">
								<div class="footer__social-header"><b>15k</b> followers</div>
								<div class="footer__social-content">
									Follow Us:
									<a href="#" target="_blank">
										<i class="fab fa-facebook"></i>
									</a>
									<a href="#" target="_blank">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="#" target="_blank">
										<i class="fab fa-instagram"></i>
									</a>
								</div>
							</div>

							<form class="subscribe" action="/" method="post">
								<input
									class="subscribe__input"
									type="email"
									name="name"
									placeholder="Your Email..." />
								<button class="subscribe__btn" type="submit">Subscribe</button>
							</form>
						</div>
						<!-- ! /.footer__col -->

<?php get_footer(); ?>