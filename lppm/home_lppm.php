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
            <h2>DASHBOARD</h2>
        </div>
        <?php $nama = $_SESSION['nama']; ?>
        <?php $nim = $_SESSION['nim']; ?>

        <!-- jumlah notif dari baak sebagai lppm -->
        <?php $sql = $koneksi->query("SELECT count(view) as jumlah from rkpp where view=2"); ?>
        <?php while ($data = $sql->fetch_assoc()) { ?>
            <?php $lppm = $data['jumlah']; ?>
        <?php } ?>

        <!-- jumlah notif dari baak sebagai penelaah -->
        <?php $sql = $koneksi->query("SELECT count(nama_reviewer) as jumlah from rkpp where nama_reviewer='$nama' and view=4"); ?>
        <?php while ($data = $sql->fetch_assoc()) { ?>
            <?php $reviewer = $data['jumlah']; ?>
        <?php } ?>


        <p></p>
        <!-- Widgets -->
        <div class="row clearfix">
            <a href="?page=notif_baak_aslppm">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">notifications_active</i>
                        </div>
                        <div class="content">
                            <div class="text">LPPM</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?= $lppm; ?></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=notif_baak_asreviewer">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">notifications_active</i>
                        </div>
                        <div class="content">
                            <div class="text">REVIEWER</div>
                            <div class="number font-bold" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?= $reviewer; ?></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- #END# Widgets -->
    </div>
</section>