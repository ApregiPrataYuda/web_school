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
               <?php
                   if (isset($erorr_upload)) {
                       echo '<div class="alert alert-info alert-dismissible mr-5 ml-5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'<div>';
                   }
 
                echo form_open_multipart('berita/edit/'.$berita->id_berita); ?>

              <div class="col-md-4">
            <div class="form-group">
            <label for="judul_berita">judul berita</label>
            <input type="text" name="judul_berita" value="<?=$berita->judul_berita?>" id="judul_berita" class="form-control" placeholder="judul berita" required="">
          </div>
        </div>

         


          <div class="col-md-10">
          <div class="form-group">
            <label >isi berita</label>
            <textarea name="isi_berita"  id="editor"   class="form-control" rows="12" >
              <?=$berita->isi_berita?></textarea> 
          </div>
        </div>


         <div class="col-md-4">
            <div class="form-group">
               <label for="gambar">gambar</label>
            <img src="<?= base_url('gambarb/'.$berita->gambar) ?>" width="120px">
          </div>
        </div>
     
            <div class="col-md-4">
            <div class="form-group">
            <input type="file" name="gambar" id="gambar" class="form-control">
          </div>
        </div>
      </div>

          <div class="ml-4 mb-3">
        <button type="reset" class="btn btn-warning" ml="3"><i class="fa fa-undo"></i> reset</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> save</button>
        <?php echo form_close(); ?>
         </div>
          



              </div>
            </div>
             </div>