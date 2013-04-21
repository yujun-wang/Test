<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pages extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$_SESSION['status']='';
  }

  function index()
  {
	if($_SESSION['status']=='logged_in')
    {
		$this->load->view('welcome');
    }
    else
    {
		$this->load->helper('form');
		$this->load->view('login');
	}
   
  }

}

?>