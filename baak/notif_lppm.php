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
            <h2>Notifikasi</h2>
        </div>


        <!-- Body Copy -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Notifikasi masuk dari Lppm
                        </h2>
                        <p></p>

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
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Nim Mahasiswa</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Nama Lppm</th>
                                        <th>Status Rup (Lppm)</th>
                                        <th>Nama Reviewer</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $ambil = $koneksi->query("SELECT * from rkpp where view=3"); ?>
                                    <?php while ($data = $ambil->fetch_assoc()) { ?>
                                        <tr>

                                            <td><?= $data['nim_mhs']; ?></td>
                                            <td><?= $data['nama_mhs']; ?></td>
                                            <td><?= $data['nama_lppm']; ?></td>
                                            <td><?= $data['st_lppm']; ?></td>
                                            <td><?= $data['nama_reviewer']; ?></td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <a href="?page=detail_lppm&ke=<?= $data['id_rkp']; ?>" class="btn btn-info btn-sm"> Perbaharui</a>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->

    </div>
</section>