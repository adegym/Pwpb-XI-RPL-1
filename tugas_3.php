<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Identitas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">PWPB let's join us</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="tugas_1.php">Tugas Pertama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tugas Kedua</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tugas_3.php">Tugas Ketiga</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Form Identitas</h1>
        <h2 class="masthead-subheading mb-0">here!!!!</h2>
        <a href="index.html" class="btn btn-primary btn-xl rounded-pill mt-5">Back to Home</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

<center><br><h1>Data Identitas Peserta Didik Baru</h1><br>
    <h2>Tahun Ajaran 2019/2020</h2></center>
<br><br>
<form action="" method="post" name="form">
<tr>
	<td>Nama Lengkap</td>
	<td>:</td>
	<td><input type="text" name="nm" placeholder="Nama Lengkap"></td><br><br>
</tr>
<tr>	
	<td>Nama Panggilan</td>
    <td>:</td>
	<td><input type="text" name="np" placeholder="Nama Panggilan"></td><br><br>
</tr>
<tr>
    <td>Jenis Kelamin</td> 
    <td>:</td>
    <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
    <input type="radio" name="jk" value="Perempuan">Perempuan </td><br><br>
</tr>
<tr>
    <td>NISN</td> <td>:</td>
    <td><input type="number" name="nisn"></td><br><br>
</tr>
<tr>
    <td>NIK</td> <td>:</td>
    <td><input type="number" name="nik"></td><br><br>
</tr>
<tr>
    <td>Tempat dan Tanggal Lahir</td> <td>:</td>
    <td><input type="date" name="ttl" ></td><br><br>
</tr>
<tr>
    <td>Asal Sekolah</td> <td>:</td>
    <td><input type="textarea" name="as" placeholder="Alamat Sekolah"></td><br><br>
</tr>
<tr>
    <td>Nomor SKHU</td>  <td>:</td>
    <td><input type="text" name="sk" placeholder="Nomor SKHU"></td><br><br>
</tr>
<tr>
    <td>Tanggal diterima di sekolah ini</td> <td>:</td>
    <td><input type="date" name="diterima"></td><br><br>
</tr>
<tr>
    <td>Jika pindahan sebutkan alasan pindah</td> <td>:</td>
    <td><input type="textarea" name="alasan" placeholder="Alasan pindah"></td><br><br>
</tr>
<tr>
    <td>Agama</td> <td>:</td>
    <td><input type="radio" name="agama" value="Islam">Islam
    <input type="radio" name="agama" value="Kristen">Kristen
    <input type="radio" name="agama" value="Hindu">Hindu
    <input type="radio" name="agama" value="Budha">Budha
    <input type="radio" name="agama" value="Konghucu">Konghucu
    <input type="radio" name="agama" value="Protestan">Protestan</td><br><br>
</tr>
<tr>
    <td>Alamat</td> <td>:</td>
    <td><input type="textarea" name="alamat" placeholder="Alamat"></td><br><br>
</tr>
<tr>
    <td>Tinggal bersama</td> <td>:</td>
    <td><input type="radio" name="tb" value="orang tua kandung">orang tua kandung
    <input type="radio" name="tb" value="orang tua angkat">orang tua angkat
    <input type="radio" name="tb" value="wali">wali</td><br><br>
</tr>
<tr>
    <td>Transportasi ke sekolah</td> <td>:</td>
    <td><input type="radio" name="transport" value="angkot" >Angkutan Umum
    <input type="radio" name="transport" value="mobil" >Mobil
    <input type="radio" name="transport" value="motor" >Motor
    <input type="radio" name="transport" value="jalan kaki" >Jalan kaki</td><br><br>
</tr>
<tr>
    <td>Nomor telepon</td> <td>:</td>
    <td><input type="text" name="notlpn" placeholder="Nomor telepon"></td><br><br>
</tr>
<tr>
    <td>No. HP</td> <td>:</td>
    <td><input type="text" name="nohp" placeholder="No.HP"></td><br><br>
</tr>
<tr>
    <td>Nomor KPS (Kartu Perlindungan Sosial) bagi yang memiliki</td> <td>:</td>
    <td><input type="number" name="nokps" placeholder="Nomor KPS"></td><br><br>
</tr>
   <tr><td> <b>Data Ayah kandung</b> <br></td></tr>
    <tr>
    <td>Nama</td> <td>:</td>
    <td><input type="text" name="nmayah" placeholder="Nama"></td><br><br>
</tr>
<tr>
    <td>Tahun Lahir</td> <td>:</td>   
    <td><input type="date" name="ttlayah"></td><br><br>
</tr>
<tr>
    <td>Pendidikan</td> <td>:</td>
    <td><input type="radio" name="pd" value="sd">SD
    <input type="radio" name="pd" value="smp">SMP
    <input type="radio" name="pd" value="smk/sma">SMK/SMA
    <input type="radio" name="pd" value="sarjana">Sarjana</td><br><br>
</tr>
<tr>
    <td>Pekerjaan</td> <td>:</td>
    <td><input type="text" name="pkayah" placeholder="Pekerjaan"></td><br><br>
</tr>
<tr>
    <td>Penghasilan perbulan</td> <td>:</td>
    <td><input type="checkbox" name="pp" value="100-500">100-500
    <input type="checkbox" name="pp" value="500-1000 jt">500-1000 jt
    <input type="checkbox" name="pp" value="1000-1500 jt">1000-1500 jt
    <input type="checkbox" name="pp" value="1500-2000 jt">1500-2000 jt
    <input type="checkbox" name="pp" value="2000-2500 jt">2000-2500 jt
    <input type="checkbox" name="pp" value=">2500 jt">>2500 jt</td><br><br>
</tr>
   <tr> <td><b>Data Ibu kandung</b><br></td></tr>
    <tr>
    <td>Nama</td> <td>:</td>
    <td><input type="text" name="nama" placeholder="Nama"></td><br><br>
</tr>
<tr>
    <td>Tahun Lahir</td> <td>:</td>
    <td><input type="date" name="tl"></td><br><br>
</tr>
<tr>
    <td>Pendidikan</td> <td>:</td>
    <td><input type="radio" name="pen" value="sd">SD
    <input type="radio" name="pen" value="smp">SMP
    <input type="radio" name="pen" value="smk/sma">SMK/SMA
    <input type="radio" name="pen" value="sarjana">Sarjana</td><br><br>
</tr>
<tr>
    <td>Pekerjaan</td> <td>:</td>
    <td><input type="text" name="pekerjaan" placeholder="pekerjaan"></td><br><br>
</tr>
<tr>
    <td>Penghasilan perbulan</td> <td>:</td>
    <td><input type="checkbox" name="pb" value="100-500">100-500
    <input type="checkbox" name="pb" value="500-1000 jt">500-1000 jt
    <input type="checkbox" name="pb" value="1000-1500 jt">1000-1500 jt
    <input type="checkbox" name="pb" value="1500-2000 jt">1500-2000 jt
    <input type="checkbox" name="pb" value="2000-2500 jt">2000-2500 jt
    <input type="checkbox" name="pb" value=">2500 jt">>2500 jt</td><br><br>
</tr>
	<tr><td><input type="submit" value="simpan" name="spn">
	<input type="reset" value="reset" name="rst"><br><br></td></tr>
</form>
	<?php
	//pemroses data inputan form
	if(isset($_POST['spn'])){
		echo"<b>Nama Lengkap :</b>".$_POST['nm'];
		echo"<br><b>Nama Panggilan :</b>".$_POST['np'];
		echo"<br><b>Jenis Kelamin :</b>".$_POST['jk'];
		echo"<br><b>NISN :</b>".$_POST['nisn'];
		echo"<br><b>NIK : </b>".$_POST['nik'];
		echo"<br><b>Tempat dan tanggal lahir : </b>".$_POST['ttl'];
		echo"<br><b>Asal Sekolah : </b>".$_POST['as'];
		echo"<br><b>Nomor SKHU : </b>".$_POST['sk'];
		echo"<br><b>Tanggal diterima di sekolah ini : </b>".$_POST['diterima'];
		echo"<br><b>Jika pindahan sebutkan alasan pindah : </b>".$_POST['alasan'];
		echo"<br><b>Agama : </b>".$_POST['agama'];
		echo"<br><b>Alamat : </b>".$_POST['alamat'];
		echo"<br><b>Tinggal Bersama : </b>".$_POST['tb'];
		echo"<br><b>Transportasi ke Sekolah : </b>".$_POST['Transport'];
		echo"<br><b>Nomor telpon : </b>".$_POST['notlpn'];
		echo"<br><b>Tinggal Bersama : </b>".$_POST['no.HP'];
		echo"<br><b>No KPS : </b>".$_POST['nokps'];
		echo"<br><br><b>Data Ayah kandung </b>";
		echo"<br><b>Nama Ayah: </b>".$_POST['nmayah'];
		echo"<br><b>tanggal lahir ayah : </b>".$_POST['ttlayah'];
		echo"<br><b>Pendidikan : </b>".$_POST['pd'];
		echo"<br><b>Pekerjaan Ayah : </b>".$_POST['pkayah'];
		echo"<br><b>Penghasilan Perbulan : </b>".$_POST['pp'];
		echo"<br><br><b>Data Ibu Kandung</b>";
		echo"<br><b>Nama Ibu  : </b>".$_POST['nama'];
		echo"<br><b>Tanggal lahir ibu: </b>".$_POST['tl'];
	    echo"<br><b>Pendidikan: </b>".$_POST['pen'];
	    echo"<br><b>pekerjaan ibu: </b>".$_POST['pekerjaan'];
		echo"<br><b>penghasilan perbulan : </b>".$_POST['pb'];
}
	?>

  <!-- Footer -->
  <footer class="py-3 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>