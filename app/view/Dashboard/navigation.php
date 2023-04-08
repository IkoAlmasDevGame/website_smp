<style type="text/css">
#smalls {
    width: 19.5rem;
    right: 0rem;
    left: 0.5rem;
}

#border {
    left: 0;
    height: 90.5%;
    background-color: whitesmoke;
    background-blend-mode: darken;

    border-top: 1px;
    border-right: 1px;
    border-bottom: 1px;
    border-left: 0px;
    border-color: black;
    border-style: solid;
    border-radius: 3px;

    margin-bottom: 3px;
}

.fix-col-md {
    width: 21.15rem;
}

.active:hover {
    cursor: pointer;
}
</style>

<div class="fix-col-md fixed-bottom" id="border">
    <div class="row">
        <div class="col-xs-12 mt-1 ml-10 h-100%">
            <a href="" class="img-thumbnail rounded-full mt-6">
                <img src="<?=base()?>assets/image/images.jfif" class="img-responsive rounded-full"/>
            </a>
            <p class="text-medium mx-auto mb-5 ml-5 fw-semibold" style="letter-spacing: 3px;">
            <?php echo Member($_SESSION["member"]);?>
            </p>
        </div>
    </div>
    <div class="table-bordered"></div>
    <div class="row"></div>
    <ul class="nav nav-pills nav-stacked">
        <li class="active text-small-3" id="smalls">
            <a href="../Dashboard/index.php" class="mt-5 text-small-3 text-start">
                <span class="fa fa-home mr-5"></span>Dashboard Sekolah</a>
        </li>
        <?php 
        if($_SESSION['member'] == 1){
            ?>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle text-start fw-normal mt-5" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-home mr-5"></span>Koperasi Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Dashboard Koperasi</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Data Barang Koperasi</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Penjualan Koperasi</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">History Penjualan</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">History Keuangan</a></li>
                </ul>
            </li>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle mt-5 text-start fw-normal" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-book mr-5"></span>Perpustakaan Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Dashboard Perpustakaan</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Data Buku Perpustakaan</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">History Peminjaman Buku</a></li>
                </ul>
            </li>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle text-start fw-normal mt-5" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-file mr-5"></span>Data Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Cek Semua Mapel</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Cek Data Guru</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Cek Data Struktur Sekolah</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Cek Data File Sekolah</a></li>
                </ul>
            </li>
            <li class="active text-small-3" id="smalls">
                <a href="" class="mb-6 mt-5 text-small-3 text-start">
                    <span class="fa fa-home mr-5"></span>Daftar Murid</a>
            </li>
            <li class="active text-small-3" id="smalls">
                <a href="" class="mb-6 mt-5 text-small-3 text-start">
                    <span class="fa fa-home mr-5"></span>Lihat Murid Absensi</a>
            </li>
            <div class="table table-responsive table-bordered">
                <div class="flex justify-center items-center mt-16">
                    <div class="flex-wrap">
                        <h6 class="text-center -mt-5 mb-10">Sosial Media Sekolah</h6>
                        <a href="#">
                            <div class="fa fa-whatsapp text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-instagram text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-envelope text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-youtube text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }else if($_SESSION['member'] == 2){
            ?>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle text-start fw-normal mt-5" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-home mr-5"></span>Koperasi Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Dashboard Koperasi</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Penjualan Koperasi</a></li>
                </ul>
            </li>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle mt-5 text-start fw-normal" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-book mr-5"></span>Perpustakaan Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Dashboard Perpustakaan</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Data Buku Perpustakaan</a></li>
                </ul>
            </li>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle text-start fw-normal mt-5" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-file mr-5"></span>Data Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Cek Semua Mapel</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Cek Data Guru</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Cek Data Struktur Sekolah</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Cek Data File Sekolah</a></li>
                </ul>
            </li>
            <li class="active text-small-3" id="smalls">
                <a href="" class="mb-6 mt-5 text-small-3 text-start">
                    <span class="fa fa-home mr-5"></span>Lihat Murid Absensi</a>
            </li>            
            <div class="table table-responsive table-bordered">
                <div class="flex justify-center items-center mt-16">
                    <div class="flex-wrap">
                        <h6 class="text-center -mt-5 mb-10">Sosial Media Sekolah</h6>
                        <a href="#">
                            <div class="fa fa-whatsapp text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-instagram text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-envelope text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-youtube text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }else if($_SESSION['member'] == 3){
            ?>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle text-start fw-normal mt-5" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-home mr-5"></span>Koperasi Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Dashboard Koperasi</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Penjualan Koperasi</a></li>
                </ul>
            </li>
            <li class="dropdown" id="smalls">
                <button type="button" class="btn btn-primary dropdown-toggle mt-5 text-start fw-normal" data-bs-toggle="dropdown" id="smalls" style="font-size: 14px;">
                    <span class="fa fa-book mr-5"></span>Perpustakaan Sekolah
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#" class="active">Dashboard Perpustakaan</a></li>
                    <li><a class="dropdown-item mb-4 text-start text-small-3" href="#">Data Buku Perpustakaan</a></li>
                </ul>
            </li>
            <div class="table table-responsive table-bordered mt-5">
                <div class="flex justify-start items-start fixed-bottom ml-10 mb-10">
                    <div class="flex-wrap">
                        <h6 class="text-center -mt-5 mb-10">Sosial Media Sekolah</h6>
                        <a href="#">
                            <div class="fa fa-whatsapp text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-instagram text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-envelope text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                        <a href="#">
                            <div class="fa fa-youtube text-black bg-transparent mr-5" style="font-size: 24px;"></div>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </ul>
</div>