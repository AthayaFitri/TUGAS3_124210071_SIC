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
    <p>
    <h3>Pilih kategori film yang anda cari</h3>
    </p>
    <ul>
        <?php
            include "basisdata.php";
            $query = "SELECT DISTINCT jenis FROM dvd";
            $hasil_mysql = mysqli_query($sambungan, $query);

            while($baris = mysqli_fetch_row($hasil_mysql)){
                $jenis = $baris[0];
        ?>
        <li><a href='kategori.php?jenis=<?= $jenis?>'><?= $jenis?></a></li>

        <?php } ?>

    </ul>
    <center>
        <hr><a href="kelola01.php">Pengelolaan</a><br>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a><br><br>
        <a href="logout.php" class="btn">Logout</a>
    </center>
</body>

</html>