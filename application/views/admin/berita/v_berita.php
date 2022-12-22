<div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?= $title2?></h3>
                
                  <div class="card-tools">
                  <a href="<?= base_url('berita/add')?>" class="btn btn-primary btn-sm"><i class=" fa fa-plus mr-1"></i>add</a>
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
                           <th style="color: blue;">judul berita</th>
                            <th style="color: blue;">slug</th>
                             <th style="color: blue;">isi berita</th>
                              <th style="color: blue;">gambar berita</th>
                               <th style="color: blue;">tgl berita</th>
                                <th style="color: blue;">id user</th>
                          <th style="color: blue;  width: 5%;">PILIHAN</th>

                      </tr>
                  </thead>
                     <tbody>
                        <?php $no=1; foreach ($berita as $key => $value) { ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $value->judul_berita ?></td>
                              <td><?= $value->slug_berita ?></td>
                               <td><?= $value->isi_berita ?></td>
                                  <td><img src="<?= base_url('gambarb/'.$value->gambar) ?>" width="100px"></td>
                                 <td><?= $value->tgl ?></td>
                                  <td><?= $value->nama_user ?></td>
                            <td>
                                <a href="<?= base_url('berita/edit/'.$value->id_berita);?>"  class="btn btn-primary btn-sm"><i class=" fa fa-edit"></i></a>

                               <a href="<?= base_url('berita/delete/'.$value->id_berita);?>" onclick="return confirm('yakin akan di hapus')" class="btn btn-danger btn-sm"><i class=" fa fa-trash"></i></a>
                            </td>   
                         </tr>
                    </tbody>
                <?php } ?>
            </table>
              </div>
            </div>
          </div>
