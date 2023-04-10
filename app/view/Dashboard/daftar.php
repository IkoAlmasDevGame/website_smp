<?php 
include "../Dashboard/header.php";
include "../../model/Siswa.php";

global $conSiswa;
$query = mysqli_query($conSiswa, "SELECT max(nisn) as kodeNISN FROM t_datasiswa");
$data = mysqli_fetch_array($query);
$kodeNisn = $data['kodeNISN'];

$urutan = (int) substr($kodeNisn,-3,8);
$urutan++;
$nisn = "00647726";
$kodenisn = $nisn . sprintf("%03s", $urutan);

$per_hal = 10;
$jumlah_record=mysqli_query($conSiswa,"SELECT * from t_datasiswa");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;

$setelah = $page + 1;
$sebelum = $page - 1;
?>

<!-- Modal Awal Daftar Murid -->
<div class="modal" id="TambahMurid">
    <div class="modal-dialog mt-28">
        <div class="modal-content">
            <div class="modal-header">
                <img src="<?=base()?>assets/image/smp.png" alt="Logo" class="navbar-brand">
                <h5 class="modal-title text-center fw-semibold text-medium"></h5>
                <button class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?=base()?>app/action/Siswa/act_create.php" method="post">
                    <div class="form-group flex justify-center items-center">
                        <label class="fw-normal col-md-6">No NISN : </label>
                        <input type="text" name="nisn" class="form-control input" value="<?=$kodenisn;?>" readonly>
                    </div>
                    <div class="form-group flex justify-center items-center">
                        <label class="fw-normal col-md-6">Nama Siswa : </label>
                        <input type="text" name="nama_siswa" class="form-control input">
                    </div>
                    <div class="form-group flex justify-center items-center">
                        <label class="fw-normal col-md-6">Tanggal Lahir : </label>
                        <input type="date" name="tanggal_lahir" class="form-control date">
                    </div>
                    <div class="form-group flex justify-center items-center">
                        <label class="fw-normal col-md-6">Asal Provinsi : </label>
                        <select name="asal_provinsi" class="form-control select" type="submit" data-placement="top">
                            <option>Pilih Provinsi Lahir Anda</option>
                            <?php 
                                $tempat = $conSiswa->query("SELECT * FROM t_tempat");
                                foreach($tempat as $provinsi){
                                    ?>
                                    <option><?=$provinsi['provinsi']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group flex justify-center items-center">
                        <label class="fw-normal col-md-6">Religion : </label>
                        <select name="agama_id" class="form-control select" type="submit">
                            <?php 
                                $agama = $conSiswa->query("SELECT * FROM t_agama");
                                foreach($agama as $ibadah){
                                    ?>
                                    <option value="<?=$ibadah['agama_id']?>"><?=$ibadah['agama']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group flex justify-center items-center">
                        <label class="fw-normal col-md-6">Gender : </label>
                        <select name="gender_id" class="form-control select">
                            <?php 
                                global $conAccount;
                                $gender = $conAccount->query("SELECT * FROM gender_t");
                                foreach($gender as $g){
                                    ?>
                                    <option value="<?=$g['id_gender']?>"><?=$g['gender']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="card-footer mt-3">
                    <input type="checkbox" name="selesai" value="yes"> Tandai jika sudah selesai
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary fa fa-save" name="simpanMurid"></button>
                            <button class="btn btn-default" data-bs-dismiss="modal" onclick="this.form.clean();">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Akhir Daftar Murid -->

<!-- Modal Awal Info Masuk Daftar Murid -->
<div class="modal" id="infoMurid">
    <div class="modal-dialog mt-10">
        <div class="modal-content">
            <div class="modal-header">
                <img src="<?=base()?>assets/image/smp.png" alt="Logo" class="navbar-brand">
                <h5 class="modal-title text-center fw-semibold text-medium"></h5>
                <button class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <span class="flex justify-around items-center">
                    <span class="flex">Jumlah Data : <?=$jum;?></span>
                    <span class="flex">Jumlah Halaman : <?=$halaman;?> Page</span>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Modal Akhir Info Masuk Daftar Murid -->

<div class="flex justify-center items-center">
    <div class="flex">
        <div class="card fixed-top mt-24 ml-80" style="width: 129rem;">
            <div class="card-header">
                <div class="flex-wrap justify-start items-start">
                    <h5 class="card-title text-end text-medium fw-normal">Daftar Murid Baru</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahMurid"><span class="fa fa-plus"></span></button>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#infoMurid"><span class="fa fa-info"></span></button>
                </div>
                <div class="flex justify-end items-end">
                    <form action="daftar.php" method="get" class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-search"></span></div>
                                <input type="text" name="cari" class="form-control input col-md-offset-0" placeholder="cari data siswa baru disini ...">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table class="table table-responsive table-bordered" style="overflow: scroll;">
                        <thead>
                            <tr class="bg-secondary text-white fw-semibold text-small-3">
                                <th class="fw-normal text-center">No</th>
                                <th class="fw-normal text-center">NISN</th>
                                <th class="fw-normal text-center">Nama Siswa</th>
                                <th class="fw-normal text-center">Tanggal Lahir</th>
                                <th class="fw-normal text-center">Usia Siswa</th>
                                <th class="fw-normal text-center">Agama</th>  
                                <th class="fw-normal text-center">Jenis Kelamin</th>
                                <th class="fw-normal text-center">Seleksi Siswa Baru</th>
                                <th class="fw-normal text-center">Opsional</th>
                            </tr>
                        </thead>
                        <?php 
                            if(isset($_GET["cari"])){
                                $cariSiswa = mysqli_escape_string($conSiswa, $_GET["cari"]);
                                $cari = strtoupper($cariSiswa) or strtolower($cariSiswa);
                                $query = "SELECT * FROM t_datasiswa WHERE nisn like '$cariSiswa' or nama_siswa like '$cari'"; 
                                $result = $conSiswa->query($query);
                            }else{
                                $result = $conSiswa->query("SELECT * FROM t_datasiswa limit $start, $per_hal");
                            }
                            $no = 1;
                            foreach($result as $data){
                                $birthDate = new DateTime($data['tanggal_lahir']);
                                $today = new DateTime("today");
                                if($birthDate > $today){
                                    exit("0 tahun");
                                }
                                $y = $today->diff($birthDate)->y;
                                $age = $y." tahun";
                                $tgl_lahir = date('d F Y', strtotime($data['tanggal_lahir']));    
                                ?>
                                <tbody>
                                    <tr class="fw-semibold text-small-3">
                                        <td class="fw-normal text-center"><?=$no++;?></td>
                                        <td class="fw-normal text-center"><?=$data['nisn']?></td>
                                        <td class="fw-normal text-center"><?=$data['nama_siswa']?></td>
                                        <td class="fw-normal text-center"><?=$data['asal_provinsi'].", ".$tgl_lahir;?></td>
                                        <td class="fw-normal text-center"><?=$age;?></td>
                                        <td class="fw-normal text-center"><?=Agama($data['agama_id'])?></td>
                                        <td class="fw-normal text-center"><?=Gender($data['gender_id'])?></td>
                                        <td>
                                            <form action="<?=base()?>app/action/Siswa/act_select.php" method="post" id="form_id_<?=$data['id_siswa']?>" class="col-md-10 col-md-offset-1">
                                                <input type="hidden" name="id_siswa" value="<?=$data['id_siswa']?>">
                                                <?php 
                                                    error_reporting(0);
                                                    $id_siswa = $data['id_siswa'];

                                                    $data_select = mysqli_query($conSiswa, "SELECT * FROM t_datasiswa WHERE id_siswa = '$id_siswa'");
                                                    $get_select = mysqli_fetch_array($data_select);
                                                ?>
                                                <input type="hidden" name="selection_id" value="<?=$get_select['selection_id']?>">
                                                <select name="selection_id" class="form-control select" type="submit" data-toggle="tooltip" data-placement="top" title="<?=$get_select['seleksi']?>" onchange="document.getElementById('form_id_<?=$get_select['id_siswa']?>').submit();">
                                                    <option>Pilih Data Seleksi Murid</option>
                                                    <?php 
                                                        $select = mysqli_query($conSiswa, "SELECT * FROM t_seleksi");
                                                        foreach($select as $db){
                                                            ?>
                                                            <option value="<?=$db['selection_id']?>" <?php if($get_select['selection_id'] == $db['selection_id']){ echo "selected";} ?>><?=$db['seleksi']?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <span class="flex flex-wrap justify-between items-center mt-4 text-medium">
                                                <a style="cursor: pointer;" data-bs-target="#tambah<?=$data['id_siswa']?>" data-bs-toggle="modal"><span class="fa fa-plus"></span></a>
                                                <a style="cursor: pointer;" data-bs-target="#edit<?=$data['id_siswa']?>" data-bs-toggle="modal"><span class="fa fa-edit"></span></a>
                                                <a style="cursor: pointer;" data-bs-target="file#<?=$data['id_siswa']?>" data-bs-toggle="modal"><span class="fa fa-file"></span></a>
                                                <a style="cursor: pointer;" data-bs-target="#trash<?=$data['id_siswa']?>" data-bs-toggle="modal"><span class="fa fa-trash"></span></a>
                                                <a style="cursor: pointer;" data-bs-target="#room<?=$data['id_siswa']?>" data-bs-toggle="modal"><span class="fa fa-home"></span></a>
                                                <a style="cursor: pointer;" data-bs-target="#book<?=$data['id_siswa']?>" data-bs-toggle="modal"><span class="fa fa-address-book-o"></span></a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                        ?>
                    </table>
                    <script type="text/javascript">
                        $(function () {
                            $('[data-toggle="tooltip"]').tooltip();
                        });
                    </script>
                    <div class="card-footer">
                        <div class="modal-footer mt-5">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" <?php if($page > 1){ echo "href='?page=$sebelum'"; } ?> 
                                 style="margin-left: 0.1rem; background-color: transparent; border: 0px; color:black; bottom:1rem;">⏮</a></li>
                                <?php 
                                    for($x = 1; $x <= $halaman; $x++){
                                ?> 
                                <li class="page-item"><a class="page-link" href="?page=<?php echo $x ?>"
                                 style="margin-left: 0.4rem; background-color: transparent; border: 0px; color:black; bottom:1rem;"> <?php echo $x; ?></a></li>
                                <?php
                                    }
                                ?> 
                                <li class="page-item"><a class="page-link" <?php if($page < $halaman){ echo "href='?page=$setelah'"; } ?> 
                                 style="margin-left: 0.5rem; background-color: transparent; border: 0px; color:black; bottom:1rem;">⏭</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include "../Dashboard/footer.php";
?>