<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKepribadian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}
	public function index()
	{
		$data = array(
			'kepribadian' => $this->mKriteria->select_kepribadian()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/navbar');
		$this->load->view('Manager/Layout/sidebar');
		$this->load->view('Manager/vKepribadian', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'range_kepribadian' => $this->input->post('range'),
			'nilai_kepribadian' => $this->input->post('nilai')
		);
		$this->mKriteria->insert_kepribadian($data);
		$this->session->set_flashdata('success', 'Data Kriteria Kepribadian Berhasil Disimpan!');
		redirect('Manager/cKepribadian');
	}
	public function update($id)
	{
		$data = array(
			'range_kepribadian' => $this->input->post('range'),
			'nilai_kepribadian' => $this->input->post('nilai')
		);
		$this->mKriteria->update_kepribadian($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Kepribadian Berhasil Diupdate!');
		redirect('Manager/cKepribadian');
	}
	public function delete($id)
	{
		$this->mKriteria->delete_kepribadian($id);
		$this->session->set_flashdata('success', 'Data Kriteria Kepribadian Berhasil Dihapus!');
		redirect('Manager/cKepribadian');
	}
}

/* End of file cKepribadian.php */
