<!DOCTYPE html>
<html>

<head>

	<title>Reçu</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="PdfStyles.css">
	<link rel="icon" type="image/x-icon" href="img/schoolicon.png">

</head>

<body>
	<style>
		body {
			background-image: url('img/backo.jpg');
		}
	</style>
	<br>
	<br>


	<div class="hero">
		<div class="mt-5">



			<form action="pdfmaker.php" method="post" class=" offset-md-3 col-md-6" style="text-align:center;">

				<h1 style="color:white">Création de reçu</h1>

				<div class="row mb-2  ">
					<div class="col-md-6 mb-2"><input type="text" name="nrecu" placeholder="Numéro Reçu" class="form-control" required></div>
					<div class="col-md-6"><input type="text" name="fname" placeholder="Élève" class="form-control" required></div>
					<div class="col-md-6 mb-2"><input type="text" name="nClass" placeholder="Classe" class="form-control" required></div>

					<div class="col-md-6 mb-2"><input type="text" name="Moi" placeholder="Mois" class="form-control" required></div>
					<div class="col-md-6 mb-2"><input type="text" name="Mont" placeholder="Montant" class="form-control"></div>
					<div class="col-md-6 mb-2">
					<label style="font-family:fantasy;font-size:23px;color:#8064A2 " for="annné">Année Scolaire</label>
					<select name="anne" id="mod">
						<option value="2022-2023">2022-2023</option>
						<option value="2023-2024">2023-2024 </option>
						<option value="2024-2025">2024-2025</option>
						<option value="2025-2026">2025-2026</option>
						<option value="2026-2027">2025-2026</option>
						<option value="2027-2028">2025-2026</option>
					</select>
					</div>
					<!--<div class="col-md-6"><input type="text" name="anne" placeholder="Année scolaire" class="form-control" required></div>-->
					<div class="col-md-6 mb-2"><input type="text" name="total" placeholder="Total" class="form-control" required></div>
					<div class="col-md-6 mb-2">
						<form action="/pdfmaker.php">
							<label style="font-family:fantasy;font-size:15px;color:#8064A2 " for="cars">Mode de paimenet:</label>
							<select name="mode" id="mod">
								<option value="Espèce - نقدا">Espèce - نقدا</option>
								<option value="Chèque - صك بنكي">Chèque - صك بنكي </option>
								<option value="Carte Bancaire - بطاقة بنكية">Carte Bancaire - بطاقة بنكية</option>
							</select>
							<br><br>
						</form>
					</div>


					<button style="background-color: #8064A2 !important; font-family:fantasy;font-size:30px" type="submit" class="btn btn-success btn-lg btn-block">Imprimer</button>







			</form>

		</div>

	</div>




</body>

</html>