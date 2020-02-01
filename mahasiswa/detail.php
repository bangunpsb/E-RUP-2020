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

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Detail</h2>
            <?php
                                                                                                    // ambil data di url
                                                                                                    $view = $_GET['ke'];
                                                                                                    $ambil = $koneksi->query("select * from acc where id_acc=$view");
                                                                                                    $data = $ambil->fetch_assoc();
            ?>

        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Detail Judul
                        </h2>
                    </div>
                    <div class="body">
                        <p class="lead text-center">
                            <h4><?= $data['judul']; ?></h4>
                        </p>
                        <hr>
                        <p>
                            <b>
                                <h5>Abstract :</h5>
                            </b>
                            <i> <?= $data['deskripsi']; ?></i>
                        </p>
                        <hr>
                        <p>
                            <b>
                                Nim :
                            </b>
                            <?= $data['nim']; ?>
                        </p>
                        <p>
                            <b>
                                Nama :
                            </b>
                            <?= $data['nama']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>