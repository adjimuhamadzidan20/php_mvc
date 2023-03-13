<?php  
	class Mahasiswa_model {
		// private $mhs = [
		// 	[
		// 		"Nama_lengkap" => "Adji Muhamad Zidan",
		// 		"NPM" => "201943501940",
		// 		"Prodi" => "Informatika"
		// 	],
		// 	[
		// 		"Nama_lengkap" => "Dimas",
		// 		"NPM" => "201943501941",
		// 		"Prodi" => "Informatika"
		// 	],
		// 	[
		// 		"Nama_lengkap" => "Devi Putri",
		// 		"NPM" => "201943501942",
		// 		"Prodi" => "Informatika"
		// 	],
		// ];
		private $table = 'mahasiswa';
		private $db;

		function __construct() {
			// koneksi database
			$this->db = new Database;
		} 
		
		// menangkap data mahasiswa
		function getMahasiswa() {
			$query = "SELECT * FROM $this->table";

			$this->db->query($query);
			return $this->db->resultSet();
		}

		// menangkap data mahasiswa berdasarkan id (detail)
		function getMhsById($id) {
			$query = 'SELECT * FROM '. $this->table .' WHERE id =:id';

			$this->db->query($query);
			$this->db->bind('id', $id);
			return $this->db->single();
		}

		// tambah data
		function tambahData($data) {
			$query = "INSERT INTO mahasiswa VALUES ('', :nama_lengkap, :npm, :prodi)";

			$this->db->query($query);
			$this->db->bind('nama_lengkap', $data['nama']);
			$this->db->bind('npm', $data['npm']);
			$this->db->bind('prodi', $data['prodi']);

			$this->db->execute();
			return $this->db->rowcount();
		} 

		// hapus data
		function hapusData($id) {
			$query = "DELETE FROM mahasiswa WHERE id = :id";

			$this->db->query($query);
			$this->db->bind('id', $id);

			$this->db->execute();
			return $this->db->rowcount();
		}

		// edit data
		function editData($data) {
			$query = "UPDATE mahasiswa SET nama_lengkap = :nama, npm = :npm, prodi = :prodi WHERE id = :id";

			$this->db->query($query);
			$this->db->bind('id', $data['id']);
			$this->db->bind('nama', $data['nama']);
			$this->db->bind('npm', $data['npm']);
			$this->db->bind('prodi', $data['prodi']);
			
			$this->db->execute();
			return $this->db->rowcount();
		}

		// cari data
		function cariData() {
			$keyword = $_POST['keyword'];
			$query = "SELECT * FROM mahasiswa WHERE nama_lengkap LIKE :keyword OR npm LIKE :keyword OR prodi LIKE :keyword";

			$this->db->query($query);
			$this->db->bind('keyword', "%$keyword%");
			return $this->db->resultSet();
		}
 
	}

?>