<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class pengumuman extends CI_controller
{
   public function __construct()
  {
    parent::__construct();
    $this->load->model('m_pengumuman');
    
  }

  public function index()
  {
    

    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'pengumuman',
                   'pengumuman'  =>  $this->m_pengumuman->lists(),
                     'isi'    =>  'admin/pengumuman/v_pengumuman'
     );

    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }


  public function add()
  {

    $this->form_validation->set_rules('nama_pengumuman','nama_pengumuman','required');
    $this->form_validation->set_rules('isi_pengumuman','isi_pengumuman','required');
    $this->form_validation->set_rules('tanggal','tanggal','required');
    
    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './gambar_pengumuman/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('gambar'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add data pengumuman',
                   'error' => $this->upload->display_errors(),
                     'isi'    =>  'admin/pengumuman/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './gambar_pengumuman'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                            'nama_pengumuman' => $this->input->post('nama_pengumuman'),
                                            'isi_pengumuman' => $this->input->post('isi_pengumuman'),  
                                            'tanggal' => $this->input->post('tanggal'),
                                            'gambar' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_pengumuman->add($data);
                                    $this->session->set_flashdata('pesan','data berhasil di tambahkan');
                                    redirect('pengumuman');
            }

         } 

       $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add data pengumuman',
                     'isi'    =>  'admin/pengumuman/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

  }


  public function delete($id_pengumuman)
  {

        //script untuk menghapus foto lama di derectori
                       $pengumuman=$this->m_pengumuman->detail($id_pengumuman);
                       if ($pengumuman->gambar !="") {
                         unlink('./gambar_pengumuman/'.$pengumuman->gambar);
                       }

                       //end link




    $data = array(
                     'id_pengumuman'   => $id_pengumuman,
                          

     );
    $this->m_pengumuman->delete($data);
    $this->session->set_flashdata('pesan', 'data berhasil di hapus');
    redirect('pengumuman');
  }


  public function edit($id_pengumuman)
{

    $this->form_validation->set_rules('nama_pengumuman','nama_pengumuman','required');
    $this->form_validation->set_rules('isi_pengumuman','isi_pengumuman','required');
    $this->form_validation->set_rules('tanggal','tanggal','required');
    
       if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './gambar_pengumuman/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('gambar'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data pengumuman',
                   'error' => $this->upload->display_errors(),
                   'pengumuman' => $this->m_pengumuman->detail($id_pengumuman),
                     'isi'    =>  'admin/pengumuman/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './gambar_pengumuman'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       //script untuk menghapus foto lama di derectori
                       $pengumuman=$this->m_pengumuman->detail($id_pengumuman);
                       if ($pengumuman->gambar !="") {
                         unlink('./gambar_pengumuman/'.$pengumuman->gambar);
                       }

                       //end link

                       $data = array(
                                             'id_pengumuman' =>$id_pengumuman,
                                            'nama_pengumuman' => $this->input->post('nama_pengumuman'),
                                            'isi_pengumuman' => $this->input->post('isi_pengumuman'),  
                                            'tanggal' => $this->input->post('tanggal'),
                                            'gambar' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_pengumuman->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('pengumuman');
            }

                 $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './gambar_pengumuman'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                            'id_pengumuman' =>$id_pengumuman,
                                            'nama_pengumuman' => $this->input->post('nama_pengumuman'),
                                            'isi_pengumuman' => $this->input->post('isi_pengumuman'),  
                                            'tanggal' => $this->input->post('tanggal'),
                                         
                                           
                                           
                                        );
                                    $this->m_pengumuman->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('pengumuman');

         } 

      $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data pengumuman',
                   'pengumuman' => $this->m_pengumuman->detail($id_pengumuman),
                     'isi'    =>  'admin/pengumuman/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);


}


}















 ?>