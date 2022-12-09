<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$data = array(

			'bencana' => $this->m_model->data_bencana(),

		);
		$this->load->view('utama', $data, FALSE);
	}


	public function zakat()
	{
		$this->load->view('zakat');
	}

	

	public function peta()
	{
		$data = array(

			'bencana' => $this->m_model->data_bencana(),

		);

		$this->load->view('peta', $data);
	}

	public function stats()
	{
		$this->load->view('stats');
	}

		public function mutera()
	{
		$this->load->model('M_model');
		$lokasi = $this->M_model->get_all_lokasi()->result_array();
		// var_dump($lokasi);die();
		$this->load->view('mutera', [
			'lokasi' => $lokasi
		]);
	}
}
