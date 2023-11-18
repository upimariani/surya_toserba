<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAbsensi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}

	public function index()
	{
		$data = array(
			'absensi' => $this->mKriteria->select_absensi()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/navbar');
		$this->load->view('Manager/Layout/sidebar');
		$this->load->view('Manager/vAbsensi', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'range_absensi' => $this->input->post('range'),
			'nilai_absensi' => $this->input->post('nilai')
		);
		$this->mKriteria->insert_absensi($data);
		$this->session->set_flashdata('success', 'Data Kriteria Absensi Berhasil Disimpan!');
		redirect('Manager/cAbsensi');
	}
	public function update($id)
	{
		$data = array(
			'range_absensi' => $this->input->post('range'),
			'nilai_absensi' => $this->input->post('nilai')
		);
		$this->mKriteria->update_absensi($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Absensi Berhasil Diupdate!');
		redirect('Manager/cAbsensi');
	}
	public function delete($id)
	{
		$this->mKriteria->delete_absensi($id);
		$this->session->set_flashdata('success', 'Data Kriteria Absensi Berhasil Dihapus!');
		redirect('Manager/cAbsensi');
	}
}

/* End of file cAbsensi.php */
