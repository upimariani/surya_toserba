<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKualitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}
	public function index()
	{
		$data = array(
			'kualitas' => $this->mKriteria->select_kualitas()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/navbar');
		$this->load->view('Manager/Layout/sidebar');
		$this->load->view('Manager/vKualitas', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'range_kualitas' => $this->input->post('range'),
			'nilai_kualitas' => $this->input->post('nilai')
		);
		$this->mKriteria->insert_kualitas($data);
		$this->session->set_flashdata('success', 'Data Kriteria kualitas Berhasil Disimpan!');
		redirect('Manager/cKualitas');
	}
	public function update($id)
	{
		$data = array(
			'range_kualitas' => $this->input->post('range'),
			'nilai_kualitas' => $this->input->post('nilai')
		);
		$this->mKriteria->update_kualitas($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria kualitas Berhasil Diupdate!');
		redirect('Manager/cKualitas');
	}
	public function delete($id)
	{
		$this->mKriteria->delete_kualitas($id);
		$this->session->set_flashdata('success', 'Data Kriteria kualitas Berhasil Dihapus!');
		redirect('Manager/cKualitas');
	}
}

/* End of file cKualitas.php */
