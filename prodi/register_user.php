<title>PRODI </title>
<?php
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] != "prodi") {
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
            <a class="navbar-brand" href="#">Prodi</a>
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
                    <a href="?page=home_prodi">
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
                            <a href="?page=notif_prodi">Notif Dari BAAK</a>
                        </li>
                        <li>
                            <a href="?page=notif_prodi_mhs">Notif Dari Mahasiswa</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="?page=proposal">
                        <i class="material-icons">input</i>
                        <span>Terbitan Tahun Proposal</span>
                    </a>
                </li>

                <li>
                    <a href="?page=cetak">
                        <i class="material-icons">print</i>
                        <span>Laporan RKP</span>
                    </a>
                </li>

                <li>
                    <a href="?page=edit_profile_prodi">
                        <i class="material-icons">edit</i>
                        <span>Edit Profile</span>
                    </a>
                </li>
                <li>
                    <a href="?page=register_user">
                        <i class="material-icons">person_add</i>
                        <span>Register User</span>
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
            <h2>Register</h2>
        </div>
        <?php
        // print_r($data);
        ?>
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
                                    <div class="alert alert-danger fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?= $_SESSION["pesann"]; ?>
                                        <?php unset($_SESSION["pesann"]); ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($_SESSION["pesannn"])) { ?>
                                    <div class="alert alert-warning fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?= $_SESSION["pesannn"]; ?>
                                        <?php unset($_SESSION["pesannn"]); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <h2>
                            Register User
                        </h2>
                        <br>
                    </div>
                    <div class="body">
                        <p class="lead text-center">

                        </p>

                        <h2 class="card-inside-title">Profile</h2>
                        <div class="row clearfix">
                            <form action="?page=prodi_proses" method="post" enctype="multipart/form-data">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="nim" class="form-control date" placeholder="Masukan NIDN" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nama" placeholder="Masukan Nama" maxlength="100" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="email" class="form-control date" name="email" placeholder="Masukan Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="no_hp" placeholder="Masukan No hp" maxlength="12" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-line disabled">
                                        <select class="form-control show-tick" name="level" data-live-search="true" required autofocus required>
                                            <option value="" disabled selected>Pilih Status Akses</option>
                                            <option value="baak">BAAK</option>
                                            <option value="lppm">LPPM</option>
                                            <option value="reviewer">REVIEWER</option>
                                            <option value="pro">PRODI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">visibility</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <i class="material-icons">add_a_photo &nbsp;&nbsp;</i>
                                        <span>Pilih Photo</span>
                                        <p></p>
                                        <div class="form-control">
                                            <input type="file" class="form-control date" name="gbr">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-control">
                                            <div class="g-recaptcha" data-sitekey="6LcprccUAAAAAAz4uLO2seIh0PucPlR8-UELJwK_"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="button-demo">
                                        <button type="submit" class="btn btn-success" name="registeruser" style="margin-top:3vw;margin-left:2vw;">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>