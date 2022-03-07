<?php
require_once __DIR__.'/vendor/autoload.php' ;

//編碼模式
$code = $_GET['code'] ;
if (!preg_match("/^\d+$/", $code)) $code = '128' ;
##

//欲編碼字串
$string = @$_GET['string'] ;
if (empty($string)) {
    http_response_code(400) ;
    exit ;
}
##

//
switch($code) {
    case '128' :
                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG() ;
                header('Content-Type: image/PNG') ;
                echo $generator->getBarcode($string, $generator::TYPE_CODE_128) ;
                
                break ;
                
    case '39' :
                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG() ;
                header('Content-Type: image/PNG') ;
                echo $generator->getBarcode($string, $generator::TYPE_CODE_39) ;
                
                break ;
                
    case '93' :
                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG() ;
                header('Content-Type: image/PNG') ;
                echo $generator->getBarcode($string, $generator::TYPE_CODE_93) ;
                
                break ;
                
                
    case '13' :
                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG() ;
                header('Content-Type: image/PNG') ;
                echo $generator->getBarcode($string, $generator::TYPE_EAN_13) ;
                
                break ;
                
    default :
                http_response_code(401) ;
                
                break ;
}
##

// $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
// echo '<img width="300" src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';
// echo '<img width="300" src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_39)) . '">';

// $generator = new \Picqer\Barcode\BarcodeGeneratorJPG();
// echo '<img src="data:image/jpeg;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';

// $generator = new \Picqer\Barcode\BarcodeGeneratorJPG() ;
// header('Content-Type: image/jpeg') ;
// echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128) ;

// $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
// echo $generator->getBarcode('1232343', $generator::TYPE_CODE_128);


/*
barcode format
$generatorSVG = new Picqer\Barcode\BarcodeGeneratorSVG();
$generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
$generatorJPG = new Picqer\Barcode\BarcodeGeneratorJPG();
$generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
*/

/*
TYPE_CODE_39
TYPE_CODE_39_CHECKSUM
TYPE_CODE_39E
TYPE_CODE_39E_CHECKSUM
TYPE_CODE_93
TYPE_STANDARD_2_5
TYPE_STANDARD_2_5_CHECKSUM
TYPE_INTERLEAVED_2_5
TYPE_INTERLEAVED_2_5_CHECKSUM
TYPE_CODE_128
TYPE_CODE_128_A
TYPE_CODE_128_B
TYPE_CODE_128_C
TYPE_EAN_2
TYPE_EAN_5
TYPE_EAN_8
TYPE_EAN_13
TYPE_UPC_A
TYPE_UPC_E
TYPE_MSI
TYPE_MSI_CHECKSUM
TYPE_POSTNET
TYPE_PLANET
TYPE_RMS4CC
TYPE_KIX
TYPE_IMB
TYPE_CODABAR
TYPE_CODE_11
TYPE_PHARMA_CODE
TYPE_PHARMA_CODE_TWO_TRACKS
*/

?>