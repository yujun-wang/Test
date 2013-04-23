<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('user','',TRUE);
  }

  function login()
  {
	$query=$this->user->validate();
	if ($query==true)
	{
		$_SESSION['user'] = array(
          'username' =>$this->input->post('username')
        );
		$_SESSION['status']='logged_in';
		redirect('welcome');
	}
	else
	{
		$_SESSION['status']='Invalid username or password!';
		redirect('pages');
	}
  }
  
  function logout()
  {
	session_destroy();
	redirect('pages');
  }
}
?>