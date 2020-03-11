<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }
    
    public function set($lang)
	{   
	    $this->session->unset_userdata('language');
	    $this->session->set_userdata('language',$lang);
		redirect('/','refresh');
	}

}
?>
