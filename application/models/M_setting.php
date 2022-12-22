<?php
/**
 * 
 */
class m_setting extends CI_model
{
	
	public function detail_sekolah()
	{
		$this->db->select('*');
		$this->db->from('setting');
		$this->db->order_by('id','desc');
		return $this->db->get()->row();
	}


	public function save_setting($data)	
	{
		$this->db->where('id', $data['id']);
		$this->db->update('setting', $data);
	}
	
}





  ?>