<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Test extends CI_Controller {
	public function sayhello(){
		//you should not echo anything from controller
		//http://localhost/170119/index.php/Test/sayhello
		echo 'This is sayhello function in Test Controlle';
	}

	public function index(){
		//http://localhost/170119/index.php/Test/sayhello
		//http://localhost/170119/index.php/Test/
		echo 'This is index function in Test Controlle';
	}
	public function second(){
		$data['fname']='Jim';
		$data['lname']='Johns';
		$this->load->view('test/second', $data);
		//http://localhost/170119/index.php/Test/second
		//??????
	}

}