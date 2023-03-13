<?php 
	class About extends Controller {
		public function index($nama = 'Adji', $alamat = 'Bekasi') {
			// echo 'About/index';
			$data['nama'] = $nama;
			$data['alamat'] = $alamat;
			$data['judul'] = 'About';

			$this->view('templates/header', $data);
			$this->view('about/index', $data);
			$this->view('templates/footer');
		}
	}



















?>