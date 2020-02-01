<?php
if (isset($_POST['editprodi'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = md5($_POST['password']);


    if ($password == "d41d8cd98f00b204e9800998ecf8427e") {
        $edit = mysqli_query($koneksi, "UPDATE user set nama='$nama',email='$email',no_hp='$no_hp' where nim='$nim'");
    } else {
        $edit = mysqli_query($koneksi, "UPDATE user set nama='$nama',email='$email',no_hp='$no_hp',password='$password' where nim='$nim'");
    }

    if ($edit == true) {
        $_SESSION['pesan'] = 'Data Berhasil diedit';
        header("location:?page=edit_profile_prodi");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Diedit';
        header("location:?page=edit_profile_prodi");
    }
}

// dari detail_prodi
if (isset($_POST['kirim_prodi'])) {

    $id_rkp = $_POST['id_rkp'];
    $nama_prodi = $_POST['nama_prodi'];
    $tgl_prodi = $_POST['tgl_prodi'];
    $nama_pembimbing = $_POST['nama_pembimbing'];
    $view = 8;
    $edit = mysqli_query($koneksi, "UPDATE rkpp set nama_prodi='$nama_prodi',tgl_prodi='$tgl_prodi',nama_pembimbing='$nama_pembimbing',view='$view' where id_rkp='$id_rkp'");


    if ($edit == true) {
        $_SESSION['pesan'] = 'Data Berhasil Diperbaharui';
        header("location:?page=notif_prodi");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Diperbaharui';
        header("location:?page=notif_prodi");
    }
}


// detail_prodi_mhs
if (isset($_POST['kirim_prodi_mhs'])) {


    $id_acc = $_POST['id_acc'];
    $nama_prodi = $_POST['nama_prodi'];
    $tgl_prodi = $_POST['tgl_prodi'];
    $tittle = $_POST['tittle'];
    $view = 2;
    $edit = mysqli_query($koneksi, "UPDATE acc set nama_prodi='$nama_prodi',tgl_prodi='$tgl_prodi',tittle='$tittle',view='$view' where id_acc='$id_acc'");


    if ($edit == true) {
        $_SESSION['pesan'] = 'Data Berhasil Diperbaharui';
        header("location:?page=notif_prodi_mhs");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Diperbaharui';
        header("location:?page=notif_prodi_mhs");
    }
}



// register user di form prodi
if (isset($_POST["kirimproposal"])) {
    $gambar = $_FILES['gambar']['name'];
    $lokasi = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($lokasi, "../assets/img/$gambar");
    $tittle = strtoupper($_POST["tittle"]);
    $a = substr($tittle, -2);
    $b = substr($tittle, 0, 2);
    $id = $a . $b;
    print_r($id);
    $published = $_POST["published"];
    $deskripsi = $_POST["deskripsi"];

    $simpan = mysqli_query($koneksi, "INSERT into arsip(id,tittle,deskripsi,gambar,published) values('$id','$tittle','$deskripsi','$gambar','$published')");

    if (!$simpan) {
        header("location:?page=proposal");
        $_SESSION['pesann'] = 'Gagal Dikirim';
    } else {
        header("location:?page=proposal");
        $_SESSION['pesan'] = ' Berhasil Dikirim';
    }
}



// register user di form prodi
if (isset($_POST["registeruser"])) {
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
        $level = $_POST["level"];
        $no_hp = $_POST["no_hp"];

        $simpan = mysqli_query($koneksi, "INSERT into user(nim,nama,email,password,level,no_hp,gbr) values('$nim','$nama','$email','$password','$level','$no_hp','$gbr')");

        if (!$simpan) {
            header("location:?page=register_user");
            $_SESSION['pesann'] = 'Gagal Mendaftar';
        } else {
            header("location:?page=register_user");
            $_SESSION['pesan'] = ' Berhasi Mendaftar';
        }
    } else {
        header("location:?page=register_user");
        $_SESSION['pesannn'] = 'Harap Validasi Captcha';
    }
}
