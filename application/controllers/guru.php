<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class guru extends CI_controller
{
	 public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_guru');
 		$this->load->model('m_mapel');
 	}

	public function index()
	{
	  

	  $data = array('title'   => 'SMA 1 BDL',
	  	             'title2' => 'guru',
	  	             'guru'  =>  $this->m_guru->lists(),
                     'isi'    =>  'admin/guru/v_guru'
	   );

		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}


	public function add()
	{

		$this->form_validation->set_rules('nip','nip','required');
		$this->form_validation->set_rules('nama','nama','required');
	  $this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
    $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required');
     $this->form_validation->set_rules('id_mapel','id_mapel','required');
      $this->form_validation->set_rules('pendidikan','pendidikan','required');
    
    
	

    if ($this->form_validation->run() == TRUE) {
    	        $config['upload_path']          = './fotog/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('foto'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
	  	             'title2' => 'add data guru',
	  	             'error' => $this->upload->display_errors(),
	  	             'mapel'  => $this->m_mapel->lists(),
                     'isi'    =>  'admin/guru/v_add'
	                );

		            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './fotog'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                       	                    'nip' => $this->input->post('nip'),
                       	                    'nama' => $this->input->post('nama'),  
                       	                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                       	                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                       	                    'id_mapel' => $this->input->post('id_mapel'),
                       	                    'pendidikan' => $this->input->post('pendidikan'),
                       	                    'foto' => $upload_data['uploads']['file_name']
                       	                );
                                    $this->m_guru->add($data);
                                    $this->session->set_flashdata('pesan','data berhasil di tambahkan');
                                    redirect('guru');
            }

         } 

       $data = array('title'   => 'SMA 1 BDL',
	  	             'title2' => 'add data guru',
	  	             'mapel'  => $this->m_mapel->lists(),
                     'isi'    =>  'admin/guru/v_add'
	                );

		            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

	}

 

public function delete($id_guru)
  {
     //script untuk menghapus foto lama di derectori
                       $guru=$this->m_guru->detail($id_guru);
                       if ($guru->foto !="") {
                         unlink('./fotog/'.$guru->foto);
                       }

                       //end link



    $data = array(
                     'id_guru'   => $id_guru,
                          

     );
    $this->m_guru->delete($data);
    $this->session->set_flashdata('pesan', 'data berhasil di hapus');
    redirect('guru');
  }

  
public function edit($id_guru)
{

  $this->form_validation->set_rules('nip','nip','required');
    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('tempat_lahir','tempat lahir','required');
    $this->form_validation->set_rules('tgl_lahir','tgl lahir','required');
    $this->form_validation->set_rules('id_mapel','mapel','required');
    $this->form_validation->set_rules('pendidikan','pendidikan','required');
    //$this->form_validation->set_rules('foto','foto','required');

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './fotog/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('foto'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data guru',
                   'error' => $this->upload->display_errors(),
                   'guru' => $this->m_guru->detail($id_guru),
                   'mapel'  => $this->m_mapel->lists(),
                     'isi'    =>  'admin/guru/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './fotog'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       //script untuk menghapus foto lama di derectori
                       $guru=$this->m_guru->detail($id_guru);
                       if ($guru->foto !="") {
                         unlink('./fotog/'.$guru->foto);
                       }

                       //end link

                       $data = array(
                                            'id_guru' => $id_guru,
                                            'nip' => $this->input->post('nip'),
                                            'nama' => $this->input->post('nama'),  
                                            'tempat_lahir' => $this->input->post('tempat_lahir'),
                                            'tgl_lahir' => $this->input->post('tgl_lahir'),
                                            'id_mapel' => $this->input->post('id_mapel'),
                                            'pendidikan' => $this->input->post('pendidikan'),
                                            'foto' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_guru->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('guru');
            }

                 $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './fotog'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                            'id_guru' => $id_guru,
                                            'nip' => $this->input->post('nip'),
                                            'nama' => $this->input->post('nama'),  
                                            'tempat_lahir' => $this->input->post('tempat_lahir'),
                                            'tgl_lahir' => $this->input->post('tgl_lahir'),
                                            'id_mapel' => $this->input->post('id_mapel'),
                                            'pendidikan' => $this->input->post('pendidikan'),
                                           
                                        );
                                    $this->m_guru->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('guru');

         } 

      $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data guru',
                   'guru' => $this->m_guru->detail($id_guru),
                   'mapel'  => $this->m_mapel->lists(),
                     'isi'    =>  'admin/guru/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);


}


}






 ?>