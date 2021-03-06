<?php
$title = "Trajets";
include "entete.php";
require_once("connexion_base.php");

//Si tous les champs du formulaire sont renseignés on récupère les données
if (empty($_POST['pays_souhaite']))
{
	echo "Beh alors ? on veut plus partir ? </br>";
	echo "<a href='trajet.php'> Retour </a>";
	include "pied.php";

	exit();
}

else
{
	$pays_depart = $_POST['pays_souhaite'];	
	$date_depart = $_POST['date_souhaite'];	
}


//On récupère les trajets correspondants aux choix de l'utilisateur

$requete = "SELECT * FROM trajet WHERE pays_depart = ? and date_depart >= ? ORDER BY date_depart";
$reponse = $pdo->prepare($requete);
$reponse->execute(array($pays_depart, $date_depart));

$enregistrements = $reponse->fetchAll();
$nombreReponses = count($enregistrements);
?>	

<h1> <?php echo $pays_depart ?> ? Très bon choix ! </h1>
<h3> Voyons ce que les Buddy ont proposé ... </h3> 
</br>


<?php
if ($nombreReponses<1){
 ?> 
 <h3> Et bien pour le moment... Il n'y a aucun trajet ! </h3>
 <h3> C'est l'occasion pour vous de créer un trajet ! Et de le partager avec des Buddy !</h3>

 
<div class="control-group">
  <div class="controls">
	<a href="creation_trajet.php"><button class="btn btn-primary" id="bouton_modifier"> Créer votre propre trajet ! </button></a>
  </div>
</div>

<?php
}
else
{
echo "<section class='section_compte'>";
	for ($i=0; $i < $nombreReponses; $i++)
	{
		
		$ville_depart = $enregistrements[$i]['ville_depart'];
		$ville_arrivee = $enregistrements[$i]['ville_arrivee'];
		$pays_depart = $enregistrements[$i]['pays_depart'];
		$pays_arrivee = $enregistrements[$i]['pays_arrivee'];
		$date_depart = date("d/m/y", strtotime($enregistrements[$i]['date_depart']));
		$duree = $enregistrements[$i]['duree'];
		$id_trajet = $enregistrements[$i]['id'];
		
		?>
		
			<fieldset>
				<legend> <?php echo $pays_depart." vers ".$pays_arrivee; ?> </legend>
					<div>
						<?php echo $ville_depart." vers ".$ville_arrivee; ?> 
					</div>
					
					<div>
						<?php echo "Départ le ".$date_depart." pour ".$duree; ?> 
					</div>
				
				
				<form action="exploration_trajet.php" method="post">
					<div class="control-group">
					  <div class="controls">
						<input type="hidden" name="id_trajet" value="<?php echo $id_trajet; ?>" />
						<button class="btn btn-primary" id="bouton_modifier">Voir détails</button>
					  </div>
					</div>
				</form>
				
			</fieldset>
<?php		
	}

echo "</section>";
}
?>




<br/><a href="trajet.php"> Retour à la recherche </a>

<?php
include "pied.php";
?>