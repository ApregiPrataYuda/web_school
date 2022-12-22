 <div class="content-header">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->









    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url()?>template/back-end/dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $this->session->userdata('nama_user');?></h3>

                <p class="text-muted text-center"><?= $this->session->userdata('username');?></p>

                <a href="<?php echo base_url('admin'); ?>" class="btn btn-primary btn-block"><b>kembali</b></a>
              </div>
              <!-- /.card-body -->
            </div>