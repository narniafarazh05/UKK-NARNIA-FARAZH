<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
        <!-- Bootstrap core CSS-->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="assets/custom/custom.css" rel="stylesheet"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            color: white;
            background-color: #384754
            
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #384754
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #384754;
            color: white;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        td a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 2px;
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            border-radius: 3px;
        }

        footer {
            background-image: linear-gradient( #EE4C7C, #C71585);
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Halaman Home</h1>
    
    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a>Selamat datang <b><?=$_SESSION['namalengkap']?></b></a>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>

