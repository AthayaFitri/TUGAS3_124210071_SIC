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
        <h2>Pengelolaan Toko Film Serba Ada</h2>
        <hr>
        <?php 
        if(isset($_POST['action'])){
            $action = $_POST['action'];
        }
    
        ?>
        <h3><?= $action?> DATA FILM</h3>
    </center>

    <form method="POST" action="proses.php">
        <?php 
                include 'basisdata.php';
                if($action == "TAMBAH")
                {
                    $id_film = "";
                    $judul = "";
                    $jenis = "";
                    $nama_gmb = "";
                    $sutradara = "";
                    $pemain_utama = "";
                    $harga = "";
                    $thn_terbit = "";
                }else{
                    $id = $_POST['id'];
                    $query = "SELECT * FROM dvd WHERE id_film='$id'";
                    $hasil_mysql = mysqli_query($sambungan, $query);
                    $baris = mysqli_fetch_row($hasil_mysql);

                    $id_film = $baris[0];
                    $judul = $baris[1];
                    $jenis = $baris[2];
                    $nama_gmb = $baris[3];
                    $sutradara = $baris[4];
                    $pemain_utama = $baris[5];
                    $harga = $baris[6];
                    $thn_terbit = $baris[7];
                }
            ?>
        <?php if(isset($id)){ ?>
        <input type="hidden" name="id_film" value="<?=$id?>">
        <?php } ?>
        <input type="hidden" name="action" value="<?=$action?>">

        Judul Film :
        <input type="text" name="judul" size="20" maxlength="30" value="<?=$judul?>"><br>

        Jenis Film :
        <input type="text" name="jenis" size="20" maxlength="20" value="<?=$jenis?>"><br>

        Nama File Gambar :
        <input type="text" name="nama_gmb" size="20" maxlength="20" value="<?=$nama_gmb?>"><br>

        Nama Sutradara :
        <input type="text" name="sutradara" size="30" maxlength="30" value="<?=$sutradara?>"><br>

        Nama Pemain_Utama :
        <input type="text" name="pemain_utama" size="30" maxlength="30" value="<?=$pemain_utama?>"><br>

        Harga : Rp.
        <input type="text" name="harga" size="20" maxlength="20" value="<?=$harga?>"><br>

        Tahun Terbit :
        <input type="text" name="thn_terbit" size="20" maxlength="20" value="<?=$thn_terbit?>"><br>

        <input type="submit" value="PROSES" name="submit">
    </form>

    <center>
        <hr><a href="kelola01.php">Pengelolaan</a><br>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a><br><br>
        <a href="logout.php" class="btn">Logout</a>
    </center>

</body>

</html>