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

               echo validation_errors('<div class="alert alert-info alert-dismissible mr-5 ml-5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','<div>');

                   if (isset($erorr_upload)) {
                       echo '<div class="alert alert-info alert-dismissible mr-5 ml-5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'<div>';
                   }
 
                echo form_open_multipart('guru/edit/'.$guru->id_guru); ?>

              <div class="col-md-4">
            <div class="form-group">
            <label for="nip">nip</label>
            <input type="text" name="nip" id="nip" class="form-control" placeholder="nip" value="<?= $guru->nip?>" required="">
          </div>
        </div>
           
           <div class="col-md-4">
          <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" value="<?= $guru->nama?>" required="">
          </div>
        </div>
       
             <div class="col-md-4">
           <div class="form-group">
            <label for="tempat_lahir">tempat lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?= $guru->tempat_lahir?>" placeholder="tempat_lahir" required="">
          </div>
        </div>
         
               
            <div class="col-md-4">
           <div class="form-group">
            <label for="tgl_lahir">tgl lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="tgl_lahir"     value="<?= $guru->tgl_lahir ?>"  required="">
          </div>
        </div>
         
      
               <div class="col-md-4">
             <div class="form-group">
             <label for="id_mapel">mapel</label>
             <select name="id_mapel" class="form-control" id="id_mapel">
             <option value="<?= $guru->id_mapel?>"><?= $guru->nama_mapel?></option>
            <?php foreach ($mapel as $key => $value) { ?>
               <option value="<?= $value->id_mapel?>"><?= $value->nama_mapel?></option>
            <?php } ?>
           </select>
          </div>
        </div>
        


              <div class="col-md-4">
            <div class="form-group">
            <label for="pendidikan">pendidikan</label>
             <select name="pendidikan" class="form-control" id="pendidikan">
             <option value="<?= $guru->pendidikan?>"><?= $guru->pendidikan?></option>
             <option value="sma">sma</option>
             <option value="d3">d3</option>
             <option value="s1">s1</option>
             <option value="s2">s2</option>
             <option value="s3">s3</option>
           </select>
         </div>
       </div>
        
        
        <div class="col-md-4">
            <div class="form-group">
            <img src="<?= base_url('fotog/'.$guru->foto) ?>" width="120px">
          </div>
        </div>

     
            <div class="col-md-4">
            <div class="form-group">
            <label for="foto">Ganti foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
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