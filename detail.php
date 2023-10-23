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
        <hr>
    </center>
    <table border="1">
        <?php
            include 'basisdata.php';
            if(isset($_GET['id_film'])){
                $id= $_GET['id_film'];
            }
            $query = "SELECT * FROM dvd WHERE id_film=$id";
            $hasil_mysql = mysqli_query($sambungan, $query);
            $baris = mysqli_fetch_row($hasil_mysql);
            $judul = $baris[1];
            $jenis = $baris[2];
            $nama_gmb = $baris[3];
            $sutradara = $baris[4];
            $pemain_utama = $baris[5];
            $harga = $baris[6];
            //$sekilas = $baris[7];
            $thn_terbit = $baris[7];
        ?>
        <tr valign="top">
            <td>
                <img src="./image/<?=$nama_gmb?>" alt="<?=$judul?>" height="150">
            </td>
            <td>
                <p>JUDUL<br><i><b><?= $judul?></b></i></p>
            </td>
            <td>
                <p>JENIS<br><i><b><?= $jenis?></b></i></p>
            </td>
            <td>
                <p>SUTRADARA<br><i><b><?= $sutradara?></b></i></p>
            </td>
            <td>
                <p>PEMAIN UTAMA<br><i><b><?= $pemain_utama?></b></i></p>
            </td>
            <td>
                <p>HARGA<br><i><b><?= $harga?></b></i></p>
            </td>
            <td>
                <p>TAHUN TERBIT<br><i><b><?= $thn_terbit?></b></i></p>
            </td>
        </tr>
    </table><br>
    <center>
        <hr><a href="kelola01.php">Pengelolaan</a><br>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a><br><br>
        <a href="logout.php" class="btn">Logout</a>
    </center>
</body>

</html>