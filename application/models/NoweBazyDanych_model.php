<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoweBazyDanych_model
 *
 * @author Piotr
 */
class NoweBazyDanych_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function uzytkownicy() {
        $query = $this->db->query('CREATE TABLE IF NOT EXISTS w_uzytkownicy('
                . 'Part_1 VARCHAR(100),'
                . 'Part_2 VARCHAR(100),'
                . 'Part_3 VARCHAR(100),'
                . 'Part_4 VARCHAR(100),'
                . 'Part_5 VARCHAR(100),'
                . 'Part_6 VARCHAR(100),'
                . 'Part_7 VARCHAR(100),'
                . 'Part_8 VARCHAR(100),'
                . 'Part_9 VARCHAR(100),'
                . 'Part_10 VARCHAR(100),'
                . 'Part_11 VARCHAR(100),'
                . 'Part_12 VARCHAR(100),'
                . 'Part_13 VARCHAR(100),'
                . 'Part_14 int NOT NULL AUTO_INCREMENT,'
                . 'PRIMARY KEY (Part_14))');
    }
    public function noweBazyDanych(){
        $query= $this->db->query('CREATE TABLE IF NOT EXISTS pan_firmy('
                . 'Part_1 VARCHAR (100),'
                . 'Part_2 VARCHAR(100),'
                . 'Part_3 VARCHAR(100),'
                . 'Part_4 VARCHAR(100),'
                . 'Part_5 VARCHAR(100),'
                . 'Part_6 VARCHAR(100),'
                . 'Part_7 VARCHAR(100),'
                . 'Part_8 VARCHAR(100),'
                . 'Part_9 VARCHAR(100),'
                . 'Part_10 VARCHAR(100),'
                . 'Part_11 VARCHAR(100),'
                . 'Part_12 VARCHAR(100),'
                . 'Part_13 VARCHAR(100),'
                . 'Part_14 VARCHAR(100),'
                . 'Part_15 VARCHAR(100),'
                . 'Part_16 VARCHAR(100),'
                . 'Part_17 VARCHAR(100),'
                . 'Part_18 VARCHAR(100),'
                . 'Part_19 VARCHAR(100),'
                . 'Part_20 VARCHAR(100),'
                . 'Part_21 VARCHAR(100),'
                . 'Part_22 VARCHAR(100),'
                . 'Part_23 VARCHAR(100),'
                . 'Part_24 VARCHAR(100),'
                . 'Part_25 VARCHAR(100),'
                . 'Part_26 VARCHAR(100),'
                . 'Part_27 VARCHAR(100),'
                . 'Part_28 VARCHAR(100),'
                . 'Part_29 VARCHAR(100),'
                . 'Part_30 VARCHAR(100),'
                . 'Part_31 VARCHAR(100),'
                . 'Part_32 VARCHAR(100),'
                . 'Part_33 VARCHAR(100),'
                . 'Part_34 VARCHAR(100),'
                . 'Part_35 VARCHAR(100),'
                . 'Part_36 VARCHAR(100),'
                . 'Part_37 VARCHAR(100),'
                . 'Part_38 VARCHAR(100),'
                . 'Part_39 VARCHAR(100),'
                . 'Part_40 VARCHAR(100),'
                . 'Part_41 VARCHAR(100),'
                . 'Part_42 VARCHAR(100),'
                . 'Part_43 VARCHAR(100),'
                . 'Part_44 VARCHAR(100),'
                . 'Part_45 VARCHAR(100),'
                . 'Part_46 VARCHAR(100),'
                . 'Part_47 VARCHAR(100),'
                . 'Part_48 VARCHAR(100),'
                . 'Part_49 VARCHAR(100),'
                . 'Part_50 VARCHAR(100),'
                . 'Part_51 VARCHAR(100),'
                . 'Part_52 VARCHAR(100),'
                . 'Part_53 VARCHAR(100),'
                . 'Part_54 VARCHAR(100),'
                . 'Part_55 VARCHAR(100),'
                . 'Part_56 VARCHAR(100),'
                . 'Part_57 VARCHAR(100),'
                . 'Part_58 VARCHAR(100),'
                . 'Part_59 int NOT NULL AUTO_INCREMENT,'
                . 'PRIMARY KEY(Part_59))');
    }

}
