<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KartotekiZaplaty
 *
 * @author Piotr
 */
class KartotekiZaplaty extends CI_Controller{
    public function index(){
        $data=array('content'=>$this->load->view('panel_kartotekiZaplaty','',TRUE),
                    'user'=>'Piotr Majewski');
        $this->load->view('panel',$data);
    }
//    Wyjście z formy dodawania form zapłaty
    public function dodaj(){
        redirect('KartotekiZaplaty/index');
    }
    
//    Wyjście z formy usuwania form zapłaty
    public function usun(){
        redirect('KartotekiZaplaty/index');
    }
}
