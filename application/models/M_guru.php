<?php 

class M_guru extends CI_model
{
	
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('mapel','mapel.id_mapel = guru.id_mapel', 'left');
		$this->db->order_by('id_guru','desc');
		return $this->db->get()->result();
	}

 
	public function add($data)
	{
		$this->db->insert('guru', $data);
	}

  public function delete($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->delete('guru', $data);
	}

   public function detail($id_guru)
   {
   	$this->db->select('*');
   	$this->db->from('guru');
   	$this->db->join('mapel','mapel.id_mapel = guru.id_mapel', 'left');
   	$this->db->where('id_guru', $id_guru);
   	return $this->db->get()->row();
   }


   public function edit($data)
   {
    $this->db->where('id_guru', $data['id_guru']);
    $this->db->update('guru',$data);
   }
	

}
 ?>