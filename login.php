<!DOCTYPE html>
<html>

<head>
    <title>toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Selamat Datang di Toko Film Serba ada</h2>
        <p>
        <h3>Login</h3>
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
                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($sambungan,$sql);
                if($result->num_rows > 0){
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['username'];
                    header("Location: index.php");
                } else { 
                    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
                }
            }
        ?>

            <form action="" method="POST">
                Username : <input type="text" name="username" required><br><br>
                Password : <input type="password" name="password" required><br><br>
                <button name="submit" type="submit">Login</button><br><br>
                Anda belum punya akun? <a href="register.php">Register</a>
            </form>

        </ul>
        <hr><a href="kelola01.php">Pengelolaan</a><br>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a>
    </center>
</body>

</html>