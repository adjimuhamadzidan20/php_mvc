<?php  
	class Mahasiswa extends Controller {
		// method hal index (menampilkan data mhs)
		public function index() {
			$data['judul'] = 'Data Mahasiswa';
			$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswa();

			$this->view('templates/header', $data);
			$this->view('mahasiswa/index', $data);
			$this->view('templates/footer');
		}

		// method detail (detail data)
		public function detail($id) {
			$data['judul'] = 'Detail Mahasiswa';
			$data['mhs'] = $this->model('Mahasiswa_model')->getMhsById($id);

			$this->view('templates/header', $data);
			$this->view('mahasiswa/detail', $data);
			$this->view('templates/footer');
		}

		// method tambah data
		public function tambah() {
			if ($this->model('Mahasiswa_model')->tambahData($_POST) > 0) {
				Flasher::setFlash('Berhasil', 'ditambah', 'success');
				header('Location: '. BASEURL .'/mahasiswa');
				exit;
			} else {
				Flasher::setFlash('Gagal', 'ditambah', 'danger');
				header('Location: '. BASEURL .'/mahasiswa');
				exit;
			}
		}

		// method hapus data
		public function hapus($id) {
			if ($this->model('Mahasiswa_model')->hapusData($id) > 0) {
				Flasher::setFlash('Berhasil', 'dihapus', 'success');
				header('Location: '. BASEURL .'/mahasiswa');
				exit;
			} else {
				Flasher::setFlash('Gagal', 'dihapus', 'danger');
				header('Location: '. BASEURL .'/mahasiswa');
				exit;
			}
		}

		// edit data
		public function edit($id) {
			$data['judul'] = 'Edit Data Mahasiswa';
			$data['mhs'] = $this->model('Mahasiswa_model')->getMhsById($id);

			$this->view('templates/header', $data);
			$this->view('mahasiswa/update', $data);
			$this->view('templates/footer');
		}
		// proses edit data
		public function editDataMhs() {
			if ($this->model('Mahasiswa_model')->editData($_POST) > 0) {
				header('Location: '. BASEURL .'/mahasiswa');
				Flasher::setFlash('Berhasil', 'diedit', 'success');
				exit;
			} else {
				header('Location: '. BASEURL .'/mahasiswa');
				Flasher::setFlash('Gagal', 'diedit', 'danger');
				exit;
			}
		}

		// cari data
		public function cari() {
			$data['judul'] = 'Data Mahasiswa';
			$data['mhs'] = $this->model('Mahasiswa_model')->cariData();

			$this->view('templates/header', $data);
			$this->view('mahasiswa/index', $data);
			$this->view('templates/footer');
		}

	}

?>