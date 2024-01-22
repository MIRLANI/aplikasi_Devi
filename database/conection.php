<?php
	

    function connection (): mysqli
    {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "db_pemilihan_makanan";
        
        return mysqli_connect($server, $username, $password, $database);
    }

    // $connection = connection();

	// if($connection){
	// 	echo "berhasil terkoneksi";
	// }else{
    //     echo "gagal terkoneksi";
    // }
	
?>