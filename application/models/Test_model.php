<?php
Class Test_model extends CI_model{
	public function getCustomer(){
		$names=array(
			array("fn"=>'Ann', "ln"=>'Smith'),
			array("fn"=>'John', "ln"=>'Doe'),
			array("fn"=>'Lisa', "ln"=>'Simpson')
			);
		return $names;
	}
	public function showNames(){
		$this->load->model('Test_moel');
		$data['customers']=$this->Test_model->getCustomer();
		$this->load->view('test/showNames', $data);
	}
}