<title>MAHASISWA </title>
<?php
// print_r($_SESSION['level']);
// exit();
?>
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

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <?php $nama = $_SESSION['nama']; ?>
        <?php $nim = $_SESSION['nim']; ?>

        <!-- jumlah ajukan rup -->
        <?php $sql = $koneksi->query("SELECT COUNT(nim_mhs) as jumlah from rkpp where nim_mhs='$nim'"); ?>
        <?php while ($data = $sql->fetch_assoc()) { ?>
            <?php $jumlah_aju = $data['jumlah']; ?>
        <?php } ?>

        <p></p>

        <!-- Widgets -->
        <div class="row clearfix">
            <a href="?page=cek_status_rup_mahasiswa">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">PENGAJUAN</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><small><?= $jumlah_aju; ?></small></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=cek_status_rup_mahasiswa">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">STATUS LPPM</div>
                            <div class="text font-bold" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">
                                <!-- status rup dengan lppm -->
                                <?php $sql = $koneksi->query("SELECT * from rkpp  where nim_mhs='$nim'"); ?>
                                <?php while ($data = $sql->fetch_assoc()) { ?>
                                    <?php
                                    if (!empty($data['st_lppm'])) {
                                        echo $data['st_lppm'];
                                    } else {
                                        echo "belum mengajukan";
                                    }
                                    ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=cek_status_rup_mahasiswa">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">STATUS PENELAAH</div>
                            <div class="text font-bold" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">
                                <!-- status rup dengan penelaah -->
                                <?php $sql = $koneksi->query("SELECT * from rkpp  where nim_mhs='$nim'"); ?>
                                <?php while ($data = $sql->fetch_assoc()) { ?>
                                    <?php
                                    if (!empty($data['st_reviewer'])) {
                                        echo $data['st_reviewer'];
                                    } else {
                                        echo "belum mengajukan";
                                    }
                                    ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=cek_status_rup_mahasiswa">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">PEMBIMBING</div>
                            <div class="text font-bold" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">
                                <!-- pembimbing -->
                                <?php $sql = $koneksi->query("SELECT * from rkpp  where nim_mhs='$nim'"); ?>
                                <?php while ($data = $sql->fetch_assoc()) { ?>
                                    <?php
                                    if (!empty($data['nama_pembimbing'])) {
                                        echo $data['nama_pembimbing'];
                                    } else {
                                        echo "belum mengajukan";
                                    }
                                    ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- #END# Widgets -->
    </div>
</section>