<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KartotekiKontrahetnt
 *
 * @author Piotr
 */
class KartotekiKontrahent extends CI_Controller {

    public function index() {
        $data = array('content' => $this->load->view('panel_kartotekiKontrahent',array('firma'=>'Emplast'), TRUE),
            'user' => 'Piotr Majewski');
        $this->load->view('panel', $data);
    }

//    Wyjście z formy dodawania form zapłaty
    public function dodaj() {
        redirect('KartotekiKontrahent/index');
    }

//    Wyjście z formy usuwania form zapłaty
    public function usun() {
        redirect('KartotekiKontrahent/index');
    }

}
