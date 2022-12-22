   
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url()?>">Home</a></li>
								<li>download</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

		<div class="">
			<div class="container">
				<div class="row">
					 <div class="col-lg-12 text-center">
					 	<h2>download Area</h2><br>
					 </div>

                       <div class="col-lg-12">
					  <table  class="table table-bordered table-responsive" id="myTable"  >
                    <thead>
                      <tr>
                          <th style=" color: blue; width: 5%;" class="text-center">NO</th>
                           <th style="color: blue;" class="text-center">KETERANGAN FILE</th>
                           <th style="color: blue;" class="text-center">DOWNLOAD</th>
                      </tr>
                  </thead>
                     <tbody>
                          <?php $no=1; foreach ($download as $key => $value) { ?>
                         <tr>
                             <td class="text-center"><?= $no++; ?></td>
                             <td><?= $value->nama_file ?></td>
                             <td class="text-center"><a href="<?= base_url('file/'.$value->file) ?>" class="btn btn-primary btn-sm"> <i class="fas fa fa-download "></i> DOWNLOAD</a></td>
                           </tr>
                       </tbody>
                   <?php } ?>
                   </table>
                   <br>
                   <br>

                  
					</div>
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