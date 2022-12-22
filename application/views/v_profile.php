<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url()?>">Home</a></li>
								<li>profile sekolah</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


 <!-- isi konten -->

 <div class="contact_info_container">
			<div class="container">
				<div class="row">
					 <div class="col-lg-12 text-center">
					 	<h2>PROFIL SEKOLAH 2022</h2>
					 	<br><br>
					 </div>



					<div class="col-sm-4 text-center">
						<h4>kepala sekolah</h4>
						<hr>
						<img src="<?= base_url('foto_kepsek/'.$profile->foto_kepsek)?>" width="150px">
						<br>
						<h4><?= $profile->kepala_sekolah?></h4>
						<h4>NIP:<?= $profile->nip?></h4>
						<hr>
					</div>


	<div class="col-sm-5">
          <div class="form-group">
           <div class="form_title">nama sekolah</div>
            <input type="text" class="comment_input"  value="<?= $profile->nama_sekolah?>" readonly>
          </div>
        
       
            
           <div class="form-group">
           <div class="form_title">alamat</div>
            <input type="text" class="comment_input"  value="<?= $profile->alamat?>" readonly>
          </div>
     
         
                <div class="form-group">
           <div class="form_title">no telpon</div>
            <input type="text" class="comment_input"  value="<?= $profile->no_telp?>" readonly>
          </div>
         
</div>





  <div class="col-sm-12">
          <div class="form-group">
           <div class="form-title"><B>visi sekolah</B></div>
           <hr>
            <p><?=$profile->visi_sekolah?></p>
          </div>
   

       <div class="form-group">
           <div class="form-title"><B>misi sekolah</B></div>
           <hr>
            <p><?=$profile->misi_sekolah?></p>
          </div>
       


         <div class="form-group">
           <div class="form-title"><B>sejarah</B></div>
           <hr>
            <p><?=$profile->sejarah?></p>
          </div>
      
      </div>
	
</div>
</div>
</div>

<!--end isi konten -->



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