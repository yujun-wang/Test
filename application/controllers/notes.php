<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class notes extends CI_Controller {
	function __construct()
  	{
    	parent::__construct();
    	$this->load->model('user','',TRUE);
  	}

  	function show($start=0)
    {
      $menu="";
      $sql = "SELECT * FROM menu WHERE fid = $start"; 
      $query=$this->db->query($sql);
      $menu .= "<ul>\n";
      foreach($query->result() as $row)
      {
          $menu .="<li>"."<a href='#'>".$row->name."</a>"."\n";
          if($query->num_rows>0){
              $menu .=($this->show($row->id));
          }
          $menu .="</li>";
      }
      $menu .="</ul>\n";
      return $menu;
    }

    function create_menu()
    {
      $result=$this->show(0);
      $this->load->view('note',array(
        'menu' => $result
      ));
      //print_r($result['menu']);
    }
}
?>