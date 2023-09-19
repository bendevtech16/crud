<?php

    const HOST = "localhost";
    const DBNAME = "bd-etudiant";
    const USERNAME = "root";
    const PASSWORD = "";
    $dsn = 'mysql:host='.HOST.';dbname='.DBNAME;
    
    try{
        $pdo = new PDO($dsn, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) ;
        //   echo"connected";
        }
        
    catch(PDOException $e){
        echo 'erreur de connexion a la bd'. $e->getMessage();
    }

 
?>