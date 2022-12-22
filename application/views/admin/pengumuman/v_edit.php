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
               <?php echo form_open_multipart('pengumuman/edit/'.$pengumuman->id_pengumuman); ?>

              <div class="col-md-4">
            <div class="form-group">
            <label for="nama_pengumuman">nama pengumuman</label>
            <input type="text" name="nama_pengumuman" value="<?= $pengumuman->nama_pengumuman?>" id="nama_pengumuman" class="form-control" >
          </div>
        </div>

     


              
            <div class="form-group">
            <label for="isi_pengumuman">isi pengumuman</label>
            <textarea type="text" name="isi_pengumuman" row="5" class="form-control" placeholder="isi pengumuman" ><?= $pengumuman->isi_pengumuman?></textarea>
          </div>
       


           <div class="col-md-4">
            <div class="form-group">
            <label for="tanggal">tanggal</label>
            <input type="date" value="<?= $pengumuman->tanggal?>" name="tanggal" id="tanggal" class="form-control" >
          </div>
        </div>

      

      <div class="col-md-4">
            <div class="form-group">
            <img src="<?= base_url('gambar_pengumuman/'.$pengumuman->gambar) ?>" width="120px">
          </div>
        </div>
     
            <div class="col-md-4">
            <div class="form-group">
            <label for="gambar">gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
          </div>
        </div>
      </div>
       
          

          <div class="ml-4 mb-3">
        <button type="reset" class="btn btn-warning" ml="3"><i class="fa fa-undo"></i> reset</button>
        <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-paper-plane"></i> save</button>
        <?php echo form_close(); ?>
         </div>
          



              </div>
            </div>
             </div>