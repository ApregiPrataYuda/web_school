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
 
                echo form_open_multipart('galerry/edit/'.$galerry->id_galerry); ?>

              <div class="col-md-4">
            <div class="form-group">
            <label for="nama_galerry">nama galerry </label>
            <input type="text" name="nama_galerry" value="<?=$galerry->nama_galerry?>" id="nama_galerry" class="form-control" placeholder="nama_galerry " required="">
          </div>
        </div>

         
         <div class="col-md-4">
            <div class="form-group">
               <label for="sampul">sampul</label>
            <img src="<?= base_url('sampul/'.$galerry->sampul) ?>" width="120px">
          </div>
        </div>
     
            <div class="col-md-4">
            <div class="form-group">
            <input type="file" name="sampul" id="sampul" class="form-control">
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