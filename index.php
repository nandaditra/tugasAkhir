<?php
	// include "c_programKerja.php";
	
	// $controller = new c_programKerja();
	
		if(isset($_GET['e'])){ 
			$nomor = $_GET['e'];
			$controller->viewAhli($nomor);
		}else if(isset($_GET['d'])){ 
			$nomor = $_GET['d'];
			$controller->viewUser($nomor);
		}else if(isset($_GET['i'])){
			$controller->insertBio(); 
		}elseif (isset($_GET['l'])) {
			$controller->indexKD('kepaladept');
		}elseif (isset($_GET['l'])) {
			$controller->indexM('menteri');
		}elseif (isset($_POST['masuk'])) {
			$controller->cekLogin();
		}elseif (isset($_POST['keluar'])){
			$controller->login(); 
		}
