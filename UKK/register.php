<?php
    session_start();
    if (isset($_SESSION['userid'])) {
        header('location:index.php');
        exit;
    }
?>                              
<?php
    include 'koneksi.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""https://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">WEB GALERI FOTO</a></h1>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
        </div>
    </header>
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Registrasi Akun</h3>
            <div class="box">
                <form action="proses_register.php" method="POST">
                    <input type="text" name="username" placeholder="Username" class="input-control" required>
                    <input type="text" name="password" placeholder="password" class="input-control" required>
                    <input type="text" name="email" placeholder="E-mail" class="input-control" required>
                    <input type="text" name="namalengkap" placeholder="Nama lengkap" class="input-control" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" required>
                    <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php
                    if(isset($_POST['submit'])){

                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $namalengkap = $_POST['namalengkap'];
                        $alamat = $_POST['alamat'];

                        $insert = mysqli_query($conn, "INSERT INTO user VALUES (null,
                                    
                                    '".$username."',
                                    '".$password."',
                                    '".$email."',
                                    '".$namalengkap."',
                                    '".$alamat."',
                                    
                                    ");
                        if($insert){
                            echo '<script>alert("Registrasi berhasil")</script>';
                            echo '<script>window.location="login.php"</script>';
                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                        }
                ?>
            </div>

            </div>
        </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small> Copyright by Narnia - Web Galeri Foto.</small>
        </div>
    </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form')
        form.addEventListener('submit', (e) => {
            alert('Registrasi Berhasil')
        })        
     })
</script>
</html>