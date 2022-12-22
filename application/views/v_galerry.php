<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url()?>">Home</a></li>
								<li>galerry</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Gallery Album SMA 1 bandar lampung</h2>
						<div class="section_subtitle"></div><hr>
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->

				<?php foreach ($galerry as $key => $value) { ?>
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image text-center"><img src="<?= base_url('sampul/'.$value->sampul) ?>" width="250px" height="180px"></div>
						<div class="about_item_title text-center"><a href="<?= base_url('Home/detail_galerry/'.$value->id_galerry) ?>"><?= $value->nama_galerry ?></a></div>
						<div class="about_item_text text-center">
							<p>jumlah : <?= $value->jml_foto?> foto</p>
						</div>
					</div>
				</div>
               <?php } ?>
				

				
				</div>

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