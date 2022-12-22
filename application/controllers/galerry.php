<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class galerry extends CI_Controller {

     public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_galerry');
 		
 	}


	public function index()
	{
		$data = array('title' => 'SMA 1 BDL',
			           'title2' => 'galerry foto',
			            'galerry'  =>  $this->m_galerry->lists(),
			           'isi' => 'admin/galerry/v_galerry'


	);


		$this->load->view('admin/layout/v_wrapper', $data, FALSE);



}

public function add()
{

	 $this->form_validation->set_rules('nama_galerry','nama_galerry','required');
    
   
    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './sampul/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('sampul'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add  galerry',
                   'error' => $this->upload->display_errors(),
                     'isi'    =>  'admin/galerry/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './sampul'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                'nama_galerry' => $this->input->post('nama_galerry'),
                                'sampul' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_galerry->add($data);
                                    $this->session->set_flashdata('pesan','data berhasil di simpan');
                                    redirect('galerry');
            }

         } 
		      	$data = array('title' => 'SMA 1 BDL',
					           'title2' => 'add galerry foto',
					           'isi' => 'admin/galerry/v_add'


	);


		$this->load->view('admin/layout/v_wrapper', $data, FALSE);



}


public function delete($id_galerry)
  {

        //script untuk menghapus foto lama di derectori
                       $galerry=$this->m_galerry->detail($id_galerry);
                       if ($galerry->sampul !="") {
                         unlink('./sampul/'.$galerry->sampul);
                       }

                       //end link

    $data = array(
                     'id_galerry'   => $id_galerry,
                          

     );
    $this->m_galerry->delete($data);
    $this->session->set_flashdata('pesan', 'data berhasil di hapus');
    redirect('galerry');
  }


public function edit($id_galerry)
{

    $this->form_validation->set_rules('nama_galerry','nama_galerry','required');
    

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './sampul/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('sampul'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data galerry',
                   'error' => $this->upload->display_errors(),
                   'galerry' => $this->m_galerry->detail($id_galerry),
                     'isi'    =>  'admin/galerry/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './sampul'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       //script untuk menghapus foto lama di derectori
                       $galerry=$this->m_galerry->detail($id_galerry);
                       if ($galerry->sampul !="") {
                         unlink('./sampul/'.$galerry->sampul);
                       }

                       //end link

                       $data = array(
                                             'id_galerry' => $id_galerry,
                                            'nama_galerry' => $this->input->post('nama_galerry'),
                                            'sampul' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_galerry->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('galerry');
            }

                 $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './sampul'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                           'id_galerry' => $id_galerry,
                                            'nama_galerry' => $this->input->post('nama_galerry')
                                            
                                        );
                                    $this->m_galerry->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('galerry');

         } 

      $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data galerry',
                   'galerry' => $this->m_galerry->detail($id_galerry),
                     'isi'    =>  'admin/galerry/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);


}



public function add_foto($id_galerry)
{
    $this->form_validation->set_rules('ket_foto','ket_foto','required');
    

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './foto/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('foto'))
                {
                    $galerry = $this->m_galerry->detail($id_galerry);
                    $data = array(
                    'title'   => 'SMA 1 BDL',
                   'title2' => 'add foto galerry : '.$galerry->nama_galerry,
                   'error' => $this->upload->display_errors(),
                   'galerry' =>  $galerry,
                   'foto'  => $this->m_galerry->lists_foto($id_galerry),
                     'isi'    =>  'admin/galerry/v_add_foto'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './foto'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                      

                       $data = array(
                                             'id_galerry' => $id_galerry,
                                            'ket_foto' => $this->input->post('ket_foto'),
                                            'foto' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_galerry->add_foto($data);
                                    $this->session->set_flashdata('pesan','foto berhasil di tambahkan');
                                    redirect('galerry/add_foto/'.$id_galerry);
            }

                 

         } 

       $galerry = $this->m_galerry->detail($id_galerry);
      $data = array('title'   => 'SMA 1 BDL',
                    'title2' => 'add foto galerry : '.$galerry->nama_galerry,
                   'galerry' => $galerry,
                   'foto'  => $this->m_galerry->lists_foto($id_galerry),
                     'isi'    =>  'admin/galerry/v_add_foto'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);


}


public function delete_foto($id_galerry,$id_foto)
  {

        //script untuk menghapus foto lama di derectori
                       $foto=$this->m_galerry->detail_foto($id_foto);
                       if ($foto->foto !="") {
                         unlink('./foto/'.$foto->foto);
                       }

                       //end link

    $data = array(
                     'id_foto'   => $id_foto,
                          

     );
    $this->m_galerry->delete_foto($data);
    $this->session->set_flashdata('pesan', 'foto berhasil di hapus');
    redirect('galerry/add_foto/'.$id_galerry);
  }






}


 ?>