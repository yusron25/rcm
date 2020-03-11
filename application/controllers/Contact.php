<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$this->load->library(array('CaptchaGregwar','form_validation','email'));
		
	}

	public function index()
	{

		$data['body'] = "contact/contact_v";
		$data['src'] = $this->getcap();
		$this->load->view('template',$data);
	}

	

	public function changecap(){
		echo $this->getcap()->inline();
	}

	private function getcap(){

		$builder = $this->captchagregwar->new();
		$builder->build();

		$this->session->set_userdata('cap', $builder->getPhrase());
		return $builder;
	}

	public function request(){

		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("message", "Message", "trim|required");
		$this->form_validation->set_rules("captcha", "Captcha", "trim|required|callback_checkcap");

		if ( $this->form_validation->run()  ) {
			
			if ( $this->sendbymail( $this->input->post() )) {
				$this->session->set_flashdata('info',$this->lang->line('contact_success') );
			}else{
				$this->session->set_flashdata('info_fail','1' );
			}
			
		}
		$this->index();

	}

	public function checkcap(){

		if ( strtolower($this->session->userdata('cap') )  == strtolower($this->input->post('captcha'))  ) {
			
			return true;

		}else{
			$this->form_validation->set_message('checkcap', 'The {field} field does not match' );
			return false;
		}
	}


	private function sendbymail( $data ){
		$config['mailtype'] 	= 'html';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'maxco.id';
		$config['smtp_port'] = '587';		
		$config['smtp_user'] = 'cs@maxco.id';		
		$config['smtp_pass'] = 'csmaxco.2020';		
        $config['crlf']			= "\r\n";
        $config['charset'] 		= 'UTF-8';
		$config['wordwrap'] 	= TRUE;

		$this->email->initialize($config);

		$this->email->from('cs@maxco.id', 'Maxco Tunggal Perkasa');
		$this->email->to('cs@maxco.id' );

		$this->email->subject('Visitor');
		$this->email->message('<!DOCTYPE html>
								<html lang="en">
								<head>
									<meta charset="UTF-8">
									<title>Maxco</title>
								</head>
								<body>
									<div>
										<table>
											<tbody>
												<tr>
													<td>Name</td>
													<td>:</td>
													<td>'.$data['name'].'</td>
												</tr>
												<tr>
													<td>Email</td>
													<td>:</td>
													<td>'.$data['email'].'</td>
												</tr>

												<tr>
													<td>Messages</td>
													<td>:</td>
													<td>'.$data['message'].'</td>
												</tr>
											</tbody>
										</table>
										
									</div>
								</body>
								</html>');

		return $this->email->send();
	}
}
?>
