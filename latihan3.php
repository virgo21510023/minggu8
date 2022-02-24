<?php
$books = [
	["title" => "Fugitive Pieces", 
	"authors" => "Anne Michaels", 
	"year" => "1996", 
	"gambar" => "buku1.jpg"],
	
	["title" => "The Crown Conspiracy (The Riyria Revelations, #1)", 
	"authors" => "Michael J. Sullivan", 
	"year" => "2008", 
	"gambar" => "buku2.jpg"],
	
	["title" => "Waking Up Married (Waking Up, #1)", 
	"authors" => "Mira Lyn Kelly", 
	"year" => "2012", 
	"gambar" => "buku3.jpg"],
	
	["title" => "The Reckoning (Darkest Powers, #3)", 
	"authors" => "Kelley Armstrong", 
	"year" => "2010", 
	"gambar" => "buku4.jpg"],
	
	["title" => "Angels in America", 
	"authors" => "Tony Kushner", 
	"year" => "1993", 
	"gambar" => "buku5.jpg"],
	
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Data Buku</title>
</head>
<body>
	<h1>Books list</h1>
	<?php foreach ($books as $book): ?>
	<ul>
		<li>
			<img src="gambar/<?= $book["gambar"]; ?> ">
		</li>
		<li>Authors							: <?= $book["authors"]; ?></li>
		<li>Original Publication Year		: <?= $book["year"]; ?></li>
		<li>Title							: <?= $book["title"]; ?></li>
	</ul>
	<?php endforeach; ?>	
</body>
</html>