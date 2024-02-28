<?php
    include "koneksi.php";
    session_start();

    if(!isset($_SESSION['userid'])){
        //Untuk bisa like atau unlike harus login dulu
        header("location:index.php");
    }else{
        $fotoid=$_GET['fotoid'];
        $userid=$_SESSION['userid'];
        
        // Cek apakah user sudah pernah like foto ini atau belum
        $check_like=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid' and userid='$userid'");
        
        if(mysqli_num_rows($check_like)==1){
            // Jika user sudah pernah like foto ini
            // Maka hapus like dari database
            mysqli_query($conn,"DELETE FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
        }else{
            // Jika user belum pernah like foto ini
            // Tambahkan like ke database
            $tanggallike=date("Y-m-d");
            mysqli_query($conn,"insert into likefoto values('','$fotoid','$userid','$tanggallike')");
        }
        
        // Setelah proses like atau unlike, arahkan kembali ke halaman index
        header("location:index.php");
    }
?>