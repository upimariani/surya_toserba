<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cMasaKerja extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}
	public function index()
	{
		$data = array(
			'masa_kerja' => $this->mKriteria->select_masa_kerja()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/navbar');
		$this->load->view('Manager/Layout/sidebar');
		$this->load->view('Manager/vMasaKerja', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'range_masa_kerja' => $this->input->post('range'),
			'nilai_masa_kerja' => $this->input->post('nilai')
		);
		$this->mKriteria->insert_masa_kerja($data);
		$this->session->set_flashdata('success', 'Data Kriteria Masa Kerja Berhasil Disimpan!');
		redirect('Manager/cMasaKerja');
	}
	public function update($id)
	{
		$data = array(
			'range_masa_kerja' => $this->input->post('range'),
			'nilai_masa_kerja' => $this->input->post('nilai')
		);
		$this->mKriteria->update_masa_kerja($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Masa Kerja Berhasil Diupdate!');
		redirect('Manager/cMasaKerja');
	}
	public function delete($id)
	{
		$this->mKriteria->delete_masa_kerja($id);
		$this->session->set_flashdata('success', 'Data Kriteria Masa Kerja Berhasil Dihapus!');
		redirect('Manager/cMasaKerja');
	}
}

/* End of file cMasaKerja.php */
