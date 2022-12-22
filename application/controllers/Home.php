<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_home');
 		$this->load->model('M_guru');
 	}

	public function index()
	{
		$data = array('title' => 'web sekolah',
			           'berita' => $this->M_home->slider_berita(),
			           'guru' => $this->m_guru->lists(),
			           'isi' => 'v_home'


	);


		$this->load->view('layout/v_wrapperhome', $data, FALSE);
	}



	public function download()
	{
		$data = array('title' => 'download',
			            'download'  => $this->M_home->download(),
			           'isi' => 'v_download'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function guru()
	{
		$data = array('title' => 'guru',
			           'guru'  => $this->M_home->guru(),
			           'isi' => 'v_guru'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


public function siswa()
	{
		$data = array('title' => 'siswa',
			            'siswa'  => $this->M_home->siswa(),
			           'isi' => 'v_siswa'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function berita()
	{
        $this->load->library('pagination');
        $config['base_url'] = base_url('Home/berita');
         $config['total_rows'] = count($this->M_home->total_berita());
         $config['per_page'] = 8;
         $config['uri_segment'] =3;

         //start dan limit
           $limit = $config['per_page'];
           $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
         //----------$
             $config['first_link'] = 'first';
             $config['last_link'] = 'last';
             $config['next_link'] = 'next';
             $config['prev_link'] = 'prev';
             $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start"><ul class="pagination_list">';
             $config['num_tag_open'] = '<li>';
             $config['num_tag_close'] = '</li>';
             $config['cur_tag_open'] = '<li class="active"><a>';
             $config['cur_tag_close'] = '</a></li>';
             $config['next_tag_open'] = '<li>';
             $config['next_tag_close'] = '</li>';
             $config['prev_tag_open'] = '<li>';
             $config['prev_tag_close'] = '</li>';
             $config['first_tag_open'] = '<li>';
             $config['first_tag_close'] = '</li>';
             $config['last_tag_open'] = '<li>';
             $config['last_tag_close'] = '</li>';
             $config['full_tag_close'] = '</div></ul>';

             $this->pagination->initialize($config);
                    


		$data = array(
			            'paginasi' => $this->pagination->create_links(),
			            'latest_berita' => $this->M_home->latest_berita(),
			            'title' => 'berita',
			           'berita'  => $this->M_home->berita($limit,$start),
			           'isi' => 'v_berita'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function detail_berita($slug_berita)
	{
		$data = array('title' => 'detail_berita',
			           'latest_berita' => $this->M_home->latest_berita(),
			           'berita'  => $this->M_home->detail_berita($slug_berita),
			           'isi' => 'v_detail_berita'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
	}
	


 public function galerry()
 {
 		$data = array('title' => 'galerry',
			            'galerry'  => $this->M_home->galerry(),
			           'isi' => 'v_galerry'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
 }



 public function detail_galerry($id_galerry)
 {
 		$data = array('title' => 'detail_galerry',
			          'detail_galerry'  => $this->M_home->detail_galerry($id_galerry),
			          'isi' => 'v_detail_galerry'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
 }




 public function profile()
	{
		$data = array('title' => 'profile',
			           'profile'  => $this->m_setting->detail_sekolah(),
			           'isi' => 'v_profile'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function pengumuman()
 {
 		$data = array('title' => 'pengumuman',
			           'pengumuman'  => $this->M_home->pengumuman(),
			           'isi' => 'v_pengumuman'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
 }


 	public function about()
 {
 		$data = array('title' => 'about',
 			           'profile'  => $this->m_setting->detail_sekolah(),
 			            'setting' => $this->m_setting->detail_sekolah(),
			           'isi' => 'v_about'


	);


		$this->load->view('layout/v_wrapper', $data, FALSE);
 }




}




 ?>