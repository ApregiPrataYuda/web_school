<?php
/**
 * 
 */
class M_mapel extends CI_model
{
	
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('mapel');
		$this->db->order_by('id_mapel','desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('mapel', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_mapel', $data['id_mapel']);
		$this->db->update('mapel', $data);
	}

	public function detail($id_mapel)
   {
   	$this->db->select('*');
   	$this->db->from('mapel');
   	$this->db->where('id_mapel', $id_mapel);
   	return $this->db->get()->row();
   }


	public function delete($data)
	{
		$this->db->where('id_mapel', $data['id_mapel']);
		$this->db->delete('mapel', $data);
	}
}

  ?>