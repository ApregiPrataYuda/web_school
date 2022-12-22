<?php 
/**
 * 
 */
class M_home extends CI_model
{
	
	public function download()
	{
	  	$this->db->select('*');
		$this->db->from('file');
		$this->db->order_by('id_file','desc');
		return $this->db->get()->result();
	}


	public function siswa()
	{
	  	$this->db->select('*');
		$this->db->from('siswa');
		$this->db->order_by('id_siswa','desc');
		return $this->db->get()->result();
	}
  
  public function guru()
	{
	  	$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('mapel','mapel.id_mapel = guru.id_mapel', 'left');
		$this->db->order_by('id_guru','desc');
		return $this->db->get()->result();
	}



//memunculkan berita dengan pagging
	 public function berita($limit,$start)
	{
	  	$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user','user.id_user = berita.id_user', 'left');
		$this->db->order_by('id_berita','desc');
		$this->db->limit($limit,$start);
		return $this->db->get()->result();
	}

	public function total_berita()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user','user.id_user = berita.id_user', 'left');
		$this->db->order_by('id_berita','desc');
		return $this->db->get()->result();
	}

	public function detail_berita($slug_berita)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user','user.id_user = berita.id_user', 'left');
		$this->db->where('slug_berita',$slug_berita );
		return $this->db->get()->row();
	}


	public function latest_berita()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user','user.id_user = berita.id_user', 'left');
		$this->db->order_by('id_berita','asc');
		$this->db->limit(10);
		return $this->db->get()->result();
	}


	public function galerry()
	{
		$this->db->select('galerry.*,count(foto.id_galerry) as jml_foto');
		$this->db->from('galerry');
		$this->db->join('foto','foto.id_galerry = galerry.id_galerry', 'left');
		$this->db->group_by('galerry.id_galerry');
		$this->db->order_by('id_galerry','desc');
		return $this->db->get()->result();
	}


	public function detail_galerry($id_galerry)
	{
		$this->db->select('*');
		$this->db->from('foto');
		$this->db->where('id_galerry', $id_galerry);
		$this->db->order_by('id_foto','desc');
		return $this->db->get()->result();
	}


	public function slider_berita()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('user','user.id_user = berita.id_user', 'left');
		$this->db->order_by('id_berita','desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}

	public function pengumuman()
	{
	  	$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->order_by('id_pengumuman','desc');
		return $this->db->get()->result();
	}



}














 ?>