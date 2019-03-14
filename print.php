<?php

ob_start();
include_once("koneksi.php"); //buat koneksi ke database

   if (isset($_POST["submit"]) ) {
  if (tambah($_POST) > 0 ) {
    echo "<script>
        alert('Form Pendaftaran berhasil di cetak');
       </script>";
  } else {
    echo mysqli_error($conn);
  }
}

$num = 'Kode daftar'.' - ('.$_POST['nama'].')';
$nom = '/'.$_POST['nama'];
$date = '/'.date("d M Y");

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>tes</title>
</head>
<body>
  <p style="text-align: center;"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></p>
  <p style="text-align: center; margin-top: -20px;"><b>DINAS PENDIDIKAN</b></p>
  <p style="text-align: center; margin-top: -20px;"><b>MTSN 1 TRENGGALEK</b></p>
  <p style="text-align: center; margin-top: -20px;">Sukobanteng, karangsoko, Kec. Trenggalek, Kab. trenggalek</p>
  <hr>
  <img src="img/udin.png" width="100" height="99" style="position: absolute; margin-top: 20px;">
  <p style="text-align: center; border: 1px solid black; margin-top: 20px; font-size: 20px;"><b>Formulir Pendaftaran Siswa Baru</b></p>
<?php
      if(isset($_POST['submit'])){
        echo '<p style="font-size: 20px;">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '.$_POST['nama'].'<br><br>';
                echo 'NIS     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '.$_POST['nis'].'<br><br>';
                echo 'Nama Wali    &nbsp;&nbsp;&nbsp; : '.$_POST['ortu'].'<br><br>';
                echo 'Tgl.Lahir  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$_POST['tanggal'].'<br><br>';
                echo 'Jenis Kelamin       : '.$_POST['kelamin'].'<br><br>';
                echo 'Sekolah asal     &nbsp; : '.$_POST['sekolah'].'<br><br>';
                echo 'Alamat            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : '.$_POST['alamat'].'<br><br></p>';

 

      }

echo "<p align='right' style='margin-top: 50px;'>Kepala MTSN 1 Trenggalek</p>
<p align='right' style='margin-top: -20px;'>Trenggalek,".date('d-m-y')."
<br><br><br><br><br>( Drs.H.Agung Wiyoto,M.M.pd )</p>";
      

?>
<br>
<qrcode value="<?php echo $num.$nom.$date; ?>" ec="Q" style="width: 37mm; border: none; margin-top: -170px;" ></qrcode>




</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="mhs.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>