<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">       
         
        <!-- CSS -->
        <link href="assets/styles/style.css" rel="stylesheet">


        <title>Module - Hello</title>
			
			<style>
				body{
					margin: 50px;
				}
			</style>
    </head>
    <body>
		<a href="index_admin.php">Pannel Admin</a>
		<br/><br/>
		<form method="POST">
			<label><u><b>Choix de la langue<b></u></label><br/>
			<?php
				require('assets/php/connexion.php'); // Connexion à la base de données
				$sql = "SELECT * FROM `langues`"; //Afficher tout les langues

				
				// $result : Execute la requête sql definit dans la variable $sql
				$result = $connect_db->query($sql);
				
				if ($result->num_rows > 0) {
					//faire 
					echo "<select name='langues' >";
						// echo "<option name='option'>Choisir votre langue</option>";
					//pour chaque
					foreach($result as $k => $v){
						//faire						
							
							echo "<option name='idLangue' value='".$v['translate']."' />";
							//echo $v['id']." | ";
							
							echo $v['name'];
							echo "</option>";									
					}
					
					echo "</select>";
				} 
				//sinon 
				else{
					//faire
						echo "0 résultas";
					}
				
				//ferme la connexion
				$connect_db->close();
			?>
			<input type="text" name="prenom" placeholder="Prénom" required></input>
			<input type="submit" name="btnValider" placeholder="Valider"></input>
			
			
			
			<?php
				if(isset($_POST['btnValider'])){
					
						// se connecter à mysql
						require('assets/php/connexion.php');
						// récupérer les valeurs 
						$prenom = $_POST['prenom'];
						$langue = $_POST['langues'];
						echo "<br/><br/><textarea>";
						echo $langue." ";
						echo $prenom;
						echo "</textarea>";
					}
			?>
		</form>
    </body>
</html>