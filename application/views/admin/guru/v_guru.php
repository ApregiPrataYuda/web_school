<div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?= $title2?></h3>
                
                  <div class="card-tools">
                  <a href="<?= base_url('guru/add')?>" class="btn btn-primary btn-sm"><i class=" fa fa-plus mr-1"></i>add</a>
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
                           <th style="color: blue;">NIP</th>
                           <th style="color: blue;">NAMA</th>
                           <th style="color: blue;">TEMPAT LAHIR</th>
                           <th style="color: blue;">TGL LAHIR</th>
                           <th style="color: blue;">MAPEL</th>
                           <th style="color: blue;">PENDIDIKAN</th>
                           <th style="color: blue;">FOTO</th>
                          <th style="color: blue;  width: 5%;">PILIHAN</th>

                      </tr>
                  </thead>
                     <tbody>
                        <?php $no=1; foreach ($guru as $key => $value) { ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $value->nip ?></td>
                             <td><?= $value->nama ?></td>
                             <td><?= $value->tempat_lahir ?></td>
                             <td><?= $value->tgl_lahir ?></td>
                             <td><?= $value->nama_mapel ?></td>
                             <td><?= $value->pendidikan ?></td>
                             <td><img src="<?= base_url('fotog/'.$value->foto) ?>" width="100px"></td>
                            <td>
                               
                             <a href="<?= base_url('guru/edit/'.$value->id_guru);?>"  class="btn btn-success btn-sm"><i class=" fa fa-edit"></i></a>
                             
                               <a href="<?= base_url('guru/delete/'.$value->id_guru);?>" onclick="return confirm('yakin akan di hapus')" class="btn btn-danger btn-sm"><i class=" fa fa-trash"></i></a>
                            </td>   
                         </tr>
                    </tbody>
                <?php } ?>
            </table>
              
              </div>
            </div>
          </div>



        