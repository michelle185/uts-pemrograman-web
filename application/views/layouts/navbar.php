	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="<?= base_url('beranda') ?>">
								<img src="<?= base_url('assets/img/logo.png') ?>" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="<?= base_url('beranda') ?>">Static Home</a></li>
										<li><a href="<?= base_url('beranda/slider_home') ?>">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('about') ?>">About</a></li>
								<li><a href="#">News</a>
									<ul class="sub-menu">
										<li><a href="<?= base_url('news') ?>">News</a></li>
										<li><a href="<?= base_url('news/single_news') ?>">Single News</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('contact') ?>">Contact</a></li>
								<li><a href="#">Shop</a>
									<ul class="sub-menu">
										<li><a href="<?= base_url('shop') ?>">Shop</a></li>
										<li><a href="<?= base_url('shop/check_out') ?>">Check Out</a></li>
										<li><a href="<?= base_url('shop/single_product') ?>">Single Product</a></li>
										<li><a href="<?= base_url('shop/cart') ?>">Cart</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('pages') ?>">404</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="<?= base_url('shop/cart') ?>"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
