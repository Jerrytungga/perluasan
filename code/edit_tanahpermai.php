<?php
include '../koneksi.php';
$idpermai = $_GET['idpermai'];
include 'session.php';
if (isset($_POST['ubah'])) {
    $idPermai = $_POST['id__permai'];
    $Ayat = $_POST['ayat'];
    $DA = $_POST['dA'];
    $DT = $_POST['dT'];
    $DS = $_POST['dS'];
    $Pengalaman = $_POST['Pengalaman_'];
    $input_tanah_permai = mysqli_query($conn, "UPDATE `tb_tanah_permai` SET `Ayat`='$Ayat',`Da`='$DA',`Dt`='$DT',`Ds`='$DS',`Pengalaman_`='$Pengalaman' WHERE `id_permai`='$idPermai'");
    if($input_tanah_permai){
        
        header('Location: jurnal.php');
    }
  }
$ambildata_tanah_permai = mysqli_query($conn,"SELECT * FROM `tb_tanah_permai` where `id_permai`='$idpermai'");
$tampilkan_tanahpemai = mysqli_fetch_array($ambildata_tanah_permai);

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Azures BootStrap</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="jurnal.php" data-back-button class="header-title header-subtitle"><?= $data['name']?></a>
        <a href="jurnal.php" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="jurnal.php" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="jurnal.php" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="jurnal.php" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="jurnal.php" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
    <a href="jurnal.php"  class="active-nav"><i data-feather="book" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Jurnal</span></a>
        <!-- <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a> -->
        <!-- <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a> -->
        <a href="index.php"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
         
    </div>
    
    <div class="page-content" style="min-height:60vh!important">
        <div class="page-title page-title-small">
            <h2><a href="jurnal.php" data-back-button><i class="fa fa-arrow-left"></i></a>Edit Good Land</h2>
            <!-- <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a> -->
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        
       

       

        <div class="card card-style">
            <div class="content mb-0">        
                <h3><?= $tampilkan_tanahpemai['date']; ?> </h3><p></p>
                <form action="" method="POST">
                <div class="mb-2">
                <input type="hidden" name="id__permai" value="<?= $idpermai;?>">
                    <h6 for="">Ayat :</h6>
                    <textarea name="ayat" class="form-control" id="" cols="4" rows="4"><?= $tampilkan_tanahpemai['Ayat']; ?></textarea>
                </div>
                <div class="mb-2">
                    <h6 for="">DA :</h6>
                    <textarea name="dA" class="form-control" id="" cols="4" rows="4"><?= $tampilkan_tanahpemai['Da']; ?></textarea>
                </div>
               
                <div class="mb-2">
                    <h6 for="">DT :</h6>
                    <textarea name="dT" class="form-control" id="" cols="4" rows="4"><?= $tampilkan_tanahpemai['Dt']; ?></textarea>
                </div>
                <div class="mb-2">
                    <h6 for="">DS :</h6>
                    <textarea name="dS" class="form-control" id="" cols="4" rows="4"><?= $tampilkan_tanahpemai['Ds']; ?></textarea>
                </div>
                <div class="mb-2">
                    <h6 for="">Perngalaman :</h6>
                    <textarea name="Pengalaman_" class="form-control" id="" cols="4" rows="4"><?= $tampilkan_tanahpemai['Pengalaman_']; ?></textarea>
                </div>
               
               
        <a href="jurnal.php" type="button" class="btn btn-danger mb-3">Batalkan</a>
        <button type="submit" name="ubah" class="btn btn-warning mb-3">Simpan Perubahan</button>
   
      </form>
                
            </div>
        </div>

       

      


     
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-features"
         data-menu-effect="menu-over">  
    </div>
    
   
    
    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
