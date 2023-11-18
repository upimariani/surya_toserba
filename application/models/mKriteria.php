<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mKriteria extends CI_Model
{
	public function insert_absensi($data)
	{
		$this->db->insert('absensi', $data);
	}
	public function select_absensi()
	{
		$this->db->select('*');
		$this->db->from('absensi');
		return $this->db->get()->result();
	}
	public function update_absensi($id, $data)
	{
		$this->db->where('id_absensi', $id);
		$this->db->update('absensi', $data);
	}
	public function delete_absensi($id)
	{
		$this->db->where('id_absensi', $id);
		$this->db->delete('absensi');
	}



	public function insert_kualitas($data)
	{
		$this->db->insert('kualitas', $data);
	}
	public function select_kualitas()
	{
		$this->db->select('*');
		$this->db->from('kualitas');
		return $this->db->get()->result();
	}
	public function update_kualitas($id, $data)
	{
		$this->db->where('id_kualitas', $id);
		$this->db->update('kualitas', $data);
	}
	public function delete_kualitas($id)
	{
		$this->db->where('id_kualitas', $id);
		$this->db->delete('kualitas');
	}


	public function insert_masa_kerja($data)
	{
		$this->db->insert('masa_kerja', $data);
	}
	public function select_masa_kerja()
	{
		$this->db->select('*');
		$this->db->from('masa_kerja');
		return $this->db->get()->result();
	}
	public function update_masa_kerja($id, $data)
	{
		$this->db->where('id_masa_kerja', $id);
		$this->db->update('masa_kerja', $data);
	}
	public function delete_masa_kerja($id)
	{
		$this->db->where('id_masa_kerja', $id);
		$this->db->delete('masa_kerja');
	}

	public function insert_kepribadian($data)
	{
		$this->db->insert('kepribadian', $data);
	}
	public function select_kepribadian()
	{
		$this->db->select('*');
		$this->db->from('kepribadian');
		return $this->db->get()->result();
	}
	public function update_kepribadian($id, $data)
	{
		$this->db->where('id_kepribadian', $id);
		$this->db->update('kepribadian', $data);
	}
	public function delete_kepribadian($id)
	{
		$this->db->where('id_kepribadian', $id);
		$this->db->delete('kepribadian');
	}
}

/* End of file mKriteria.php */
