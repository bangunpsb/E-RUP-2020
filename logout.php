<?php
include 'proses/koneksi.php';
session_unset();
session_destroy();
?>
<title>Logout</title>

<body style="background-color:cadetblue;">

    <!-- mengalihkan halaman sambil mengirim pesan logout -->
    <div align="center">
        <br>
        <h2>Anda telah berhasil logout..</h2>
        Silahkan klik <a href="?page=login">disini</a> untuk login kembali <br>
        <hr>
    </div>


</body>