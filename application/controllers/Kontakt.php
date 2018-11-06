<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kontakt
 *
 * @author Piotr
 */
class Kontakt extends CI_Controller{
    
    public function index(){
        $dane=array('content'=>$this->load->view('welcome_kontakt','',TRUE));
        $this->load->view('welcome_message',$dane);
    }
}
