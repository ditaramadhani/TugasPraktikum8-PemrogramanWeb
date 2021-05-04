<?php
	//deklarasi variabel untuk nama server, username, password, dan database
	$servername	= "localhost";
	$username 	= "root";
	$password 	= "";
	$database 	= "latihan";

	//deklarasi variabel untuk membuka koneksi ke database
	$koneksi = mysqli_connect($servername, $username, $password, $database);
	
	//Script untuk mengecek koneksi ke database
	if(!$koneksi){
		die("Koneksi gagal : " . msqli_connect_error());
	}
 
?>