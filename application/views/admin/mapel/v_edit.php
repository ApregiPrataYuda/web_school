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
 
                echo form_open_multipart('mapel/edit/'.$mapel->id_mapel); ?>

              <div class="col-md-4">
            <div class="form-group">
            <label for="nama_mapel">nama_mapel</label>
            <input type="text" value="<?= $mapel->nama_mapel?>" name="nama_mapel" id="nama_mapel" class="form-control" placeholder="nama_mapel" required="">
          </div>
        </div>
           

        <div class="ml-2">
        <button type="reset" class="btn btn-warning btn-xs" ml="3"><i class="fa fa-undo"></i> reset</button>
        <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-paper-plane"></i> save</button>
        <?php echo form_close(); ?>
         </div>
          



              </div>
            </div>
             </div>