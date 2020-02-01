<?php
if (isset($_POST['editlppm'])) {

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
        header("location:?page=edit_profile_lppm");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Diedit';
        header("location:?page=edit_profile_lppm");
    }
}


// sebagai lppm
if (isset($_POST['kirim_baak_aslppm'])) {

    if (empty($_POST['nama_reviewer'])) {
        $id_rkp = $_POST['id_rkp'];
        $nama_reviewer = "-";
        $nama_lppm = $_POST['nama_lppm'];
        $tgl_lppm = $_POST['tgl_lppm'];
        $st_lppm = $_POST['st_lppm'];
        $komentar_lppm = $_POST['komentar_lppm'];
        $view = "3";
    } else {
        $id_rkp = $_POST['id_rkp'];
        $nama_reviewer = $_POST['nama_reviewer'];
        $nama_lppm = $_POST['nama_lppm'];
        $tgl_lppm = $_POST['tgl_lppm'];
        $st_lppm = $_POST['st_lppm'];
        $komentar_lppm = $_POST['komentar_lppm'];
        $view = "3";
    }


    $edit = mysqli_query($koneksi, "UPDATE rkpp set nama_lppm='$nama_lppm',tgl_lppm='$tgl_lppm',st_lppm='$st_lppm',komentar_lppm='$komentar_lppm',nama_reviewer='$nama_reviewer',view='$view' where id_rkp='$id_rkp'");


    if ($edit == true) {
        $_SESSION['pesan'] = 'Data Berhasil Dikirim ke baak';
        header("location:?page=notif_baak_aslppm");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Dikirim ke baak';
        header("location:?page=notif_baak_aslppm");
    }
}



// sebagai reviewer
if (isset($_POST['kirim_baak_asreviewer'])) {

    $id_rkp = $_POST['id_rkp'];
    $nama_reviewerr = $_POST['nama_reviewerr'];
    $tgl_reviewer = $_POST['tgl_reviewer'];
    $st_reviewer = $_POST['st_reviewer'];
    $komentar_reviewer = $_POST['komentar_reviewer'];
    $view = "5";

    $edit = mysqli_query($koneksi, "UPDATE rkpp set nama_reviewerr='$nama_reviewerr',tgl_reviewer='$tgl_reviewer',st_reviewer='$st_reviewer',komentar_reviewer='$komentar_reviewer',view='$view' where id_rkp='$id_rkp'");


    if ($edit == true) {
        $_SESSION['pesan'] = 'Data Berhasil Dikirim ke baak';
        header("location:?page=notif_baak_asreviewer");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Dikirim ke baak';
        header("location:?page=notif_baak_asreviewer");
    }
}
