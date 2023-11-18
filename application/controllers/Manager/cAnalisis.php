<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKaryawan');
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'karyawan' => $this->mKaryawan->select(),
			'kriteria' => $this->mAnalisis->kriteria(),
			'analisis' => $this->mAnalisis->select()
		);
		$this->load->view('Manager/Layout/head');
		$this->load->view('Manager/Layout/navbar');
		$this->load->view('Manager/Layout/sidebar');
		$this->load->view('Manager/vAnalisis', $data);
		$this->load->view('Manager/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'nik' => $this->input->post('nik'),
			'id_user' => '1',
			'id_kualitas' => $this->input->post('kualitas'),
			'id_absensi' => $this->input->post('absensi'),
			'id_masa_kerja' => $this->input->post('masa_kerja'),
			'id_kepribadian' => $this->input->post('kepribadian'),
			'tgl_proses' => date('Y-m-d'),
			'hasil' => '0',
			'approved' => '0'
		);
		$this->mAnalisis->insert($data);


		//variabel
		$variabel = $this->mAnalisis->select();
		foreach ($variabel as $key => $value) {
			$id_analisis[] = $value->id_analisis;
			$nik[] = $value->nik;
			$c1[] = $value->nilai_absensi;
			$c2[] = $value->nilai_kualitas;
			$c3[] = $value->nilai_masa_kerja;
			$c4[] = $value->nilai_kepribadian;
		}

		//pada c1 -----------------------------------
		$norm_c1 = 0;
		for ($a = 0; $a < sizeof($c1); $a++) {
			$norm_c1 += pow($c1[$a], 2);
		}
		// echo $norm_c1;
		// echo '<br>';

		//akar kuadrat
		$c1_kuadrat = round(sqrt($norm_c1), 3);
		// echo $c1_kuadrat;
		// echo '<br>';
		//x1
		for ($b = 0; $b < sizeof($c1); $b++) {
			$x1[] = round($c1[$b] / $c1_kuadrat, 3);
		}





		//pada c2-----------------------------------------
		$norm_c2 = 0;
		for ($e = 0; $e < sizeof($c2); $e++) {
			$norm_c2 += pow($c2[$e], 2);
		}
		// echo $norm_c2;
		// echo '<br>';

		//akar kuadrat
		$c2_kuadrat = round(sqrt($norm_c2), 3);
		// echo $c2_kuadrat;
		// echo '<br>';
		//x2
		for ($f = 0; $f < sizeof($c2); $f++) {
			$x2[] = round($c2[$f] / $c2_kuadrat, 3);
		}

		//pada c3------------------------------------------
		$norm_c3 = 0;
		for ($g = 0; $g < sizeof($c3); $g++) {
			$norm_c3 += pow($c3[$g], 2);
		}
		// echo $norm_c3;
		// echo '<br>';
		//akar kuadrat
		$c3_kuadrat = round(sqrt($norm_c3), 3);
		// echo $c3_kuadrat;
		// echo '<br>';
		//x3
		for ($h = 0; $h < sizeof($c3); $h++) {
			$x3[] = round($c3[$h] / $c3_kuadrat, 3);
		}

		//pada c4 ------------------------------------------
		$norm_c4 = 0;
		for ($i = 0; $i < sizeof($c4); $i++) {
			$norm_c4 += pow($c4[$i], 2);
		}

		// echo $norm_c4;
		// echo '<br>';
		//akar kuadrat
		$c4_kuadrat = round(sqrt($norm_c4), 3);
		// echo $c4_kuadrat;
		// echo '<br>';
		//x4
		for ($j = 0; $j < sizeof($c4); $j++) {
			$x4[] = round($c4[$j] / $c4_kuadrat, 3);
		}

		//hasil nilai optimasi, jumlah perkalian bobot kriteria-------------------
		//c1 = 30;  c3=25; c4=30; c5=15

		for ($k = 0; $k < sizeof($x1); $k++) {
			// echo $x1[$k] . ' | ' . $x2[$k] . ' | ' . $x3[$k] . ' | ' . $x4[$k] . '|' . $id_karyawan[$k];
			// echo '<br>';
			$ac = round(($x1[$k] * 0.3) + ($x2[$k] * 0.3) + ($x3[$k] * 0.25) + ($x4[$k] * 0.15), 3);


			$data = array(
				'hasil' => $ac
			);
			$this->db->where('id_analisis', $id_analisis[$k]);
			$this->db->update('analisis', $data);

			$update_status = array(
				'stat_analisis' => '1'
			);
			$this->db->where('nik', $nik[$k]);
			$this->db->update('karyawan', $update_status);
		}


		$this->session->set_flashdata('success', 'Data Analisis Berhasil Disimpan!');
		redirect('Manager/cAnalisis');
	}
	public function delete($id)
	{
		$this->db->where('id_analisis', $id);
		$this->db->delete('analisis');
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Dihapus!');
		redirect('Manager/cAnalisis');
	}
}

/* End of file cAnalisis.php */
