<title>Registerasi</title>

<body style="background-color:cadetblue;">

    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Enjoy it's life</h2>
                <h5>( Daftar sekarang untuk mendapatkan hak akses )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Pengguna Baru ? Daftar Sekarang </strong>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="?page=proses" method="post" enctype="multipart/form-data">
                            <br />

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

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>
                                <input type="text" name="nim" class="nim form-control" placeholder="Masukkan nim/nidn" autofocus required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                <input type="text" name="nama" class="nama form-control" placeholder="Masukkan nama" required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" name="email" class="email form-control" placeholder="Masukkan email" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="password form-control" placeholder="Masukkan password" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select class="jurusan form-control" name="jurusan">
                                    <option value="" disabled selected>Pilih Jurusan</option>
                                    <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                </select>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-camera-retro"></i></span>
                                <input type="file" name="gbr" accept="image/*" class="gambar form-control" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="number" id="no_hp" name="no_hp" class="number form-control" placeholder="Masukkan no hp" required />
                            </div>
                            <input type="hidden" name="level" class="form-control" value="mahasiswa" />
                            <div class="g-recaptcha" data-sitekey="6LcprccUAAAAAAz4uLO2seIh0PucPlR8-UELJwK_"></div>
                            <p></p>
                            <div class="col-md-12">
                                <button type="submit" name="regis" class="btn btn-success">Daftar <span class="glyphicon glyphicon-user"></span> </button>
                                <button type="reset" class="reset btn btn-danger">Reset <span class="fa fa-refresh"></span> </button>
                                <hr />
                                Sudah Daftar ? <a href="?page=login">Login disini</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
    $(document).ready(function() {
        $(".reset").click(function() {
            $(".nim").focus();
        });
    });
</script>