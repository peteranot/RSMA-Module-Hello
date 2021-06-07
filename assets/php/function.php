<?php
include('class/classLangue.php');

$langues = new langues();

if (isset($_POST['btn'])) {

    // if btn == supprimer
    if ($_POST['btn'] == "Supprimer") {
		//etat change
        $etat = "fermer";

        // get id_langue
        $id = $_POST['id_langue'];

        // execute sql requete
        $langues->deleteLang($id);
    }
	
	// if btn == Modifier
    if ($_POST['btn'] == "Modifier") {
		// etat change
        $etat = "ouvrir";
		// get id_langue
        $id_clique = $_POST['id_langue'];
    }
	
	// if btn == Confirmer
    if ($_POST['btn'] == "Confirmer") {
		//etat change
        $etat = "fermer";
		//get new_name
        $new_name = $_POST['new_name'];
		//get new_translate
        $new_translate = $_POST['new_translate'];
		// get id_langue
        $id_langue = $_POST['id_langue'];
		
		// execute sql requete
        $langues->updateLang($new_name, $new_translate, $id_langue);
    }

	// if btn == Valider
    if ($_POST['btn'] == "Valider") {
		//etat change
        $etat = "fermer";

        //get name
        $name = $_POST['name']; 
		
		//get translate
        $translate = $_POST['translate'];
		
		// execute sql requete
        $langues->createLang($name, $translate);
    }
}
else {
	// etat change
    $etat = "fermer";
}

// display all langues 
$res_lang = $langues->getLang();

?>