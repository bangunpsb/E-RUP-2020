<title>Login</title>

<body style="background-color:cadetblue;">
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Enjoy it's life</h2>
                <h5>( Login terlebih dahulu untuk mendapatkan hak akses )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Enter Details To Login </strong>
                    </div>
                    <div class="panel-body">
                        <form action="?page=cek_login" method="post">
                            <br />

                            <?php if (isset($_SESSION["pesan"])) { ?>
                                <div class="alert alert-danger fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <?= $_SESSION["pesan"]; ?>
                                    <?php unset($_SESSION["pesan"]); ?>
                                </div>
                            <?php } ?>


                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" name="email" class="email form-control" placeholder="Masukkan Email" autofocus required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="password form-control" placeholder="Masukkan Password" autofocus required />
                            </div>
                            <div class="form-group">
                                <span class="pull-right">
                                    <a href="#" class="h5">Lupa password ? </a>
                                </span>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" name="login">Log In</button>
                                <button type="reset" class="reset btn btn-danger">Reset</button></button>
                                <hr>
                                Belum Terdaftar ? <a href="?page=registerasi">Klik Disini </a>
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
            $(".email").focus();
        });

    });
</script>