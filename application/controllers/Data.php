<?php 
	class Data extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('Data_model');
		}
		function index()
		{
			$this->load->view('common');
			$this->load->view('peminjam');
		}
		function peminjam()
		{
			$this->load->view('common');
			$this->load->view('peminjam');
		}
		function buku()
		{
			$this->load->view('common');
			$this->load->view('buku');
		}

		function peminjaman()
		{
			$this->load->view('common');
			$this->load->view('peminjaman');
		}

		function tampil()
		{
			$this->load->view('common');
			$this->load->view('tampil');			
		}

		// peminjam
		function peminjam_list() {
			$data = $this->Data_model->peminjam_list();
			echo json_encode($data);
		}

		function save_peminjam() {
			$data = $this->Data_model->save_peminjam();
			echo json_encode($data);
		}

		function delete_peminjam(){
			$data=$this->Data_model->delete_peminjam();
			echo json_encode($data);
		}

		function edit_peminjam(){
			$data=$this->Data_model->edit_peminjam();
			echo json_encode($data);
		}

		// buku
		function buku_list(){
			$data = $this->Data_model->buku_list();
			echo json_encode($data);
		}

		function save_buku() {
			$data = $this->Data_model->save_buku();
			echo json_encode($data);
		}

		function delete_buku(){
			$data=$this->Data_model->delete_buku();
			echo json_encode($data);
		}

		function edit_buku(){
			$data=$this->Data_model->edit_buku();
			echo json_encode($data);
		}
		function cari_buku(){
			$data=$this->Data_model->cari_buku();
			echo json_encode($data);			
		}


	}
 ?>