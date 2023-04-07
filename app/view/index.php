<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include "../config/bootstrap.php";
    ?>
    <title>Dashboard Login SMP</title>
</head>
<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="navbar navbar-default fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <img src="<?=base()?>assets/image/smp.png" alt="" class="navbar-brand mr-4">
                            <a href="index.php" class="navbar-brand text-medium fw-normal">Sekolah Menengah Pertama</a>
                            <div class="container-fluid mt-2 flex justify-end items-center">
                                <form action="<?=base()?>app/action/Account/act_login.php" method="post" class="flex" style="margin-left:60rem;">
                                    <input type="email" name="userEmail" class="form-control input" placeholder="Ketik Email Anda">
                                    <input type="password" name="password" class="form-control input ml-2" placeholder="Ketik Password Anda">
                                    <select name="member" class="form-control select ml-2">
                                        <option>Pilih Kartu Member</option>
                                        <option value="1">Khusus Administrasi</option>
                                        <option value="2">Khusus Guru</option>
                                        <option value="3">Khusus Siswa</option> <!-- Untuk Para Murid -->
                                    </select>
                                    <button role="button" type="submit" name="submit" class="btn btn-primary ml-2">
                                        <span class="glyphicon glyphicon-log-in"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start items-start fixed-top mt-24 ml-72">
                    <div class="card ml-5" style="width: 50rem;">
                        <div class="card-header">
                            <div class="card-title text-center text-medium fw-normal">REGISTER ACCOUNT</div>
                            <?php 
                                if(isset($_GET["pesan"])){
                                    if($_GET["pesan"] == "berhasil"){
                                        ?>
                                        <div class="card-title text-center fw-noraml">
                                            <h5 class="card-title">
                                                <span class="fa fa-check"></span> Berhasil Dibuat </h5>
                                        </div>
                                        <?php
                                    }else if($_GET["pesan"] == "gagal"){
                                        ?>
                                        <div class="card-title text-center fw-noraml">
                                            <h5 class="card-title">
                                                <span class="fa fa-close"></span> Gagal Dibuat </h5>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <script lang="javascript">
                                        window.setTimeout(() => { location.href='index.php' }, 3000);
                                    </script>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="table-responsive">
                            <div class="card-body col-md-offset-0">
                                <form action="<?=base()?>app/action/Account/act_create.php" method="post">
                                    <div class="form-group">
                                        <label for="InputEmail" class="fw-normal">User Email : </label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                                            <input type="email" name="userEmail" id="InputEmail" class="form-control input" placeholder="Masukkan Email Anda disini ..." require>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputName" class="fw-normal">User Name : </label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="fa fa-user"></span></div>
                                            <input type="text" name="username" id="InputName" class="form-control input" placeholder="Masukkan username Anda disini ..." require>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputPassword" class="fw-normal">Password : </label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="fa fa-lock"></span></div>
                                            <input type="password" name="password" id="InputPassword" class="form-control input" placeholder="Masukkan Password Baru disini ..." require>
                                        </div>
                                    </div>
                                    <div class="form-group flex">
                                        <label class="fw-normal col-md-9">Kartu Member : </label>
                                        <select name="member" class="form-control select">
                                            <option>Pilih Kartu Member</option>
                                            <option value="1">Khusus Administrasi</option>
                                            <option value="2">Khusus Guru</option>
                                            <option value="3">Khusus Siswa</option> <!-- Untuk Para Murid -->
                                        </select>
                                    </div>
                                    <div class="form-group flex">
                                        <label class="fw-normal col-md-9">Gender : </label>
                                        <select name="gender" class="form-control select">
                                            <option>Choose Gender</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group flex">
                                        <label class="fw-normal col-md-9">Tanggal Lahir : </label>
                                            <input type="date" name="birthday" class="form-control date">
                                    </div>
                                    <div class="card-footer">
                                        <input type="checkbox" name="selesai" value="yes"> Tandai jika sudah selesai
                                        <div class="modal-footer mt-10">
                                            <button class="btn btn-primary" name="tambahAccount" type="submit" role="button" onclick="form.clean();">
                                            <span class="fa fa-save"></span></button>
                                            <button class="btn btn-default ml-2" type="submit" onclick="form.clean();">Reset Form</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center mt-52 mr-80">
                    <a href="" role="img" class="img-responsive">
                        <img src="<?=base()?>assets/svg/smp.svg" alt="" class="img-thumbnail rounded-full bg-transparent">
                    </a>
                </div>
                <div class="container-fluid fixed-bottom">
                    <footer class="py-1 my-1">
                    <ul class="nav flex justify-content-end border-bottom pb-1 mb-1">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link px-1">Home Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link px-1"><i class="fa fa-instagram" style="font-size: 24px;"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link px-1"><i class="fa fa-facebook" style="font-size: 24px;"></i></a>
                        </li>
                    </ul>
                    <img src="<?=base()?>assets/svg/smp.svg" class="bg-transparent navbar-brand" style="margin-left: 0rem;"><p class="text-medium navbar-brand">@ 2023 App Sekolah Menegah Pertama, School</p>
                    </footer>
                </div>
            </main>
        </div>
    </div>
</body>
</html>