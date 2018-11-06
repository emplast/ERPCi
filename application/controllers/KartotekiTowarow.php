<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KartotekiTowarów
 *
 * @author Piotr
 */
class KartotekiTowarow extends CI_Controller{
    
    public function index(){
        $data=array('content'=>$this->load->view('panel_kartotekiTowarow','',TRUE),
                    'user'=>'Piotr Majewski');
        $this->load->view('panel',$data);
    }

//   Wyjście z formy dodawania nowego towaru.

    public function nowy(){
        redirect('index.php/KartotekiTowarow/index');
    }

    public function kodEAN(){
        
       echo'2000001000052';
        
    }
}
 