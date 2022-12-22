<?php 

//catatan file tidak menggunakan detail
defined('BASEPATH') OR exit('No direct script access allowed');

class mapel extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_mapel');
    
  }


  public function index()
  {
    $data = array('title' => 'SMA 1 BDL',
                 'title2' => 'mapel',
                 'mapel' =>  $this->m_mapel->lists(),
                 'isi' => 'admin/mapel/v_mapel'


  );


    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }


  //ini adalah cript codingan tanpa mengunakan gambar
public function add()
{


    $this->form_validation->set_rules('nama_mapel','nama_mapel','required');
   
     if ($this->form_validation->run() == FALSE) {
            $data = array('title' => 'SMA 1 BDL',
                 'title2' => 'add mapel',
                 'isi' => 'admin/mapel/v_add'


                 );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);



           }else{
          $data = array(

                       'nama_mapel' => $this->input->post('nama_mapel'),
                                        );

                                    $this->m_mapel->add($data);
                                    $this->session->set_flashdata('pesan','data berhasil di tambahkan');
                                    redirect('mapel');

   }

}



public function delete($id_mapel)
{
 
   $data = array(

                   'id_mapel'  => $id_mapel,

                    );

                                    $this->m_mapel->delete($data);
                                    $this->session->set_flashdata('pesan','mapel berhasil di hapus');
                                    redirect('mapel');

}



  //ini adalah cript codingan tanpa mengunakan gambar
public function edit($id_mapel)
{


    $this->form_validation->set_rules('nama_mapel','nama_mapel','required');
     if ($this->form_validation->run() == FALSE) {
            
            $data = array('title' => 'SMA 1 BDL',
                 'title2' => 'edit mapel',
                  'mapel' => $this->m_mapel->detail($id_mapel),
                 'isi' => 'admin/mapel/v_edit'


                 );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);



           }else{
          $data = array(
                        'id_mapel'  => $id_mapel,
                       'nama_mapel' => $this->input->post('nama_mapel'),
                       
                        
                                        );

                                    $this->m_mapel->edit($data);
                                    $this->session->set_flashdata('pesan','mapel berhasil di edit');
                                    redirect('mapel');

   }

}

  



}
?>