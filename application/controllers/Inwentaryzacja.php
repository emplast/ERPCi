<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inwentaryzacja
 *
 * @author Piotr
 */
class Inwentaryzacja extends CI_Controller{
    
    public function index(){
    
        $data=array('content'=>$this->load->view('panel_inwentaryzacja','',TRUE),
                    'user'=>'Piotr Majewski');
        $this->load->view('panel',$data);
    }
}
