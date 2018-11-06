<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rok
 *
 * @author Piotr
 */
class Rok extends CI_Controller{
    
    public function index(){
        $data=array('content'=>$this->load->view('panel_rok','',TRUE),
                    'user'=>'Piotr Majewski');
        $this->load->view('panel',$data);
    }
    
//    Przejście z form nowy rok
    public function nowy(){
       
        redirect('index.php/Rok/index');
    }
}
