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

        // je récupère les langues supprimer
        $id = $_POST['id_langue'];

        // j"execute ma requête supprimer
        // dans ma fonction deletelang
        $langues->deleteLang($id);
    }

    if ($_POST['btn'] == "Modifier") {
        $etat = "ouvrir";
        $id_clique = $_POST['id_langue'];
    }

    if ($_POST['btn'] == "Confirmer") {
        $etat = "fermer";
        $new_name = $_POST['new_name'];
        $new_translate = $_POST['new_translate'];
        $id_langue = $_POST['id_langue'];

        $langues->updateLang($new_name, $new_translate, $id_langue);
    }


    if ($_POST['btn'] == "Valider") {

        $etat = "fermer";

        // récupérer les valeurs 
        $name = $_POST['name']; //Variable $nom contient les données de l'input 'nom'

        $translate = $_POST['translate']; //Variable $nom contient les données de l'input 'translate'
        
        $langues->createLang($name, $translate);
    }
} else {

    $etat = "fermer";
}

// j'affiche ma liste
$res_lang = $langues->getLang();

?>