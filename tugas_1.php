<?php
$namaAde = "Ade Gimnastiar";
$ttlAde = "Bogor,27 Desember 2002";
$umurAde = 16;
$tinggiAde = 160;
$hobiAde = "Bermain Bulutangkis";

$namaTika = "Kartika Halifiah";
$ttlTika = "Bogor, 3 Oktober 2003";
$umurTika = 16;
$tinggiTika = 150;
$hobiTika = "Traveling";

$namaSyah = "Siti Aisyah";
$ttlSyah = "Bogor, 2 Oktober 2003";
$umurSyah = 16;
$tinggiSyah = 157;
$hobiSyah = "Stalking";

$namaSiti ="Siti Wulan Nurjamilah";
$ttlSiti = "Bogor, 15 Januari 2004";
$umurSiti =15;
$tinggiSiti =152;
$hobiSiti = "Membaca";

$jumlah = $tinggiAde + $tinggiTika + $tinggiSyah + $tinggiSiti;
$hasil = $jumlah/4; 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Us Biodata</title>

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
        <h1 class="masthead-heading mb-0">SEE LOOK</h1>
        <h2 class="masthead-subheading mb-0">We're Biodata</h2>
        <a href="index.html" class="btn btn-primary btn-xl rounded-pill mt-5">Back to Home</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/aisyah.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">SITI AISYAH</h2>
            <p><?php
          echo "Nama : $namaSyah<br>";
          echo "TTL : $ttlSyah<br>";
          echo "Umur : $umurSyah tahun<br>";
          echo "Tinggi badan : $tinggiSyah cm<br>";
          echo "Hobi : $hobiSyah";
?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/ade.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">ADE GIMNASTIAR</h2>
            <p><?php
          echo "Nama : $namaAde<br>";
          echo "TTL : $ttlAde<br>";
          echo "Umur : $umurAde tahun<br>";
          echo "Tinggi badan : $tinggiAde cm<br>";
          echo "Hobi : $hobiAde";
?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/tika.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">KARTIKA HALIFIAH</h2>
            <p><?php
          echo "Nama : $namaTika<br>";
          echo "TTL : $ttlTika<br>";
          echo "Umur : $umurTika tahun<br>";
          echo "Tinggi badan : $tinggiTika cm<br>";
          echo "Hobi : $hobiTika";
?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

   <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/wulan.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">SITI WULAN NURJAMILAH</h2>
            <p><?php
          echo "Nama : $namaSiti<br>";
          echo "TTL : $ttlSiti<br>";
          echo "Umur : $umurSiti tahun<br>";
          echo "Tinggi badan : $tinggiSiti cm<br>";
          echo "Hobi : $hobiSiti";
?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <center style="margin-top:50px;"> Rata-rata tinggi kami : <?php echo $hasil ?></center><br>

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