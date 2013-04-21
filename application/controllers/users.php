<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('user','',TRUE);
  }

  function index()
  {
    
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	
    if($this->form_validation->run() == FALSE)
    {
      
      $this->load->view('login');
    }
    else
    {
      redirect('pages', 'refresh');
    }
    
  }
  
  function check_database($password)
  {
    
    $username = $this->input->post('username');
    
   
    $result = $this->user->login($username, $password);
    
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
         $_SESSION['user'] = array(
          'id' => $row->id,
          'username' => $row->username
        );
      }
	  $_SESSION['status']='logged_in';
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }
}
?>