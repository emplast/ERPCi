<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SpisZNatury
 *
 * @author Piotr
 */
class SpisZNatury extends CI_Controller {

    public function index() {
        if (!$this->session->userdata('dane')) {
            $dane = array('numer' => null,
                'indeks' => null,
                'ean' => null,
                'nazwa' => array(null),
                'jednostka' => null,
                'typ' => null,
                'vat' => null,
                'cena' => null,
                'stan' => null,
                'stwierdzono' => null,
                'id'=>0);
        } else {
            $dane = $this->session->userdata('dane');
            
        }
        $data = array('content' => $this->load->view('panel_spisZNatury', $dane, TRUE),
            'user' => 'Piotr Majewski');
        $this->load->view('panel', $data);
    }

    public function ajaxData() {

        if ($_POST['kodEAN'] == '1111111111111') {
            $data = array('jednostka' => 'szt',
                'indeks' => '1/A/6',
                'nazwa' => 'Rura 110 0,5m',
                'numer' => '1',
                'typ' => 'Towar',
                'vat' => '23%',
                'stan' => '100',
                'brak' => '0');
            echo json_encode($data);
        } else {
            $data = array('jednostka' => NULL,
                'indeks' => NULL,
                'nazwa' => NULL,
                'numer' => NULL,
                'typ' => NULL,
                'vat' => NULL,
                'stan' => NULL,
                'brak' => '1');
            echo json_encode($data);
        }
    }

    public function ajaxExcel() {
        
        $config['upload_path'] = './upload/excel/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = '1000';

         $this->load->library('excel');
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload()) {

            // echo realpath(APPPATH . 'upload/excel');
            echo $this->upload->display_errors();
        } else {
            $plik = $this->upload->data();
            $file = './upload/excel/'.$plik['file_name'];
           

            $a=[];
            $object = PHPExcel_IOFactory::load($file);
            $cell_collection = $object->getActiveSheet()->getCellCollection();
            $i=0;
            foreach ($cell_collection as $cell) {
                $column = $object->getActiveSheet()->getCell($cell)->getColumn();
                $row = $object->getActiveSheet()->getCell($cell)->getRow();
                $data_value = $object->getActiveSheet()->getCell($cell)->getValue();
                
                if ($row == 1) {
                    $header[$row][$column] = $data_value;
                } else {
                    $arr_data[$row][$column] = $data_value;
                    if($column=='A'){
                    
                    $a[$i]=$data_value;
                    $i++;
                }
                   
                }
            }    
                
                
           
                
            
            
            
            
            
            
            
            $dane = array('numer' => array('1'),
                'indeks' => array('1/A/1', '1/A/2', '1/A/3', '1/A/4'),
               // 'ean' => array('2000001000016', '2000001000025', '2000001000034', '2000001000043'),
                'ean'=>$a,
                'nazwa' => array('Kolano 110 90°', 'Kolano 110 67°', 'Kolano 110 45°', 'Kolano 110 30°'),
                'jednostka' => array('szt.', 'szt.', 'szt.', 'szt.'),
                'typ' => array('Towar', 'Towar', 'Towar', 'Towar'),
                'vat' => array('23%', '23%', '23%', '23%'),
                'cena' => array('2,00', '1,80', '1,60', '1,40'),
                'stan' => array('100', '120', '100', '160'),
                'stwierdzono' => array('50', '120', '55', '120'));
            $dane['id']= count($dane['nazwa']);
            $this->session->set_userdata('dane',$dane);
          
            
            redirect('index.php/SpisZNatury/index');
        }
    }

}
