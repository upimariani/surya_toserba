<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function kriteria()
	{
		$data['absensi'] = $this->db->query("SELECT * FROM `absensi`")->result();
		$data['kepribadian'] = $this->db->query("SELECT * FROM `kepribadian`")->result();
		$data['kualitas'] = $this->db->query("SELECT * FROM `kualitas`")->result();
		$data['masa_kerja'] = $this->db->query("SELECT * FROM `masa_kerja`")->result();
		return $data;
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('analisis');
		$this->db->join('karyawan', 'analisis.nik = karyawan.nik', 'left');
		$this->db->join('absensi', 'absensi.id_absensi = analisis.id_absensi', 'left');
		$this->db->join('kepribadian', 'kepribadian.id_kepribadian = analisis.id_kepribadian', 'left');
		$this->db->join('masa_kerja', 'masa_kerja.id_masa_kerja = analisis.id_masa_kerja', 'left');
		$this->db->join('kualitas', 'kualitas.id_kualitas = analisis.id_kualitas', 'left');
		$this->db->order_by('hasil', 'desc');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('analisis', $data);
	}
	public function karyawan_terbaik()
	{
		return $this->db->query("SELECT * FROM `analisis` JOIN karyawan ON karyawan.nik=analisis.nik ORDER BY hasil DESC LIMIT 1")->row();
	}
}

/* End of file mAnalisis.php */
