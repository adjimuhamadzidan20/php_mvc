<?php 
	class Controller {
		// method view (menampilkan data)
		public function view($view, $data = []) {
			require_once '../app/views/'. $view .'.php';
		}

		// method model (mengambil data)
		public function model($model) {
			require_once '../app/models/'. $model .'.php';
			return new $model;
		}
	}




?>