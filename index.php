<?php
session_start();
include 'proses/koneksi.php';
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Favicon-->
    <link rel="icon" href="../assets/img/pelita.png" type="image/x-icon">
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Multi Select Css -->
    <link href="admin/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href="admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="admin/plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="admin/css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="admin/css/themes/all-themes.css" rel="stylesheet" />
    <!-- Jquery Core Js -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- recapthca google -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body class="theme-red">



    <!-- direktori file -->
    <?php
    if (isset($_GET["page"])) {
        if ($_GET["page"] == "registerasi") {
            include "registeration.php";
        } else if ($_GET["page"] == "home_admin") {
            include "admin/home_admin.php";

            // mahasiswa
        } else if ($_GET["page"] == "home_mahasiswa") {
            include "mahasiswa/home_mahasiswa.php";
        } else if ($_GET["page"] == "detail") {
            include "mahasiswa/detail.php";
        } else if ($_GET["page"] == "cek_judul_mahasiswa") {
            include "mahasiswa/cek_judul_mahasiswa.php";
        } else if ($_GET["page"] == "ajukan_rup_mahasiswa") {
            include "mahasiswa/ajukan_rup_mahasiswa.php";
        } else if ($_GET["page"] == "cek_status_rup_mahasiswa") {
            include "mahasiswa/cek_status_rup_mahasiswa.php";
        } else if ($_GET["page"] == "edit_profile_mahasiswa") {
            include "mahasiswa/edit_profile_mahasiswa.php";
        } else if ($_GET["page"] == "kirim_proposal") {
            include "mahasiswa/kirim_proposal.php";
        } else if ($_GET["page"] == "kirim_pesan_mahasiswa") {
            include "mahasiswa/kirim_pesan_mahasiswa.php";
        } else if ($_GET["page"] == "mahasiswa_proses") {
            include "proses/mahasiswa_proses.php";


            // baak
        } else if ($_GET["page"] == "home_baak") {
            include "baak/home_baak.php";
        } else if ($_GET["page"] == "notif_mahasiswa") {
            include "baak/notif_mahasiswa.php";
        } else if ($_GET["page"] == "notif_lppm") {
            include "baak/notif_lppm.php";
        } else if ($_GET["page"] == "notif_reviewer") {
            include "baak/notif_reviewer.php";
        } else if ($_GET["page"] == "detail_mahasiswa") {
            include "baak/detail_mahasiswa.php";
        } else if ($_GET["page"] == "detail_lppm") {
            include "baak/detail_lppm.php";
        } else if ($_GET["page"] == "detail_reviewer") {
            include "baak/detail_reviewer.php";
        } else if ($_GET["page"] == "kirim_pesan_to_mahasiswa") {
            include "baak/kirim_pesan_to_mahasiswa.php";
        } else if ($_GET["page"] == "kirim_pesan_to_lppm") {
            include "baak/kirim_pesan_to_lppm.php";
        } else if ($_GET["page"] == "kirim_pesan_to_reviewer") {
            include "baak/kirim_pesan_to_reviewer.php";
        } else if ($_GET["page"] == "edit_profile_baak") {
            include "baak/edit_profile_baak.php";
        } else if ($_GET["page"] == "baak_proses") {
            include "proses/baak_proses.php";


            // lppm
        } else if ($_GET["page"] == "home_lppm") {
            include "lppm/home_lppm.php";
        } else if ($_GET["page"] == "cek_judul_lppm") {
            include "lppm/cek_judul_lppm.php";
        } else if ($_GET["page"] == "kirim_pesan_baak_aslppm") {
            include "lppm/kirim_pesan_baak_aslppm.php";
        } else if ($_GET["page"] == "kirim_pesan_baak_asreviewer") {
            include "lppm/kirim_pesan_baak_asreviewer.php";
        } else if ($_GET["page"] == "notif_baak_aslppm") {
            include "lppm/notif_baak_aslppm.php";
        } else if ($_GET["page"] == "notif_baak_asreviewer") {
            include "lppm/notif_baak_asreviewer.php";
        } else if ($_GET["page"] == "edit_profile_lppm") {
            include "lppm/edit_profile_lppm.php";
        } else if ($_GET["page"] == "detail_baak_aslppm") {
            include "lppm/detail_baak_aslppm.php";
        } else if ($_GET["page"] == "detail_baak_asreviewer") {
            include "lppm/detail_baak_asreviewer.php";
        } else if ($_GET["page"] == "lppm_proses") {
            include "proses/lppm_proses.php";



            // reviewer
        } else if ($_GET["page"] == "home_reviewer") {
            include "reviewer/home_reviewer.php";
        } else if ($_GET["page"] == "cek_judul_reviewer") {
            include "reviewer/cek_judul_reviewer.php";
        } else if ($_GET["page"] == "notif_baak_reviewer") {
            include "reviewer/notif_baak_reviewer.php";
        } else if ($_GET["page"] == "detail_baak_reviewer") {
            include "reviewer/detail_baak_reviewer.php";
        } else if ($_GET["page"] == "kirim_pesan_baak_reviewer") {
            include "reviewer/kirim_pesan_baak_reviewer.php";
        } else if ($_GET["page"] == "edit_profile_reviewer") {
            include "reviewer/edit_profile_reviewer.php";
        } else if ($_GET["page"] == "reviewer_proses") {
            include "proses/reviewer_proses.php";

            // prodi
        } else if ($_GET["page"] == "home_prodi") {
            include "prodi/home_prodi.php";
        } else if ($_GET["page"] == "notif_prodi") {
            include "prodi/notif_prodi.php";
        } else if ($_GET["page"] == "notif_prodi_mhs") {
            include "prodi/notif_prodi_mhs.php";
        } else if ($_GET["page"] == "detail_prodi") {
            include "prodi/detail_prodi.php";
        } else if ($_GET["page"] == "detail_prodi_mhs") {
            include "prodi/detail_prodi_mhs.php";
        } else if ($_GET["page"] == "proposal") {
            include "prodi/proposal.php";
        } else if ($_GET["page"] == "cetak") {
            include "prodi/cetak_laporan.php";
        } else if ($_GET["page"] == "laporan") {
            include "prodi/laporan.php";
        } else if ($_GET["page"] == "edit_profile_prodi") {
            include "prodi/edit_profile_prodi.php";
        } else if ($_GET["page"] == "register_user") {
            include "prodi/register_user.php";
        } else if ($_GET["page"] == "prodi_proses") {
            include "proses/prodi_proses.php";



            // umum
        } else if ($_GET["page"] == "logout") {
            include "logout.php";
        } else if ($_GET["page"] == "login") {
            include "login.php";
        } else if ($_GET["page"] == "cek_login") {
            include "proses/cek_login.php";
        } else if ($_GET["page"] == "send") {
            include "proses/send.php";
        } else if ($_GET["page"] == "proses") {
            include "proses/proses.php";
        } else {
            include "404.php";
        }
    } else {
        include "login.php";
    }
    ?>


    <!-- Bootstrap Core Js -->
    <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="admin/plugins/node-waves/waves.js"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="admin/plugins/jquery-countto/jquery.countTo.js"></script>
    <!-- Morris Plugin Js -->
    <script src="admin/plugins/raphael/raphael.min.js"></script>
    <script src="admin/plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="admin/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <!-- Multi Select Plugin Js -->
    <script src="admin/plugins/multi-select/js/jquery.multi-select.js"></script>
    <!-- Custom Js -->
    <script src="admin/js/admin.js"></script>
    <script src="admin/js/pages/ui/modals.js"></script>
    <script src="admin/js/pages/tables/jquery-datatable.js"></script>
    <!-- <script src="admin/js/pages/index.js"></script> -->
    <!-- Demo Js -->
    <script src="admin/js/demo.js"></script>
</body>