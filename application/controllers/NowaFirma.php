<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NowaFirma
 *
 * @author Piotr
 */
class NowaFirma extends CI_Controller{
    
    public function index(){
        $data = array('nazwa' => $this->input->post('part_1'),
            'imie' => $this->input->post('part_2'),
            'nazwisko' => $this->input->post('part_3'),
            'miejscowosc' => $this->input->post('part_4'),
            'kod' => $this->input->post('part_5'),
            'ulica' => $this->input->post('part_6'),
            'nr_lokalu' => $this->input->post('part_7'),
            'email' => $this->input->post('part_8'),
            'nr_telefonu' => $this->input->post('part_9'),
            'login' => $this->input->post('part_10'),
            'haslo' => $this->input->post('part_11'));
        $this->session->set_userdata('dane', $data);
        
        
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
            $this->load->view('welcome_nowyUzytkownikContent', array('urzedy' => $tmp, 'data' => $this->session->userdata('dane')));
       
           
       
        
    }
    public function dodajFirme() {
        if (isset($this->session->userdata('dane')['nazwa'])) {
            $this->load->model('welcomeUzytkownicy_model');
            $model = new WelcomeUzytkownicy_model();
            $model->dodajNowaFirma();
            $this->session->unset_userdata('dane');


            redirect('index.php/Welcome/index');
        } else {
            redirect('index.php/Welcome/index');
        }
    }
    public function ajaxGUS() {
        $this->load->library('gusRegonApi');
        $nip = $_POST['nip'];
        $gus = new GusRegonApi();
        $result = $gus->checkNip($nip);
        echo $result;
    }

}
