<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();

		if( !$this->session->userdata('language') ){
			$this->session->set_userdata('language','indonesian');
		}
		
		
		if( isset($_GET['lang']) ){
		    switch( $_GET['lang'] ){
		        case 'english':
		            $this->session->set_userdata('language',$_GET['lang']);
		        break;
		        
		        case 'indonesian':
		            $this->session->set_userdata('language',$_GET['lang']);
		        break;
		        
		        default:
		            $this->session->set_userdata('language','english');
		        break;
		  
		    }
		    
		}
		$this->lang->load(array('navbar','services','contact','profile'),$this->session->userdata('language') );
		
	}

	public function index()
	{
		$data['slider'] = $this->slider();
		$data['body'] = "home/home_v";
		$this->load->view('template',$data);
	}

	public function slider(){
		$path = glob("assets/images/slider/*.*");
		sort($path);
		// echo json_encode($path);
		// exit;
		return $path;
	}
}
?>
