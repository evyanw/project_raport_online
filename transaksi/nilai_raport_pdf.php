<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
include '../koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'LAPORAN HASIL BELAJAR SISWA',0,0,'C');
 

$pdf->Cell(50,20,'',0,1);
$pdf->SetFont('Times','',9);
$pdf->Cell(43,7,'Nama Peserta Didik               :',0,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(80,6,  $d['nm_siswa'],0,0);
}

$pdf->Cell(43,7,'Fase                                        :',0,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(20,6, $d['fase_id'],0,1);
}

$pdf->Cell(43,7,'NIS                                         :' ,0,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(80,6, $d['id_siswa'],0,0);
}

$pdf->Cell(43,7,'Semester                                 :',0,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(80,6, $d['semester_id'],0,1);
}

$pdf->Cell(43,7,'Kelas                                      :',0,0,);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(80,6, $d['kelas_id'],0,0);  
}

$pdf->Cell(43,7,'Tahun Ajaran                          :',0,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(80,6, $d['tahun_pelajaran'],0,1);
}

$pdf->Cell(43,7,'Konsentrasi Keahlian             :',0,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){ 
$pdf->Cell(80,6, $d['jurusan_id'],0,1);
}


$pdf->Cell(10,10,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(30,6,'A. AKADEMIK',0,1);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(95,7,'MATA PELAJARAN' ,1,0,'C');
$pdf->Cell(30,7,'NILAI',1,0,'C');
$pdf->Cell(60,7,'CAPAIAN',1,0,'C');

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;

$no=1;
    $id_siswa = $_GET['id_siswa'];
    $nilai = mysqli_query($koneksi,"SELECT * FROM data_akademik WHERE id_siswa='$id_siswa'");
    while($d=mysqli_fetch_array($nilai)){

      $pdf->Cell(10,6, $no++,1,0,'C');
      $pdf->Cell(95,6, $d['mapel_id'],1,0,);
      $pdf->Cell(30,6, $d['nilai'],1,0,'C');  
      $pdf->Cell(60,6, $d['capaian'],1,1,'C');
}
 
$pdf->Cell(10,10,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(30,6,'B. EKSTRAKULIKULER',0,1);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(95,7,'Ekstrakulikuler' ,1,0,'C');
$pdf->Cell(30,7,'Predikat',1,0,'C');
$pdf->Cell(60,7,'Deskripsi',1,0,'C');

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;

$no=1;
    $id_siswa = $_GET['id_siswa'];
    $nilai = mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler WHERE id_siswa='$id_siswa'");
    while($d=mysqli_fetch_array($nilai)){

      $pdf->Cell(10,6, $no++,1,0,'C');
      $pdf->Cell(95,6, $d['nama_ekstra'],1,0);
      $pdf->Cell(30,6, $d['predikat'],1,0,'C');  
      $pdf->Cell(60,6, $d['deskripsi'],1,1,'C');
}

$pdf->Cell(10,10,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(30,6,'C. PRESTASI',0,1);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(60,7,'Nama Lomba' ,1,0,'C');
$pdf->Cell(35,7,'Tingkat',1,0,'C');
$pdf->Cell(20,7,'Juara',1,0,'C');
$pdf->Cell(70,7,'Keterangan',1,0,'C');

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;

$no=1;
    $id_siswa = $_GET['id_siswa'];
    $nilai = mysqli_query($koneksi,"SELECT * FROM prestasi WHERE id_siswa='$id_siswa'");
    while($d=mysqli_fetch_array($nilai)){

      $pdf->Cell(10,6, $no++,1,0,'C');
      $pdf->Cell(60,6, $d['nm_lomba'],1,0);
      $pdf->Cell(35,6, $d['tingkat'],1,0,'C');  
      $pdf->Cell(20,6, $d['juara'],1,0,'C');
      $pdf->Cell(70,6, $d['keterangan'],1,1,'C');
}

$pdf->Cell(10,10,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(30,6,'D. PRESENSI',0,1);
$pdf->Cell(43,7,'Ketidakhadiran',1,1,'C');
// $id_siswa = $_GET['id_siswa'];
// $identitas = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
// while($d=mysqli_fetch_array($identitas)){
// $pdf->Cell(80,6,  $d['id_siswa'],0,0);
// }

$pdf->Cell(33,6,'Sakit                           :',1,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM presensi WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(10,6, $d['sakit'],1,1);
}

$pdf->Cell(33,6,'Izin                             :' ,1,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM presensi WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(10,6, $d['izin'],1,1);
}

$pdf->Cell(33,6,'Tanpa Keterangan   :',1,0);
$id_siswa = $_GET['id_siswa'];
$identitas = mysqli_query($koneksi,"SELECT * FROM presensi WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($identitas)){
$pdf->Cell(10,6, $d['alfa'],1,1);
}

$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(30,6,'E. KEPUTUSAN KENAIKAN KELAS',0,1);
$pdf->SetFont('Times','',9);
$pdf->Cell(60,7,'Berdasarkan hasil yang dicapai pada semester 1 dan 2, peserta didik ditetapkan:' ,0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(35,7,'Naik Ke Kelas 11 SISTEM INFORMASI JARINGAN APLIKASI',0,0);


$pdf->Cell(20,20,'',0,1);
$pdf->SetFont('Times','',9);

$pdf->Cell(110,0,'',0,0);
$pdf->Cell(43,7,'Sleman, 24 Juni 2022',0,1);

$pdf->Cell(10,0,'',0,0);
$pdf->Cell(100,7,'Orang Tua,',0,0);
$pdf->Cell(43,7,'Wali Kelas,',0,1);
$pdf->Ln(25);

$pdf->Cell(10,0,'',0,0);
$pdf->Cell(100,7,'.....................................',0,0);

$pdf->Cell(120,6,'Rr. Retna Trimantraningsih, S.T',0,1);
$pdf->Cell(110,0,'',0,0);
$pdf->Cell(43,7,'NIP 19700627 202121 2 002',0,1);

$pdf->Cell(20,15,'',0,1);
$pdf->SetFont('Times','',9);

$pdf->Cell(80,0,'',0,0);
$pdf->Cell(43,7,'Mengetahui, ',0,1);

$pdf->Cell(80,0,'',0,0);
$pdf->Cell(100,7,'Kepala Sekolah',0,0);
$pdf->Ln(35);

$pdf->Cell(80,0,'',0,0);
$pdf->Cell(100,6,'Drs, Agus Waluyo, M.Eng',0,1);
$pdf->Cell(80,0,'',0,0);
$pdf->Cell(43,7,'NIP 19651227 1994121 1 002',0,1);



$pdf->Output();
 
?>