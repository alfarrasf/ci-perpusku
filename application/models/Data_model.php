<?php 
	class Data_model extends CI_Model {
		// peminjam
		function peminjam_list() {
			$result = $this->db->get('peminjam');
			return $result->result();
		}

		function save_peminjam() {
			$data = array(
					'id_pmj' => $this->input->post('id'),
					'nm_pmj' => $this->input->post('nama'),
					'almt_pmj' => $this->input->post('alamat'),
					'phone' => $this->input->post('telepon'),
					'user' => $this->input->post('user'),
					'pass' => $this->input->post('password'),
				);
			$result = $this->db->insert('peminjam', $data);
			return $result;
		}

		function delete_peminjam(){
			$id=$this->input->post('id_pmj');
			$this->db->where('id_pmj', $id);
			$result=$this->db->delete('peminjam');
			return $result;
		}

		function edit_peminjam() {
			$id=$this->input->post('id');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$telepon=$this->input->post('telepon');
			$user=$this->input->post('user');
			$pass=$this->input->post('pass');
	
			$this->db->set('nm_pmj', $nama);
			$this->db->set('almt_pmj', $alamat);
			$this->db->set('phone', $telepon);
			$this->db->set('user', $user);
			$this->db->set('pass', $pass);
			$this->db->like('id_pmj', $id);
			$result=$this->db->update('peminjam');
			return $result;
		}
		// buku
		function buku_list() {
			$result = $this->db->get('buku');
			return $result->result();
		}

		function save_buku() {
			$data = array(
					'id_buku' => $this->input->post('id'),
					'jdl_buku' => $this->input->post('judul'),
					'penerbit' => $this->input->post('penerbit'),
					'pengarang' => $this->input->post('pengarang'),
					'tahun' => $this->input->post('tahun'),
				);
			$result = $this->db->insert('buku', $data);
			return $result;
		}

		function delete_buku(){
			$id=$this->input->post('id_buku');
			$this->db->where('id_buku', $id);
			$result=$this->db->delete('buku');
			return $result;
		}

		function edit_buku() {
			$id=$this->input->post('id');
			$judul=$this->input->post('judul');
			$penerbit=$this->input->post('penerbit');
			$pengarang=$this->input->post('pengarang');
			$tahun=$this->input->post('tahun');
	
			$this->db->set('jdl_buku', $judul);
			$this->db->set('penerbit', $penerbit);
			$this->db->set('pengarang', $pengarang);
			$this->db->set('tahun', $tahun);
			$this->db->like('id_buku', $id);
			$result=$this->db->update('buku');
			return $result;
		}

		function cari_buku(){
			$get = $this->input->post('cari');
			$this->db->like('jdl_buku',$get);
			$result = $this->db->get('buku');
			return $result->result();
		}
	}
 ?>