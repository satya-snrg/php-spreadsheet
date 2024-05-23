<?php




//Import spread sheet packages

// Include PhpSpreadsheet classes
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create new Spreadsheet object
$spreadsheet = new Spreadsheet();

// Set active sheet
$spreadsheet->setActiveSheetIndex(0);
$sheet = $spreadsheet->getActiveSheet();

// Set cell values
$sheet->setCellValue('A1', 'Hello');
$sheet->setCellValue('B1', 'World!');

// Create a writer object
$writer = new Xlsx($spreadsheet);

// Save the spreadsheet
$writer->save('hello_world.xlsx');

echo 'Spreadsheet created successfully!';


?>