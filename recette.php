<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title> Titre </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="row">
	<div class="col-md-10">
	
	<!-- formulaire -->
<form action="merci.html" method="GET">
	<p>Nom de la recette<br>
	<input name="recette" type="text"></p>
	
	<p>Temps de preparation<br>
	<input name="temps" type="text"></p>
 <br>
	
	
<p>	Type de plat </p>

<input value="1" name="choice1" type="radio"> entrée
<input value="2" name="choice1" type="radio"> plat
<input value="3" name="choice1" type="radio"> dessert
</p>

	<p> Saison conseillée </p><br>
	<select name="saison">
		<option value="1">hiver</option>
		<option value="2">printemps</option>
		<option value="3">ete</option>
		<option value="4">automne</option>

		</select>
		<br><br>
<p><input type="submit"></p>	
	
</form>
</body>

</html>