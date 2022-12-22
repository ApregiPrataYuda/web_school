<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_setting');
 	}

	public function index()
	{
		$data = array('title' => 'SMA 1 BDL',
			           'title2' => 'dashboard',
			           'isi' => 'admin/v_home'


	);


		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}



	//function setting

	public function setting()
	{
    $this->form_validation->set_rules('nip','nip','required');
    $this->form_validation->set_rules('nama_sekolah','nama sekolah','required');
    $this->form_validation->set_rules('alamat','alamat','required');
    $this->form_validation->set_rules('no_telp','no telp','required');
    $this->form_validation->set_rules('kepala_sekolah','kepala sekolah','required');
    $this->form_validation->set_rules('visi_sekolah','visi sekolah','required');
     $this->form_validation->set_rules('misi_sekolah','misi sekolah','required');
      $this->form_validation->set_rules('sejarah','sejarah','required');
 

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './foto_kepsek/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('foto_kepsek'))
                {
                      
                        $data = array('title' => 'SMA 1 BDL',
                       'title2' => 'setting web',
                       'setting' => $this->m_setting->detail_sekolah(),
                       'isi' => 'admin/v_setting'
            );
               $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    

                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './foto_kepsek'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       //script untuk menghapus foto lama di derectori
                       $setting = $this->m_setting->detail_sekolah();
                       if ($setting->foto_kepsek !="") {
                         unlink('./foto_kepsek/'.$setting->foto_kepsek);
                       }

                       //end link

                       $data = array(
                                            'id' => '1',
                                            'nip' => $this->input->post('nip'),
                                            'nama_sekolah' => $this->input->post('nama_sekolah'),  
                                            'alamat' => $this->input->post('alamat'),
                                            'no_telp' => $this->input->post('no_telp'),
                                            'kepala_sekolah' => $this->input->post('kepala_sekolah'),
                                            'visi_sekolah' => $this->input->post('visi_sekolah'),
                                            'misi_sekolah' => $this->input->post('misi_sekolah'),
                                            'sejarah' => $this->input->post('sejarah'),
                                            'foto_kepsek' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_setting->save_setting($data);
                                    $this->session->set_flashdata('pesan','settingan berhasil di ubah');
                                    redirect('admin/setting');
            }


                 $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './fotos'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       
                       $data = array(
                                            'id' => '1',
                                            'nip' => $this->input->post('nip'),
                                            'nama_sekolah' => $this->input->post('nama_sekolah'),  
                                            'alamat' => $this->input->post('alamat'),
                                            'no_telp' => $this->input->post('no_telp'),
                                            'kepala_sekolah' => $this->input->post('kepala_sekolah'),
                                            'visi_sekolah' => $this->input->post('visi_sekolah'),
                                            'misi_sekolah' => $this->input->post('misi_sekolah'),
                                             'sejarah' => $this->input->post('sejarah'),
                                            'foto_kepsek' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_setting->save_setting($data);
                                    $this->session->set_flashdata('pesan','settingan berhasil di ubah');
                                    redirect('admin/setting');

         } 

     
             $data     = array('title' => 'SMA 1 BDL',
                       'title2' => 'setting web',
                       'setting' => $this->m_setting->detail_sekolah(),
                       'isi' => 'admin/v_setting'
            );
               $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    


}


	}



 ?>