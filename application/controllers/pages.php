<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pages extends CI_Controller {
	function index()
	{
		$this->load->helper('form');
		$data['temp']='hello';
		$this->load->view('login',$data);
	}
}
?>