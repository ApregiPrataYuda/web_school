<?php 
/**
 * 
 */
class M_pengumuman extends CI_model
{
	
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->order_by('id_pengumuman','desc');
		return $this->db->get()->result();
	}
 

	public function add($data)
	{
		$this->db->insert('pengumuman', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_pengumuman', $data['id_pengumuman']);
		$this->db->update('pengumuman', $data);
	}

	public function detail($id_pengumuman)
   {
   	$this->db->select('*');
   	$this->db->from('pengumuman');
   	$this->db->where('id_pengumuman', $id_pengumuman);
   	return $this->db->get()->row();
   }

	public function delete($data)
	{
		$this->db->where('id_pengumuman', $data['id_pengumuman']);
		$this->db->delete('pengumuman', $data);
	}
}


  ?>



















