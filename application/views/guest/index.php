<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="<?php echo site_url('guest/index');?>">
								<img src="<?php echo base_url('assets/user/assets/img/logo.png');?>" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="<?php echo site_url('guest');?>">Home</a></li>
								<li><a href="<?php echo site_url('guest/about');?>">About</a></li>
								<li><a href="<?php echo site_url('guest/produk');?>">Produk</a></li>
								<li><a href="<?php echo site_url('guest/cart');?>">Cart</a></li>
								<li>
									<div class="header-icons">
										<ul>
											<li><a href="<?php echo site_url('guest/register');?>">Register</a></li>
											<li><a href="<?php echo site_url('guest/login');?>">Login</a></li>
										</ul>
										
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<img src="<?php echo base_url('assets/user/assets/img/hero-bg.jpeg');?>" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Indoor Plants</p>
							<h1>Indoor Plants For Your Home</h1>
							<div class="hero-btns">
								<a href="<?php echo site_url('guest/produk');?>" class="boxed-btn">Plants Collection</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over Rp 200.000</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Plants</span> Collection</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<?php foreach($tanaman as $item) { ?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url(); ?>uploads/<?php echo $item->gambar; ?>" alt=""></a>
						</div>
						<h3><?php echo $item->nama_tanaman;?></h3>
						<a href="<?php echo site_url('user/login');?>" class="cart-btn">Shop Now</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                		<img src="<?php echo base_url('assets/user/assets/img/products/aglaonema.jpg');?>" alt="">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> until january
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/a.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Aglaonema</h4>
                    <div class="text">Aglaonema is a genus of flowering plants in the arum family, Araceae. They are native to tropical and subtropical regions of Asia and New Guinea. Get the 30% discount now!.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/user/assets/img/avaters/avatar1.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Draco Malfoy <span>Customer from Hongwarts</span></h3>
								<p class="testimonial-body">
									" Such a good store and fresh plants. I recommendation Blooming to you all."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/user/assets/img/avaters/avatar2.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Tom Holland <span>Customer from United Kingdom</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/user/assets/img/avaters/avatar3.jpeg" alt="">
							</div>
							<div class="client-meta">
								<h3>Letitia Wright <span>Customer from Georgetown</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					
					<div class="abt-bg">
						<img src="<?php echo base_url('assets/user/assets/img/abt.jpg');?>" alt="">	
						<a href="https://www.youtube.com/watch?v=-5HpHhXEgZw" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>	
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 1999</p>
						<h2>We are <span class="orange-text">Blooming</span></h2>
						<p>We strongly focus on interior design in everything we do, designing and installing a wide variety of commercial plant spaces focusing on Biophilic design principles. We have a passion for plants and the joy and happiness they bring, but we also see plants as a critical piece of any commercial design. </p>
						<a href="<?php echo site_url('guest/about');?>" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>New Year sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="<?php echo site_url('user/login');?>" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	<!-- end shop banner -->