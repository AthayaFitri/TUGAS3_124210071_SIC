<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Selamat Datang di Toko Film Serba ada</h2>
    </center>
    <?php
        include "basisdata.php";
        if(isset($_GET['jenis'])){
            $jenis = $_GET['jenis'];
        }?>
    <h3>Berikut ini daftar film berdasarkan kategori <?= $jenis?></h3>
    <table border=1>
        <?php 
        $query = "SELECT id_film,judul,nama_gmb,sutradara FROM dvd WHERE jenis='$jenis'";
        $hasil_mysql = mysqli_query($sambungan, $query);
        while($baris = mysqli_fetch_row($hasil_mysql)){
        $id_film = $baris[0];
        $judul = $baris[1];
        $nama_gmb = $baris[2];
        $sutradara = $baris[3];
        ?>
        <tr>
            <td><img src="./image/<?= $nama_gmb?>" height="50"></td>
            <td><b><a href="detail.php?id_film=<?=$id_film?>"><?= $judul?></a></b><br><?= $sutradara?></td>
        </tr>
        <?php } ?>
    </table>

    <center>
        <hr><a href="kelola01.php">Pengelolaan</a><br>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a><br><br>
        <a href="logout.php" class="btn">Logout</a>
    </center>
</body>

</html>