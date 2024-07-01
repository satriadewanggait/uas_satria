<?php
require('./vendor/fpdf186/fpdf.php');
$data = require('./models/dataProduk.php');

class GeneratePdf extends FPDF {

  // Page header
  function Header() {
        
      // Set font family to Arial bold 
      $this->SetFont('Times','B',14);

      //Sets the text color
      $this->SetTextColor(0,0,0);

      //Line break
      $this->Ln(20);
        
      // Header
      $this->Cell(200, 10, 'DATA PRODUK', 0, 0, 'C');
        
      // Line break
      $this->Ln(20);
  }

  // Page footer
  function Footer() {
        
      // Position at 1.5 cm from bottom
      $this->SetY(-25);
        
      // Arial italic 8
      $this->SetFont('Arial','I',8);
        
      // Page number
      $this->Cell(0,10,'Page ' . 
          $this->PageNo() . '/{nb}',0,0,'C');
  }

  // header Attributes
  function headerAttributes() {
      $this->SetFont('Times','B', 10);
      $this->Cell(30,10,'Kode Produk',1,0,'C');
      $this->Cell(45,10,'Nama Produk',1,0,'C');
      $this->Cell(60,10,'Stok',1,0,'C');
      $this->Cell(40,10,'Harga Jual',1,0,'C');
      $this->Ln();
  }

  function body($data) {
    $this->SetFont('Times','B', 10);

    foreach ($data as $key => $row) {
      $this->Cell(30,10,$row['product_code'],1,0,'C');
      $this->Cell(45,10,$row['product_name'],1,0,'C');
      $this->Cell(60,10,$row['stok'],1,0,'C');
      $this->Cell(40,10,$row['price'],1,0,'C');
      $this->Ln();
    }
    
}
}

// Instantiation of FPDF class
$pdf = new GeneratePdf();
  
// Define an alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->headerAttributes();
$pdf->SetFont('Times','',14);
$pdf->body($data);

$pdf->Output();
