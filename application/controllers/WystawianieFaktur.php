<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WystawianieFaktur
 *
 * @author Piotr
 */
class WystawianieFaktur extends CI_Controller{

    public function index() {
        $data = array('content' => $this->load->view('panel_wystawianieFaktur', '', TRUE),
            'user' => 'Piotr Majewski');
        $this->load->view('panel', $data);
    }

    public function ajaxNumer(){
        if (isset($_POST['typ'])) {
            switch ($_POST['typ']) {
                case "BO":
                    echo 'Nie podlega';
                    break;
                case "PW":
                    echo 'Nie podlega';
                    break;
                case "PZ":
                    echo Null;
                    break;
                case "RW":
                    echo 'Nie podlega';
                    break;
                case "WZ":
                    echo "1/2018";
                    break;
                default:
                    echo NULL;
                    break;
            }
        }
    }
}
