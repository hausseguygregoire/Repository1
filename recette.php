<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulaire - select</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	// la c'est le commentaire de Gregoire
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10">
<!-- form -->
<form action="merci.html" method="GET">
<!--
nom
duree
type
saison
-->
<p>
<label for="recipe_name">
Nom de la recette
</label> :<br>

<input id="recipe_name" name="name" type="text"></p>

<p>Durée de la préparation:<br>
<input id="duree_preparation" name="time" type="text"></p>

<p>Type de plat<br>
<input id="type_plat_1" name="type_plat" value="1" type="radio">
<label for="type_plat_1">Entrée</label>
<input id="type_plat_2" name="type_plat" value="2" type="radio">
<label for="type_plat_2">Plat</label>
<input id="type_plat_3" name="type_plat" value="3" type="radio">
<label for="type_plat_3">Dessert</label>
</p>
<p>Méthode de préparation :<br>
<textarea name="preparation" cols="35" rows="5"></textarea>
</p>
<p><label for="saison">Quelle saison ?</label>:<br>

<select id="saison" name="saison_id">
<option value="0">Votre choix :</option>
<option value="1">été</option>
<option value="2">automne</option>
<option value="3">hiver</option>
<option value="3">printemps</option>
</select>
</p>
<p>
<input type="submit" value="Valider la recette">
</p>
</form>



</div>


</div>
</body>
</html>
