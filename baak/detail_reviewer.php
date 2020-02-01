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
                            Perbaharui data Reviewer
                        </h2>
                        <br>
                        <p> <b style="color:black"> Note : </b>Jika status mahasiswa <b style="color:red"><u> Ditolak</u></b> kirim ke <b> Mahasiswa </b><br>
                            <span style="margin-left:3.3vw"> Jika status mahasiswa <b style="color:red"> <u> Diterima</u></b> kirim ke <b> Prodi</b></span>
                        </p>

                    </div>
                    <div class="body">
                        <center>
                            Status Mahasiswa dinyatakan : <span class="text-danger "><b><?= $data['st_reviewer']; ?></b></span>
                            <p></p>
                        </center>
                        <hr>

                        <h5 style="color:red">Profile baak :</h5>
                        <p style="margin-bottom:2vw"></p>

                        <form action="?page=baak_proses" method="post">
                            <label for="baak">Nama Baak</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <?php $nama = $_SESSION['nama']; ?>
                                    <input type="text" id="baak" value="<?= $nama; ?>" name="nama_baakkk" class="form-control" placeholder="Masukan nama baak" required>
                                </div>
                            </div>

                            <?php
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            $today = $year . '-' . $month . '-' . $day;
                            ?>

                            <label for="tgl_baakkk">Tanggal penyerahan Rup ke Prodi </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" id="tgl_baakkk" name="tgl_baakkk" value="<?= $today; ?>" class="form-control" autofocus required>
                                </div>
                            </div>

                            <label for="view">Kirim ke </label>
                            <div class="form-group">
                                <select name="view" id="" class="form-control show-tick" data-live-search="true" required>
                                    <option disabled selected> Pilih Penerima</option>
                                    <option value="8">Mahasiswa</option>
                                    <option value="6">Prodi</option>
                                </select>

                            </div>

                            <input type="hidden" name="id_rkp" value="<?= $data['id_rkp'] ?>">
                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="kirim_notif_reviewer">Perbaharui</button>
                        </form>

                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>