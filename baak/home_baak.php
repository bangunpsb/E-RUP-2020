<title>BAAK </title>
<?php
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] != "baak") {
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
            <a class="navbar-brand" href="#">Baak</a>
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
                    <a href="?page=home_baak">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">notifications_active</i>
                        <span>Notifikasi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="?page=notif_mahasiswa">Notif Mahasiswa</a>
                        </li>
                        <li>
                            <a href="?page=notif_lppm">Notif Lppm</a>
                        </li>
                        <li>
                            <a href="?page=notif_reviewer">Notif Reviewer</a>
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
                            <a href="?page=kirim_pesan_to_mahasiswa">Kirim Pesan Ke Mahasiswa</a>
                        </li>
                        <li>
                            <a href="?page=kirim_pesan_to_lppm">Kirim Pesan Ke Lppm</a>
                        </li>
                        <li>
                            <a href="?page=kirim_pesan_to_reviewer">Kirim Pesan Ke Reviewer</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="?page=edit_profile_baak">
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
            <h2>DASHBOARD</h2>
        </div>
        <?php $nama = $_SESSION['nama']; ?>
        <?php $nim = $_SESSION['nim']; ?>

        <!-- jumlah notif dari mahasiswa -->
        <?php $sql = $koneksi->query("SELECT count(view) as jumlah from rkpp where view=1"); ?>
        <?php while ($data = $sql->fetch_assoc()) { ?>
            <?php $jumlah_mhs = $data['jumlah']; ?>
        <?php } ?>

        <!-- jumlah notif dari lppm -->
        <?php $sql = $koneksi->query("SELECT count(view) as jumlah from rkpp where view=3"); ?>
        <?php while ($data = $sql->fetch_assoc()) { ?>
            <?php $jumlah_lppm = $data['jumlah']; ?>
        <?php } ?>

        <!-- jumlah notif dari reviewer -->
        <?php $sql = $koneksi->query("SELECT count(view) as jumlah from rkpp where view=5"); ?>
        <?php while ($data = $sql->fetch_assoc()) { ?>
            <?php $jumlah_rev = $data['jumlah']; ?>
        <?php } ?>


        <p></p>
        <!-- Widgets -->
        <div class="row clearfix">
            <a href="?page=notif_mahasiswa">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">notifications_active</i>
                        </div>
                        <div class="content">
                            <div class="text">Mahasiswa</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><small><?= $jumlah_mhs; ?></small></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=notif_lppm">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">notifications_active</i>
                        </div>
                        <div class="content">
                            <div class="text">LPPM</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?= $jumlah_lppm; ?></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=notif_reviewer">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">notifications_active</i>
                        </div>
                        <div class="content">
                            <div class="text">Reviewer</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?= $jumlah_rev; ?></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- #END# Widgets -->
    </div>
</section>