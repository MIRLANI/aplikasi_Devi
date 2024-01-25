<?php 

session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar - Halaman Utama</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<style>
    h1{
        text-align: center;
        padding-top: 1px;
        color: black;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }


</style>
<body>
    <nav>
        <div class="">
            <img src="icons.png" alt="icons" />
           
        </div> 
        <div id="menu-icon" class="menu-icon"> 
         <i class="ph ph-list"></i>
        </div>
        <ul id="menu-list" class="hidden">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="datapasien.html">Patient Data</a>
            </li>
            <li>
                <a href="datapasien.html"> Food Data </a>
            </li>
            <li>
                <a href="kaloriharian.html">Calorie Count</a>
            </li>
            <li>
                <a href="#">Logout</a>
            </li>
        </ul>
       
    </nav>
    <main> 
        <h1> Selamat Datang di Sistem Pakar Pemilihan Makanan </h1>
        <p1> Pilihlah Makanan berdasarkan kebutuhan gizi anda :) </p1>
    </main>
    <script src="script.js"> </script>
</body>
</html>
