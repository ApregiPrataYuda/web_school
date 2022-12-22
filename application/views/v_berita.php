<!-- Home -->

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








	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<h2>berita</h2>
					<hr style="color: blue;">
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<?php foreach ($berita as $key => $value) { ?>

							<div class="col-lg-6 course_col">
								<div class="course">
									<div class=""><img src="<?= base_url('gambarb/'.$value->gambar) ?>"  width="100%" height="150px" ></div>
									<div class="course_body">
										<h3 class="course_title"><a href="<?= base_url('Home/detail_berita/'.$value->slug_berita) ?>"><?= substr( strip_tags($value->judul_berita),0,25)?></a>...</h3>
										<div class="course_teacher">posting by: <?= $value->nama_user ?></div>
										<div class="course_text">
											<p><?= substr( strip_tags($value->isi_berita),0,100)?>...</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span> <?= $value->tgl ?></span>
											</div>
											
											
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
			     		</div>


						<div class="row pagination_row">
							<div class="col">
								
									<?php 
                                           if (isset($paginasi)) {
                                         echo $paginasi;
                                           }



									 ?>
									
								
							</div>
						</div>
					</div>
					
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						
						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita lainya</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
									<?php foreach ($latest_berita as $key => $value) {?>

								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="<?= base_url('gambarb/'.$value->gambar) ?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="<?= base_url('Home/detail_berita/'.$value->slug_berita) ?>"><?= $value->judul_berita?></a></div>
										<div class="fa fa-calendar"> <?= $value->tgl ?></div>
									</div>
								</div>

							<?php } ?>

								

								</div>
							</div>
						</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



















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