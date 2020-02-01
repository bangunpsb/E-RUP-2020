<!-- regis -->
<?php
if (isset($_POST["regis"])) {
    $secret_key = "6LcprccUAAAAAGn59CFqkQrom5xbGausEnirfAG9";
    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
    $response = json_decode($verify);

    if ($response->success) {

        $gbr = $_FILES['gbr']['name'];
        $lokasi = $_FILES['gbr']['tmp_name'];
        move_uploaded_file($lokasi, "../assets/img-user/$gbr");
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $jurusan = $_POST["jurusan"];
        $level = $_POST["level"];
        $no_hp = $_POST["no_hp"];

        $simpan = mysqli_query($koneksi, "insert into user values('$nim','$nama','$email','$jurusan','$password','$level','$no_hp','$gbr')");

        if (!$simpan) {
            header("location:?page=registerasi");
            $_SESSION['pesann'] = 'Gagal Mendaftar';
        } else {
            header("location:?page=registerasi");
            $_SESSION['pesan'] = ' Berhasi Mendaftar';
        }
    } else {
        header("location:?page=registerasi");
        $_SESSION['pesannn'] = 'Harap Validasi Captcha';
    }
}
