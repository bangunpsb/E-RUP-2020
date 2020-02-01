<!DOCTYPE html>
<html>

<head>
    <title>CETAK RKP</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="header text-center m-5">
            <h2>DATA LAPORAN RKP</h2>
        </div>

        <table class="table bordered">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama Mahasiswa</th>
                <th>Judul RUP</th>
                <th>Status LPPM</th>
                <th>Status Penelaah</th>
                <th>Nama Pembimbing</th>
            </tr>
            <?php
            $no = 1;
            $sql = mysqli_query($koneksi, "SELECT * from rkpp ");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nim_mhs']; ?></td>
                    <td><?= $data['nama_mhs']; ?></td>
                    <td><?= $data['judul_rup']; ?></td>
                    <td><?= $data['st_lppm']; ?></td>
                    <td><?= $data['st_reviewer']; ?></td>
                    <td><?= $data['nama_pembimbing']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

        <?php
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $today = $year . '-' . $month . '-' . $day;
        ?>
        <div class="container">

            <div class="date_bot text-right mr-3">
                Pekanbaru,<?= $today; ?>
            </div>

            <div class="prodi ml-5">
                <span> Program Studi</span>
            </div>

            <div class="ketua text-right mr-5">
                <span> Ketua</span>
            </div>

            <div class="mt-5">
                <div class="namaprodi text-left ml-5">
                    <?php $nama = $_SESSION['nama']; ?>
                    ( <?= $nama; ?> )
                </div>

                <div class="namaketua text-right mr-3">
                    ( Perdana Kusuma )
                </div>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>

</body>

</html>