<?php
	// cek jika session blm ada mulai sessionnya
	if ( !session_id() ) session_start();

	// require file init dari folder app  
	require_once '../app/init.php';

	// memanggil class App
	$app = new App();

?>