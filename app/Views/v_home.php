<style>
	.home-gallery {
		width: 368px;
		height: 300px;
	}
</style>

<body>
	<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
	<div class="preloader">
		<div class="preloader-body">
			<div class="cssload-container">
				<div class="cssload-speeding-wheel"></div>
			</div>
			<p>Loading...</p>
		</div>
	</div>
	<div class="page">
		<!-- Swiper-->
		<section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
			<div class="swiper-wrapper text-left">
				<div class="swiper-slide context-dark" data-slide-bg="images/pantaiHeader.jpg">
					<div class="swiper-slide-caption section-md">
						<div class="container">
							<div class="row">
								<div class="col-md-10">
									<h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Enjoy the Best Destinations with Our Platform</h6>
									<h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Explore</span><span class="font-weight-bold"> The World</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide context-dark" data-slide-bg="images/mountainHeader.jpg">
					<div class="swiper-slide-caption section-md">
						<div class="container">
							<div class="row">
								<div class="col-md-10">
									<h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">A team of professional Travel Experts</h6>
									<h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Trust</span><span class="font-weight-bold"> Our Experience</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide context-dark" data-slide-bg="images/jogjaHeader.jpg">
					<div class="swiper-slide-caption section-md">
						<div class="container">
							<div class="row">
								<div class="col-md-10">
									<h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Find your Next Holiday Trip with Us</h6>
									<h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Create</span><span class="font-weight-bold"> Your Trip</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Swiper Pagination-->
			<div class="swiper-pagination"></div>
		</section>
		<!-- Section Box Categories-->
		<section class="section section-lg section-top-1 bg-gray-4">
			<div class="container offset-negative-1">
				<div class="box-categories cta-box-wrap">
					<div class="box-categories-content">
						<div class="row justify-content-center">
							<?php $i = 0;
							foreach ($explore_post as $key => $value) { ?>
								<div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
									<ul class="list-marked-2 box-categories-list">
										<li><a href="#"><img src="<?= base_url('foto_post/' . $value['foto_post']) ?>" alt="" class="home-gallery" /></a>
											<h5 class="box-categories-title"><?= $value['judul_post']; ?></h5>
										</li>
									</ul>
								</div>
							<?php if (++$i == 3) break;
							} ?>
						</div>
					</div>
				</div><a class="link-classic wow fadeInUp" href="<?= base_url('explore') ?>">Other Place<span></span></a>
				<!-- Owl Carousel-->
			</div>
		</section>
		<!-- Discover New Horizons-->
		<section class="section section-sm section-first bg-default text-md-left">
			<div class="container">
				<div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
					<div class="col-lg-6 text-center wow fadeInUp">
						<h3 style="color: #00c597;">HIDDEN <span style="color: #e4e842;">GEM</span></h3>
					</div>
					<div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
						<div class="box-width-lg-470">
							<h3>Discover New Places</h3>
							<!-- Bootstrap tabs-->
							<div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
								<!-- Nav tabs-->
								<ul class="nav nav-tabs">
									<li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">About us</a></li>
									<li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Why choose us</a></li>
									<li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Our mission</a></li>
								</ul>
								<!-- Tab panes-->
								<div class="tab-content">
									<div class="tab-pane fade show active" id="tabs-7-1">
										<p>HIdden Gem is a platform to find and share your travel recommendations. We are passionate about travel and sharing the world's wonders with you.</p>
										<div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="/explore">Get in Touch</a><a class="button button-black-outline button-md" href="/explore">Read More</a></div>
									</div>
									<div class="tab-pane fade" id="tabs-7-2">
										<p>We are proud to offer excellent platform, which give you the chance to find and choose your destination in an authentic and exciting way.</p>
										<div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="/explore">Get in Touch</a><a class="button button-black-outline button-md" href="/explore">Read More</a></div>
									</div>
									<div class="tab-pane fade" id="tabs-7-3">
										<p>Our mission is to provide the ultimate travel recommendations while becoming a one-stop shop for every travel platform service available in the industry.</p>
										<div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="/explore">Get in Touch</a><a class="button button-black-outline button-md" href="/explore">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--	Our Services-->
		<section class="section section-sm">
			<div class="container">
				<h3>Our Services</h3>
				<div class="row row-30">
					<div class="col-sm-6 col-lg-4">
						<article class="box-icon-classic">
							<div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
								<div class="unit-left">
									<div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
								</div>
								<div class="unit-body">
									<h5 class="box-icon-classic-title"><a href="#">Personalized Matching</a></h5>
									<p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for your next holiday.</p>
								</div>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-lg-4">
						<article class="box-icon-classic">
							<div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
								<div class="unit-left">
									<div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
								</div>
								<div class="unit-body">
									<h5 class="box-icon-classic-title"><a href="#">Wide Variety of Places</a></h5>
									<p class="box-icon-classic-text">We offer a wide variety of personally posted places with destinations all over the globe.</p>
								</div>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-lg-4">
						<article class="box-icon-classic">
							<div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
								<div class="unit-left">
									<div class="box-icon-classic-icon fl-bigmug-line-favourites5"></div>
								</div>
								<div class="unit-body">
									<h5 class="box-icon-classic-title"><a href="#">Highly Qualified Service</a></h5>
									<p class="box-icon-classic-text">Our platform is qualified to bring you the best service.</p>
								</div>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-lg-4">
						<article class="box-icon-classic">
							<div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
								<div class="unit-left">
									<div class="box-icon-classic-icon fl-bigmug-line-headphones32"></div>
								</div>
								<div class="unit-body">
									<h5 class="box-icon-classic-title"><a href="#">24/7 Support</a></h5>
									<p class="box-icon-classic-text">You can always get professional support from our staff 24/7 and ask any question you have.</p>
								</div>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-lg-4">
						<article class="box-icon-classic">
							<div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
								<div class="unit-left">
									<div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
								</div>
								<div class="unit-body">
									<h5 class="box-icon-classic-title"><a href="#">Upload your Post</a></h5>
									<p class="box-icon-classic-text">Our platform offers traveler to share their experince to others.</p>
								</div>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-lg-4">
						<article class="box-icon-classic">
							<div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
								<div class="unit-left">
									<div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
								</div>
								<div class="unit-body">
									<h5 class="box-icon-classic-title"><a href="#">Show travel price</a></h5>
									<p class="box-icon-classic-text">Every posted places are include with the price.</p>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
		<!-- Hot tours-->
		<section class="section section-sm bg-default">
			<div class="container">
				<h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Places</span></h3>
				<div class="row row-sm row-40 row-md-50">
					<?php $i = 0;
					foreach ($explore_post as $key => $value) { ?>
						<div class="col-sm-6 col-md-12 wow fadeInRight">
							<!-- Product Big-->
							<article class="product-big">
								<div class="unit flex-column flex-md-row align-items-md-stretch">
									<div class="unit-left"><a class="product-big-figure" href="#"><img src="<?= base_url('foto_post/' . $value['foto_post']) ?>" alt="" width="600" height="366" /></a></div>
									<div class="unit-body">
										<div class="product-big-body">
											<h5 class="product-big-title mt-5"><a href="#"><?= $value['judul_post']; ?></a></h5>

											<p class="product-big-text"><?= $value['desc_post']; ?></p><a class="button button-black-outline button-ujarak" href="<?= base_url('explore') ?>">Explore</a>
											<div class="product-big-price-wrap"><span class="product-big-price"><?= $value['range_harga']; ?></span></div>
										</div>
									</div>
								</div>
							</article>
						</div>
					<?php if (++$i == 2) break;
					} ?>
				</div>
			</div>
		</section>
		<!-- Different People-->
		<section class="section section-sm">
			<div class="container">
				<h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Different People — One Mission</span></h3>
				<div class="row row-30 justify-content-center box-ordered">
					<div class="col-sm-6 col-md-5 col-lg-3">
						<!-- Team Modern-->
						<article class="team-modern">
							<div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?= base_url('/img/zidane.png') ?>" alt="" width="118" height="118" /></a>
								<svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
									<g>
										<path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
									</g>
								</svg>
							</div>
							<div class="team-modern-caption">
								<h6 class="team-modern-name"><a href="#">Muhammad Zidane</a></h6>
								<p class="team-modern-status">Backend Developer</p>
								<h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-3">
						<!-- Team Modern-->
						<article class="team-modern">
							<div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?= base_url('/img/apan.png') ?>" alt="" width="118" height="118" /></a>
								<svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
									<g>
										<path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
									</g>
								</svg>
							</div>
							<div class="team-modern-caption">
								<h6 class="team-modern-name"><a href="#">Affan Dharmawan</a></h6>
								<p class="team-modern-status">UI Designer</p>
								<h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-3">
						<!-- Team Modern-->
						<article class="team-modern">
							<div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?= base_url('/img/ipan.png') ?>" alt="" width="118" height="118" /></a>
								<svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
									<g>
										<path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
									</g>
								</svg>
							</div>
							<div class="team-modern-caption">
								<h6 class="team-modern-name"><a href="#">Iffan Adhyatmawan</a></h6>
								<p class="team-modern-status">Frontend Developer</p>
								<h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
							</div>
						</article>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-3">
						<!-- Team Modern-->
						<article class="team-modern">
							<div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?= base_url('/img/ryan.png') ?>" alt="" width="118" height="118" /></a>
								<svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
									<g>
										<path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
									</g>
								</svg>
							</div>
							<div class="team-modern-caption">
								<h6 class="team-modern-name"><a href="#">Riantino</a></h6>
								<p class="team-modern-status">UI Designer</p>
								<h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
		<!-- Section Subscribe-->
		<section class="section bg-default text-center offset-top-50">
			<div class="parallax-container" data-parallax-img="images/mountainHeader.jpg">
				<div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
					<div class="container">
						<h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">Share your experince</span><span class="d-block font-weight-light">Now!</span></h2>
						<p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Our platform offers a feature to share user's travel experience to other with destinations all over the world. Browse our website to find your next trip!</p><a class="button button-secondary button-pipaluk" href="<?= base_url('upload') ?>">Upload your Trip</a>
					</div>
				</div>
			</div>
		</section>
		<!--	Instagrram wondertour-->
		<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
			<div class="container-fluid">
				<h6 class="gallery-title">Gallery</h6>
				<!-- Owl Carousel-->
				<div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
					<!-- Thumbnail Classic-->
					<?php foreach ($explore_post as $key => $value) { ?>
						<article class="thumbnail thumbnail-mary">
							<div class="thumbnail-mary-figure"><img src="<?= base_url('foto_post/' . $value['foto_post']) ?>" alt="" style="width: 500px; height: 200px" />
							</div>
							<div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?= base_url('foto_post/' . $value['foto_post']) ?>" data-lightgallery="item"><img src="images/gallery-image-1-270x195.jpg" alt="" /></a>
							</div>
						</article>
					<?php } ?>
				</div>
			</div>
		</section>

	</div>

</body>

<!-- buku tamu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	<div class="offcanvas-header" style="background-color: #00c597;">
		<h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: white;">Buku Tamu</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<?php echo form_open_multipart('home/bukutamu') ?>
		<div class="form-group mt-4">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama_tamu" placeholder="Masukan Nama" required>
		</div>
		<div class="form-group mt-4">
			<label>NIM (Kosongkan jika bukan mahasiswa)</label>
			<input type="text" class="form-control" name="nim_tamu" placeholder="Masukan NIM">
		</div>
		<div class="form-group mt-4">
			<label>Pesan</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" name="pesan_tamu" rows="3" required></textarea>
		</div>
		<button class="btn btn-success mt-4">Submit</button>
		<?php echo form_close() ?>


		<h5 class="mt-4">Daftar Tamu</h5>
		<div style="overflow-x: scroll;">
			<table class="table table-striped" style="overflow-x: scroll; ">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Nim</th>
						<th scope="col" class="pesan">Pesan</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
					foreach ($tamu as $key => $value) { ?>
						<tr>
							<th scope="row"><?= $i++; ?></th>
							<td><?= $value['nama_tamu']; ?></td>
							<td><?= $value['nim_tamu']; ?></td>
							<td class="isipesan"><?= $value['pesan_tamu']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	</div>
</div>

</html>