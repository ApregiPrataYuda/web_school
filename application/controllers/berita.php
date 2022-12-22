<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {

  public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_berita');
 	}

	public function index()
	{
		$data = array('title' => 'SMA 1 BDL',
			           'title2' => 'berita',
			            'berita' =>  $this->M_berita->lists(),
			           'isi' => 'admin/berita/v_berita'


	);


		$this->load->view('admin/layout/v_wrapper', $data, FALSE);

}


public function add()
{

    $this->form_validation->set_rules('judul_berita','judul_berita','required');
    $this->form_validation->set_rules('isi_berita','isi berita','required',array('required'=>'%s harus di isi'));
   
   
    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './gambarb/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('gambar'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add data berita',
                   'error' => $this->upload->display_errors(),
                     'isi'    =>  'admin/berita/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './gambarb'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                'judul_berita' => $this->input->post('judul_berita'),
                                'slug_berita' => url_title($this->input->post('judul_berita'),'dash', TRUE),  
                                'isi_berita' => $this->input->post('isi_berita'),
                                'tgl' => date('Y,m,d'),
                                'id_user' => $this->session->userdata('id_user'),
                                'gambar' => $upload_data['uploads']['file_name']
                                        );
                                    $this->M_berita->add($data);
                                    $this->session->set_flashdata('pesan','berita berhasil di posting');
                                    redirect('berita');
            }

         } 

				$data = array('title' => 'SMA 1 BDL',
						           'title2' => 'add berita',
						           'isi' => 'admin/berita/v_add'


	);


		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
}



 public function delete($id_berita)
  {

        //script untuk menghapus foto lama di derectori
                       $berita=$this->M_berita->detail($id_berita);
                       if ($berita->gambar !="") {
                         unlink('./gambarb/'.$berita->gambar);
                       }

                       //end link




    $data = array(
                     'id_berita'   => $id_berita,
                          

     );
    $this->M_berita->delete($data);
    $this->session->set_flashdata('pesan', 'data berhasil di hapus');
    redirect('berita');
  }



 public function edit($id_berita)
{

  $this->form_validation->set_rules('judul_berita','judul_berita','required');
    $this->form_validation->set_rules('isi_berita','isi berita','required',array('required'=>'%s harus di isi'));
   

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './gambarb/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('gambar'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data berita',
                   'error' => $this->upload->display_errors(),
                   'berita' => $this->M_berita->detail($id_berita),
                     'isi'    =>  'admin/berita/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './gambarb'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       //script untuk menghapus foto lama di derectori
                       $berita=$this->M_berita->detail($id_berita);
                       if ($berita->gambar !="") {
                         unlink('./gambarb/'.$berita->gambar);
                       }

                       //end link

                       $data = array(
                                 'id_berita' => $id_berita,
                                 'judul_berita' => $this->input->post('judul_berita'),
                                'slug_berita' => url_title($this->input->post('judul_berita'),'dash', TRUE),  
                                'isi_berita' => $this->input->post('isi_berita'),
                                'tgl' => date('Y,m,d'),
                                'id_user' => $this->session->userdata('id_user'),
                                'gambar' => $upload_data['uploads']['file_name']
                                        );
                                    $this->M_berita->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('berita');
            }

                 $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './gambarb'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                'id_berita' => $id_berita,
                                'judul_berita' => $this->input->post('judul_berita'),
                                'slug_berita' => url_title($this->input->post('judul_berita'),'dash', TRUE),  
                                'isi_berita' => $this->input->post('isi_berita'),
                                'tgl' => date('Y,m,d'),
                                'id_user' => $this->session->userdata('id_user')
                                
   
                                        );
                                    $this->M_berita->edit($data);
                                    $this->session->set_flashdata('pesan','data berhasil di edit');
                                    redirect('berita');

         } 

      $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data berita',
                   'berita' => $this->M_berita->detail($id_berita),
                     'isi'    =>  'admin/berita/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);


}

 

}
?>

