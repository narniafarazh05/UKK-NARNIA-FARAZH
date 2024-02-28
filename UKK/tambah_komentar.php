<?php
    include "koneksi.php";
    session_start();

    $fotoid=$_POST['fotoid'];
    $isikomentar=$_POST['isikomentar'];
    $tanggalkomentar=date("Y-m-d");
    $userid=$_SESSION['userid'];

    $sql=mysqli_query($conn,"insert into komentarfoto values('','$fotoid','$userid','$isikomentar','$tanggalkomentar')");
    if($insert){
        echo '<script>alert("Komentar berhasil ditambahkan")</script>';
        echo '<script>window.location="komentar.php"</script>';
    }else{
        echo 'gagal '.mysqli_error($conn);
    }
    
    header("location:lihatkomentar.php?fotoid=".$fotoid);
?>

