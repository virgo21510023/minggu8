<?php
$mahasiswa = [
	["nama" => "Virgo", 
	"nim" => "21510023", 
	"Jurusan" => "Sistem Informasi", 
	"email" => "virgo@stimata.ac.id"],
	["nama" =>  "Ulumudin", 
	"nim" =>  "21510024", 
	"Jurusan" =>  "Teknologi Informasi", 
	"email" => "ulumudin@stimata.ac.id"]
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs): ?>
	<ul>
		<li>Nama	: <?= $mhs["nama"]; ?></li>
		<li>NIM		: <?= $mhs["nim"]; ?></li>
		<li>Jurusan	: <?= $mhs["Jurusan"]; ?></li>
		<li>Email	: <?= $mhs["email"]; ?></li>
	</ul>
	<?php endforeach; ?>	
</body>
</html>