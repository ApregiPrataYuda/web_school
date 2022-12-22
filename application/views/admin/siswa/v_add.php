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
 
                echo form_open_multipart('siswa/add'); ?>

              <div class="col-md-4">
            <div class="form-group">
            <label for="nis">nis</label>
            <input type="text" name="nis" id="nis" class="form-control" placeholder="nis" required="">
          </div>
        </div>
           
           <div class="col-md-4">
          <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" required="">
          </div>
        </div>
       
             <div class="col-md-4">
           <div class="form-group">
            <label for="tempat_lahir">tempat lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="tempat_lahir" required="">
          </div>
        </div>
         
               
            <div class="col-md-4">
           <div class="form-group">
            <label for="tgl_lahir">tgl lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="tgl_lahir" required="">
          </div>
        </div>
         
      
               


              <div class="col-md-4">
            <div class="form-group">
            <label for="kelas">kelas</label>
             <select name="kelas" class="form-control" id="kelas">
             <option value="">-pilih-</option>
             <option value="I">I</option>
             <option value="II">II</option>
             <option value="III">III</option>
             <option value="IV">IV</option>
             <option value="V">V</option>
             <option value="VII">VII</option>
             <option value="VIII">VIII</option>
             <option value="IX">IX</option>
             <option value="X">X</option>
             <option value="XI">XI</option>
             <option value="XII">XII</option>
           </select>
         </div>
       </div>
        
        

     
            <div class="col-md-4">
            <div class="form-group">
            <label for="foto">foto</label>
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