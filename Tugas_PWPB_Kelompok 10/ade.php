<?php
$namaAde = "Ade Gimnastiar";
$umurAde = 16;
$tinggiAde = 160;

$namaTika = "Kartika Halifiah";
$umurTika = 16;
$tinggiTika = 150;

$namaSyah = "Siti Aisyah";
$umurSyah = 16;
$tinggiSyah = 157;

$namaSiti ="Siti Wulan Nurjamilah";
$umurSiti =15;
$tinggiSiti =152; 

$jumlah = $tinggiAde + $tinggiTika + $tinggiSyah + $tinggiSiti;
$hasil = $jumlah/4; 
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>TUGAS PWPB</title>

    <link rel="stylesheet" type="text/css" href="index.php">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <header>
    
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>PWPB</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">KELOMPOK 10</h1>
      <p class="lead text-muted">Ade Gimnastiar|Kartika Halifiah|Siti Aisyah|Siti Wulan Nurjamilah</p>
    </div>
    <footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="index.php"> (= BACK </a>
</footer>
  </section>

  <div class="album bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
<img src="ade.jpg"width="100%" height="100%">
            <div class="card-body">
              <p class="card-text"><?php
          echo "Nama : $namaAde<br>";
          echo "Umur : $umurAde tahun<br>";
          echo "Tinggi badan : $tinggiAde cm";
?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
<img src="wulan.jpg"width="348px" height="250px">
              <div class="card-body">
                <P><?php
          echo "Nama : $namaSiti<br>";
          echo "Umur : $umurSiti tahun<br>";
          echo "Tinggi badan : $tinggiSiti cm";
?></P>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
<img src="aisyah.jpg"width="348px" height="250px">
            <div class="card-body">
              <p class="card-text"><?php
          echo "Nama : $namaSyah<br>";
          echo "Umur : $umurSyah tahun<br>";
          echo "Tinggi badan : $tinggiSyah cm";
?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
<img src="tika.jpg"width="348px" height="250px">
            <div class="card-body">
              <p class="card-text"><?php
          echo "Nama : $namaTika<br>";
          echo "Umur : $umurTika tahun<br>";
          echo "Tinggi badan : $tinggiTika cm";
?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
     <center style="margin-top:50px;"> Rata-rata tinggi kami berempat yaitu : <?php echo $hasil ?></center>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
