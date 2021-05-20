<?php
include('class/classLangue.php');

// instancier OU appeler une class (object)
$langues = new langues();

// =========================
// gestion des boutons
// =========================
if (isset($_POST['btn'])) {

    // si bouton == supprimer
    if ($_POST['btn'] == "Supprimer") {
        $etat = "fermer";

        // je récupère l'id de la langues
        $id = $_POST['id_langue'];

        // j"execute ma requête supprimer
        // dans ma fonction deletelang
        $langues->deleteLang($id);
    }
	
	// si bouton == Modifier
    if ($_POST['btn'] == "Modifier") {
		//je change l'etat
        $etat = "ouvrir";
		// je récupère l'id de la langues
        $id_clique = $_POST['id_langue'];
    }
	
	// si bouton == Confirmer
    if ($_POST['btn'] == "Confirmer") {
		//je change l'etat
        $etat = "fermer";
		//je recupére l'informations saisie dans l'input new_name
        $new_name = $_POST['new_name'];
		//je recupére l'informations saisie dans l'input new_translate
        $new_translate = $_POST['new_translate'];
		// je récupère l'id de la langues
        $id_langue = $_POST['id_langue'];
		
		 // j"execute ma requête update
        // dans ma fonction updateLang
        $langues->updateLang($new_name, $new_translate, $id_langue);
    }

	// si bouton == Valider
    if ($_POST['btn'] == "Valider") {
		//je change l'etat
        $etat = "fermer";

        //je recupére l'informations saisie dans l'input name
        $name = $_POST['name']; 
		
		//je recupére l'informations saisie dans l'input translate
        $translate = $_POST['translate'];
		
		// j"execute ma requête insert into
        // dans ma fonction createLang
        $langues->createLang($name, $translate);
    }
} else {
	//sinon
	//je change l'etat
    $etat = "fermer";
}

// j'affiche ma liste
$res_lang = $langues->getLang();

?>