<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">SMA 01 BANDAR LAMPUNG</div>
									<div class="home_slider_subtitle">Ciptakan generasi teknologi handal</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">SMA 01 BANDAR LAMPUNG</div>
									<div class="home_slider_subtitle">Ciptakan generasi teknologi handal</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">SMA 01 BANDAR LAMPUNG</div>
									<div class="home_slider_subtitle">Ciptakan generasi teknologi handal</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>


	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Fasilitas kami</h2>
						<div class="section_subtitle"><p>kami mempunyai misi untuk mencerdaskan anak bangsa dan membuat generasi teknologi yg handal</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400 bg-success">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_1.png" alt=""></div>
						<h3 class="feature_title"> prestasi student</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400 bg-success">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_2.png" alt=""></div>
						<h3 class="feature_title">sarana lengkap</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400 bg-success">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Best school</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400 bg-success">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	
	<!-- Events -->
   
	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Berita terbaru</h2>
						<div class="section_subtitle"></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<?php foreach ($berita as $key => $value) { ?>

				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="<?= base_url('gambarb/'.$value->gambar) ?>" width="350px" height="250px" ></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content">
								<h3 class="course_title"><?= substr( strip_tags($value->judul_berita),0,25)?>...</h3>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span><?= $value->tgl?></span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 bandar lampung City</span></div>
									<div class="event_text">
										<p><?= substr( strip_tags($value->isi_berita),0,100)?>...</p>
									</div>
									<br>
									<div>
										<a href="<?= base_url('Home/detail_berita/'.$value->slug_berita) ?>"  class="btn btn-success ">selengkapnya</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>

				<?php } ?>

				<br>
				<div class="col">
					<div class="courses_button btn-success trans_200"><a href="<?= base_url('home/berita') ?>">lihat semua berita</a></div>
				</div>
			
			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">guru berpengalaman</h2>
						<div class="section_subtitle"><p>Kami telah menyeleksi sistem guru terbaik di sekolah kami berdasarkan angka indexs penilaian dalam sistem bagan sekolah kami </p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				

				<!-- Team Item -->

				<?php  foreach ($guru as $key => $value) { ?>
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('fotog/'.$value->foto) ?>"></div>
						<div class="team_body">
							<div class="team_title"><a href="#"></a>Nama:<?= $value->nama ?></div>
							<div class="team_title"><a href="#"></a>Pendidikan:<?= $value->pendidikan?></div>
							<div class="team_title"><a href="#"></a>mata ajar:<?= $value->nama_mapel?></div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php }?>

				

				
				
			</div>
		</div>
	</div>
<!-- Newsletter -->

	
	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(<?= base_url()?>template/front-end/images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up untuk berita dan pemberitahuan</div>
							<div class="newsletter_subtitle">ikuti kami di website dan smartphone</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>