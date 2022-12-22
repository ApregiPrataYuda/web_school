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
                   if (isset($error_upload)) {
                       echo '<div class="alert alert-info alert-dismissible mr-5 ml-5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'<div>';
                   }

                 
 
                echo form_open_multipart('download/edit/'.$download->id_file); ?>

              <div class="col-md-4">
            <div class="form-group">
            <label for="nama_file">nama file</label>
            <input type="text" name="nama_file" value="<?=$download->nama_file?>" id="nama_file" class="form-control" placeholder="nama file" required="">
          </div>
        </div>

      
        <div class="col-md-4">
            <div class="form-group">
            <label for="file">file</label>
            <input type="file" name="file"  id="file" class="form-control">
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