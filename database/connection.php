<?php
    function connect(){
        $server_name = "sql6.freesqldatabase.com";
        $username = "sql6465183";
        $password = "E2tUiYDC19";
        $db_name = "sql6465183";
        try {
            $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
          } catch(PDOException $e) {
            return -1;
          }
    }
