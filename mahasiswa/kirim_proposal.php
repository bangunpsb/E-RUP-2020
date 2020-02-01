<title>MAHASISWA </title>
<?php
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] != "mahasiswa") {
    header("location:?page=login");
}
?>
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="#">Mahasiswa</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div align="center" class="user-info">
            <div class="image">
                <img src="../assets/img-user/<?= $_SESSION['gbr']; ?>" width="48" height="48" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nim']; ?></div>
                <div class="email"><?= $_SESSION['email']; ?></div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="?page=home_mahasiswa">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="?page=cek_judul_mahasiswa">
                        <i class="material-icons">search</i>
                        <span>Cek Judul</span>
                    </a>
                </li>
                <li>
                    <a href="?page=ajukan_rup_mahasiswa">
                        <i class="material-icons">add_to_photos</i>
                        <span>Ajukan RUP</span>
                    </a>
                </li>
                <li>
                    <a href="?page=cek_status_rup_mahasiswa">
                        <i class="material-icons">search</i>
                        <span>Cek Status RUP</span>
                    </a>
                </li>
                <li>
                    <a href="?page=edit_profile_mahasiswa">
                        <i class="material-icons">edit</i>
                        <span>Edit Profile</span>
                    </a>
                </li>
                <li>
                    <a href="?page=kirim_proposal">
                        <i class="material-icons">add_to_photos</i>
                        <span>Kirim Proposal</span>
                    </a>
                </li>
                <li>
                    <a href="?page=kirim_pesan_mahasiswa">
                        <i class="material-icons">sms</i>
                        <span>Kirim Pesan Ke BAAK</span>
                    </a>
                </li>
                <li>
                    <a href="?page=logout">
                        <i class="material-icons">logout</i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">

                Support by | <a href="#">Rakensuuu |</a> <a href="https://t.me/uhaHoney"><i class="glyphicon glyphicon-envelope "></i> Telegram</a>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<?php
                                                                                                    $nim = $_SESSION['nim'];

                                                                                                    $ambil = $koneksi->query("SELECT * from user where nim='$nim'");
                                                                                                    $data = $ambil->fetch_assoc();


?>

<section class="content">
    <div class="container-fluid">

        <div class="block-header">
            <h2>Kirim Proposal</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">

                        <div class="row">
                            <div class="col-lg-6">
                                <?php if (isset($_SESSION["pesan"])) { ?>
                                    <div class="alert alert-success fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?= $_SESSION["pesan"]; ?>
                                        <?php unset($_SESSION["pesan"]); ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($_SESSION["pesann"])) { ?>
                                    <div class="alert alert-warning fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?= $_SESSION["pesann"]; ?>
                                        <?php unset($_SESSION["pesann"]); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <h2>
                            Kirim Proposal Ke Prodi
                        </h2>
                        <br>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form action="?page=mahasiswa_proses" method="post" enctype="multipart/form-data">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" disabled name="nim" class="form-control date" value="<?= $nim; ?>">
                                            <input type="hidden" name="nim" value="<?= $nim; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nama" value="<?= $data['nama']; ?>" placeholder="Masukan Nama Anda" maxlength="100" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-line disabled">
                                        <select class="form-control show-tick" data-live-search="true" autofocus name="jurusan" required>
                                            <option value="" disabled selected>Pilih Jurusan</option>
                                            <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">assignment_turned_in</i>
                                        </span>
                                        <div class="form-line">
                                            <textarea rows="2" name="judul" class="form-control no-resize" placeholder="Masukan Judul Proposal Disini..." required></textarea> <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">assignment</i>
                                        </span>
                                        <div class="form-line">
                                            <textarea rows="2" name="deskripsi" class="form-control no-resize" placeholder="Masukan Abstrak Lengkap" required></textarea> <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <?php
                                                                                                                    $month = date('m');
                                                                                                                    $day = date('d');
                                                                                                                    $year = date('Y');
                                                                                                                    $today = $year . '-' . $month . '-' . $day;
                                            ?>
                                            <input type="date" class="form-control date" name="tgl_mhs" value="<?= $today; ?>" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">file_upload</i>
                                        </span>
                                        <div class="form">
                                            <input type="file" name="file_location" accept="application/pdf" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="button-demo">
                                    <button type="submit" class="btn btn-success" name="kirimproposal" style="margin-left:3vw;margin-top:5px;">Kirim</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>