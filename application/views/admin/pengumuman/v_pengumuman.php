<div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?= $title2?></h3>
                
                  <div class="card-tools">
                  <a href="<?= base_url('pengumuman/add')?>" class="btn btn-primary btn-sm"><i class=" fa fa-plus mr-1"></i>add</a>
                </div>
              </div>
              <?php  
                    if($this->session->flashdata('pesan')){
                             echo'<div class="alert alert-primary alert-dismissible mr-5 ml-5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                        echo $this->session->flashdata('pesan');
                                        echo'</div>';
                      }
              ?>
              <div class="card-body">
                <table  id="example1" class="table table-bordered table-striped">
                    <thead >
                      <tr>
                          <th style=" color: blue; width: 5%;" >NO</th>
                           <th style="color: blue;">nama pengumuman</th>
                           <th style="color: blue;">isi pengumuman</th>
                            <th style="color: blue;">tanggal</th>
                            <th style="color: blue;">foto</th>
                          <th style="color: blue;  width: 5%;">PILIHAN</th>

                      </tr>
                  </thead>
                     <tbody>
                        <?php $no=1; foreach ($pengumuman as $key => $value) { ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $value->nama_pengumuman ?></td>
                              <td><?= $value->isi_pengumuman ?></td>
                               <td><?= $value->tanggal ?></td>
                              <td><img src="<?= base_url('gambar_pengumuman/'.$value->gambar) ?>" width="100px"></td>
                             
                            <td>
                                <a href="<?= base_url('pengumuman/edit/'.$value->id_pengumuman);?>"  class="btn btn-primary btn-sm"><i class=" fa fa-edit"></i></a>

                               <a href="<?= base_url('pengumuman/delete/'.$value->id_pengumuman);?>" onclick="return confirm('yakin akan di hapus')" class="btn btn-danger btn-sm"><i class=" fa fa-trash"></i></a>
                            </td>   
                         </tr>
                    </tbody>
                <?php } ?>
            </table>
              </div>
            </div>
          </div>
