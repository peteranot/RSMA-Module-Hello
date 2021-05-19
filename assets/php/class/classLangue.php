<?php
include __DIR__."./../connexion.php";

class langues {
    
/** ============================ **\
	// RECUPERER TOUT LES LANGUES \\
/** ============================ **/

    /**
     * Description of function 
     *
     * @return $res_listLivres
     */
    public function getLang(){
        global $connect_db; 

        $req_lang = "SELECT * from langues" ; //$sql : contient la requete sql 
        $res_lang = $connect_db->query($req_lang); //$result : execute la requete $sql

        return $res_lang;

    }

/** ============================ **\
	// FIN RECUPERER TOUT LES LANGUES \\
/** ============================ **/	
	
	
	

/** ============================ **\
	// CREER / INSERTION  \\
/** ============================ **/
    /**
     * create hello into "langue"
     *
     * @param string $name
     * @param string $translate
     *
     */
    public function createLang($name,$translate){

        global $connect_db;
        $sql = "INSERT INTO `langues`(`name`,`translate`) VALUES ('$name' , '$translate' )";
        $connect_db->query($sql);

    }
	
/** ============================ **\
	// FIN CREER / INSERTION  \\
/** ============================ **/
	
	
	
	
/** ============================ **\
	// SUPPRESSION \\
/** ============================ **/

    /**
     * Delete lang selected from "langue"
     *
     * @param int $id 
     *
     */
    public function  deletelang($id){
        
        global $connect_db; 
        //sql to delete a record
        $sql_delete = "DELETE FROM langues WHERE id=".$id;

        // execute la requête précédente
        $connect_db->query($sql_delete);

    }
 
/** ============================ **\
	// FIN SUPPRESSION \\
/** ============================ **/


/** ============================ **\
	// MISE A JOUR  \\
/** ============================ **/
    
    /**
     * Update DbShoop "livres"
     *
     * @param string $new_name 
     * @param string $new_translate 
     * @param int $id_langue
     *
     */
    public function updateLang($new_name,$new_translate,$id_langue){
        global $connect_db;

        $sql_update = "UPDATE `langues` SET `name`= '$new_name',`translate`= '$new_translate'  WHERE id =".$id_langue;
        $connect_db->query($sql_update);

    }
	
	/** ============================ **\
	// FIN MISE A JOUR  \\
	/** ============================ **/
	
}	
 


