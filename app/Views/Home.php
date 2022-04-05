	<div class="heading">
		<div class="container-hd">
			<div class="hd-text">
				<h1>Recommendations</h1>
				<h1>For the <span>Best Places</span></h1>
				<h2>From direct user ratings</h2>
				<div class="input-btn-hd">
					<button class="buku-tamu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Isi Buku Tamu</button>
				</div>
			</div>
			<div class="hd-img">
				<img id="gbr" src="<?= base_url('/img/Component 1.svg') ?>" alt="Icon-hd" width="454" height="510">
			</div>
		</div>
	</div>


	<div class="wrapper-home">
		<div class="container-home">
			<h1>Explore Popular Places</h1>
			<div class="content-box">
				<div class="card-feed">
					<img src="?>" alt="">
				</div>
				<div class="card-feed"></div>
				<div class="card-feed"></div>
				<div class="card-feed"></div>
			</div>
			<p>See More</p>
		</div>
	</div>

	<div class="wrapper-tim">
		<div class="container-tim">
			<h1>Professional Team</h1>

			<div class="container">
				<div class="row">
					<!-- Single Advisor-->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
							<!-- Team Thumb-->
							<div class="advisor_thumb"><img src="<?= base_url('/img/iffanadn.jpg') ?>" width="200px" alt="">
								<!-- Social Info-->
								<div class="social-info"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin"></i></a></div>
							</div>
							<!-- Team Details-->
							<div class="single_advisor_details_info">
								<h6>Iffan Adhyatmawan Nusli</h6>
								<p class="designation">Front End Developer</p>
							</div>
						</div>
					</div>
					<!-- Single Advisor-->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
							<!-- Team Thumb-->
							<div class="advisor_thumb"><img src="<?= base_url('/img/affandn.jpg') ?>" width="200px" alt="">
								<!-- Social Info-->
								<div class="social-info"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin"></i></a></div>
							</div>
							<!-- Team Details-->
							<div class="single_advisor_details_info">
								<h6>Affan Dharmawan Nusli</h6>
								<p class="designation">Mahasiswa Sholeh</p>
							</div>
						</div>
					</div>
					<!-- Single Advisor-->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
							<!-- Team Thumb-->
							<div class="advisor_thumb"><img src="<?= base_url('/img/zidane.png') ?>" width="225px" alt="">
								<!-- Social Info-->
								<div class="social-info"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin"></i></a></div>
							</div>
							<!-- Team Details-->
							<div class="single_advisor_details_info">
								<h6>Muhammad Zidane</h6>
								<p class="designation">Back End Developer</p>
							</div>
						</div>
					</div>
					<!-- Single Advisor-->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<!-- Team Thumb-->
							<div class="advisor_thumb"><img src="<?= base_url('/img/ryantraman.png') ?>" width="210px" alt="">
								<!-- Social Info-->
								<div class="social-info"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin"></i></a></div>
							</div>
							<!-- Team Details-->
							<div class="single_advisor_details_info">
								<h6>Ryantraman</h6>
								<p class="designation">Penjaga Bumi</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

	<style>
		.pesan,
		.isipesan {
			min-width: 500px;
		}
	</style>