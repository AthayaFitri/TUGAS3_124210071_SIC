<!DOCTYPE html>
<html>

<head>
    <title>toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Selamat Datang di Toko Film Serba ada</h2>
        <p>
        <h3>Register</h3>
        </p>
        <ul>
            <?php
            include "basisdata.php";
            session_start();

            if(isset($_SESSION['username'])){
                header("Location: index.php");
            }

            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = ($_POST['password']);
                $sql = "SELECT * FROM users";
                $result = mysqli_query($sambungan,$sql);
                if($result->num_rows > 0){
                    $sql = "INSERT INTO users (username, password)
                    VALUES ('$username', '$password')";
                    $result = mysqli_query($sambungan,$sql);
                    if ($result) {
                        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                        $username = "";
                        $_POST['password'] = "";
                        header("Location: login.php");
                    } else {
                        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                    }
                } 
            }
        ?>
            <form action="" method="POST">
                Username : <input type="text" name="username" required><br><br>
                Password : <input type="password" name="password" required><br><br>
                <button name="submit" type="submit">Register</button><br><br>
                Anda sudah punya akun? <a href="index.php">Login </a>
            </form>

        </ul>
        <hr><a href="kelola01.php">Pengelolaan</a><br>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a>
    </center>
</body>

</html>