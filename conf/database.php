<?php

define('DB_HOST', 'localhost');//nom du serveur d'hote
define('DB_NAME', 'tkhome_base');// nom de la base de donnée
define('DB_USERNAME', 'root');//username de phpmyadmin
define('DB_PASSWORD', 'root');//mot de passe s'il y'en a

try {
  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  die('Erreur: ' .$e->getMessage());

}
