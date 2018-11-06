<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logout
 *
 * @author Piotr
 */
class Logout extends CI_Controller{
    
    public function index(){
        
         $data=array('user'=>'emplast',
                        'content'=>$this->load->view('welcome_logout','',true));
		$this->load->view('welcome_message',$data);
    }
}
