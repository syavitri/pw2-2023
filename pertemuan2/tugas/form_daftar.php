<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<form method="POST" action="hasil_daftar.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
	<div>
		<center><h1>Form Pendaftaran</h1></center>
		<form>
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name="email" type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input name="telepon" type="tel" class="form-control" id="telepon">
			</div>
			<button name="proses" value="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>