<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index(){
		echo $_SESSION['language'];
	}

	public function ubahsession(){

		$d = date('H-i-s');
		echo date('H-i-s')."<br>";
		$this->session->set_userdata('ci__' ,$d);

		$_SESSION['nativ'] = $d;
		echo json_encode($_SESSION);
		
	}

	public function vsess(){
		echo json_encode($_SESSION);
	}


}
