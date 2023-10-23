<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>pengelolaan data toko film serba ada</title>
</head>

<body>
    <center>
        <h2>pengelolaan data toko film serba ada</h2>
    </center>
    <?php
        include "basisdata.php";
        $action = $_POST['action'];
        $judul = $_POST['judul'];
        $jenis = $_POST['jenis'];
        $nama_gmb = $_POST['nama_gmb'];
        $sutradara = $_POST['sutradara'];
        $pemain_utama = $_POST['pemain_utama'];
        $harga = $_POST['harga'];
        $thn_terbit = $_POST['thn_terbit'];
        switch($action){
            case "TAMBAH":
                $query = "INSERT INTO dvd (judul, jenis, nama_gmb, sutradara, pemain_utama, harga, thn_terbit) VALUES ('$judul','$jenis','$nama_gmb','$sutradara','$pemain_utama','$harga','$thn_terbit')";
                $hasil_mysql = mysqli_query($sambungan, $query);
                $pesan = "data berhasil ditambahkan";
            break;

            case "UBAH":
                $id_film = $_POST['id_film'];
                $query = "UPDATE dvd SET 
                    judul='$judul',
                    jenis='$jenis',
                    nama_gmb='$nama_gmb',
                    sutradara='$sutradara',
                    pemain_utama='$pemain_utama',
                    harga='$harga',
                    thn_terbit='$thn_terbit'
                    WHERE id_film='$id_film'
                ";

                $hasil_mysql = mysqli_query($sambungan, $query);
                $pesan =  "data berhasil diubah";
            break;
            
            case "HAPUS":
                $id_film = $_POST['id_film'];
                $query = "DELETE FROM dvd WHERE id_film=$id_film";
                $hasil_mysql = mysqli_query($sambungan, $query);
                $pesan = "data berhasil dihapus";
            break;
        };
        echo "<h3>$pesan</h3>";
        ?>

    <center>
        <a href="logout.php" class="btn">Logout</a>
    </center>
</body>

</html>