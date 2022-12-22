<?php

/**
 * 
 */
class m_galerry extends CI_model
{
	
	 public function lists()
	{
		$this->db->select('galerry.*,count(foto.id_galerry) as jml_foto');
		$this->db->from('galerry');
		$this->db->join('foto','foto.id_galerry = galerry.id_galerry', 'left');
		$this->db->group_by('galerry.id_galerry');
		$this->db->order_by('id_galerry','desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('galerry', $data);
	}

	 public function delete($data)
	{
		$this->db->where('id_galerry', $data['id_galerry']);
		$this->db->delete('galerry', $data);
	}

	public function detail($id_galerry)
   {
   	$this->db->select('*');
   	$this->db->from('galerry');
   
   	$this->db->where('id_galerry', $id_galerry);
   	return $this->db->get()->row();
   }


   public function edit($data)
   {
    $this->db->where('id_galerry', $data['id_galerry']);
    $this->db->update('galerry',$data);
   }




 public function lists_foto($id_galerry)
	{
		$this->db->select('*');
		$this->db->from('foto');
		$this->db->where('id_galerry', $id_galerry);
		$this->db->order_by('id_foto','desc');
		return $this->db->get()->result();
	}

   public function add_foto($data)
	{
		$this->db->insert('foto', $data);
	}

	public function delete_foto($data)
	{
		$this->db->where('id_foto', $data['id_foto']);
		$this->db->delete('foto', $data);
	}


	public function detail_foto($id_foto)
   {
   	$this->db->select('*');
   	$this->db->from('foto');
   	$this->db->where('id_foto', $id_foto);
   	return $this->db->get()->row();
   }


	
	
}









?>