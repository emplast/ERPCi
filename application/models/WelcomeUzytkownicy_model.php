<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WelocomeUzytkownicy_model
 *
 * @author Piotr
 */
class WelcomeUzytkownicy_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function dodajSprawdzNowa($user) {
        $this->load->model('noweBazyDanych_model');
        $model = new NoweBazyDanych_model();
        $model->uzytkownicy();
        $query = $this->db->query('SELECT * FROM w_uzytkownicy WHERE Part_1="' . $user . '"');
        return $query->num_rows();
    }

    public function dodajNowaFirma() {
        $this->load->model('noweBazyDanych_model');
        $bazy = new NoweBazyDanych_model();
        $bazy->noweBazyDanych();
        $dane = array('Part_1' => $this->session->userdata('dane')['nazwa'],
            'Part_2' => $this->input->post('part_2'),
            'Part_3' => $this->input->post('part_3'),
            'Part_4' => $this->input->post('part_4'),
            'Part_5' => $this->input->post('part_5'),
            'Part_6' => $this->input->post('part_6'),
            'Part_7' => $this->input->post('part_7'),
            'Part_8' => $this->input->post('part_8'),
            'Part_9' => $this->input->post('part_9'),
            'Part_10' => $this->input->post('part_10'),
            'Part_11' => $this->input->post('part_11'),
            'Part_12' => $this->input->post('part_12'),
            'Part_13' => $this->input->post('part_13'),
            'Part_14' => $this->input->post('part_14'),
            'Part_15' => $this->input->post('part_15'),
            'Part_16' => $this->input->post('part_16'),
            'Part_17' => $this->input->post('part_17'),
            'Part_18' => $this->input->post('part_18'),
            'Part_19' => $this->input->post('part_19'),
            'Part_20' => $this->input->post('part_20'),
            'Part_21' => $this->input->post('part_21'),
            'Part_22' => $this->input->post('part_22'),
            'Part_23' => $this->input->post('part_23'),
            'Part_24' => $this->input->post('part_24'),
            'Part_25' => $this->input->post('part_25'),
            'Part_26' => $this->input->post('part_26'),
            'Part_27' => $this->input->post('part_27'),
            'Part_28' => $this->input->post('part_28'),
            'Part_29' => $this->input->post('part_29'),
            'Part_30' => $this->input->post('part_30'),
            'Part_31' => $this->input->post('part_31'),
            'Part_32' => $this->input->post('part_32'),
            'Part_33' => $this->input->post('part_33'),
            'Part_34' => $this->input->post('part_34'),
            'Part_35' => $this->input->post('part_35'),
            'Part_36' => $this->input->post('part_36'),
            'Part_37' => $this->input->post('part_37'),
            'Part_38' => $this->input->post('part_38'),
            'Part_39' => $this->input->post('part_39'),
            'Part_40' => $this->input->post('part_40'),
            'Part_41' => $this->input->post('part_41'),
            'Part_42' => $this->input->post('part_42'),
            'Part_43' => $this->input->post('part_43'),
            'Part_44' => $this->input->post('part_44'),
            'Part_45' => $this->input->post('part_45'),
            'Part_46' => $this->input->post('part_46'),
            'Part_47' => $this->input->post('part_47'),
            'Part_48' => $this->input->post('part_48'),
            'Part_49' => $this->input->post('part_49'),
            'Part_50' => $this->input->post('part_50'),
            'Part_51' => $this->input->post('part_51'),
            'Part_52' => $this->input->post('part_52'),
            'Part_53' => $this->input->post('part_53'),
            'Part_54' => $this->input->post('part_54'),
            'Part_55' => $this->input->post('part_55'),
            'Part_56' => $this->input->post('part_56'),
            'Part_57' => $this->input->post('part_57'),
            'Part_58' => $this->input->post('part_58'));
        $this->db->insert('pan_firmy', $dane);
        $id=$this->db->insert_id();
        
        $dane=array('Part_1'=>$this->session->userdata('dane')['nazwa'],
            'Part_2'=>$this->session->userdata('dane')['imie'],
            'Part_3'=>$this->session->userdata('dane')['nazwisko'],
            'Part_4'=>$this->session->userdata('dane')['miejscowosc'],
            'Part_5'=>$this->session->userdata('dane')['kod'],
            'Part_6'=>$this->session->userdata('dane')['ulica'],
            'Part_7'=>$this->session->userdata('dane')['nr_lokalu'],
            'Part_8'=>$this->session->userdata('dane')['email'],
            'Part_9'=>$this->session->userdata('dane')['nr_telefonu'],
            'Part_10'=>$this->session->userdata('dane')['login'],
            'Part_11'=>$this->session->userdata('dane')['haslo'],
            'Part_12'=>$id,
            'Part_13'=>'1');
        $this->db->insert('w_uzytkownicy',$dane);
    }

}
