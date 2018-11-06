<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Piotr
 */
class Login extends CI_Controller{
    
    public function index(){
        $data=array('user'=>'emplast',
                        'img'=> NULL,
                        'content'=>$this->load->view('welcome_login','',TRUE));
        $this->load->view('welcome_message',$data);
    }
    public function noweHaslo(){
        redirect('index.php/Welcome/index');
    }
}
