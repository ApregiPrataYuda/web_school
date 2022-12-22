
	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url()?>">Home</a></li>
								<li>berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>



  <<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">
					

					<!-- Contact Form -->
					<div class="col-lg-6">
						
						<div class="contact_form">
							<div class="contact_info_title text-center"></div>
							<br><br>
                             	<div class="col-sm-8 text-center">
						<h4>kepala sekolah</h4>
						<hr>
						<img src="<?= base_url('foto_kepsek/'.$profile->foto_kepsek)?>" width="150px">
						<br>
						<h4><?= $profile->kepala_sekolah?></h4>
						<h4>NIP:<?= $profile->nip?></h4>
						<hr>
					</div>

							
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Contact Info</div>
							<div class="contact_info_text">
								<p>sma negeri 1 bandar lampung adalah salah satu sma elite negeri di kota bandar lampung dengan akreditasi A .</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">bandar lampung Office</div>
								<ul class="location_list">
									<li><?= $setting->alamat?></li>
									<li><?= $setting->no_telp?></li>
									<li>info.apregiagatha@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">info lebih lanjut</div>
								<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<br>
<br>


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