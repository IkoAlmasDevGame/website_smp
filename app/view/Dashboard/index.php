<?php 
include "../Dashboard/header.php";
include "../../database/Migrations/dbAccount.php";
include "../../database/Migrations/dbSiswa.php";

$account = mysqli_query($conAccount, "SELECT COUNT(id_user) as user_id FROM account_t");
$data = mysqli_fetch_array($account);
$user = $data['user_id'];

$siswa = mysqli_query($conSiswa, "SELECT COUNT(id_siswa) as user_siswa FROM t_datasiswa");
$data_siswa = mysqli_fetch_array($siswa);
$user_siswa = $data_siswa['user_siswa'];

$kelas = mysqli_query($conSiswa, "SELECT COUNT(id_kelas) as kelas_siswa FROM t_kelas");
$data_kelas = mysqli_fetch_array($kelas);
$user_kelas = $data_kelas['kelas_siswa'];
?>

<div class="table table-responsive">
    <div class="flex justify-center items-center" style="margin-left: 20rem; margin-top: 7.5rem;">
        <div class="card flex justify-between items-center" style="width: 120rem; background-color: #aaaa; border:1px solid;">
            <div class="card-body">
                <span class="fa fa-user text-center ml-0 mt-52 mb-36 text-white" style="font-size: 32px;"><span class="text-black ml-3">Account Terdaftar</span>
                    <h5 class="text-large text-center fw-normal mt-4 mb-4"><?=$user;?></h5>
                </span>
                <span class="fa fa-user text-center ml-52 text-white" style="font-size: 32px;"><span class="text-black ml-3">Siswa Terdaftar</span>
                    <h5 class="text-large text-center fw-normal mt-4 mb-4"><?=$user_siswa;?></h5>
                </span>
                <span class="fa fa-home text-center ml-52 text-white" style="font-size: 32px;"><span class="text-black ml-3">Tersedia Berapa Kelas</span>
                    <h5 class="text-large text-center fw-normal mt-4 mb-4"><?=$user_kelas;?></h5>
                </span>
                <table class="table table-responsive table-striped mb-44">
                    <thead class="bg-primary">
                        <tr>
                            <th class="text-center text-black fw-semibold">No</th>
                            <th class="text-center text-black fw-semibold">Per bulan</th>
                            <th class="text-center text-black fw-semibold">Pembayaran SPP</th>
                        </tr>
                        <tbody class="bg-warning">
                            <?php 
                                $spp = $conAccount->query("SELECT * FROM bayar_spp_t");
                                $no = 1;
                                foreach($spp as $bayar){
                                    ?>
                                    <tr>
                                        <td class="text-center fw-semibold"><?=$no++?></td>
                                        <td class="text-center fw-semibold"><?=$bayar['bulan']?></td>
                                        <td class="text-center fw-semibold"><?="Rp ".number_format($bayar['jumlah_bayar'], 2, ",")?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<?php 
include "../Dashboard/footer.php";
?>