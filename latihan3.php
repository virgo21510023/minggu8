<?php
$mahasiswa = [
	["Virgo", "21510023", "Sistem Informasi", "virgo@stimata.ac.id"],
	["Ulumudin", "21510024", "Teknologi Informasi", "ulumudin@stimata.ac.id"]
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
		<li>Nama	: <?= $mhs[0]; ?></li>
		<li>NIM		: <?= $mhs[1]; ?></li>
		<li>Jurusan	: <?= $mhs[2]; ?></li>
		<li>Email	: <?= $mhs[3]; ?></li>
	</ul>
	<?php endforeach; ?>	
</body>
</html>