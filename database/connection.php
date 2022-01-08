<?php
    function connect(){
        $db = new PDO(
            "mysql:host=127.0.0.1; dbname=bookshelf",
            "root",
            ""
        );
        
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        if(!$db){
            echo 'Database not connected!';
        }
        return $db;
    }

?>