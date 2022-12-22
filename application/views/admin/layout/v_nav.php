
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark bg-warning elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?= base_url()?>template/back-end/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url()?>template/back-end/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_user');?></a>
             <hr>
            <a href="#"><i class="fa fa-circle text-success"></i>online</a>
        </div>
      </div>

   <div class="sidebar-heading">
        main menu
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

           <hr class="sidebar-divider">


           <li class="nav-item has-treeview">
            <a href="<?= base_url('mapel');?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-table"></i>
              <p>
                mata pelajaran
              </p>
            </a>
          </li>

           <hr class="sidebar-divider">

          <li class="nav-item has-treeview">
            <a href="<?=base_url('siswa')?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-users"></i>
              <p>
                siswa
              </p>
            </a>
          </li>

           <hr class="sidebar-divider">

            <li class="nav-item has-treeview">
            <a href="<?= base_url('guru')?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-user"></i>
              <p>
                guru
              </p>
            </a>
          </li>

           <hr class="sidebar-divider">

            <li class="nav-item has-treeview">
            <a href="<?= base_url('berita')?>" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                berita
              </p>
            </a>
          </li>

           

           <hr class="sidebar-divider">

              <li class="nav-item has-treeview">
            <a href="<?= base_url('pengumuman')?>" class="nav-link">
              <i class="nav-icon fas fa-adjust"></i>
              <p>
                pengumuman
              </p>
            </a>
          </li>

           <hr class="sidebar-divider">


           <li class="nav-item has-treeview">
            <a href="<?= base_url('galerry')?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-camera-retro "></i>
              <p>
                galerry
              </p>
            </a>
          </li>

      <hr class="sidebar-divider">

     <li class="nav-item has-treeview">
            <a href="<?= base_url('download')?>" class="nav-link">
              <i class="nav-icon fas fa-fw  fa-upload "></i>
              <p>
                download/upload area
              </p>
            </a>
          </li>


            <hr class="sidebar-divider">


      <!-- Heading -->
      <div class="sidebar-heading">
        setting
      </div>

      <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/setting')?>" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
              <p>
               setingan web
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title2 ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin')?>">dashboard</a></li>
              <li class="breadcrumb-item active"><?= $title2?></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">

