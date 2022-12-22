<div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?= $title2 ?></h3>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
               <?php echo form_open_multipart('admin/setting');

              if($this->session->flashdata('pesan')){
                             echo'<div class="alert alert-primary alert-dismissible mr-5 ml-5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                        echo $this->session->flashdata('pesan');
                                        echo'</div>';
                      }


                ?>


              <label>foto kepala sekolah</label>
               <div class="col-md-4">
            <div class="form-group">
            <img src="<?= base_url('foto_kepsek/'.$setting->foto_kepsek) ?>" width="120px">
          </div>
        </div>

     
            <div class="col-md-4">
            <div class="form-group">
            <label for="foto_kepsek">Ganti foto</label>
            <input type="file" name="foto_kepsek" value="<?= $setting->foto_kepsek?>" id="foto_kepsek" class="form-control">
          </div>
        </div>
      </div>


           
           <div class="col-md-4">
          <div class="form-group">
            <label for="nama_sekolah">nama sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control" placeholder="nama_sekolah" value="<?= $setting->nama_sekolah?>" required="">
          </div>
        </div>
       
             <div class="col-md-4">
           <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $setting->alamat?>" placeholder="alamat" required="">
          </div>
        </div>
         
               
             <div class="col-md-4">
           <div class="form-group">
            <label for="no_telp">no telp</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $setting->no_telp?>" placeholder="no_telp" required="">
          </div>
        </div>
           
          <div class="col-md-4">
           <div class="form-group">
            <label for="kepala_sekolah">nama kepala sekolah</label>
            <input type="text" name="kepala_sekolah" id="kepala_sekolah" class="form-control" value="<?= $setting->kepala_sekolah?>" placeholder="kepala_sekolah" required="">
          </div>
        </div>


              <div class="col-md-4">
            <div class="form-group">
            <label for="nip">nip</label>
            <input type="text" name="nip" id="nip" class="form-control" placeholder="nip" value="<?= $setting->nip?>" required="">
          </div>
        </div>
      



       
          <div class="col-md-10">
          <div class="form-group">
            <label >visi sekolah</label>
            <textarea name="visi_sekolah" rows="10" >
             <?=$setting->visi_sekolah?></textarea> 
          </div>
        </div>


        <div class="col-md-10">
          <div class="form-group">
            <label >misi sekolah</label>
            <textarea name="misi_sekolah" rows="10" >
             <?=$setting->misi_sekolah?></textarea> 
          </div>
        </div>



        <div class="col-md-10">
          <div class="form-group">
            <label >sejarah</label>
            <textarea name="sejarah"rows="10" >
             <?=$setting->sejarah?></textarea> 
          </div>
        </div>
        
       
          <div class="ml-4 mb-3">
        <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> update</button>
        <?php echo form_close(); ?>
         </div>
          



              </div>
            </div>
             </div>
