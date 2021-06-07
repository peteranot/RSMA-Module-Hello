<?php
include __DIR__."./../connexion.php";

class langues {
    
    /**
     * function get langues
     *
     * @return $res_lang
     */
    public function getLang(){
        global $connect_db; 

        $req_lang = "SELECT * from langues" ; 
        $res_lang = $connect_db->query($req_lang); 

        return $res_lang;

    }

	

    /**
     * function create into "langue"
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
	
	

    /**
     * function delete langue by id
     *
     * @param int $id 
     *
     */
    public function  deletelang($id){
        
        global $connect_db; 
		
        $sql_delete = "DELETE FROM langues WHERE id=".$id;
        $connect_db->query($sql_delete);

    }
    
    /**
     * funciton update "langue" by id
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

	
}	
 


