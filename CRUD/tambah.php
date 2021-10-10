<html>
<head>
	<title>CRUD PHP dan MySQLi - </title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - </h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>id</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr>
				<td>name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>address</td>
				<td><input type="text" name="address"></td>
			</tr>
		</table>
	</form>
</body>
</html>