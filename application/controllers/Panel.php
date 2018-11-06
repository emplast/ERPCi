<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panel
 *
 * @author Piotr
 */
class Panel extends CI_Controller{
    
    public function index(){
        $data=array('content'=>$this->load->view('panel_welcome','',TRUE),
                    'user'=>'Piotr Majewski');
        $this->load->view('panel',$data);
        
    }
    public function daneFirmy(){
          $this->load->helper('xml');
                 $dom = new DOMDocument;
            $dom->preserveWhiteSpace = False;
            $dom->load('xml/UrzedySkarbowe.xml');
            $nazwy = $dom->getElementsByTagName('annotation');
            $i = 0;
            foreach ($nazwy as $nazwa) {
                $urzedy = $nazwa->getElementsByTagName('documentation');
                $urzad = $urzedy->item(0)->nodeValue;
                $tmp[] = $urzad;

            $i++;
            }
        
         $data=array('content'=>$this->load->view('panel_daneFirmy',array('urzedy'=>$tmp),TRUE),
                     'user'=>'Piotr Majewski');
        $this->load->view('panel',$data);
    }
}
