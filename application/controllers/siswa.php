<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class siswa extends CI_controller
{
	 public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_siswa');
 		
 	}

	public function index()
	{
	  

	  $data = array('title'   => 'SMA 1 BDL',
	  	             'title2' => 'siswa',
	  	             'siswa'  =>  $this->m_siswa->lists(),
                     'isi'    =>  'admin/siswa/v_siswa'
	   );

		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}


	public function add()
  {

    $this->form_validation->set_rules('nis','nis','required');
    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('tempat_lahir','tempat lahir','required');
    $this->form_validation->set_rules('tgl_lahir','tgl lahir','required');
    $this->form_validation->set_rules('kelas','kelas','required');
    //$this->form_validation->set_rules('foto','foto','required');

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './fotos/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('foto'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add data siswa',
                   'error' => $this->upload->display_errors(),
                     'isi'    =>  'admin/siswa/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './fotos'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                            'nis' => $this->input->post('nis'),
                                            'nama' => $this->input->post('nama'),  
                                            'tempat_lahir' => $this->input->post('tempat_lahir'),
                                            'tgl_lahir' => $this->input->post('tgl_lahir'),
                                            'kelas' => $this->input->post('kelas'),
                                            'foto' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_siswa->add($data);
                                    $this->session->set_flashdata('pesan','data berhasil di tambahkan');
                                    redirect('siswa');
            }

         } 

       $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add data siswa',
                     'isi'    =>  'admin/siswa/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

  }


  public function delete($id_siswa)
  {

        //script untuk menghapus foto lama di derectori
                       $siswa=$this->m_siswa->detail($id_siswa);
                       if ($siswa->foto !="") {
                         unlink('./fotos/'.$siswa->foto);
                       }

                       //end link




    $data = array(
                     'id_siswa'   => $id_siswa,
                          

     );
    $this->m_siswa->delete($data);
    $this->session->set_flashdata('pesan', 'data berhasil di hapus');
    redirect('siswa');
  }


  public function edit($id_siswa)
{

  $this->form_validation->set_rules('nis','nis','required');
    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('tempat_lahir','tempat lahir','required');
    $this->form_validation->set_rules('tgl_lahir','tgl lahir','required');
    $this->form_validation->set_rules('kelas','kelas','required');
    //$this->form_validation->set_rules('foto','foto','required');

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './fotos/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('foto'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data siswa',
                   'error' => $this->upload->display_errors(),
                   'siswa' => $this->m_siswa->detail($id_siswa),
                     'isi'    =>  'admin/siswa/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './fotos'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       //script untuk menghapus foto lama di derectori
                       $siswa=$this->m_siswa->detail($id_siswa);
                       if ($siswa->foto !="") {
                         unlink('./fotos/'.$siswa->foto);
                       }

                       //end link

                       $data = array(
                                            'id_siswa' => $id_siswa,
                                            'nis' => $this->input->post('nis'),
                                            'nama' => $this->input->post('nama'),  
                                            'tempat_lahir' => $this->input->post('tempat_lahir'),
                                            'tgl_lahir' => $this->input->post('tgl_lahir'),
                                            'kelas' => $this->input->post('kelas'),
                                            'foto' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_siswa->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('siswa');
            }

                 $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './fotos'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                            'id_siswa' => $id_siswa,
                                            'nis' => $this->input->post('nis'),
                                            'nama' => $this->input->post('nama'),  
                                            'tempat_lahir' => $this->input->post('tempat_lahir'),
                                            'tgl_lahir' => $this->input->post('tgl_lahir'),
                                            'kelas' => $this->input->post('kelas'),
                                           
                                           
                                        );
                                    $this->m_siswa->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('siswa');

         } 

      $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data siswa',
                   'siswa' => $this->m_siswa->detail($id_siswa),
                     'isi'    =>  'admin/siswa/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);


}


}















 ?>