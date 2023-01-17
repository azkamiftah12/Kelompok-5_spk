<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sistem Pendukung Keputusan metode AHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
</head>

<body>
	<nav class="nav mb-4 d-none d-md-block navbar-expand navbar-light w-100 me-auto" style="background-color: #3c312e">
		<div class="container">
			<div class="row">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="mx-4" href="home.php">
							home
						</a>
					</li>
					<li class="nav-item">
						<a class="mx-4" href="kriteria.php">
							Kriteria
							<div class="ui blue tiny label ms-1" style="float: right;">
								<?php echo getJumlahKriteria(); ?>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="mx-4" href="alternatif.php">
							Alternatif
							<div class="ui blue tiny label ms-1" style="float: right;">
								<?php echo getJumlahAlternatif(); ?>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="mx-4" href="bobot_kriteria.php">
							Perbandingan Kriteria
						</a>
					</li>
					<li class="nav-item">
						<a class="mx-4" href="bobot.php?c=1">
							Perbandingan Alternatif
						</a>
					</li>
					<ul>
						<?php

						if (getJumlahKriteria() > 0) {
							for ($i = 0; $i <= (getJumlahKriteria() - 1); $i++) {
								echo "<li><a class='item' href='bobot.php?c=" . ($i + 1) . "'>" . getKriteriaNama($i) . "</a></li>";
							}
						}

						?>
					</ul>
					<li class="nav-item">
						<a class="mx-4" href="hasil.php">
							Hasil
						</a>
					</li>
					<li class="nav-item bg-danger offset-2">
						<a href="logout.php">
							Logout
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<header>
		<h1 class="text-center my-5" style="color: black;">Sistem Pendukung Keputusan dengan metode AHP</h1>
	</header>