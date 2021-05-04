<!--Deklarasi Script PHP-->
<?php  
	//Memanggil dan mengambil data dari file koneksi 
	include 'tgskoneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!--Script membuka koneksi ke bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<!--Script CSS-->
	<style>
		.warning {color : #FF0000;}
		.hitam{
			background-color: black;
			color: white;
		}
		.tengah{
			margin-left: 5px;
		}
	 	.card{
			width: 200%;
		}
		.tulis{
			font-size: 12px;
		}
		.form-group row{
			width: 140%;
		}
		.a{

		}
	</style>
</head>
<body>
	<div class="tengah">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<div class="card-header">
			<!--Menuliskan judul dengan format heading 1-->
			<h1 style="text-align: center;">Data Peserta Didik</h1><br>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<table border="1" class="tulis">
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Jenis Pendaftaran</th>
						<th>NIS</th>
						<th>Jenis Kelamin</th>
						<th>NISN</th>
						<th>NIK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Agama</th>
						<th>Berkebutuhan Khusus</th>
						<th>Alamat</t>
						<th>Kecamatan</th>
						<th>Kode Pos</th>
						<th>Tempat Tinggal</th>
						<th>Moda Transportasi</th>
						<th>Nomor HP</th>
						<th>Nomor Telepon</th>
						<th>Email</th>
						<th>Kewarganegaraan</th>
					</tr>
					<?php  
						//Script untuk menjalankan query pada database
						$peserta = mysqli_query($koneksi, "SELECT * FROM pesertadidik");
						
						if (is_array($peserta) || is_object($peserta))
						{
						//Untuk menampilkan/menuliskan data hasil query dari database ke tabel
						foreach ($peserta as $row ) {
						echo 	"<tr>
									<td>".$row['id']."</td>
									<td>".$row['nama']."</td>
									<td>".$row['formDate']."</td>
									<td>".$row['nis']."</td>
									<td>".$row['gender']."</td>
									<td>".$row['nisn']."</td>
									<td>".$row['nik']."</td>
									<td>".$row['born']."</td>
									<td>".$row['bornDate']."</td>
									<td>".$row['agama']."</td>
									<td>".$row['ABK']."</td>
									<td>".$row['alamat']."</td>
									<td>".$row['kecamatan']."</td>
									<td>".$row['idPos']."</td>
									<td>".$row['rumah']."</td>
									<td>".$row['transport']."</td>
									<td>".$row['noHp']."</td>
									<td>".$row['noTelp']."</td>
									<td>".$row['email']."</td>
									<td>".$row['kwn']."</td>
								</tr>";
						}
					}
					?>
				</table>
				
				<!--Pembuatan button Daftar-->
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary"><a href="tgsformpendaftaran.php" style="color: white;
			text-decoration: none;">Daftar</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
