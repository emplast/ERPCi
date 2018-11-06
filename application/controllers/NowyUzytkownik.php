<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NowyUzytkownik
 *
 * @author Piotr
 */
class NowyUzytkownik extends CI_Controller {

    public function index() {

        $data = array('user' => 'emplast',
            'content' => $this->load->view('welcome_nowyUzytkownik', '', true));
        $this->load->view('welcome_message', $data);
    }

   

    public function ajaxNowyUrzytkownikSprawdzenie() {
        if ($this->sprawdzenie($_POST['nazwaUzytkownika']) == "0") {
            echo "0";
        } else {
            echo "1";
        }
    }

    public function ajaxCapcha() {

        if ($this->hash($_POST['capcha'], $_POST['kod']) == TRUE) {
            echo '1';
        } else {
            echo '0';
        }
    }

    
   

    public function sprawdzenie($user) {
        $this->load->model('welcomeUzytkownicy_model');
        $model = new WelcomeUzytkownicy_model();

        if ($model->dodajSprawdzNowa($user) > 0 || $model->dodajSprawdzNowa($user) != null) {
            return "0";
        } else {
            return "1";
        }
    }

    function rpHash($value) {
        $hash = 5381;
        $value = strtoupper($value);
        for ($i = 0; $i < strlen($value); $i++) {
            $hash = ($this->leftShift32($hash, 5) + $hash) + ord(substr($value, $i));
        }
        return $hash;
    }

    function leftShift32($number, $steps) {
        $binary = decbin($number);
        $binary = str_pad($binary, 32, "0", STR_PAD_LEFT);
        $binary = $binary . str_repeat("0", $steps);
        $binary = substr($binary, strlen($binary) - 32);
        return ($binary{0} == "0" ? bindec($binary) :
                -(pow(2, 31) - bindec(substr($binary, 1))));
    }

    function hash($capcha, $kod) {
        if ($this->rpHash($kod) == $capcha) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    

    

}
