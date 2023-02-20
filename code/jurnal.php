
<?php
include '../koneksi.php';
include 'session.php';
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
        <a href="index.php" data-back-button class="header-title header-subtitle"><?= $data['name']?></a>
        <a href="index.php" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="index.php" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="index.php" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="index.php" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="index.php" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>
    
        <div id="footer-bar" class="footer-bar-5">
        <a href="jurnal.php"  class="active-nav"><i data-feather="book" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Jurnal</span></a>
        <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a>
        <!-- <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a> -->
        <a href="index.php"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
           <!-- <a href="../logout.php"><i class="fa fa-power-off" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Logout</span></a> -->
        </div>
  
    
    <div class="page-content" style="min-height:60vh!important">
        <div class="page-title page-title-small">
            <h2><a href="index.php" data-back-button><i class="fa fa-arrow-left"></i></a>JURNAL PERLUASAN</h2>
            <!-- <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a> -->
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        
        
        <!-- <div class="card card-style">
            <p class="content">
                Tabs are great for separating content. Ours can have text, icons and are super easy to use and come in 3 sizes. You can use as many tabs as you want.
            </p>
        </div> -->

        <div class="card card-style bg-theme pb-0">
            <div class="content">
                <div class="tab-controls tabs-round tab-animated tabs-small tabs-rounded shadow-xl" 
                     data-tab-items="4" 
                     data-tab-active="bg-highlight activated color-white">
                    <a href="#" data-tab-active data-tab="tab-1">Good Land</a>
                    <a href="#" data-tab="tab-2">Bible Reading</a>
                    <a href="#" data-tab="tab-3">Prayer</a>
                    <a href="#" data-tab="tab-4">Revival Morning</a>
                </div>
                <div class="clearfix mb-3"></div>
                <div class="tab-content" id="tab-1">
                    <p class="bottom-0">
                    <div class="card-body" style="height: 350px;overflow: scroll;">
            <table id="example" class="table" >
  <tbody>
  <?php
    $p = 1;
    $ambildata_tanah_permai = mysqli_query($conn,"SELECT * FROM `tb_tanah_permai` order by time_ DESC");
    foreach ($ambildata_tanah_permai as $row) :
    ?>
    <tr>
    <td><?= $p; ?></td>
    <td><?= $row['date']; ?></td>
      <td>
      <a href="view_tanahpermai.php?idpermai=<?= $row['id_permai']; ?>" type="button" class="btn"  style="background-color: #BAD7E9; color:#1A0000;" >
  Lihat
  </a>
</td>
<td>
 <a href="edit_tanahpermai.php?idpermai=<?= $row['id_permai']; ?>" type="button" class="btn"  style="background-color: #FFC93C; color:#1A0000;" >
Edit
</a>
      </td>
    </tr>
   
    <?php $p++; ?>
                     <?php endforeach; ?>
  </tbody>
</table>
            </div>
         
                    </p>
                </div>
                <div class="tab-content" id="tab-2">
                    <div class="accordion mt-2" id="accordion-1">
                        <div class="mb-0">
                            <button class="btn pl-0 pr-0 accordion-btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
                                <i class="fa fa-heart color-red2-dark mr-2"></i>
                                Accordion Title 1
                                <i class="fa fa-plus font-10 accordion-icon"></i>
                            </button>
                            <div id="collapse1" class="collapse" data-parent="#accordion-1">
                                <div class="pt-1 pb-2">
                                    This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <button class="btn pl-0 pr-0 accordion-btn"  data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
                                <i class="fa fa-star color-yellow1-dark mr-2"></i>
                                Accordion Title 2
                                <i class="fa fa-chevron-down font-10 accordion-icon"></i>
                            </button>
                            <div id="collapse2" class="collapse"  data-parent="#accordion-1">
                                <div class="pt-1 pb-2">
                                    This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <button class="btn pl-0 pr-0 accordion-btn" data-toggle="collapse" data-target="#collapse3" aria-expanded="false">
                                <i class="fa fa-cloud color-blue2-dark mr-2"></i>
                                Accordion Title 3
                                <i class="fa fa-arrow-down font-10 accordion-icon"></i>
                            </button>
                            <div id="collapse3" class="collapse"  data-parent="#accordion-1">
                                <div class="pt-1 pb-2">
                                    This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="tab-3">
                    <img class="img-fluid rounded-sm mt-2" src="images/pictures/28w.jpg" alt="img">
                </div>
                <div class="tab-content" id="tab-4">
                    <p class="bottom-0">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
        
      
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-highlight">
        <h5 class="modal-title text-light" id="staticBackdropLabel">Good Land</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
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
