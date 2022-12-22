<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home/berita')?>">berita</a></li>
								<li>detail berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>



<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?= $berita->judul_berita ?></div>
						<div class="blog_meta">
							<ul>
								<li>Post on  <?= $berita->tgl ?></li>
								<li>By <?= $berita->nama_user ?></li>
							</ul>
						</div>
						<div class="blog_image"><img src="<?= base_url('gambarb/'.$berita->gambar) ?>" alt=""></div>
						<p><?= $berita->isi_berita?></p>
					</div>
					<hr>
					<!-- Comments -->
					<div class="comments_container">
						
						
					</div>
				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						

						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita lainya</div>
							<div class="sidebar_latest">

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