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


<?php
$nim = $_SESSION['nim'];

$ambil = $koneksi->query("SELECT * from user where nim='$nim'");
$data = $ambil->fetch_assoc();


?>
<section class="content">
    <div class="container-fluid">

        <div class="block-header">
            <h2>Edit Profile</h2>
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
                                <?php
                                if (isset($_SESSION['pesan'])) {
                                    echo "<div class='well'>" . $_SESSION['pesan'] . "</div>";
                                    unset($_SESSION['pesan']);
                                }
                                ?>
                            </div>
                        </div>

                        <h2>
                            Edit Your Profile
                        </h2>
                        <br>
                        <h5 style="color:red">Note :</h5>
                        <div style="color:red;background-color:whitesmoke"> Setelah Berhasil Melakukan Pengeditan profile diharapkan logout dulu dan kembali login agar profile pengguna melakukan perubahaan . . . terima kasih</div>
                    </div>
                    <div class="body">
                        <p class="lead text-center">

                        </p>

                        <h2 class="card-inside-title">Profile</h2>
                        <div class="row clearfix">
                            <form action="?page=reviewer_proses" method="post" enctype="multipart/form-data">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" disabled name="nim" class="form-control date" value="<?= $nim; ?>">
                                            <input type="hidden" name="nim" value="<?= $nim; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nama" value="<?= $data['nama']; ?>" placeholder="Your Name" maxlength="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="email" class="form-control date" name="email" value="<?= $data['email']; ?>" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="no_hp" value="<?= $data['no_hp']; ?>" placeholder="Your Number" maxlength="12">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">visibility_off</i>
                                        </span>
                                        <div class="form-line disabled">
                                            <input type="password" class="form-control" value="<?= $data['password']; ?>" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">visibility</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="password" placeholder="New Password" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <!-- <?php
                                        $jurusan = ($_SESSION['jurusan']);
                                        ?>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">perm_identity</i>
                                        </span>
                                        <div class="form-line disabled">
                                            <select name="jurusan" class="form-control date" id="">
                                                <?php $sqll = mysqli_query($koneksi, "SELECT * from user where jurusan='SISTEM INFORMASI' OR jurusan='TEKNIK INFORMATIKA'"); ?>
                                                <?php while ($dataa = $sqll->fetch_assoc()) { ?>
                                                    <option value="<?= $dataa['jurusan']; ?>"><?= $dataa['jurusan']; ?></option>
                                                <?php } ?>
                                                <option value="<?= $jurusan; ?>" selected><?= $jurusan; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="button-demo">
                                    <button type="submit" class="btn btn-success" name="editreviewer" style="margin-left:3vw;margin-top:5px;">Edit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>