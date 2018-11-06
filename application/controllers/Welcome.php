<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
            $data=array('user'=>'emplast',
                        'content'=>$this->load->view('remont','',true));
	    $this->load->view('welcome_message',$data);
            
	}
       
       
}
