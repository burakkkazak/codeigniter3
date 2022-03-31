<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
    <base href="<?=base_url()?>" />
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">

    <style>
        .bosluk {
            padding-bottom: 50px;
            padding-top: 50px;
        }
    </style>
</head>
<body>

<!-- Site başlık ve linkler-->
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-light">Sakarya BİP Otomotiv</h4>
            </div>
            <div class="col-md-6 text-right">
                <a href="#" class="btn btn-link text-warning">Ana Sayfa</a>
                <a href="vehicle" class="btn btn-link text-warning">Araçlar</a>
            </div>
        </div>
    </div>
</div>

<!-- site header resmi -->
<div class="container-fluid bg-dark bosluk">
    <img src="images/res1.jpg" class="img-fluid">
</div>

<!-- hakkımızda -->
<div class="container bosluk">
    <div class="row">
        <div class="col-md-6">
            <h5>HAKKIMIZDA</h5>
            <p class="text-justify">
                1979 yılında mahalle içerisinde küçük bir sokakta araç tamir atölyesi ile başlayan
                serüven bugün Sakarya'nın en büyük filo kiralama hizmetine dönüşmüştür.
            </p>

            <p class="text-justify">
                Bugün en önemli işlerden biri haline gelen araç kiralama hizmeti kendi içerisinde
                bazı sorunları ortaya çıkarmaktadır. Sakarya BİP Otomotiv olarak kendimize ve siz
                değerli müşterilerimize olan güvenimiz bu sorunların minimum düzeye inmesine yardımcı
                olmuştur.
            </p>
        </div>

        <div class="col-md-6">
            <img src="images/res3.jpg" class="img-fluid rounded">
        </div>
    </div>
</div>

<!-- iletişim -->
<div class="container-fluid bg-warning bosluk">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>İLETİŞİM</h5>

                <p>
                    Adres: Tığcılar mahallesi Atatürk Bulvarı 5/A, Adapazarı
                </p>

                <p>
                    Telefon: 0 264 555 3322
                </p>

                <p>
                    E-Posta: sakaryabip@gmail.com
                </p>
            </div>

            <div class="col-md-6">
                <img src="images/res4.jpg" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

</body>
</html>
