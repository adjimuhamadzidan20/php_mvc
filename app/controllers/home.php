<?php  
	class Home extends Controller {
		
		public function index() {
			$data['judul'] = 'Home';
			$data['text'] = $this->model('Home_model')->getText();

			$this->view('templates/header', $data);
			$this->view('home/index', $data);
			$this->view('templates/footer');
		}
	}


?>