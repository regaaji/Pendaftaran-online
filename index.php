<?php   
require 'koneksi.php';
include "proses.php";

?>



<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <fieldset>
    <h4>Form Pendaftaran Siswa</h4>
     <div class="row">
      <form method="post" action="print.php">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate" name="nama">
            <label for="icon_prefix">Nama</label>
          </div>
          <div class="input-field col s6">
          <!--   <i class="material-icons prefix">home</i> -->
            <input id="icon_telephone" type="tel" class="validate" name="sekolah">
            <label for="icon_telephone">Asal Sekolah</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix1" type="text" class="validate" name="nis">
            <label for="icon_prefix1">NIS</label>
          </div>
          <div class="input-field col s6">
          <!--   <i class="material-icons prefix">home</i> -->
            <input id="icon_telephone1" type="tel" class="validate" name="ortu">
            <label for="icon_telephone1">Nama Wali</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">wc</i>
            <select name="kelamin">
              <option value="" disabled selected>Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <label>Jenis Kelamin</label>
          </div>
          <div class="input-field col s6">
<!--             <i class="material-icons prefix">date_range</i> -->
            <input type="text" class="datepicker" name="tanggal">
            <label>Tanggal, Lahir</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">place</i>
            <textarea id="textarea2" class="materialize-textarea" data-length="120" name="alamat"></textarea>
            <label for="textarea2">Alamat</label>
          </div>
        </div>

        <div class="row">
          <center><div class="input-field col s12">
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
          </div></center>
        </div>

        <center><button class="btn waves-brown lighten-2 waves-light brown lighten-2" type="submit" name="submit">Submit
          <i class="material-icons right">chevron_right</i>
        </button></center>
        

      </form>
    </div>
</fieldset>



<!-- Memuat API Google reCaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<!-- jquery(perpustakaan) -->
<script type="text/javascript">
 $(document).ready(function(){
  $('.datepicker').datepicker() ;
});

 $(document).ready(function(){
  $('select').formSelect();
});
</script>
<!-- JavaScript online -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>