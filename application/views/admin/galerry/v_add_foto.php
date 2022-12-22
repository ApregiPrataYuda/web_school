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

                   if($this->session->flashdata('pesan')){
                             echo'<div class="alert alert-primary alert-dismissible mr-5 ml-5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                        echo $this->session->flashdata('pesan');
                                        echo'</div>';
                      }
 

                   
                echo form_open_multipart('galerry/add_foto/'.$galerry->id_galerry); ?>

              <div class="col-sm-6">
            <div class="form-group">
            <label for="ket_foto">keterangan foto</label>
            <input type="text" name="ket_foto" id="ket_foto" class="form-control" placeholder="keterangan foto " required="">
          </div>
        </div>

      
          <div class="col-sm-4">
            <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
          </div>
        </div>
           
          
          <div class="ml-4 mb-3">
        <a href="<?= base_url('galerry')?>" type="reset" class="btn btn-warning" ml="3"><i class="fa fa-undo"> back</i></a> 
        <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-paper-plane"></i> save</button>
        <?php echo form_close(); ?>
         <hr>
             
             <?php foreach ($foto as $key => $value) {  ?>
               <div class="col-sm-3">
                <label><?= $value->ket_foto?></label>

            <img src="<?= base_url('foto/'.$value->foto) ?>" width="200px" height="200px">

            <a href="<?= base_url('galerry/delete_foto/'.$value->id_galerry.'/'.$value->id_foto )?>" onclick="return confirm('yakin foto akan di hapus')" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></a>
             
           </div>
             <hr>
             <?php } ?>

         </div> 
              </div>
            </div>
             </div>

