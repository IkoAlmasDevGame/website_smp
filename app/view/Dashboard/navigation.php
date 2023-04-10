<style type="text/css">
/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 30px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Add an active class to the active dropdown button */

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.sidenav .show{
    display: block;
}
</style>

<div class="sidenav">
  <div class="row">
    <div class="col-xs-12 mt-1 ml-5 h-100%">
        <a href="" class="img-thumbnail rounded-full mt-6">
            <img src="<?=base()?>assets/image/images.jfif" alt="" class="img-responsive rounded-full">
        </a>
    </div>
    <p class="text-medium ml-24 text-white fw-normal mb-5"><?php echo Member($_SESSION['member']);?></p>
  </div>
  <div class="table-bordered"></div>
  <a href="index.php"><span class="fa fa-home mr-3"></span>Dashboard Sekolah</a>
  <?php 
    if($_SESSION['member'] == 1){
    ?>
    <a href="daftar.php"><span class="fa fa-user mr-3"></span>Daftar Baru</a>
    <a href="#"><span class="fa fa-user mr-3"></span>Absensi Murid</a>
    <button class="dropdown-btn"><span class="fa fa-home mr-3"></span>Koperasi
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Dashboard Koperasi</a>
        <a href="#">Data Koperasi</a>
        <a href="#">Penjualan Koperasi</a>
        <a href="#">History Penjualan</a>
        <a href="#">History Keuangan</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-book mr-3"></span>Perpustakaan
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Dashboard Perpustakaan</a>
        <a href="#">Data Perpustakaan</a>
        <a href="#">History Peminjaman</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-file mr-3"></span>Data Sekolah
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Mata Pelajaran Per Kelas</a>
        <a href="#">Lihat Guru</a>
        <a href="#">Struktur Organisasi</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-user mr-3"></span>Hi, <?php echo $_SESSION["username"]; ?>
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <?php 
            if($_SESSION['member'] == 1){
                ?>                                            
                <a href="../dashboard/logger.php"><span class="fa fa-file mr-5"></span>Logger</a>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }else if($_SESSION['member'] == 2){
                ?>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }else if($_SESSION['member'] == 3){
                ?>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }
        ?>
    </div>
    <div class="table-responsive fixed-bottom">
        <div class="flex justify-start items-center">
            <div class="flex">
            <a href="#"><span class="fa fa-whatsapp" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-youtube" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-facebook" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-envelope" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-instagram" style="font-size: 18px;"></span></a>
            </div>
        </div>        
    </div>
  <?php
    }else if($_SESSION['member'] == 2){
    ?>
    <a href="#"><span class="fa fa-user mr-3"></span>Absensi Murid</a>
    <button class="dropdown-btn"><span class="fa fa-home mr-3"></span>Koperasi
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Dashboard Koperasi</a>
        <a href="#">Penjualan Koperasi</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-book mr-3"></span>Perpustakaan
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Dashboard Perpustakaan</a>
        <a href="#">Data Perpustakaan</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-file mr-3"></span>Data Sekolah
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Mata Pelajaran Per Kelas</a>
        <a href="#">Lihat Guru</a>
        <a href="#">Struktur Organisasi</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-user mr-3"></span>Hi, <?php echo $_SESSION["username"]; ?>
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <?php 
            if($_SESSION['member'] == 1){
                ?>                                            
                <a href="../dashboard/logger.php"><span class="fa fa-file mr-5"></span>Logger</a>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }else if($_SESSION['member'] == 2){
                ?>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }else if($_SESSION['member'] == 3){
                ?>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }
        ?>
    </div>    
    <div class="table-responsive fixed-bottom">
        <div class="flex justify-start items-center">
            <div class="flex">
            <a href="#"><span class="fa fa-whatsapp" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-youtube" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-facebook" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-envelope" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-instagram" style="font-size: 18px;"></span></a>
            </div>
        </div>        
    </div>    
    <?php
    }else if($_SESSION['member'] == 3){
    ?>
    <a href="#"><span class="fa fa-user mr-3"></span>Absensi Murid</a>
    <button class="dropdown-btn"><span class="fa fa-home mr-3"></span>Koperasi
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Dashboard Koperasi</a>
        <a href="#">Penjualan Koperasi</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-book mr-3"></span>Perpustakaan
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Dashboard Perpustakaan</a>
        <a href="#">Data Perpustakaan</a>
    </div>
    <button class="dropdown-btn"><span class="fa fa-user mr-3"></span>Hi, <?php echo $_SESSION["username"]; ?>
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <?php 
            if($_SESSION['member'] == 1){
                ?>                                            
                <a href="../dashboard/logger.php"><span class="fa fa-file mr-5"></span>Logger</a>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }else if($_SESSION['member'] == 2){
                ?>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }else if($_SESSION['member'] == 3){
                ?>
                <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                <?php
            }
        ?>
    </div>    
    <div class="table-responsive fixed-bottom">
        <div class="flex justify-start items-center">
            <div class="flex">
            <a href="#"><span class="fa fa-whatsapp" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-youtube" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-facebook" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-envelope" style="font-size: 18px;"></span></a>
            <a href="#"><span class="fa fa-instagram" style="font-size: 18px;"></span></a>
            </div>
        </div>        
    </div>    
    <?php
    }
  ?>
</div>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidenav .dropdown-btn').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.dropdown-container.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
</script>
</div>