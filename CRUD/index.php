<html>
<head>
	<title>CRUD PHP dan MySQLi - </title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - </h2>
	<br/>
	<a href="tambah.php"></a>
	<br/>
	<br/>
	<table border= "1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>address</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from students");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['name']; ?></td>
				<td><?php echo $d['address']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>