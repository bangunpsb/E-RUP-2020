<title>Reviewer </title>
<?php
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] != "reviewer") {
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
            <a class="navbar-brand" href="#">Reviewer</a>
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
                    <a href="?page=home_reviewer">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="?page=cek_judul_reviewer">
                        <i class="material-icons">search</i>
                        <span>Cek judul yang sudah ada</span>
                    </a>
                </li>
                <li>
                    <a href="?page=notif_baak_reviewer">
                        <i class="material-icons">notifications_active</i>
                        <span>Notifikasi dari baak</span>
                    </a>
                </li>
                <li>
                    <a href="?page=kirim_pesan_baak_reviewer">
                        <i class="material-icons">chat</i>
                        <span>Kirim Pesan ke baak</span>
                    </a>
                </li>
                <li>
                    <a href="?page=edit_profile_reviewer">
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
            <h2>Judul</h2>
        </div>


        <!-- Body Copy -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Cek Judul yang sudah ada
                        </h2>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Jurusan</th>
                                        <th>Publish</th>
                                        <th>Pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $ambil = $koneksi->query("select * from acc"); ?>
                                    <?php while ($data = $ambil->fetch_assoc()) { ?>
                                        <tr>

                                            <td><?= $data['nim']; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['judul']; ?></td>
                                            <td><?= $data['jurusan']; ?></td>
                                            <td><?= $data['tittle']; ?></td>
                                            <td> <a type="submit" href="../proses/download.php?file=<?php echo urlencode($data['file_location']); ?>" class="btn btn-primary">Download</a></td>
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