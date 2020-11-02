<?php
/*
	TASK: ARRAY
	===========

	TODO:
	1. Cari dan temukan produk yang sesuai soal!
	1. Deklarasikan Multidimensional + Associative Array untuk data produk!
	2. Gunakan perulangan FOREACH untuk menampilkan seluruh produk!
	3. Gunakan Bootstrap!

	PENILAIAN:
	1. Layout Sesuai Soal (20 poin)
	2. Perulangan FOREACH (40 poin)
	2. Multidimensional + Associative Array (40 poin)
*/
$daftar_item = [
	[
		'gambar' => 'gambar1.jpeg',
		'nama_barang' => 'SHARP LED TV 32 Inch HD - 2T-C32BA1i - Black (2019)',
		'harga' => 'Rp2,199,000',
		'diskon' => '-23%'
	],
	[
		'gambar' => 'gambar2.jpeg',
		'nama_barang' => 'SHARP Mesin Cuci Twin Tub Hijab Series 9KG ES-T99SJ-BL Hijau',
		'harga' => 'Rp2,170,000',
		'diskon' => '-13%'
	],
	[
		'gambar' => 'gambar3.jpeg',
		'nama_barang' => 'SHARP Kulkas 1 Pintu [133 L] SJ-N162D-AB',
		'harga' => 'Rp2,000,000',
		'diskon' => '-26%'
	],
	[
		'gambar' => 'gambar4.jpeg',
		'nama_barang' => 'SHARP AC New Jetstream Series 1/2 PK - AH-A5SAY [Indoor + Outdoor Unit Only]',
		'harga' => 'Rp3,000,000',
		'diskon' => '-7%'
	]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Cart</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>

<body>
	<div class="col-12 d-flex justify-content-center">
		<div class="row row-cols-1 row-cols-md-2">
			<?php foreach ($daftar_item as $post) : ?>
				<div class="col mb-4">
					<div class="card">
						<img src="gambar/post/<?= $post['gambar']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?= $post['nama_barang']; ?></h5>
							<h6 class="card-text"><?= $post['harga']; ?> <span class="badge badge-danger"><?= $post['diskon']; ?></span></h6>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>

</html>