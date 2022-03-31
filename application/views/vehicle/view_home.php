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
                <a href="#" class="btn btn-link text-warning">Araçlar</a>
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
            <h5>Araçlarımız</h5>
            <table class="table">
                <thead>
                <tr>
                    <th>Arac ID</th>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Vites</th>
                    <th>Yakıt</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($araclar as $arac){ ?>
                        <tr>
                            <td>
                                <?=$arac->arac_id?>
                            </td>
                            <td>
                                <?=$arac->marka?>
                            </td>
                            <td>
                                <?=$arac->model?>
                            </td>
                            <td>
                                <?=$arac->vites?>
                            </td>
                            <td>
                                <?=$arac->yakit?>
                            </td>
                        </tr>
                    <?php  }?>
                </tbody>
            </table>


        </div>

        <div class="col-md-12">

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
