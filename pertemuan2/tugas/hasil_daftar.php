<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="center">
		<center> <h2>Data Pendaftar</h2> </center>
		<br>
		<table class="table" border='1' width='100%'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Syavitri</td>
					<td>syavitri525@gmail.com</td>
					<td>Cirebon</td>
					<td>+6283146597505</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Irwan Jodi</td>
					<td>Irwanjodi@gmail.com</td>
					<td>Kalimantan</td>
					<td>+62856222646897</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */ 
				  if (isset($_POST['proses'])) {

					//Variable untuk menangkap data 
					$no = 3;
					$nama_lengkap = $_POST ['nama_lengkap'];
					$email = $_POST ['email'];
					$alamat = $_POST ['alamat'];
					$telepon = $_POST ['telepon'];
					
			
					//Tampilkan data dari variable 
					echo '<tr>';
					echo '<td>' . $no . '</td>';
					echo '<td>' . $nama_lengkap . '</td>';
					echo '<td>' . $email . '</td>';
					echo '<td>' . $alamat . '</td>';
					echo '<td>' . $telepon . '</td>';
					echo '</tr>';
					
				}
				 
				?>

			</tbody>
		</table>
	</div>
</body>
</html>