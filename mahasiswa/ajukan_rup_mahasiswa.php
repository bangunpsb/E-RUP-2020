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

                                                                                                    $ambil = $koneksi->query("select * from user where nim='$nim'");
                                                                                                    $data = $ambil->fetch_assoc();

?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Pengajuan RUP</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">

                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                                                                                    if (isset($_SESSION['pesan'])) {
                                                                                                        echo "<div class='well'>" . $_SESSION['pesan'] . "</div>";
                                                                                                        unset($_SESSION['pesan']);
                                                                                                    }
                                ?>
                            </div>
                        </div>
                        <h2>
                            Ajukan RUP
                        </h2>
                    </div>
                    <div class="body">
                        <p class="lead text-center"></p>
                        <div class="row clearfix">
                            <form action="?page=mahasiswa_proses" method="post" enctype="multipart/form-data">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">perm_identity</i>
                                        </span>
                                        <div class="form-line disabled">
                                            <input type="text" class="form-control" value="<?= $data['nim']; ?>" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" value="<?= $data['nama']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control date" name="no_hp" value="<?= $data['no_hp']; ?>" placeholder="Your number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                            <input type="date" class="form-control date" name="tgl_mahasiswa" value="<?= $today; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-line disabled">
                                        <select class="form-control show-tick" data-live-search="true" required autofocus name="jurusan">
                                            <option value="" disabled selected>Pilih Jurusan</option>
                                            <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                            <option value="SISTEM INFORMASI">TEKNIK INFORMATIKA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">assignment_turned_in</i>
                                        </span>
                                        <div class="form-line">
                                            <textarea rows="2" name="judul_rup" class="form-control no-resize" placeholder="Masukan Judul RUP Disini..." required></textarea> <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h4 style="margin-left:2vw">Pilih File RUP (PDF)</h4>
                                    <div class="form-line" style="margin:2vw">

                                        <input type="file" name="file_location" accept="application/pdf" required>
                                        <input type="hidden" name="id_rkp" value="" />
                                        <input type="hidden" name="nim_mhs" value="<?= $data['nim']; ?>" />
                                        <input type="hidden" name="nama_mhs" value="<?= $data['nama']; ?>">
                                        <input type="hidden" name="tgl_baak" value="-">
                                        <input type="hidden" name="nama_baak" value="-">
                                        <input type="hidden" name="tgl_lppm" value="-">
                                        <input type="hidden" name="nama_lppm" value="-">
                                        <input type="hidden" name="st_lppm" value="-">
                                        <input type="hidden" name="nama_reviewer" value="-">
                                        <input type="hidden" name="komentar_lppm" value="-">
                                        <input type="hidden" name="tgl_baakk" value="-">
                                        <input type="hidden" name="nama_baakk" value="-">
                                        <input type="hidden" name="tgl_reviewer" value="-">
                                        <input type="hidden" name="nama_reviewerr" value="-">
                                        <input type="hidden" name="st_reviewer" value="-">
                                        <input type="hidden" name="komentar_reviewer" value="-">
                                        <input type="hidden" name="tgl_baakkk" value="-">
                                        <input type="hidden" name="nama_baakkk" value="-">
                                        <input type="hidden" name="tgl_prodi" value="-">
                                        <input type="hidden" name="nama_prodi" value="-">
                                        <input type="hidden" name="nama_pembimbing" value="-">
                                        <input type="hidden" name="view" value="1">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="button-demo" style="margin-top:3vw;">
                                        <button type="submit" class=" btn btn-success" name="kirimrup" style="margin-left: 2vw">Kirim</button>
                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>