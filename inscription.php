<?php
$title = "Inscription";
include "entete.php";
?>	

		<h1> Inscription </h1>
		<form action="verifier_inscription.php" method="post" class="form_inscription" enctype="multipart/form-data">
			
			<fieldset>
				<legend> Informations de connexion </legend>
				<div>
					<label for="pseudo"> Pseudo </label>
					<input type="text" name="pseudo" placeholder="pseudo" />
				</div>
				
				<div>
					<label for="motdepasse"> Mot de passe </label>
					<input type="password" name="motdepasse" placeholder="mot de passe"/>
				</div>
				<div>
					<label for="motdepasse2"> Confirmation </label>
					<input type="password" name="motdepasse2" placeholder="mot de passe"/>
				</div>
				<div>
					<label for="avatar"> Image de profil (Taille max 500 Ko) </label>
					<input type="hidden" name="taille_max" value="512000" />
					<input type="file" name="avatar" id="avatar"/>
				</div>
			</fieldset>
			
			<fieldset>
				<legend> Coordonnées </legend>
				<div>
					<label for="nom"> Nom </label>
					<input type="text" name="nom" placeholder="nom"/>
				</div>
				<div>
					<label for="prenom"> Prénom </label>
					<input type="text" name="prenom" placeholder="prenom"/>
				</div>
				<div>
					<label for="email"> Adresse mail </label>
					<input type="email" name="email" placeholder="nom.prenom@gmail.com"/>
				</div>
				<div>
					<label for="telephone"> Téléphone </label>
					<input type="tel" name="telephone" placeholder="0559567897"/>
				</div>
			</fieldset>
			
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
				
					
			</fieldset>
			
			<!-- Button -->
				<div class="control-group">
				  <div class="controls">
					<button class="btn btn-primary" id="bouton_inscription">Valider</button>
				  </div>
				</div>
			
		</form>
		
<!-- si on a le temps : faire plutôt la demande de date de naissance et faire le calcul de l'âge automatiquement -->
<?php
include "pied.php";
?>