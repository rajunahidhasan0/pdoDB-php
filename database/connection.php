<?php
    function connect(){
        $db = new PDO(
            "mysql:host=sql6.freesqldatabase.com; dbname=sql6465183",
            "sql6465183",
            "E2tUiYDC19"
        );
        
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        if(!$db){
            echo 'Database not connected!';
        }
        return $db;
    }

?>
