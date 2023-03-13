<?php 
	// routing 
	class App {
		protected $controller = 'Home';
		protected $method = 'index';
		protected $params = [];

		public function __construct() {
			// echo "App core";
			$url = $this->parseURL();
			
			// controller
			if ($url == NULL) {
				$url = [$this->controller];
			}

			if (file_exists('../app/controllers/'. $url[0] . '.php')) {
				$this->controller = $url[0];
				unset($url[0]);
				// var_dump($url);
			}

			require_once '../app/controllers/'. $this->controller .'.php';
			$this->controller = new $this->controller;

			// method
			if (isset($url[1])) {
				if (method_exists($this->controller, $url[1])) {
					$this->method = $url[1];
					unset($url[1]);
					// var_dump($url);
				}
			}

			// params
			if (!empty($url)) {
				// var_dump($url);
				$this->params = array_values($url);
			}

			// jalankan method & controller & kirim params jika ada
			call_user_func_array([$this->controller, $this->method], $this->params);

		}

		// fungsi menangkap data dari URL
		public function parseURL() {
			if (isset($_GET['url'])) {
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL); // mengsterilkan URL
				$url = explode('/', $url); // konvert menjadi array
				return $url;
			}
		}
	}

?>