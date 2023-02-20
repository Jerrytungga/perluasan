<?php
include '../koneksi.php';
include 'session.php';
if (isset($_POST['submit'])) {
    $nip = $data['nip'];
    $sql_traines = mysqli_query($conn, "SELECT angkatan, semester, Asisten FROM `traines` WHERE nip='$nip'");
    $data_angkatan = mysqli_fetch_array($sql_traines);
    $angkatan = $data_angkatan['angkatan'];
    $asisten_ = $data_angkatan['Asisten'];
    $sqli_jadwal = mysqli_query($conn, "SELECT MAX(week) as week FROM `schedule`");
    $array_jadwal_ALL = mysqli_fetch_array($sqli_jadwal);
    $ambil_idpermai = mysqli_query($conn, "SELECT MAX(id_permai) as id_permai FROM `tb_tanah_permai`");
    $data_id = mysqli_fetch_array($ambil_idpermai);
    $id_permai = $data_id['id_permai']+1;
    $week = $array_jadwal_ALL['week'];
    $ayat = $_POST['ayat'];
    $Da = $_POST['DA'];
    $Dt = $_POST['DT'];
    $Ds = $_POST['DS'];
    $pengalaman = $_POST['pengalaman'];
    $input_tanah_permai = mysqli_query($conn, "INSERT INTO `tb_tanah_permai`(`nip`, `angkatan`, `Ayat`, `Da`, `Dt`, `Ds`, `Pengalaman_`,`Week`,`asisten`,`id_permai`) VALUES ('$nip','$angkatan','$ayat','$Da','$Dt','$Ds','$pengalaman','$week','$asisten_','$id_permai')");
  }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Jurnal Perluasan</title>
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
        <a href="index.php" class="header-title"><?= $data['name']?></a>
        <a href="index.php" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <a href="jurnal.php"><i data-feather="book" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Jurnal</span></a>
        <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a>
        <!-- <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a> -->
        <a href="index.php" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
          </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-large">
            <h2 data-username="<?= $data['name']?>" class="greeting-text"></h2>
            <!-- <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a> -->
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        

    <!-- Homepage Slider-->
    <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Benjamin Franklin</h1>
                    <p class="boxed-text-xl">
                        "Jangan tunda pekerjaanmu sampai besok, sementara kau bisa mengerjakannya hari ini."
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/17m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Bangkit</h1>
                    <p class="boxed-text-xl">
                        "Menjadi kuat bukan berarti kamu tidak pernah lelah. Itu hanya berarti kamu memiliki kekuatan untuk bangkit kembali setelah beristirahat."
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/8m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Don't look back with regret</h1>
                    <p class="boxed-text-xl">
                        "Don't look back with regret, look forward with hope.”
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/14m.jpg"></div>
            </div>
        </div>


        <div class="card card-style">
            <div class="content mb-0">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h4>Total Minus</h4>
                    </div>
                    <div class="col-3">
                        <p class="text-center mb-0 pb-0">
                            <!-- <i class="fa fa-check-circle color-green1-dark fa-4x pt-3"></i> -->
                            <h1>21</h1>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="content mb-2">
            <h5 class="float-left font-16 font-500">Pribadi</h5>
            <!-- <a class="float-right font-12 color-highlight mt-n1" href="#">View All</a> -->
            <div class="clearfix"></div>
        </div>

        <div class="double-slider text-center owl-carousel owl-no-dots">
            <div class="item bg-theme rounded-m shadow-m">
            <svg class="mt-4 mb-4" xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
                <h5 class="font-16">BIBLE READING</h5>
                <p class="line-height-s font-11">
                   Pembacaan Alkitab <br>Wajib di isi!!
                   <button type="button" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900" data-toggle="modal" data-target="#staticBackdrop">
  isi
</button>
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="book" data-feather-line="1" data-feather-size="45" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i>
                <h5 class="font-16">GOOD LAND</h5>
                <p class="line-height-s font-11">
                    Tanah Permai <br>Wajib di isi!!
                    <?php
         $ambildatatanahpermai = mysqli_query($conn,"SELECT * FROM `tb_tanah_permai`  where `nip`='$id'");
         $ambil_nip = mysqli_fetch_array($ambildatatanahpermai);
         if ($ambil_nip['nip'] == 0) {  ?>
<button type="button" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900" data-toggle="modal" data-target="#staticBackdrop">
    isi
    </button>
       <?php  } else { ?>

<a href="jurnal.php" class="btn mt-1 btn-xs btn-success btn-center-xs rounded-s shadow-s text-uppercase font-900">Lihat</a>
    <?php   }
        ?>
 
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="book" data-feather-line="1" data-feather-size="45" data-feather-color="green1-dark"  data-feather-bg="yellow1-fade-light"></i>
                <h5 class="font-16">Prayer</h5>
                <p class="line-height-s font-11">
                    Buku Doa <br>Wajib di isi!!
                    <button type="button" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900" data-toggle="modal" data-target="#staticBackdrop">
  isi
</button>
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="sun" data-feather-line="1" data-feather-size="45" data-feather-color="yellow1-dark" data-feather-bg="green1-fade-light"></i>
                <h5 class="font-16">Morning Revival</h5>
                <p class="line-height-s font-11">
                    Penyegaran Pagi <br> Wajib di isi!!
                    <a href="#" class="btn mt-1 btn-xs bg-highlight btn-center-xs rounded-s shadow-s text-uppercase font-900">View</a>
                </p>
            </div>
        </div>
        
        
     
    <!-- end of page content-->
   <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-highlight">
        <h5 class="modal-title text-light" id="staticBackdropLabel">Masukan Tanah Permai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post">
        <div>
            <label for="">Ayat :</label>
            <textarea name="ayat" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Apresiasi :</label>
            <textarea name="DA" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Terang :</label>
            <textarea name="DT" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Doa Syafaat :</label>
            <textarea name="DS" class="form-control" id="" required cols="4" rows="4"></textarea>
        </div>
        <div class="mt-1">
            <label for="">Pengalaman :</label>
            <textarea name="pengalaman" class="form-control" required id="" cols="4" rows="4"></textarea>
        </div>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </div>
</form>
    </div>
  </div>
</div>



        <div class="content mb-2">
            <h5 class="float-left font-16 font-500">JADWAL</h5>
            <!-- <a class="float-right font-12 color-highlight mt-n1" href="#">View All</a> -->
            <div class="clearfix"></div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h4>Tidur Malam (23:00)</h4>
                        <p class="mt-n1 line-height-m">
                            22-2-2023
                        </p>
                    </div>
                    <div class="col-3">
                        <p class="text-center mb-0 pb-0">
                            <i class="fa fa-check-circle color-green1-dark fa-4x pt-3"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-style">
            <div class="content mb-0">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h4>Tidur Malam (23:00)</h4>
                        <p class="mt-n1 line-height-m">
                            22-2-2023
                        </p>
                    </div>
                    <div class="col-3">
                        <p class="text-center mb-0 pb-0">
                            <i class="fa fa-check-circle color-green1-dark fa-4x pt-3"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-left menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-welcome"
         data-menu-effect="menu-over">  
    </div>
    
    <!-- Be sure this is on your main visiting page, for example, the index.html page-->
    <!-- Install Prompt for Android -->
    <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="350" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-l mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">Azures on your Home Screen</h4>
            <p>
                Install Azures on your home screen, and access it just like a regular app. It really is that simple!
            </p>
            <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to Home Screen</a><br>
            <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe later</a>
            <div class="clear"></div>
        </div>
    </div>   

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios" 
        class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="320" 
        data-menu-effect="menu-parallax">
        <div class="boxed-text-xl mt-4">
            <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="mt-3">Azures on your Home Screen</h4>
            <p class="mb-0 pb-3">
                Install Azures on your home screen, and access it just like a regular app.  Open your Safari menu and tap "Add to Home Screen".
            </p>
            <div class="clear"></div>
            <a href="#" class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Maybe later</a><br>
            <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
        </div>
    </div>

    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
