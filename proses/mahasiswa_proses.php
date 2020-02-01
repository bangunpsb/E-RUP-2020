<?php
if (isset($_POST['editmhs'])) {
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
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
        header("location:?page=edit_profile_mahasiswa");
    } else {
        $_SESSION['pesan'] = 'Data Gagal Diedit';
        header("location:?page=edit_profile_mahasiswa");
    }
}



// aju-rup

if (isset($_POST['kirimrup'])) {
    $file = urldecode($_FILES['file_location']['name']);
    $lokasi = urldecode($_FILES['file_location']['tmp_name']);
    move_uploaded_file($lokasi, "../assets/upload_rup/$file");
    $id_rkp = $_POST['id_rkp'];
    $nim_mhs = $_POST['nim_mhs'];
    $nama_mhs = $_POST['nama_mhs'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $tgl_mahasiswa = $_POST['tgl_mahasiswa'];
    $judul_rup = $_POST['judul_rup'];

    $tgl_baak = $_POST['tgl_baak'];
    $nama_baak = $_POST['nama_baak'];

    $tgl_lppm = $_POST['tgl_lppm'];
    $nama_lppm = $_POST['nama_lppm'];
    $st_lppm = $_POST['st_lppm'];
    $nama_reviewer = $_POST['nama_reviewer'];
    $komentar_lppm = $_POST['komentar_lppm'];

    $tgl_baakk = $_POST['tgl_baakk'];
    $nama_baakk = $_POST['nama_baakk'];

    $tgl_reviewer = $_POST['tgl_reviewer'];
    $nama_reviewerr = $_POST['nama_reviewerr'];
    $st_reviewer = $_POST['st_reviewer'];
    $komentar_reviewer = $_POST['komentar_reviewer'];

    $tgl_baakkk = $_POST['tgl_baakkk'];
    $nama_baakkk = $_POST['nama_baakkk'];

    $tgl_prodi = $_POST['tgl_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $nama_pembimbing = $_POST['nama_pembimbing'];
    $view = $_POST['view'];

    // print_r($_POST);
    // exit();
    $simpan = mysqli_query($koneksi, "INSERT INTO rkpp(id_rkp,nim_mhs,nama_mhs,jurusan_mhs,no_hp,judul_rup,tgl_mahasiswa,file_location,tgl_baak,nama_baak,tgl_lppm,nama_lppm,st_lppm,nama_reviewer,komentar_lppm,tgl_baakk,nama_baakk,tgl_reviewer,nama_reviewerr,st_reviewer,komentar_reviewer,tgl_baakkk,nama_baakkk,tgl_prodi,nama_prodi,nama_pembimbing,view) values('$id_rkp','$nim_mhs','$nama_mhs','$jurusan','$no_hp','$judul_rup','$tgl_mahasiswa','../assets/upload_rup/$file','$tgl_baak','$nama_baak','$tgl_lppm','$nama_lppm','$st_lppm','$nama_reviewer','$komentar_lppm','$tgl_baakk','$nama_baakk','$tgl_reviewer','$nama_reviewerr','$st_reviewer','$komentar_reviewer','$tgl_baakkk','$nama_baakkk','$tgl_prodi','$nama_prodi','$nama_pembimbing','$view')");


    if ($simpan == true) {
        $_SESSION['pesan'] = 'Data Berhasil dikirim';
        header("location:?page=ajukan_rup_mahasiswa");
    } else {
        $_SESSION['pesan'] = 'Data Gagal dikirim';
        header("location:?page=ajukan_rup_mahasiswa");
    }
}




// kirim proposal ke prodi
if (isset($_POST['kirimproposal'])) {
    $file = $_FILES['file_location']['name'];
    $lokasi = $_FILES['file_location']['tmp_name'];
    move_uploaded_file($lokasi, "../assets/upload_acc/$file");
    $id_acc = "";
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $judul = $_POST['judul'];
    $tgl_mhs = $_POST['tgl_mhs'];
    $deskripsi = $_POST['deskripsi'];
    $view = '1';

    $kirim = mysqli_query($koneksi, "INSERT into acc (id_acc,nim,nama,jurusan,judul,tgl_mhs,deskripsi,file_location,view)values('$id_acc','$nim','$nama','$jurusan','$judul','$tgl_mhs','$deskripsi','../assets/upload_acc/$file','$view')");


    if ($kirim == true) {
        $_SESSION['pesan'] = 'Data Berhasil dikirim';
        header("location:?page=kirim_proposal");
    } else {
        $_SESSION['pesann'] = 'Data Gagal dikirim';
        header("location:?page=kirim_proposal");
    }
}
