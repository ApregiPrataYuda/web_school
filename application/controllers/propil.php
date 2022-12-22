<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class propil extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'user propil',
			           'title2' => 'propil',
			           'isi' => 'admin/propil'


	);


		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}
}





 ?>