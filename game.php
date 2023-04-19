<!DOCTYPE html>
<html>
<head>
	<title>Jeu des Allumettes</title>
	<script src="js/game.js"></script>
	<link rel="stylesheet" type="text/css" href="css/game.css">
</head>
<body onload="initialiser()">
	<div id="game">
		<h1>Jeu des Allumettes</h1>
		<p>Il y a <span id="nb-allumettes"></span> allumettes sur la table.</p>
		<div id="allumettes"></div>
		<div id="options">
			<label for="nb-allumettes-retirer">Combien d'allumettes voulez-vous retirer ?</label>
			<input type="number" id="nb-allumettes-retirer" min="1" max="3">
			<button id="btn-retirer" onclick="jouerTour()">Retirer</button>
		</div>
		<p id="result"></p>
	</div>
	<a href="index.php"class="custom-btn btn-primary">Retour au site</a>
</body>
</html>