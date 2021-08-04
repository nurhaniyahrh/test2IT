<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class C_import extends CI_Controller{

  public function __construct(){

    parent::__construct();
    $this->load->model('M_import');
  }

    function index()
    {
        $this->load->view('importdata', '', FALSE);
    }

  function import(){
    $upload_file=$_FILES['upload_file']['name'];
    $extension=pathinfo($upload_file,PATHINFO_EXTENSION);

    if($extension=='csv')
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else if($extension=='xls')
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    } else
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
    $spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
    $sheetdata=$spreadsheet->getActiveSheet()->toArray();
    $sheetcount=count($sheetdata);

    if($sheetcount>1)
    {
        $data=array();
        for ($i=1; $i < $sheetcount; $i++) { 
            $nisn=$sheetdata[$i][1];
            $nama=$sheetdata[$i][2];
            $soal_1=$sheetdata[$i][3];
            $soal_2=$sheetdata[$i][4];
            $soal_3=$sheetdata[$i][5];
            $soal_4=$sheetdata[$i][6];
            $soal_5=$sheetdata[$i][7];
            $soal_6=$sheetdata[$i][8];
            $soal_7=$sheetdata[$i][9];
            $soal_8=$sheetdata[$i][10];
            $soal_9=$sheetdata[$i][11];
            $soal_10=$sheetdata[$i][12];
            $soal_11=$sheetdata[$i][13];
            $soal_12=$sheetdata[$i][14];
            $soal_13=$sheetdata[$i][15];
            $soal_14=$sheetdata[$i][16];
            $soal_15=$sheetdata[$i][17];
            $soal_16=$sheetdata[$i][18];
            $soal_17=$sheetdata[$i][19];
            $soal_18=$sheetdata[$i][20];
            $soal_19=$sheetdata[$i][21];
            $soal_20=$sheetdata[$i][22];
            $soal_21=$sheetdata[$i][23];
            $soal_22=$sheetdata[$i][24];
            $soal_23=$sheetdata[$i][25];
            $soal_24=$sheetdata[$i][26];
            $soal_25=$sheetdata[$i][27];
            $soal_26=$sheetdata[$i][28];
            $soal_27=$sheetdata[$i][29];
            $soal_28=$sheetdata[$i][30];
            $soal_29=$sheetdata[$i][31];
            $soal_30=$sheetdata[$i][32];
            $soal_31=$sheetdata[$i][33];


            $data[]=array(
                'nisn'  =>$nisn,
                'nama'  =>$nama,
                'soal_1'  =>$soal_1,
                'soal_2'  => $soal_2,
                'soal_3'  => $soal_3,
                'soal_4'  => $soal_4,
                'soal_5'  => $soal_5,
                'soal_6'  => $soal_6,
                'soal_7'  => $soal_7,
                'soal_8'  => $soal_8,
                'soal_9'  => $soal_9,
                'soal_10'  => $soal_10,
                'soal_11'  => $soal_11,
                'soal_12'  => $soal_12,
                'soal_13'  => $soal_13,
                'soal_14'  => $soal_14,
                'soal_15'  => $soal_15,
                'soal_16'  => $soal_16,
                'soal_17'  => $soal_17,
                'soal_18'  => $soal_18,
                'soal_19'  => $soal_19,
                'soal_20'  => $soal_20,
                'soal_21'  => $soal_21,
                'soal_22'  => $soal_22,
                'soal_23'  => $soal_23,
                'soal_24'  => $soal_24,
                'soal_25'  => $soal_25,
                'soal_26'  => $soal_26,
                'soal_27'  => $soal_27,
                'soal_28'  => $soal_28,
                'soal_29'  => $soal_29,
                'soal_30'  => $soal_30,
                'soal_31'  => $soal_31,
            );
        }
        $this->M_import->insert($data);
        $this->load->view('importdata', '', FALSE);
    }
  }
  
  function importAnswer(){
    $upload_file=$_FILES['upload_file']['name'];
    $extension=pathinfo($upload_file,PATHINFO_EXTENSION);

    if($extension=='csv')
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else if($extension=='xls')
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    } else
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
    $spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
    $sheetdata=$spreadsheet->getActiveSheet()->toArray();
    $sheetcount=count($sheetdata);

    if($sheetcount>1)
    {
        $data=array();
        for ($i=1; $i < $sheetcount; $i++) {
            $no_soal=$sheetdata[$i][0];
            $jawaban=$sheetdata[$i][1];

            $data[]=array(
                'no_soal'  =>$no_soal,
                'jawaban'  =>$jawaban,
            );
        }
        $this->M_import->insertAnswer($data);
        $this->load->view('importdata', '', FALSE);
    }
  }

  function importHasil(){
    $upload_file=$_FILES['upload_file']['name'];
    $extension=pathinfo($upload_file,PATHINFO_EXTENSION);

    if($extension=='csv')
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else if($extension=='xls')
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    } else
    {
        $reader= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
    $spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
    $sheetdata=$spreadsheet->getActiveSheet()->toArray();
    $sheetcount=count($sheetdata);

    if($sheetcount>1)
    {
        $data=array();
        for ($i=1; $i < $sheetcount; $i++) { 
            $nisn=$sheetdata[$i][1];
            $nama=$sheetdata[$i][2];
            $soal_1=$sheetdata[$i][3];
            $soal_2=$sheetdata[$i][4];
            $soal_3=$sheetdata[$i][5];
            $soal_4=$sheetdata[$i][6];
            $soal_5=$sheetdata[$i][7];
            $soal_6=$sheetdata[$i][8];
            $soal_7=$sheetdata[$i][9];
            $soal_8=$sheetdata[$i][10];
            $soal_9=$sheetdata[$i][11];
            $soal_10=$sheetdata[$i][12];
            $soal_11=$sheetdata[$i][13];
            $soal_12=$sheetdata[$i][14];
            $soal_13=$sheetdata[$i][15];
            $soal_14=$sheetdata[$i][16];
            $soal_15=$sheetdata[$i][17];
            $soal_16=$sheetdata[$i][18];
            $soal_17=$sheetdata[$i][19];
            $soal_18=$sheetdata[$i][20];
            $soal_19=$sheetdata[$i][21];
            $soal_20=$sheetdata[$i][22];
            $soal_21=$sheetdata[$i][23];
            $soal_22=$sheetdata[$i][24];
            $soal_23=$sheetdata[$i][25];
            $soal_24=$sheetdata[$i][26];
            $soal_25=$sheetdata[$i][27];
            $soal_26=$sheetdata[$i][28];
            $soal_27=$sheetdata[$i][29];
            $soal_28=$sheetdata[$i][30];
            $soal_29=$sheetdata[$i][31];
            $soal_30=$sheetdata[$i][32];
            $soal_31=$sheetdata[$i][33];
            $benar=$sheetdata[$i][34];
            $salah=$sheetdata[$i][35];
            $kosong=$sheetdata[$i][36];


            $data[]=array(
                'nisn'  =>$nisn,
                'nama'  =>$nama,
                'soal_1'  =>$soal_1,
                'soal_2'  => $soal_2,
                'soal_3'  => $soal_3,
                'soal_4'  => $soal_4,
                'soal_5'  => $soal_5,
                'soal_6'  => $soal_6,
                'soal_7'  => $soal_7,
                'soal_8'  => $soal_8,
                'soal_9'  => $soal_9,
                'soal_10'  => $soal_10,
                'soal_11'  => $soal_11,
                'soal_12'  => $soal_12,
                'soal_13'  => $soal_13,
                'soal_14'  => $soal_14,
                'soal_15'  => $soal_15,
                'soal_16'  => $soal_16,
                'soal_17'  => $soal_17,
                'soal_18'  => $soal_18,
                'soal_19'  => $soal_19,
                'soal_20'  => $soal_20,
                'soal_21'  => $soal_21,
                'soal_22'  => $soal_22,
                'soal_23'  => $soal_23,
                'soal_24'  => $soal_24,
                'soal_25'  => $soal_25,
                'soal_26'  => $soal_26,
                'soal_27'  => $soal_27,
                'soal_28'  => $soal_28,
                'soal_29'  => $soal_29,
                'soal_30'  => $soal_30,
                'soal_31'  => $soal_31,
                'benar'  => $benar,
                'salah'  => $salah,
                'kosong'  => $kosong,
            );
        }
        $this->M_import->insertHasil($data);
        $this->load->view('importdata', '', FALSE);
    }
  }
}

?>