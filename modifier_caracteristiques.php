<?php
$title = "Mon compte";
include "entete.php";

require_once("connexion_base.php");

?>

<h1> Modification des caractéristiques </h1>
	<form action="verifier_modification.php" method="post" class="form_inscription">
		<fieldset>
			<legend> Caractéristiques </legend>
			<div>
				<label for="age"> Âge </label>
				<input type="number" name="age" placeholder="21" />
			</div>
			<div>
				<label for="sexe"> Sexe </label>
				<input type="radio" name="sexe" value="homme" /> homme
				<input type="radio" name="sexe" value="femme" /> femme
			</div>
			<div>
				<label for="description"> Décrivez vous </label>
				<textarea name="description" rows="10" cols="50" placeholder="décrivez ce que vous aimez, votre personnalité afin d'aider les autres à comprendre vos centres d'intérêts" ></textarea>
			</div>
			
			<input type="hidden" name="modif" value="modifier_caracteristiques.php" />
		</fieldset>
		
		<div class="control-group">
		  <div class="controls">
			<button class="btn btn-primary" id="bouton_inscription">Valider</button>
		  </div>
		</div>
		
		
	</form>


<?php
include "pied.php";
?>