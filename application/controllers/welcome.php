<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if ($_SESSION['status']=='logged_in')
		{
			$this->load->view('welcome');
		}
	}
}