<?php
if (isset($_POST['login'])) {
	// menangkap data yang dikirim dari form login
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	// menyeleksi data user dengan username dan password yang sesuai
	$sqlStr = "SELECT * FROM user where email='$email' and password='$password'";
	$login = mysqli_query($koneksi, $sqlStr);

	// menghitung jumlah data yang ditemukan
	$cek = mysqli_fetch_assoc($login);
	// cek apakah username dan password di temukan pada database
	if (isset($cek)) {

		// menyimpan data dalam session
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $cek['nama'];
		$_SESSION['nim'] = $cek['nim'];
		$_SESSION['gbr'] = $cek['gbr'];
		$_SESSION['jurusan'] = $cek['jurusan'];
		$_SESSION['level'] = $cek['level'];
		$_SESSION['password'] = $cek['password'];

		// redirect ke halam sesuai level
		switch ($cek['level']) {
			case 'admin':
				header('location:?page=home_admin');
				return;

			case 'mahasiswa':
				header('location:?page=home_mahasiswa');
				return;

			case 'baak':
				header('location:?page=home_baak');
				return;

			case 'lppm':
				header('location:?page=home_lppm');
				return;

			case 'reviewer':
				header('location:?page=home_reviewer');
				return;

			case 'prodi':
				header('location:?page=home_prodi');
				return;
		}
	}
	header("location:?page=login");
	$_SESSION['pesan'] = "Data Tidak Sesuai";
}
