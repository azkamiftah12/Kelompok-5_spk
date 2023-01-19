<?php
include('config.php');
include('fungsi.php');

$jenis = $_GET['c'];

include('header.php');
?>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
</head>
<section class="content mb-3">
	<div class="row">
		<div class="col-5 offset-1">
			<h2 class="ui header">Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis - 1) ?></h2>
			<?php showTabelPerbandingan($jenis, 'alternatif'); ?>
		</div>
		<div class="col-4">
			<br>
			Berikan penilaian anda sebagai decision maker dalam pemilihan supplier mengenai kualitas dari masing masing
			supplier.
			Cara membaca tabel :
			supplier yang dipilih 'sama penting (contoh)' dengan supplier yang tidak dipilih.
			<br><br>
			Jika konsistensi ratio masih diatas 10% maka lakukan pembobotan ulang.
			<br><br>
			<table style="width:100%" class="table table-light">
				<tr>
					<th>Bobot Nilai</th>
					<th></th>
				</tr>
				<tr>
					<th>0.111:</th>
					<td>Mutlak Lebih Tidak Penting</td>
				</tr>
				<tr>
					<th>0.143:</th>
					<td>Sangat Lebih Tidak Penting</td>
				</tr>
				<tr>
					<th>0.2:</th>
					<td>Lebih tidak Penting</td>
				</tr>
				<tr>
					<th>0.333:</th>
					<td>Cukup Tidak Penting</td>
				</tr>
				<tr>
					<th>1:</th>
					<td>Sama Penting</td>
				</tr>
				<tr>
					<th>3:</th>
					<td>Cukup Penting</td>
				</tr>
				<tr>
					<th>5:</th>
					<td>Lebih Penting</td>
				</tr>
				<tr>
					<th>7:</th>
					<td>Sangat Lebih Penting</td>
				</tr>
				<tr>
					<th>9:</th>
					<td>Mutlak Lebih Penting</td>
				</tr>
			</table>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>