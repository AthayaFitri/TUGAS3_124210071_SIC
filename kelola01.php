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
        Lembar berikut digunakan untuk pengelolaan data Film.
        Untuk menambah data tekan tombol
        <font color="#FF0000">TAMBAH</font>
        sedangkan untuk mengubah atau menghapus suatu data pilih terlebih dahulu data yang diinginkan kemudian baru
        tekan tombol
        <font color="#FF0000">UBAH</font> atau
        <font color="#FF0000">HAPUS</font>.

        <form method="POST" action="kelola02.php">
            <select size="6" name="id" id="id">
                <?php
                    include 'basisdata.php';
                    $query = "SELECT * FROM dvd";
                    $hasil_mysql = mysqli_query($sambungan, $query);

                    while($baris = mysqli_fetch_row($hasil_mysql)){
                    $id_film = $baris[0];
                    $judul = $baris[1];
                    $jenis = $baris[2];
                    $nama_gmb = $baris[3];
                    $sutradara = $baris[4];
                    $pemain_utama = $baris[5];
                    $harga = $baris[6];
                    $thn_terbit = $baris[7];
                ?>
                <option value="<?=$id_film ?>">
                    <?= "($jenis)"?> <?= $judul?>
                </option>
                <?php } ?>
            </select><br><br>
            <input type="submit" name="action" value="TAMBAH">
            <input type="submit" name="action" value="UBAH">
            <input type="submit" name="action" value="HAPUS">
        </form>

        <hr>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a><br><br>
        <a href="logout.php" class="btn">Logout</a>
    </center>
</body>

</html>