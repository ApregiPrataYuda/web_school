<?php 

//catatan file tidak menggunakan detail
defined('BASEPATH') OR exit('No direct script access allowed');

class download extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_download');
 		
 	}


	public function index()
	{

		$data = array('title' => 'SMA 1 BDL',
			           'title2' => 'download/upload area',
			           'download' => $this->m_download->lists(),
			           'isi' => 'admin/download/v_download'


	);


		$this->load->view('admin/layout/v_wrapper', $data, FALSE);



}

public function add()
{
	

    $this->form_validation->set_rules('nama_file','nama_file','required');
   
   

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './file/';
                $config['allowed_types']        = 'pdf|doc|docx|ppt|pptx|text';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('file'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add data file',
                   'error_upload' => 'file tidak sesuai format',
                     'isi'    =>  'admin/download/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './file'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                       $data = array(
                                            'nama_file' => $this->input->post('nama_file'),
                                            'file' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_download->add($data);
                                    $this->session->set_flashdata('pesan','file berhasil di tambahkan');
                                    redirect('download');
            }

         } 

       $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'add data download',
                     'isi'    =>  'admin/download/v_add'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

  }

		
public function delete($id_file)
  {

        //script untuk menghapus foto lama di derectori
                       $file=$this->m_download->detail($id_file);
                       if ($file->file !="") {
                         unlink('./file/'.$file->file);
                       }

                       //end link

    $data = array(
                     'id_file'   => $id_file,
                          

     );
    $this->m_download->delete($data);
    $this->session->set_flashdata('pesan', 'file berhasil di hapus');
    redirect('download');
  }



public function edit($id_file)
{
  

    $this->form_validation->set_rules('nama_file','nama_file','required');
   
   

    if ($this->form_validation->run() == TRUE) {
              $config['upload_path']          = './file/';
                $config['allowed_types']        = 'pdf|doc|docx|ppt|pptx|text';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if (! $this->upload->do_upload('file'))
                {
                      
                    $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data file',
                   'download' => $this->m_download->detail($id_file),
                   'error_upload' => 'file tidak sesuai format',
                     'isi'    =>  'admin/download/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                       
                }
                else
                {
                     $upload_data              = array('uploads' => $this->upload->data());
                     $config['image_library']  = 'gd2';
                     $config['source_image']   = './file'. $upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);

                        //script untuk menghapus file lama di derectori
                       $download=$this->m_download->detail($id_file);
                       if ($download->file !="") {
                         unlink('./file/'.$download->file);
                       }

                       //end link

                       $data = array(
                                            'id_file' =>$id_file,
                                            'nama_file' => $this->input->post('nama_file'),
                                            'file' => $upload_data['uploads']['file_name']
                                        );
                                    $this->m_download->edit($data);
                                    $this->session->set_flashdata('pesan','file berhasil di edit');
                                    redirect('download');
            }

             $data = array(
                                            'id_file' =>$id_file,
                                            'nama_file' => $this->input->post('nama_file'),
                                            
                                        );
                                    $this->m_download->edit($data);
                                    $this->session->set_flashdata('pesan','file berhasil di edit');
                                    redirect('download');

         } 

       $data = array('title'   => 'SMA 1 BDL',
                   'title2' => 'edit data download',
                    'download' => $this->m_download->detail($id_file),
                     'isi'    =>  'admin/download/v_edit'
                  );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

  }





}


 ?>