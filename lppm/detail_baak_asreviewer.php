<title>LPPM </title>
<?php
// print_r($_SESSION['level']);
// exit();
?>
<?php
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] != "lppm") {
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
            <a class="navbar-brand" href="#">LPPM</a>
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
                    <a href="?page=home_lppm">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="?page=cek_judul_lppm">
                        <i class="material-icons">search</i>
                        <span>Cek judul yang sudah ada</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">notifications_active</i>
                        <span>Notifikasi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="?page=notif_baak_aslppm">Notif dari baak sebagai LPPM</a>
                        </li>
                        <li>
                            <a href="?page=notif_baak_asreviewer">Notif dari baak sebagai Reviewer</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">chat</i>
                        <span>Kirim Pesan</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="?page=kirim_pesan_baak_aslppm">Kirim Pesan ke baak sebagai lppm</a>
                        </li>
                        <li>
                            <a href="?page=kirim_pesan_baak_asreviewer">Kirim Pesan ke baak sebagai reviewer</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="?page=edit_profile_lppm">
                        <i class="material-icons">edit</i>
                        <span>Edit Profile</span>
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

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Perbaharui</h2>
            <?php
            // ambil data di url
            $view = $_GET['ke'];
            $ambil = $koneksi->query("SELECT * from rkpp where id_rkp=$view");
            $data = $ambil->fetch_assoc();
            ?>

        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Perbaharui data Mahasiswa
                        </h2>
                        <p></p>
                        <form action="?page=lppm_proses" method="post">
                            <label for="baak">Nama Reviewer</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <?php $nama = $_SESSION['nama']; ?>
                                    <input type="text" id="baak" value="<?= $nama; ?>" name="nama_reviewerr" class="form-control" placeholder="Masukan nama reviewer" required>
                                </div>
                            </div>

                            <?php
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            $today = $year . '-' . $month . '-' . $day;
                            ?>

                            <label for="tgl_reviewer">Tanggal pengiriman ke baak </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" id="tgl_reviewer" name="tgl_reviewer" value="<?= $today; ?>" class="form-control" autofocus required>
                                </div>
                            </div>

                            <label for="view">Status RUP Mahasiswa </label>
                            <div class="form-group">
                                <select name="st_reviewer" id="" class="form-control show-tick" data-live-search="true" required>
                                    <option disabled selected> Pilih Status</option>
                                    <option value="Diterima">Diterima</option>
                                    <option value="Ditolak">Ditolak</option>
                                </select>
                            </div>

                            <label for="alp">Berikan Komentar untuk RUP Mahasiswa</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="3" id="alp" name="komentar_reviewer" class="form-control no-resize" placeholder="Jelaskan alasannya..." required></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="id_rkp" value="<?= $data['id_rkp'] ?>">
                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="kirim_baak_asreviewer">Perbaharui</button>
                        </form>

                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>