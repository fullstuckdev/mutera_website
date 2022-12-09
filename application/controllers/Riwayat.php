<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		is_logged_in();
	}

    public function index(){
		$atas = array(
			'menu' => 'riwayat'
		);
		$this->load->view('templates/admin/header', $atas);
		$data = array(
			'judul' => 'Data Riwayat',


		);
		$this->load->view('riwayat', $data);
		$this->load->view('templates/admin/footer');
    }

    public function tampil($offset = null)
	{
		$search = array(
			'keyword' => trim($this->input->post('search_key')),
		);

		$this->load->library('pagination');

		$limit = 5;
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config['base_url'] = base_url('riwayat/tampil');
		$config['total_rows'] = $this->m_model->get_tampil_riwayat($limit, $offset, $search, $count = true, 'namaLengkap', 'idRiwayat');
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_userss'] = 3;
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="" class="current_page">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_users'] = '<span uk-pagination-next></span>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_users'] = '<span uk-pagination-previous></span>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_users'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_users'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['riwayat'] = $this->m_model->get_tampil_riwayat($limit, $offset, $search, $count = false, 'namaLengkap', 'idRiwayat');
		$data['pagelinks'] = $this->pagination->create_links();
		$this->load->view('ajax/riwayat_ajax', $data);
	}

	public function saveDataUsers()
	{
		$pass = $this->input->post('password', TRUE);
		$data = array(
			'namaLengkap' => $this->input->post('nama', TRUE),
			'username' => $this->input->post('username', TRUE),
			'password' => password_hash($pass, PASSWORD_DEFAULT),
			'status' => $this->input->post('status', TRUE),
			'md4' => md5($pass),
		);
		$this->m_model->simpan('users', $data);
	}
	public function editDataUsersPass()
	{
		$id = $this->input->post('id', TRUE);
		$pass = $this->input->post('password', TRUE);

		$data = array(
			'namaLengkap' => $this->input->post('nama', TRUE),
			'username' => $this->input->post('username', TRUE),
			'password' => password_hash($pass, PASSWORD_DEFAULT),
			'status' => $this->input->post('status', TRUE),
			'md4' => md5($pass),
		);


		$this->m_model->editdata('users', 'idUsers', $id, $data);
	}
	public function editData()
	{
		$id = $this->input->post('id', TRUE);

		$data = array(
			'status' => $this->input->post('status', TRUE),
		);


		$this->m_model->editdata('riwayat', 'idRiwayat', $id, $data);
	}
	public function hapusUsers()
	{
		$id = $this->input->post('id');
		$this->m_model->hapus('users', $id, 'idUsers');
	}

	public function donasi($id_lokasi){
		$data = [
			'idUsers' => $this->session->get_userdata('idUsers')['idusers'],
			'Jumlah' => $this->input->post('jumlah'),
			'idLokasi' => $id_lokasi,
		];
		$this->m_model->simpan('riwayat',$data);
		redirect(base_url('utama/mutera'));
	}
}