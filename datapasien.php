<?php

include 'config.php';

$query = "SELECT * FROM pasien";
$sql = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien </title>
    <link rel="stylesheet" href="style2.css">
    <style>
        header {
            background-color: azure;
            color: grey;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 0%;
        }

        table {
            border: 3px solid whitesmoke ;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddddddd6;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: aliceblue;
        }
    </style>
</head>
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

        <header>
            <h1> Data Pasien </h1>
        </header>
        

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Tinggi Badan (cm)</th>
        <th>Berat Badan (kg)</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
    <?php while ($pasien  = mysqli_fetch_assoc($sql)) { ?>
    <tr>
        <td>1</td>
        <td><?php echo $pasien['nama']; ?></td>
        <td><?php echo $pasien['usia']; ?></td>
        <td><?php echo $pasien['tinggi_badan']; ?></td>
        <td><?php echo $pasien['berat_badan']; ?></td>
        <td><?php echo $pasien['jenis_kelamin']; ?></td>
        <td>
            <button onclick="editData(1)">Edit</button>
            <button onclick="hapusData(1)">Hapus</button>
        </td>
    </tr>
<?php } ?>
 
</table>

<script>
    function editData(id) {
        // Implementasikan logika edit data sesuai kebutuhan
        alert("Anda akan mengedit data pasien dengan ID " + id);
    }

    function hapusData(id) {
        // Implementasikan logika hapus data sesuai kebutuhan
        alert("Anda akan menghapus data pasien dengan ID " + id);
    }
</script>

</body>
</html>
