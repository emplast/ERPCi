<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArkuszInwentaryzacyjny
 *
 * @author Piotr
 */
class ArkuszInwentaryzacyjny extends CI_Controller{
    
    public function index(){
        $data=array('content'=>$this->load->view('panel_arkuszInwentaryzacyjny','',TRUE),
                    'user'=>'Piotr Majewski');
        $this->load->view('panel',$data);
    }
//    Wyjscie z formy sporządznia arkusza inwentaryzacyjnego.
    
    
    public function sporzadz(){
       
        redirect('ArkuszInwentaryzacyjny/index');
    }
}
