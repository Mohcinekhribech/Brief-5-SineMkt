<?php
$conn;
function connect_to_db(){
    try {
        $database = new PDO("mysql:host=localhost;dbname=sinemkt", 'root', 'Mohcine@2003');
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $database;
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
    }
}

