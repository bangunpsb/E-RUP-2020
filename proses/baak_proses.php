<?php
// kirim data mahasiswa ke lppm view=2
if (isset($_POST['kirim_notif_mahasiswa'])) {
    $id_rkp = $_POST['id_rkp'];
    $nama_baak = $_POST['nama_baak'];
    $tgl_baak = $_POST['tgl_baak'];
    $view = $_POST['view'];
    $st_lppm = "Belum Diperiksa";
    $komentar_lppm = "Belum Diperiksa";

    $edit = mysqli_query($koneksi, "UPDATE rkpp set nama_baak='$nama_baak',tgl_baak='$tgl_baak',st_lppm='$st_lppm',komentar_lppm='$komentar_lppm',view='$view' where id_rkp='$id_rkp'");

    if ($edit == true) {
        $_SESSION['pesan'] = 'Data berhasil dikirim';
        header("location:?page=notif_mahasiswa");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Dikirim';
        header("location:?page=notif_mahasiswa");
    }
}

// kirim data mahasiswa ke reviewer view=4
if (isset($_POST['kirim_notif_lppm'])) {
    $id_rkp = $_POST['id_rkp'];
    $nama_baakk = $_POST['nama_baakk'];
    $tgl_baakk = $_POST['tgl_baakk'];
    $nama_reviewer = $_POST['nama_reviewer'];
    $view = $_POST['view'];
    $st_reviewer = "Belum Diperiksa";
    $komentar_reviewer = "Belum Diperiksa";

    if ($nama_reviewer === 'mhs') {
        $edit = mysqli_query($koneksi, "UPDATE rkpp set nama_baakk='$nama_baakk',tgl_baakk='$tgl_baakk',view='$view' where id_rkp= '$id_rkp'");
    } else {
        $edit = mysqli_query($koneksi, "UPDATE rkpp set nama_baakk='$nama_baakk',tgl_baakk='$tgl_baakk',nama_reviewer='$nama_reviewer',st_reviewer='$st_reviewer',komentar_reviewer='$komentar_reviewer',view='$view' where id_rkp= '$id_rkp'");
    }

    if ($edit == true) {
        $_SESSION['pesan'] = 'Data berhasil diperbaharui';
        header("location:?page=notif_lppm");
    } else {
        $_SESSION['pesan'] = 'Data gagal Diedit';
        header("location:?page=notif_lppm");
    }
}





// kirim data mahasiswa ke prodi view=6
if (isset($_POST['kirim_notif_reviewer'])) {
    $id_rkp = $_POST['id_rkp'];
    $nama_baakkk = $_POST['nama_baakkk'];
    $tgl_baakkk = $_POST['tgl_baakkk'];
    $view = $_POST['view'];

    $edit = mysqli_query($koneksi, "UPDATE rkpp set nama_baakkk='$nama_baakkk',tgl_baakkk='$tgl_baakkk',view='$view' where id_rkp= '$id_rkp'");

    if ($edit == true) {
        $_SESSION['pesan'] = 'Data berhasil diperbaharui';
        header("location:?page=notif_reviewer");
    } else {
        $_SESSION['pesan'] = 'Data gagal Diedit';
        header("location:?page=notif_reviewer");
    }
}



if (isset($_POST['editbaak'])) {

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
        header("location:?page=edit_profile_baak");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Diedit';
        header("location:?page=edit_profile_baak");
    }
}
