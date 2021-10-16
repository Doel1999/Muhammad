<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'LAPORAN INVENTORY CONTROL SYSTEM',0,1,'C');


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(27,10,'OPD Pengguna',1,0);
$pdf->Cell(24,10,'Nomer Polisi',1,0);
$pdf->Cell(25,10,'Nomer Rangka',1,0);
$pdf->Cell(22,10,'Nomer Mesin',1,0);
$pdf->Cell(30,10,'Tanggal Perolehan',1,0);
$pdf->Cell(30,10,'Jabatan Pengguna',1,0); 
$pdf->Cell(30,10,'Nama Pengguna',1,1);


$pdf->SetFont('Arial','',8);

include 'koneksi.php';
$mahasiswa = mysqli_query($koneksi,"select * from opd");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(27,6,$row['opd_pengguna'],1,0);
    $pdf->Cell(24,6,$row['nomor_polisi'],1,0);
    $pdf->Cell(25,6,$row['nomor_rangka'],1,0);
    $pdf->Cell(22,6,$row['nomor_mesin'],1,0);
    $pdf->Cell(30,6,$row['tanggal_perolehan'],1,0);
    $pdf->Cell(30,6,$row['jabatan_pengguna'],1,0);
    $pdf->Cell(30,6,$row['nama_pengguna'],1,1); 
}

$pdf->Output();
?>
