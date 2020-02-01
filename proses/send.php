<?php
// dari form mahasiswa kirim pesan ke baak
if (isset($_POST['kirim_baak'])) {

    session_start();
    $pesan = urlencode($_POST["pesan_baak"]);
    $token = "bot" . "927370360:AAHoDv_CUPwEjCEKI4Ycrn4jvXTOzuT7MAA";
    $chat_id = "-395397101";
    $proxy = "";

    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

    $ch = curl_init();

    if ($proxy == "") {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    } else {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => "$proxy",
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    }

    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if ($err <> "") {
        $_SESSION['pesann'] = 'Pesan Gagal dikirim';
        header("location:?page=kirim_pesan_mahasiswa");
    } else {
        $_SESSION['pesan'] = 'Pesan Berhasil dikirim';
        header("location:?page=kirim_pesan_mahasiswa");
    }
}






// dari form baak kirim pesan ke mahasiswa
if (isset($_POST['kirim_mhs'])) {
    $pesan = urlencode($_POST["pesan_mhs"]);
    $token = "bot" . "854461874:AAEZBxvya2sPiraIYzAfD3NQ_EvdJhk11ds";
    $chat_id = "-228947726";
    $proxy = "";

    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

    $ch = curl_init();

    if ($proxy == "") {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    } else {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => "$proxy",
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    }

    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if ($err <> "") {
        $_SESSION['pesann'] = 'Pesan gagal dikirim';
        header("location:?page=kirim_pesan_to_mahasiswa");
    } else {
        $_SESSION['pesan'] = 'Pesan Berhasil dikirim';
        header("location:?page=kirim_pesan_to_mahasiswa");
    }
}


// dari form baak kirim pesan ke lppm
if (isset($_POST['kirim_lppm'])) {
    $pesan = urlencode($_POST["pesan_lppm"]);
    $token = "bot" . "854461874:AAEZBxvya2sPiraIYzAfD3NQ_EvdJhk11ds";
    $chat_id = "-349523450";
    $proxy = "";

    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

    $ch = curl_init();

    if ($proxy == "") {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    } else {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => "$proxy",
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    }

    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if ($err <> "") {
        $_SESSION['pesann'] = 'Pesan gagal dikirim';
        header("location:?page=kirim_pesan_to_lppm");
    } else {
        $_SESSION['pesan'] = 'Pesan Berhasil dikirim';
        header("location:?page=kirim_pesan_to_lppm");
    }
}



// dari form baak kirim pesan ke reviewer
if (isset($_POST['kirim_reviewer'])) {
    $pesan = urlencode($_POST["pesan_reviewer"]);
    $token = "bot" . "854461874:AAEZBxvya2sPiraIYzAfD3NQ_EvdJhk11ds";
    $chat_id = "-286381960";
    $proxy = "";

    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

    $ch = curl_init();

    if ($proxy == "") {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    } else {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => "$proxy",
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    }

    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if ($err <> "") {
        $_SESSION['pesann'] = 'Pesan gagal dikirim';
        header("location:?page=kirim_pesan_to_reviewer");
    } else {
        $_SESSION['pesan'] = 'Pesan Berhasil dikirim';
        header("location:?page=kirim_pesan_to_reviewer");
    }
}





// dari form lppm kirim pesan ke baak
if (isset($_POST['kirim_baak_aslppm'])) {
    $pesan = urlencode($_POST["pesan_baak_aslppm"]);
    $token = "bot" . "905282294:AAHjRcUsXbbC319ZTJovDG2rcEmHyfGezvw";
    $chat_id = "-395397101";
    $proxy = "";

    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

    $ch = curl_init();

    if ($proxy == "") {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    } else {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => "$proxy",
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    }

    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if ($err <> "") {
        $_SESSION['pesann'] = 'Pesan gagal dikirim';
        header("location:?page=kirim_pesan_baak_aslppm");
    } else {
        $_SESSION['pesan'] = 'Pesan Berhasil dikirim';
        header("location:?page=kirim_pesan_baak_aslppm");
    }
}



// dari form lppm(sebagai reviewer) kirim pesan ke baak
if (isset($_POST['kirim_baak_asreviewer'])) {
    $pesan = urlencode($_POST["pesan_baak_asreviewer"]);
    $token = "bot" . "912545970:AAFRhVjn9f6sarNBUYuav09qqS3Gx8t3KM4";
    $chat_id = "-395397101";
    $proxy = "";

    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

    $ch = curl_init();

    if ($proxy == "") {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    } else {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => "$proxy",
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    }

    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if ($err <> "") {
        $_SESSION['pesann'] = 'Pesan gagal dikirim';
        header("location:?page=kirim_pesan_baak_asreviewer");
    } else {
        $_SESSION['pesan'] = 'Pesan Berhasil dikirim';
        header("location:?page=kirim_pesan_baak_asreviewer");
    }
}









// dari form reviewer kirim pesan ke baak
if (isset($_POST['kirim_baak_reviewer'])) {
    $pesan = urlencode($_POST["pesan_baak_reviewer"]);
    $token = "bot" . "912545970:AAFRhVjn9f6sarNBUYuav09qqS3Gx8t3KM4";
    $chat_id = "-395397101";
    $proxy = "";

    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

    $ch = curl_init();

    if ($proxy == "") {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    } else {
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => "$proxy",
            CURLOPT_CAINFO => "C:\cacert.pem"
        );
    }

    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if ($err <> "") {
        $_SESSION['pesann'] = 'Pesan gagal dikirim';
        header("location:?page=kirim_pesan_baak_reviewer");
    } else {
        $_SESSION['pesan'] = 'Pesan Berhasil dikirim';
        header("location:?page=kirim_pesan_baak_reviewer");
    }
}
