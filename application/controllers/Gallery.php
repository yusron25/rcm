<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
		$this->lang->load(array('navbar','services'),$this->session->userdata('language') );
		
	}

	public function index()
	{
		$data['gallery']= $this->gallery();
		$data['body'] 	= "gallery/gallery_v";
		$this->load->view('template',$data);
	}

	private function gallery(){

		$path['mekanik'] = glob("assets/images/gallery/mekanik/*.*");
		$path['rental'] = glob("assets/images/gallery/rental/*.*");
		$path['sparepart'] = glob("assets/images/gallery/sparepart/*.*");
		// echo json_encode($path);
		return $path;
	}
}
?>
