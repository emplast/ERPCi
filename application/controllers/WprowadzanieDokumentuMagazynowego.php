<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WprowadzanieDokumentuMagazynowego
 *
 * @author Piotr
 */
class WprowadzanieDokumentuMagazynowego extends CI_Controller {

    public function index() {

        
        $data = array('content' => $this->load->view('panel_wprowadzanieDokumentuMagazynowego', '', TRUE),
            'user' => 'Piotr Majewski');
        $this->load->view('panel', $data);
    }

    public function ajaxNumer() {
        if (isset($_POST['typ'])) {
            switch ($_POST['typ']) {
                case "0":
                    $dane = array('numer_faktury' => NULL, 'numer' => NULL, 'rok' => NULL);
                    echo json_encode($dane);
                    break;
                case "1":
                    $dane = array('numer_faktury' => 'Nie podlega', 'numer' => '1', 'rok' => date('Y'));
                    echo json_encode($dane);
                    break;
                case "2":
                    $dane = array('numer_faktury' => 'Nie podlega', 'numer' => '2', 'rok' => date('Y'));
                    echo json_encode($dane);
                    break;
                case "3":
                    $dane = array('numer_faktury' => NULL, 'numer' => '3', 'rok' => date('Y'));
                    echo json_encode($dane);
                    break;
                case "4":
                    $dane = array('numer_faktury' => 'Nie podlega', 'numer' => '1', 'rok' => date('Y'));
                    echo json_encode($dane);
                    break;
                case "5":
                    $dane = array('numer_faktury' => '1/2018', 'numer' => '1', 'rok' => date('Y'));
                    echo json_encode($dane);
                    break;
                default:
                    echo NULL;
                    break;
            }
        }
    }

    public function ajaxCena() {
        if (isset($_POST['cena'])) {
            switch ($_POST['cena']) {
                case "1":
                    $dane = array('cena' => '2.50', 'marza' => '10');
                    echo json_encode($dane);
                    break;
                case "2":
                    $dane = array('cena' => '2.70', 'marza' => '15');
                    echo json_encode($dane);
                    break;
                case "3":
                    $dane = array('cena' => '3.10', 'marza' => '25');
                    echo json_encode($dane);
                    break;
                case "4":
                    $dane = array('cena' => '3.50', 'marza' => '35');
                    echo json_encode($dane);
                    break;
            }
        }
    }

    public function ajaxMarza() {
        if (isset($_POST['ean'])) {

            switch ($_POST['ean']) {
                case "2000001000016":
                    echo"10";
                    break;
                case "2000001000025":
                    echo"8";
                    break;

                default:
                    echo "25";
                    break;
            }
        } else {
            echo null;
        }
    }

    public function ajaxIndeks() {

        if (isset($_POST['magazyn'])) {

            switch ($_POST['magazyn']) {
                case "0":
                    $dane = array( '5');
                    echo json_encode($dane);
                    break;
                case "1":
                    $dane = array( '1');
                    echo json_encode($dane);
                    break;
                case "2":
                    $dane = array( '1');
                    echo json_encode($dane);
                    break;
                case "3":
                    $dane = array( '1');
                    echo json_encode($dane);
                    break;
                case "4":
                    $dane = array( '1');
                    echo json_encode($dane);
                    break;
            }
        }
    }

    public function ajaxEAN() {

        $dane = array('2000001000052');
        echo json_encode($dane);
    }

    public function ajaxEANSprawdzenie() {


        if (isset($_POST['kodEAN'])) {
            switch ($_POST['magazyn']) {

                case "0":
                    if ($_POST['kodEAN'] == "8806086332057") {
                        $dane = array('ref' => "0");
                        echo json_encode($dane);
                    } else {
                        $dane = array('ref' => "1");
                        echo json_encode($dane);
                    }
                    break;
                case "1":
                    if ($_POST['kodEAN'] == "8806086332057") {
                        $dane = array('ref' => "0");
                        echo json_encode($dane);
                    } else {
                        $dane = array('ref' => "1");
                        echo json_encode($dane);
                    }
                    break;
                case "2":
                    if ($_POST['kodEAN'] == "8806086332057") {
                        $dane = array('ref' => "0");
                        echo json_encode($dane);
                    } else {
                        $dane = array('ref' => "1");
                        echo json_encode($dane);
                    }
                    break;
                case "3":
                    if ($_POST['kodEAN'] == "8806086332057") {
                        $dane = array('ref' => "0");
                        echo json_encode($dane);
                    } else {
                        $dane = array('ref' => "1");
                        echo json_encode($dane);
                    }
                    break;
                case "4":
                    if ($_POST['kodEAN'] == "8806086332057") {
                        $dane = array('ref' => "0");
                        echo json_encode($dane);
                    } else {
                        $dane = array('ref' => "1");
                        echo json_encode($dane);
                    }
                    break;
            }
        }
    }

    public function ajaxNarzuty() {

        $dane = array('cenaI' => '10', 'cenaII' => '15', 'cenaIII' => '25', 'cenaIV' => '35');
        echo json_encode($dane);
    }

    public function ajaxDodajAsortyment() {
        $dane=array('komentarz'=>'Poprawnie dodano asortyment do magazynu');
        echo json_encode($dane);
    }

    public function ajaxTabelaTowarow() {
            
        $dane =array(array('1','1','2000001000016','Kolano 110 90°',
            'szt.','Towar','2.80','23','1.50','100'),
            array('2', '2','2000001000025', 'Kolano 110 67°',
             'szt.','Towar', '2.60','23', '1.40','150'),
            array('3', '3','2000001000034', 'Kolano 110 45°',
             'szt.','Towar', '2.50','23', '1.30','75'),
            array('4', '4','2000001000043', 'Kolano 110 30°',
             'szt.','Towar', '2.20','23', '1.10','100'),
            array('5', '5','2000001000052', 'Kolano 110 20°',
             'szt.','Towar', '2.00','23', '1.10','175'),
            array('6', '6','5902403053414', 'Kolano 50 90°',
             'szt.','Towar', '1.80','23', '0.95','1000'),
            array('7', '7','5900497311014', 'Kolano 50 67°',
             'szt.','Towar', '1.80','23', '1.00','1200'),
            array('8', '8','5902403053414', 'Kolano 50 45°',
             'szt.','Towar', '1.25','23', '0.67','750')
            ,array('9', '9','5907569003846', 'Kolano 50 30°',
             'szt.','Towar', '1.10','23', '0.55','850')
            ,array('10', '10','5905617002186', 'Kolano 50 20°',
             'szt.','Towar', '0.95','23', '0.65','1000'));
            

        echo json_encode($dane);
    }

}
