<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


class C_export extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_export');
    }

    function index()
    {
        $tryout = $this->M_export->getAll();
        $data = array( 
            'title' => 'Hasil Try Out',
            'tryout' => $tryout
        );
        $this->load->view('hasiltryout', $data, FALSE);
    }

    function export()
    {
        $tryout = $this->M_export->getAll();
        
        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'No')
        ->setCellValue('B1', 'NISN')
        ->setCellValue('C1', 'NAMA')
        ->setCellValue('D1', '1')
        ->setCellValue('E1', '2')
        ->setCellValue('F1', '3')
        ->setCellValue('G1', '4')
        ->setCellValue('H1', '5')
        ->setCellValue('I1', '6')
        ->setCellValue('J1', '7')
        ->setCellValue('K1', '8')
        ->setCellValue('L1', '9')
        ->setCellValue('M1', '10')
        ->setCellValue('N1', '11')
        ->setCellValue('O1', '12')
        ->setCellValue('P1', '13')
        ->setCellValue('Q1', '14')
        ->setCellValue('R1', '15')
        ->setCellValue('S1', '16')
        ->setCellValue('T1', '17')
        ->setCellValue('U1', '18')
        ->setCellValue('V1', '19')
        ->setCellValue('W1', '20')
        ->setCellValue('X1', '21')
        ->setCellValue('Y1', '22')
        ->setCellValue('Z1', '23')
        ->setCellValue('AA1', '24')
        ->setCellValue('AB1', '25')
        ->setCellValue('AC1', '26')
        ->setCellValue('AD1', '27')
        ->setCellValue('AE1', '28')
        ->setCellValue('AF1', '29')
        ->setCellValue('AG1', '30')
        ->setCellValue('AH1', '31')
        ->setCellValue('AI1', 'BENAR')
        ->setCellValue('AJ1', 'SALAH')
        ->setCellValue('AK1', 'KOSONG')
    
        ;

        $i=2; foreach($tryout as $ty) {

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$i, '')
        ->setCellValue('B'.$i, $ty->nisn)
        ->setCellValue('C'.$i, $ty->nama)
        ->setCellValue('D'.$i, $ty->soal_1)
        ->setCellValue('E'.$i, $ty->soal_2)
        ->setCellValue('F'.$i, $ty->soal_3)
        ->setCellValue('G'.$i, $ty->soal_4)
        ->setCellValue('H'.$i, $ty->soal_5)
        ->setCellValue('I'.$i, $ty->soal_6)
        ->setCellValue('J'.$i, $ty->soal_7)
        ->setCellValue('K'.$i, $ty->soal_8)
        ->setCellValue('L'.$i, $ty->soal_9)
        ->setCellValue('M'.$i, $ty->soal_10)
        ->setCellValue('N'.$i, $ty->soal_11)
        ->setCellValue('O'.$i, $ty->soal_12)
        ->setCellValue('P'.$i, $ty->soal_13)
        ->setCellValue('Q'.$i, $ty->soal_14)
        ->setCellValue('R'.$i, $ty->soal_15)
        ->setCellValue('S'.$i, $ty->soal_16)
        ->setCellValue('T'.$i, $ty->soal_17)
        ->setCellValue('U'.$i, $ty->soal_18)
        ->setCellValue('V'.$i, $ty->soal_19)
        ->setCellValue('W'.$i, $ty->soal_20)
        ->setCellValue('X'.$i, $ty->soal_21)
        ->setCellValue('Y'.$i, $ty->soal_22)
        ->setCellValue('Z'.$i, $ty->soal_23)
        ->setCellValue('AA'.$i, $ty->soal_24)
        ->setCellValue('AB'.$i, $ty->soal_25)
        ->setCellValue('AC'.$i, $ty->soal_26)
        ->setCellValue('AD'.$i, $ty->soal_27)
        ->setCellValue('AE'.$i, $ty->soal_28)
        ->setCellValue('AF'.$i, $ty->soal_29)
        ->setCellValue('AG'.$i, $ty->soal_30)
        ->setCellValue('AH'.$i, $ty->soal_31)
        ->setCellValue('AI'.$i, $ty->benar)
        ->setCellValue('AJ'.$i, $ty->salah)
        ->setCellValue('AK'.$i, $ty->kosong);

        $i++;
        }

        $spreadsheet->getActiveSheet()->setTitle('Hasil Akhir '.date('d-m-Y H'));
        $spreadsheet->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Hasil Akhir.xlsx"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
        header('Cache-Control: cache, must-revalidate');
        header('Pragma: public'); 

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
    }
}