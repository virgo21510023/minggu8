<?php
$mahasiswa = [
	["nama" => "Virgo", 
	"nim" => "21510023", 
	"Jurusan" => "Sistem Informasi", 
	"email" => "virgo@stimata.ac.id",
	"tugas" => [100, 99, 98]],
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
	<?php echo $mahasiswa[0]["tugas"][1]; ?>
</body>
</html>